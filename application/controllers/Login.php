<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			$this->load->view('general/login');
		}
	}
	public function index()
	{
		if($this->ion_auth->logged_in()){
			$this->check_role();
		}

		if($this->input->post())
		{
			print_r($this->input->post());
			$this->load->library('form_validation');
			$this->form_validation->set_rules('inputUsername', 'inputUsername', 'required');
			$this->form_validation->set_rules('inputPassword', 'inputPassword', 'required');
			if($this->form_validation->run()===TRUE)
			{
				$remember =true;
				if ($this->ion_auth->login($this->input->post('inputUsername'), $this->input->post('inputPassword'), $remember))
				{
					$this->check_role();
				}
				else
				{
					redirect('login', 'index');
				}
			}
		}
	}
	public function check_role(){
		if(!$this->ion_auth->is_admin()){
			redirect(base_url('user'));
		} else{
			redirect(base_url('admin'));
		}
	}
	public function logout()
	{
		$this->data['title'] = "Logout";

		// log the user out
		$this->ion_auth->logout();

		// redirect them to the login page
		redirect('login', 'index');
	}

}

