<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class Readss extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Template_model');
	}

	function index_get()
	{
		$data= $this->session->userdata();
		if ($data) {
			$this->response($data, REST_Controller::HTTP_OK);
		} else {
			$this->response(NULL, REST_Controller::HTTP_NOT_FOUND);
		}
	}
}

