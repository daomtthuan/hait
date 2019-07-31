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
		$user=$this->session->userdata('login');
		if($user){
			if($role =$this->Login_model->check_role($user)){
				if($role=='admin'){
					redirect( base_url('admin') );
				} elseif ($role=='user'){
					redirect( base_url('user') );
				} else{
					$this->load->view('general/login');
					print_r('The account role not set');
				}
			}
		}
		if($this->input->post()){
			$this->form_validation->set_rules('general/login', 'Đăng nhập', 'callback_check_login');
			if($this->form_validation->run()){
				$user_name=$this->input->post('inputUsername');
				$this->session->set_userdata('login',$user_name);
				$data=$this->Login_model->get_user_data($user_name);
				print_r($data);
				foreach ($data as $key=>$val){
					$this->session->set_userdata($key,$val);
				}
				if($role =$this->Login_model->check_role($user_name)){
					if($role=='admin'){
						redirect( base_url('admin') );
					} elseif ($role=='user'){
						redirect( base_url('user') );
					} else{
						$this->load->view('general/login');
						print_r('The account role not set');
					}
				}
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
	public function logout(){
		{
			if($this->session->userdata('login')){
				$this->session->unset_userdata('login');
				redirect(base_url('login'));
			}
		}
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
?>
