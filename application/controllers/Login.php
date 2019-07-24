<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library(array('form_validation','session'));
	}
	public function index(){
		if($this->input->post()){
			$this->form_validation->set_rules('general/login', 'Đăng nhập', 'callback_check_login');
			if($this->form_validation->run()){
				$user=$this->input->post('inputUsername');
				$this->session->set_userdata('login',$user);
				redirect(base_url('user'));
			}


		}
		$this->load->view('general/login');
	}
	public function check_login(){
		$user=$this->input->post('inputUsername');
		$pass=$this->input->post('inputPassword');
		$where=array(
			"username"=>$user,
			"password" =>$pass
		);
		//print_r($where);
		if($this->Login_model->check_exists($where)){
			return true;
		} else
		{
			return false;
		};

	}

}
/*
 * $this->$this->form_validation->set_rules('general/login', 'Đăng nhập', 'callback_check_login');
			if($this->form_validation->run()){
				$user=$this->input->post('inputUsername');
				$this->session->$array = array(
					'login' => $user
				);
				$this->session->set_userdata($array);
				redirect(base_url('user'));
			}
 * */
