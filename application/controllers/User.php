<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function index()
	{
		$data['subview']='tools/datatable';
		$this->load->view('user/main',$data);
	}

}

/* End of file Controllername.php */
