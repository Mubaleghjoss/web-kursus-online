<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upgrade extends CI_Controller {
	function index(){
		$data['iden'] = $this->model_app->edit('identitas', array('id_identitas' => 1))->row_array();
		$data['pricelist'] = $this->model_utama->view_single('pricelist', "aktif = 'Y'", 'harga', 'desc');
		$cek_diskon = $this->model_utama->view_where('diskon', "(NOW() BETWEEN tgl_mulai AND tgl_akhir) AND aktif = 'Y'");
		$diskon = $cek_diskon->num_rows();
		$disc = $cek_diskon->row_array();
		$data['discount'] = $diskon;
		if(isset($disc['tgl_akhir'])){
			$data['tgl_akhir'] = $disc['tgl_akhir'];
		}else{
			$data['tgl_akhir'] = date("Y-m-d H:i:s", time() - 60 * 60 * 24);;
		}
		
		$data['title'] = "Upgrade Premium Member";
		$this->template->load(template().'/template',template().'/upgrade',$data);		
		
	}
	
	function order(){
		if ($this->session->username <> ''){
			$iden = $this->model_utama->view_where('identitas',array('id_identitas' => 1))->row_array();
			
			$package = $this->uri->segment(3);
			//$this->template->load(template().'/template',template().'/upgrade',$data);	

			$cek_pricelist = $this->model_utama->view_where('pricelist', "id_harga = ". $package);
			$pricelist = $cek_pricelist->row_array();
			
			$cek_diskon = $this->model_utama->view_where('diskon', "(NOW() BETWEEN tgl_mulai AND tgl_akhir) AND aktif = 'Y'");
			$diskon = $cek_diskon->num_rows();
			
			$deskripsi = "Upgrade Premium Members " . $pricelist['deksripsi'];
			if($pricelist['diskon'] == 'Y' and $diskon > 0){
				$nominal = $pricelist['nett'];
			}else{
				$nominal = $pricelist['harga'];
			}
				
			$data = array('username'=>cetak($this->session->userdata('username')),
							'tgl_invoice'=>date('Y-m-d'),
							'deskripsi'=>$deskripsi,
							'package'=>$package,
							'nominal'=>$nominal,
							'status'=> 'pending');
			
			$datakondisi = array('username'=>cetak($this->session->userdata('username')),
								 'status'=> 'pending');
							
			$cek = $this->model_utama->view_where('invoice', $datakondisi);
			$row = $cek->row_array();
			$total = $cek->num_rows();
			if ($total >= 1){
				echo "Mohon maaf, ada invoice yang belum anda bayar sebelumnya. Silahkan cek kembali dan konfirmasikan kepada admin.<br/>";
				echo "<a href='". base_url() ."invoice'>Lihat Invoice Anda</a><br/>";
			}else{
				$this->model_utama->insert('invoice',$data);
				
				$datakondisi2 = array('username'=>cetak($this->session->userdata('username')),
								 'status'=> 'pending');
							
				$cek2 = $this->model_utama->view_where('invoice', $datakondisi2);
				$row2 = $cek2->row_array();
				
				$pesan = "<div dir='ltr'><p>Tanggal Invoice : ". date('Y-m-d') ."<br />Jatuh Tempo : ". date('Y-m-d', strtotime($row2['tgl_invoice']. '+14 days')) ."</p><p>Hai, ". cetak($this->session->userdata('nama_lengkap')) ."</p><p>Invoice baru berikut ini baru saja Kami terbitkan :</p><p>Deskripsi Invoice :&nbsp;<br />- ". $deskripsi ."&nbsp;</p><p>=============================================<br />Informasi Billing :<br />=============================================</p><p>InvoiceID : #". $row2['id_invoice'] ."<br />Tanggal Invoice : ". date('Y-m-d') ."&nbsp;<br />Nama Lengkap : ". cetak($this->session->userdata('nama_lengkap')) ."<br />Total Biaya : Rp ". number_format($nominal) ."</p><p>***************************************<br />Pembayaran melalui Bank : -- MANDIRI --<br />Nomor Rekening : 900-00-1999980-5<br />KCP : Tambun, Kabupaten Bekasi<br />Atas Nama : Wildan Agissa Rusadi</p><p>***************************************</p><p>&nbsp;</p><p><br />Regards,</p><p>Administrator<br />". $iden['nama_website'] ."</p></div>";
				$kepada = cetak($this->session->userdata('email'));
				
				
				// Konfigurasi email.
					$config = [
						   'useragent' => 'CodeIgniter',
						   'protocol'  => 'smtp',
						   'mailpath'  => '/usr/sbin/sendmail',
						   'smtp_host' => $iden['smtp'],
						   'smtp_user' => $iden['email'],   // Ganti dengan email gmail Anda.
						   'smtp_pass' => $iden['passemail'],             // Password gmail Anda.
						   'smtp_port' => $iden['portsmtp'],
						   'smtp_keepalive' => TRUE,
						   'smtp_crypto' => 'SSL',
						   'wordwrap'  => TRUE,
						   'wrapchars' => 80,
						   'mailtype'  => 'html',
						   'charset'   => 'utf-8',
						   'validate'  => TRUE,
						   'crlf'      => "\r\n",
						   'newline'   => "\r\n",
					   ];
			   
				// Load library email dan konfigurasinya.
				$this->load->library('email', $config);
				$this->email->set_mailtype("html");
				// Pengirim dan penerima email.
				$this->email->from($iden['email'], $iden['email_sender']);    // Email dan nama pegirim.
				$this->email->to($kepada);  // Penerima email.
			
				$this->email->subject('Billing Invoice Premium Member');
				$this->email->message($pesan);
				$this->email->send();
				
				
				//===========================================================
				//            kirim email ke administrator
				//===========================================================
				$siuser = $this->model_utama->view_where('users',array('username'=> $this->session->username))->row_array();
				if(substr($siuser['no_telp'],0,2) == "08"){
					$telp = "628" . substr($siuser['no_telp'],2,15);
				}else{
					$telp = $siuser['no_telp'];
				}
				$pesan = "<p>Hai Admin, Ada invoice pending baru dari member area.</p>
							<table>
							<tbody>
							<tr>
							<td>Nama</td>
							<td>: ".cetak($this->session->userdata('nama_lengkap'))."</td>
							</tr>
							<tr>
							<tr>
							<td>email</td>
							<td>: ".$siuser['email']."</td>
							</tr>
							<tr>
							<td>No. Invoice</td>
							<td>: ". $row2['id_invoice'] ."</td>
							</tr>
							<tr>
							<td>Tanggal Invoice</td>
							<td>: ". date('Y-m-d') ."</td>
							</tr>
							<tr>
							<td>Nominal</td>
							<td>: Rp ". number_format($nominal) ."</td>
							</tr>
							<tr>
							<td>kontak (whatsapp)</td>
							<td>: <a href='https://api.whatsapp.com/send?phone=". $telp ."'>". $telp ."</a></td>
							</tr>
							</tbody>
							</table>";
				$kepada = $iden['email_admin'];
				
				
				// Konfigurasi email.
					$config = [
						   'useragent' => 'CodeIgniter',
						   'protocol'  => 'smtp',
						   'mailpath'  => '/usr/sbin/sendmail',
						   'smtp_host' => $iden['smtp'],
						   'smtp_user' => $iden['email'],   // Ganti dengan email gmail Anda.
						   'smtp_pass' => $iden['passemail'],             // Password gmail Anda.
						   'smtp_port' => $iden['portsmtp'],
						   'smtp_keepalive' => TRUE,
						   'smtp_crypto' => 'SSL',
						   'wordwrap'  => TRUE,
						   'wrapchars' => 80,
						   'mailtype'  => 'html',
						   'charset'   => 'utf-8',
						   'validate'  => TRUE,
						   'crlf'      => "\r\n",
						   'newline'   => "\r\n",
					   ];
			   
				// Load library email dan konfigurasinya.
				$this->load->library('email', $config);
				$this->email->set_mailtype("html");
				// Pengirim dan penerima email.
				$this->email->from($iden['email'], $iden['sender_email']);    // Email dan nama pegirim.
				$this->email->to($kepada);  // Penerima email.
			
				$this->email->subject('Billing Invoice Premium Member');
				$this->email->message($pesan);
				$this->email->send();
				
				redirect('invoice');
			}
			
			echo $package;
				
		}else{
			redirect('main');		
		}
	}
}
	