<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$user=$this->session->userdata('login');
		if($user){
			if($role =$this->Login_model->check_role($user)){
				if($role=='admin'){
					$data['main']='user/home';
					$data['page_title'] = ucfirst('Trang quản trị');
					$data['script'] = ucfirst('');
					$this->load->view('general/layout',$data);
				} elseif ($role=='user'){
					redirect( base_url('user') );
				} else{
					$this->load->view('general/login');
					print_r('The account role not set');
				}
			}
		}
	}
}

?>