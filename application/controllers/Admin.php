<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function index()
	{
		$data['subview']='admin/index_view';
		$data['title']='Admin System';
		$this->load->view('admin/main',$data);
	}

}

/* End of file Controllername.php */
