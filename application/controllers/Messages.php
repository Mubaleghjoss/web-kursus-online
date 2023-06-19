<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Messages extends CI_Controller {
	public function index(){
		$data['user'] = $this->model_utama->view_where('users', "username = '" . $this->session->username . "'");
		$data['pesan1'] = $this->model_utama->view_pesan($this->session->username);
		$this->template->load(template().'/template',template().'/messages',$data);
	}
	
	public function read(){
		if ($this->session->username == '') {
			redirect('main');
		}else{
			if (isset($_POST['submit'])){
				$data1 = array('username'=>$this->session->username,
                            'penerima'=>$this->db->escape_str($this->input->post('penerima')),
                            'isi_pesan'=>$this->db->escape_str($this->input->post('message')),
                            'tanggal'=>date('Y-m-d'),
                            'jam'=>date('H:i:s'));
				$this->model_app->insert('pesan',$data1);
				
				$data['title'] = "Inbox";
				$data['user'] = $this->model_utama->view_where('users', "username = '" . $this->uri->segment('3') . "'");
				
				$data['pesan1'] = $this->model_utama->view_pesan($this->session->username);
				$data['pesan2'] = $this->model_utama->view_pesan2($this->session->username, $this->uri->segment('3'));
				//$this->template->load(template().'/template',template().'/detailmessages',$data);
				redirect("messages/read/" . $this->uri->segment('3'));
				
			}else{
				$data = array('dibaca'=> 'Y');
				$where = array('penerima' => $this->session->username,
							   'username' => $this->uri->segment('3'));
				$this->model_app->update('pesan', $data, $where);
				$data['user'] = $this->model_utama->view_where('users', "username = '" . $this->uri->segment('3') . "'");
				$data['title'] = "Inbox";
				
				$data['pesan1'] = $this->model_utama->view_pesan($this->session->username);
				$data['pesan2'] = $this->model_utama->view_pesan2($this->session->username, $this->uri->segment('3'));
				$this->template->load(template().'/template',template().'/detailmessages',$data);
			}
		}
	}
	
	
}