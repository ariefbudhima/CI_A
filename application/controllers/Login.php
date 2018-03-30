<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('form_validation');
		// $this->load->library('Layout');

		$this->load->model('M_Laborat');
		$this->load->model('M_radiologi');
		// load semua model untuk dilakukan pengecekan pada database
	}

	public function index(){
		// $this->page = "welcome_message";
		$this->load->view('login/log');
	}


	public function aksi_login(){
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run()) {
			$uname = $this->input->post('username');
			$pwd = $this->input->post('password');
			// var_dump($this->M_Laborat->can_login($uname, $pwd));
			$getData = $this->M_Laborat->can_login($uname, $pwd);
			if ($getData->num_rows() > 0) {
					// $session_data = array('uname' => $uname);
				$this->session->set_userdata('username',$uname);
				redirect(base_url('Login/Laborat'));
			}
			elseif ($this->M_radiologi->can_login($uname, $pwd)) {
				// $session_data = array('uname' => $uname);
				// $this->session->set_userdata($session_data);
				$this->session->set_userdata('username',$uname);
				//Pass it in an array to your view like
				// $data['username']=$username;
				// $this->load->view('test',$data);

				redirect(base_url('Login/Radio'));
			}

			else {
				$this->session->set_flashdata('error', 'Invalid Username and Password');
				$this->load->view('login/log');
			}
		}
		else{
			redirect(base_url('Login'));
				// $this->load->view('login/log');
    }

	}
	public function Laborat(){
		$this->load->view('login/v_Laborat');
	}

	public function Radio(){
		$this->load->view('login/v_Radio');
	}

	public function Logout(){
		$this->session->sess_destroy();
    redirect(base_url('Login'));
	}
}

 ?>
