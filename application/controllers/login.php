<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required|alpha_numeric');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');
		} else {
			$this->load->model('model_login');
			$valid_user = $this->model_login->check_credential();

			if($valid_user == FALSE)
			{
				$this->session->set_flashdata('error','Wrong-Username / Password');
				redirect('login');
			} else {
				// if the username and password is a match
				$this->session->set_userdata('username', $valid_user->username);
				$this->session->set_userdata('role', $valid_user->role);
				$this->session->set_userdata('id', $valid_user->id);
				redirect('dashboard');
			}
		}	
	}

	 public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}