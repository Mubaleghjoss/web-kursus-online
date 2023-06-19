<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

	function index(){		

		$data['title'] = 'Invoice';
		
		if ($this->session->username <> ''){

			$data['invoice'] = $this->model_utama->view_single('invoice', "username = '" . $this->session->username . "'" , 'id_invoice', 'desc');

			$data['invoice1'] = $this->model_utama->view_join_detail('invoice.*, users.nama_lengkap, users.email, users.alamat, users.no_telp', 'invoice', 'users', 'username' , "invoice.username = '" . $this->session->username . "'" , 'id_invoice', 'desc', 0,1);

			$this->template->load(template().'/template',template().'/invoice2',$data);

		}else{

			redirect('main');

		}

	}

	function detail(){		
	
		$data['title'] = 'Invoice';

		if ($this->session->username <> ''){
			$data['iden'] = $this->model_utama->view('identitas')->row_array();
			$data['invoice'] = $this->model_utama->view_single('invoice', "username = '" . $this->session->username . "'" , 'id_invoice', 'desc');

			$data['invoice1'] = $this->model_utama->view_join_detail('invoice.*, users.nama_lengkap, users.email, users.alamat, users.no_telp', 'invoice', 'users', 'username' , "invoice.username = '" . $this->session->username . "' and id_invoice=" . $this->uri->segment(3) , 'id_invoice', 'desc', 0,1);

			//echo $this->db->last_query();

			$this->template->load(template().'/template',template().'/invoice2',$data);

		}else{

			redirect('main');

		}

	}		

	

	function cancel(){				

		if ($this->session->username <> ''){

			$data['invoice'] = $this->model_utama->view_where('invoice', "username = '" . $this->session->username . "'");

			$data['invoice1'] = $this->model_utama->view_join_detail('invoice.*, users.nama_lengkap, users.email, users.alamat, users.no_telp', 'invoice', 'users', 'username' , "invoice.username = '" . $this->session->username . "' and id_invoice=" . $this->uri->segment(3) . " and status = 'pending'" , 'id_invoice', 'desc', 0,1);

			$datax = array('status'=> "cancel");

			$where = array('username' => $this->session->username,'id_invoice' => $this->uri->segment(3));

			$this->model_app->update('invoice', $datax, $where);

			redirect('invoice/detail/' . $this->uri->segment(3));

		}else{

				redirect('main');

		}

	}

	function detailinvoice(){	
		$data['title'] = 'Invoice';
		$data['iden'] = $this->model_utama->view('identitas')->row_array();
		if($this->uri->segment(3)==''){

			$data['invoice'] = $this->model_utama->view_single('invoice', "username = '" . $this->session->username . "'" , 'id_invoice', 'desc');

			$data['invoice1'] = $this->model_utama->view_join_detail('invoice.*, users.nama_lengkap, users.email, users.alamat, users.no_telp', 'invoice', 'users', 'username' , "invoice.username = '" . $this->session->username . "'" , 'id_invoice', 'desc', 0,1);

			$this->load->view(template().'/detailinvoice',$data);

		}else{

			if($this->uri->segment(4) == ""){

				echo "belum ada invoice";

				 die();

			}

			$data['invoice'] = $this->model_utama->view_single('invoice', "username = '" . $this->uri->segment(4) . "'" , 'id_invoice', 'desc');

			$data['invoice1'] = $this->model_utama->view_join_detail('invoice.*, users.nama_lengkap, users.email, users.alamat, users.no_telp', 'invoice', 'users', 'username' , "invoice.username = '" . $this->uri->segment(4) . "' and id_invoice=" . $this->uri->segment(3) , 'id_invoice', 'desc', 0,1);

			

			if($data['invoice1']->num_rows() > 0){

				$this->load->view(template().'/detailinvoice',$data);

			}else{

				echo "belum ada data invoice";

			}

		}

	}

	

	

}