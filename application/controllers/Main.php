<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
	public function index(){
		$data['title'] = title();
		$data['description'] = description();
		$data['keywords'] = keywords();
		
		if (isset($_POST['submit'])){
			$username = $this->input->post('a');
			$password = hash("sha512", md5($this->input->post('b')));
			$cek = $this->model_app->cek_login($username,$password,'users');
		    $row = $cek->row_array();
		    $total = $cek->num_rows();
			if ($total > 0){
				$this->session->set_userdata('upload_image_file_manager',true);
				$this->session->set_userdata(array('username'=>$row['username'],
								   'level'=>$row['level'],
                                   'id_session'=>$row['id_session']));
				$this->template->load(template().'/template',template().'/content',$data);
			}else{
				$data['title'] = 'Username atau Password salah!';
				$this->load->view('administrator/view_login',$data);
			}
		}else{
			$jumlah= $this->model_utama->view('project')->num_rows();
			$config['base_url'] = base_url().'projects/index/';
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 10; 	
			if ($this->uri->segment('3')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('3');
			}
			
			if (is_numeric($dari)) {
					//$data['forum'] = $this->model_utama->view_join_one('forum','users','username', "status = 'Y'" , 'id_forum','DESC',$dari,$config['per_page']);
					$data['forum'] = $this->db->query("SELECT forum.id_forum, forum.id_kategori, forum.username, forum.judul, forum.judul_seo, forum.tanggal, forum.dibaca, users.`nama_lengkap`, users.`email`,  users.`foto`, users.level ,CASE WHEN (SELECT MAX(tgl) FROM komentarforum WHERE komentarforum.id_forum = forum.id_forum) IS NULL THEN forum.tanggal ELSE (SELECT MAX(tgl) FROM komentarforum WHERE komentarforum.id_forum = forum.id_forum) END AS urutan FROM forum JOIN `users` ON `forum`.`username`=`users`.`username` WHERE `forum`.`status` = 'Y' ORDER BY urutan DESC LIMIT 10 ");
					//$data['forum'] = $this->model_utama->view_join_two('forum','users','komentarforum','username','id_forum', "status = 'Y'" , 'id_forum','DESC',$dari,$config['per_page']);
					$data['project'] = $this->model_utama->view_joinn('project','users','kategori','username','id_kategori','headline, id_project','DESC',$dari,$config['per_page']);
					$data['video'] = $this->model_utama->view_joinn('video','users','playlist','username','id_playlist','id_video','DESC',$dari,$config['per_page']);
					$data['users'] = $this->model_utama->view_where_ordering_limit('users',"blokir='N'",'username','DESC',0,10);
					$data['playlist'] = $this->model_utama->view_where_ordering_limit('playlist',"aktif='Y'",'id_playlist','DESC',0,8);
					$data['tagvid'] = $this->model_utama->view_ordering_limit('tagvid','nama_tag','ASC',$dari,$config['per_page']);
					$data['iklan'] = $this->model_utama->view('pasangiklan');
					$this->pagination->initialize($config);
				
			}else{
				redirect('main');
			}
			$this->template->load(template().'/template',template().'/content',$data);
		}
	}
	
	public function info(){
	    echo phpinfo();
	    echo "<br/>";
	    echo CI_VERSION;
	}
}
