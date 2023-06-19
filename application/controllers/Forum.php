<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Forum extends CI_Controller {
	public function index(){
			$jumlah= $this->model_utama->view('forum')->num_rows();
			$config['base_url'] = base_url().'forum/index/';
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 10; 	
			if ($this->uri->segment('3')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('3');
			}
			
			if (is_numeric($dari)) {
				if ($this->input->post('cari')!=''){
					$data['title'] = "Hasil Pencarian keyword - ".cetak($this->input->post('kata'));
					$data['description'] = description();
					$data['keywords'] = keywords();
					$data['forum'] = $this->model_utama->cari_berita($this->input->post('kata'));
				}else{
					$data['title'] = "Forum Diskusi";
					$data['description'] = description();
					$data['keywords'] = keywords();
					$data['forum'] = $this->model_utama->view_join_one('forum','users','username',"status = 'Y'",'id_forum','DESC',$dari,$config['per_page']);
					//echo $this->db->last_query();
					$this->pagination->initialize($config);
				}
			}else{
				redirect('main');
			}
			
			$this->template->load(template().'/template',template().'/forum',$data);
	}
	
	public function topic(){
			$jumlah= $this->model_utama->view('forum')->num_rows();
			$config['base_url'] = base_url().'forum/topic/'.$this->uri->segment('3');
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 10; 	
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			
			if (is_numeric($dari)) {
				if ($this->input->post('cari')!=''){
					$data['title'] = "Hasil Pencarian keyword - ".cetak($this->input->post('kata'));
					$data['description'] = description();
					$data['keywords'] = keywords();
					$data['forum'] = $this->model_utama->cari_berita($this->input->post('kata'));
				}else{
					$data['title'] = "Semua forum";
					$data['description'] = description();
					$data['keywords'] = keywords();
					$data['forum'] = $this->model_utama->view_join_two('forum','users','kategoriforum','username','id_kategori',"nama_kategori = '" . $this->uri->segment('3') . "'" ,'id_forum','DESC',$dari,$config['per_page']);
					$this->pagination->initialize($config);
				}
			}else{
				redirect('main');
			}
			
			$this->template->load(template().'/template',template().'/forum',$data);
	}

	public function read(){
		$query = $this->model_utama->view_join_two('forum','users','kategoriforum','username','id_kategori',array('judul_seo' => $this->uri->segment(3)),'id_forum','DESC',0,1);
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$data['title'] = cetak($row['judul']);
			$data['description'] = cetak_meta($row['isi_forum'],0,500);
			$data['keywords'] = cetak($row['tag']);
			$data['nama_lengkap'] = cetak($row['nama_lengkap']);
			$data['username'] = cetak($row['username']);
			$data['level'] = cetak($row['level']);
			$data['foto'] = cetak($row['foto']);
			$data['tanggal'] = cetak($row['tanggal']);
			$data['jam'] = cetak($row['jam']);
			$data['rows'] = $row;
			
			$dataa = array('dibaca'=>$row['dibaca']+1);
			$where = array('id_forum' => $row['id_forum']);
			$this->model_utama->update('forum', $dataa, $where);
			$this->template->load(template().'/template',template().'/detailforum',$data);
		}
	}

	function kirim_komentar(){
		if (isset($_POST['submit'])){
			$cek = $this->model_utama->view_where('forum',array('id_forum' => $this->input->post('a')));
			$row = $cek->row_array();
			if ($cek->num_rows()<=0){
				redirect('main');
			}else{
				if ($this->input->post() && (strtolower($this->input->post('secutity_code')) == strtolower($this->session->userdata('mycaptcha')))) {
					$data = array('id_forum'=>cetak($this->input->post('a')),
		                            'username'=>cetak($this->session->username),
		                            'isi_komentar'=>cetak($this->input->post('d')),
		                            'tgl'=>date('Y-m-d'),
		                            'jam_komentar'=>date('H:i:s'),
		                            'aktif'=>'Y');
					$this->model_utama->insert('komentarforum',$data);
				}
			}

			redirect('forum/read/'.$row['judul_seo'].'#listcomment');

		}
	}
	
	function newthread(){
		if ($this->session->username <> ''){
			$data['title'] = "Forum Diskusi";
			$this->template->load(template().'/template',template().'/newthread',$data);
			
			if (isset($_POST['submit'])){
				$data = array('id_kategori'=>cetak($this->input->post('a')),
								'username'=>cetak($this->session->username),
								'judul'=>cetak($this->input->post('b')),
								'youtube'=>'',
								'judul_seo'=>seo_title($this->input->post('b')),
								'isi_forum'=>cetak($this->input->post('c')),
								'tanggal'=>date('Y-m-d'),
								'jam'=>date('H:i:s'),
								'gambar'=>'',
								'dibaca'=>0,
								'tag'=>'',
								'status'=>'Y',
								'linkfile1'=>cetak($this->input->post('linkfile1')),
								'linkfile2'=>cetak($this->input->post('linkfile2')),
								'linkfile3'=>cetak($this->input->post('linkfile3')),
								'linkfile4'=>cetak($this->input->post('linkfile4')),
								'linkfile5'=>cetak($this->input->post('linkfile5')),
								);
				$this->model_utama->insert('forum',$data);
				redirect('forum');
			}	
		}else{
			redirect('main');
		}
	}
}
