<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['main']='user/home';
		$this->load->view('general/layout',$data);
	}

	public function list_form()
	{
		$data['main']='tools/datatable';
		$this->load->view('general/layout',$data);
	}

}

?>