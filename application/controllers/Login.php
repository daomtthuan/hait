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
					$this->session->set_flashdata('message',$this->ion_auth->errors());
					redirect('admin/user/login', 'refresh');
				}
			}
		}
		/*
		if (!$this->ion_auth->logged_in()) {
			// redirect them to the login page
			redirect(base_url(general/login));
			//$this->load->view('general/login');
		} else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			redirect(base_url('admin'));
		} else {
			redirect(base_url('user'));
		}
		if ($this->input->post()) {
			$this->form_validation->set_rules('general/login', 'Đăng nhập', 'callback_check_login');
			if ($this->form_validation->run()) {
				$remember = (bool)$this->input->post('inputRemember');
				if ($this->ion_auth->login($this->input->post('inputUsername'), $this->input->post('inputPassword'), $remember)) {
					//if the login is successful
					//redirect them back to the home page
					$this->session->set_flashdata('message', $this->ion_auth->messages());
					if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
					{
						// redirect them to the home page because they must be an administrator to view this
						redirect(base_url('admin'));
					} else {
						redirect(base_url('user'));
					}

				} else {
					// if the login was un-successful
					// redirect them back to the login page
					$this->session->set_flashdata('message', $this->ion_auth->errors());
					$this->load->view('general/login'); // use redirects instead of loading views for compatibility with MY_Controller libraries
				}
			}
		}
		*/
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

