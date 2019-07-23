<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function index(){
		$this->load->view('error/error404');
	}

}

?>