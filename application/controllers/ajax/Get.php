<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class Get extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Template_model');
	}

	function index_get($id)
	{
		$data=$this->Template_model->get_value($id);
		if ($data) {
			$this->response($data, REST_Controller::HTTP_OK);
		} else {
			$this->response(NULL, REST_Controller::HTTP_NOT_FOUND);
		}
	}
}

