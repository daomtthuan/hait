<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller404 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function index(){
		$this->load->view(404);
	}

}

/* End of file Controllername.php */
