<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tagvid extends CI_Controller {
	public function index(){
			$jumlah= $this->model_utama->view('playlist')->num_rows();
			$config['base_url'] = base_url().'playlist/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 25; 	
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Playlist";
			$data['description'] = description();
			$data['keywords'] = keywords();
			if (is_numeric($dari)) {
				$data['playlist'] = $this->model_utama->view_where_ordering_limit('playlist',array('aktif' => 'Y'),'id_playlist','DESC',$dari,$config['per_page']);
			}else{
				redirect('main');
			}
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/playlist',$data);
	}

	public function detail(){
		$query = $this->model_utama->view_where('tagvid',array('tag_seo' => $this->uri->segment(3)));
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$jumlah= $this->model_utama->view_where('playlist',"tagvid like '%$row[nama_tag]%'")->num_rows();
			$config['base_url'] = base_url().'tagvid/detail/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 15;
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Kategori Materi - $row[nama_tag]";
			$data['description'] = description();
			$data['keywords'] = keywords();
			$data['rows'] = $row;
			$data['jumlah'] = $jumlah;
			if (is_numeric($dari)){
				$data['tagvid'] = $this->model_utama->view_where_ordering_limit('playlist',"tagvid like '%$row[nama_tag]%'",'id_playlist','DESC',$dari,$config['per_page']);
			}else{
				redirect('main');
			}
			
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/detailtagvid',$data);
		}
	}

	public function watch(){
		$query = $this->model_utama->view_join_two('video','users','playlist','username','id_playlist',array('video.video_seo' => $this->uri->segment(3)),'id_video','DESC',0,1);
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$data['title'] = cetak($row['jdl_video']);
			$data['description'] = cetak($row['keterangan']);
			$data['keywords'] = cetak($row['tagvid']);
			$data['rows'] = $row;
			$data['related'] = $this->model_utama->view_where('video',"id_playlist = $row[id_playlist]");
			$dataa = array('dilihat'=>$row['dilihat']+1);
			$where = array('id_video' => $row['id_video']);
			$this->model_utama->update('video', $dataa, $where);
			
			$this->template->load(template().'/template',template().'/play',$data);
		}
	}

	function kirim_komentar(){
		if (isset($_POST['submit'])){
			$cek = $this->model_utama->view_where('video',array('id_video' => $this->input->post('a')));
			$row = $cek->row_array();
			if ($cek->num_rows()<=0){
				redirect('main');
			}else{
				if ($this->input->post() && (strtolower($this->input->post('secutity_code')) == strtolower($this->session->userdata('mycaptcha')))) {
					$data = array('id_video'=>cetak($this->input->post('a')),
		                            'nama_komentar'=>cetak($this->input->post('b')),
		                            'url'=>cetak($this->input->post('c')),
		                            'isi_komentar'=>cetak($this->input->post('d')),
		                            'tgl'=>date('Y-m-d'),
		                            'jam_komentar'=>date('H:i:s'),
		                            'aktif'=>'N');
					$this->model_utama->insert('komentarvid',$data);
				}
			}

			redirect('playlist/watch/'.$row['video_seo'].'#listcomment');

		}
	}
}
