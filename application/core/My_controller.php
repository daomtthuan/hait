<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->check_user_login();

	}
	private function check_user_login(){
		$controller = $this->uri->segment(2);
		$user=$this->session->userdata('login');
		if($controller !='login' && !$user){
			redirect(base_url('login'));
		}
	}

}

/* End of file Controllername.php */
