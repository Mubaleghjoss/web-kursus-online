<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Members extends CI_Controller {
	function index(){
		redirect('main');
	}
	function account(){
		
		if ($dari = $this->uri->segment('3') <> null and $this->session->username  <> null){
			$username = $this->uri->segment('3');
			$query = $this->model_app->cek_user($username);
			if ($query->num_rows()<=0){
				redirect('main');
			}else{
				$row = $query->row_array();
				$data['rows'] = $row;
				
			}				$data['title'] = 'Profile';
			$this->template->load(template().'/template',template().'/members',$data);
		}else{
			redirect('main');
		}
	}
	
	function gantifoto(){
		if (isset($_POST['submit'])){
			$config['upload_path'] = 'asset/foto_user/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '1000'; // kb
			$new_name = $this->session->username;
			$config['file_name'] = $new_name;
			unlink('asset/foto_user/' . $new_name);
            $this->load->library('upload', $config);
            $this->upload->do_upload('f');
            $hasil=$this->upload->data();
			$updatepf = $this->input->post('updtprfl');
			$updatepf = $updatepf + 1;
			if ($hasil['file_name']!=''){
				$data = array('foto' => $hasil['file_name'],
							  'updateprofile' => $updatepf);
				$where = array('username' => $this->session->username);
				$this->model_app->update('users', $data, $where);
				
				$this->session->set_userdata('foto', $hasil['file_name']);
			}
			redirect('members/account/'.$this->session->username);
			 
		}else{
           redirect('main');
		}
	}
	
	function editprofile(){
		if (isset($_POST['submit'])){
			$updatepf = $this->input->post('updtprfl');
			$updatepf = $updatepf + 1;
			if ($this->input->post('password') == ''){
			$data = array('updateprofile' => $updatepf,
						  'no_telp' => $this->input->post('no_telp') ,
						  'jkel' => $this->input->post('jkel') ,
						  'tgllahir' => $this->input->post('tgllahir') ,
						  'website' => $this->input->post('website') ,
						  'alamat' => $this->input->post('alamat')
						);
			}else{
			$data = array('updateprofile' => $updatepf,
						  'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
						  'no_telp' => $this->input->post('no_telp') ,
						  'jkel' => $this->input->post('jkel') ,
						  'tgllahir' => $this->input->post('tgllahir') ,
						  'website' => $this->input->post('website') ,
						  'alamat' => $this->input->post('alamat')
						);
			}
			$where = array('username' => $this->session->username);
			$this->model_app->update('users', $data, $where);
			
			redirect('members/account/'.$this->session->username);
			 
		}else{
           redirect('main');
		}
	}		
	

	function sinkronfoto(){
		$username = $this->uri->segment(3);
		$email = urldecode($this->uri->segment(4));
		
		$xml=simplexml_load_file("http://picasaweb.google.com/data/entry/api/user/$email") or die("Error: Cannot create object");
		$foto = $xml->children('gphoto', true)->thumbnail;	
								
		$data = file_get_contents($foto);
		$new = "asset/foto_user/". $username . ".jpg";
		file_put_contents($new, $data);
		
		$data1 = array('foto' => $username . ".jpg");
		$where = array('username' => $username);
		$this->model_app->update('users', $data1, $where);
			
		redirect('members/account/'. $username);
		
	}
}
