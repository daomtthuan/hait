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
		$data['subview']='tools/form';
		$this->load->view('layout/main',$data);
	}
	public function view()
	{
		$data['subview']='tools/datatable';
		$this->load->view('layout/main',$data);
	}

}

/* End of file Controllername.php */
