<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
	function index(){
		if ($this->session->username <> ''){
				redirect('main');
		}
		if (isset($_POST['submit'])){
			$iden = $this->model_utama->view_where('identitas',array('id_identitas' => 1))->row_array();
		
			if(substr($this->input->post('email'),-10) <> "@gmail.com"){
				$data['pesan'] = 'Alamat email harus menggunakan @gmail.com untuk mendownload file projects via google drive';
				$this->template->load(template().'/template',template().'/register',$data);
			}elseif(strtolower($this->input->post('nama_lengkap')) == 'administrator' or strtolower($this->input->post('nama_lengkap')) == 'admin'){
				$data['pesan'] = "Anda tidak bisa mendaftar dengan username " . $this->input->post('nama_lengkap');
				$this->template->load(template().'/template',template().'/register',$data);	
			}else{
				$nama_lengkap = $this->input->post('nama_lengkap');
				$email = $this->input->post('email');
				$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
				$cek = $this->model_app->cek_userreg($email,'users');
				$row = $cek->row_array();
				$total = $cek->num_rows();
				$cek_lastuser = $this->model_app->cek_lastuser();
				$lastuser = $cek_lastuser->row_array();
				$lastuser = substr($lastuser['username'],-6);
				$lastuser = (int)$lastuser;
				$newuser = $lastuser + 1;
				if($newuser < 10){
					$newuser = "LOKO00000" . $newuser;
				}elseif($newuser >= 10 and $newuser < 100){
					$newuser = "LOKO0000" . $newuser;
				}elseif($newuser >= 100 and $newuser < 1000){
					$newuser = "LOKO000" . $newuser;
				}elseif($newuser >= 1000 and $newuser < 10000){
					$newuser = "LOKO00" . $newuser;
				}elseif($newuser >= 10000 and $newuser < 100000){
					$newuser = "LOKO0" . $newuser;
				}elseif($newuser >= 100000 and $newuser < 1000000){
					$newuser = "LOKO" . $newuser;
				}
			
				if ($total > 0){
					$data['pesan'] = 'Email '. $this->input->post('email') . " sudah terdaftar sebelumnya";
					$this->template->load(template().'/template',template().'/register',$data);
				}else{
					$data['title'] = 'register';
					$data =   array('username'=>$newuser,
									'password'=>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
									'nama_lengkap'=>$this->db->escape_str($this->input->post('nama_lengkap')),
									'email'=>$this->input->post('email'),
									'no_telp'=>$this->db->escape_str($this->input->post('no_telp')),
									'level'=>'free',
									'blokir'=>'Y',
									'id_session'=>md5($this->input->post('a')).'-'.date('YmdHis'),
									'jkel'=>$this->db->escape_str($this->input->post('jk')),
									'tgllahir'=>$this->db->escape_str($this->input->post('tgllahir')),
									'alamat'=>$this->db->escape_str($this->input->post('alamat')),
									'website'=>$this->db->escape_str($this->input->post('website')),
									'startjoin'=>date('Ymd'));
									
					$this->model_app->insert('users',$data);

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
					$this->email->to($this->input->post('email'));                       // Penerima email.
			 
					// Subject email.
					$this->email->subject("Verifikasi Email - Member ". $iden['nama_website']);
			 
					// Isi email. Bisa dengan format html.
					$this->email->message("<div style='color: #202020; font-family: Roboto, Helvetica, Tahoma, sans-serif; font-size: 13px; font-weight: 300; line-height: 1.38; padding: 0 18px;'> <h3>Mohon verifikasi Akun Anda.</h3><p>Hi ". $this->db->escape_str($this->input->post('nama_lengkap')) .",<br />Hal ini bagian dari proses regristrasi Akun Member ". $iden['nama_website'] .", kami perlu memverifikasi detail Anda.<br />&nbsp;<br />Verifikasi dilakukan cara&nbsp;klik 'Verifikasi Email Saya' pada link di bawah<br />&nbsp;</p><p style='text-align: center;'><a href='". base_url() ."register/verif/".$newuser."/". md5("bismillah" . $newuser) ."' style='margin: 0; background-color: #f57224; border-radius: 3px; color: #ffffff; display: inline-block; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 300; line-height: 1.3; padding: 11px 18px; text-align: center; text-decoration: none; width: 198px;'>VERIFIKASI EMAIL SAYA</a></p></div><p><br /><br /><br /></p><div style='color: #202020; font-family: Roboto, Helvetica, Tahoma, sans-serif; font-size: 13px; font-weight: 300; line-height: 1.38; padding: 0 18px;'>Hormat Kami,<br />Tim ". $iden['nama_website'] ."<br /><hr />Mohon tidak membalas email ini.</div>");
			 
					if ($this->email->send())
					{
						redirect('register/submit');
					}
					else
					{
						redirect('register/submit');
					}
				   
				}
			}
		}else{			
			$data['record'] = $this->model_app->view_where_ordering('halamanstatis',"id_halaman = 1 or id_halaman = 2",'id_halaman','ASC');		
			$data['pesan'] = '';
			$data['title'] = 'Registration Form';
			$this->template->load(template().'/template',template().'/register',$data);
		}
	}
	
	public function submit(){
		$data['title'] = 'Member Registration -  Data Submitted';
		$this->template->load(template().'/template',template().'/submitemail',$data);
	}
	
	public function verif(){
		$iden = $this->model_utama->view_where('identitas',array('id_identitas' => 1))->row_array();
		$username = $this->uri->segment(3);
		$cek = $this->model_app->cek_userverif($username,'users');
		$row = $cek->row_array();
		$total = $cek->num_rows();
		
		$email = $row['email'];
		
		if ($total == 1){
			$hashnya = $this->uri->segment(4);
			if (md5("bismillah" . $username) == $hashnya){
				$data = array('blokir' => "N",
						      'last_login'=>date("Y-m-d H:i:s"));
				$where = array('username' => $username);
				$this->model_app->update('users', $data, $where);
				
				 $data1 = array('username'=>'LOKO000001',
				               'penerima'=>$username,
							   'isi_pesan'=> "<p>Haloooo Selamat bergabung di ". $iden['nama_website'] .".</p>",
							   'tanggal'=>date('Ymd'),
							   'jam'=>date('H:i:s'));
								
				$this->model_utama->insert('pesan',$data1);
				
				$data['title'] = 'Aktivasi Account';
				$data['pesan'] = "Selamat, Account anda berhasil diaktivasi. Silahkan login untuk masuk ke halaman members.";
				
			}else{
				$data['pesan'] = "Mohon maaf, ada kesalahan.";
			}
		}else{
			$data['pesan'] = "Mohon maaf, data tidak ditemukan, atau mungkin account anda sudah teraktifasi. Silahkan coba untuk login.";
		}
		$this->template->load(template().'/template',template().'/verifikasi',$data);
	}
	
	public function Upgrade(){
		$this->template->load(template().'/template',template().'/upgrade',$data);
	}
	
}