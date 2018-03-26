<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('form_validation');

	}

	public function index(){
		$this->load->view('login/log');
	}


	public function aksi_login(){
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run()) {
			$uname = $this->input->post('username');
			$pwd = $this->input->post('password');

			$this->load->model('Dokter');
			// load semua model untuk dilakukan pengecekan pada database
			if ($this->Dokter->can_login($uname, $pwd)) {
				$session_data = array('uname' => $uname);
				$this->session->set_userdata($session_data);
				redirect(base_url('Admin'));
			}

			else {
				$this->session->set_flashdata('error', 'Invalid Username and Password');
				$this->load->view('login/log');
			}
		}
		else{
				$this->load->view('login/log');
    }
	}
	public function admin_page(){

	}

	public function logout(){

	}
}

 ?>
