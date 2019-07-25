<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Testjson extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->view('testjson');
	}
}


