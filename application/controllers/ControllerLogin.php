<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerLogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("ModalLogin");
	}
	public function index(){
		$this->load->view('ViewLogin');
	}

}

/* End of file Controllername.php */
