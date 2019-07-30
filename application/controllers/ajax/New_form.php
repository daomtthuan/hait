<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class New_form extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Template_model');
	}
	function index_post()
	{
		if ($this->post()) {
			$this->response(array('status' => 'success'));
		} else {
			$this->response(array('status' => 'failed'));
		}
	}

}


