<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class Antibiotic_List extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Template_model');
	}

	function index_get()
	{
		$this->load->model('Khang_sinh_model');
		$data=$this->Khang_sinh_model->get();
		if ($data) {
			$this->response($data, REST_Controller::HTTP_OK);
		} else {
			$this->response(NULL, REST_Controller::HTTP_NOT_FOUND);
		}
	}

	/**
	 *
	 */

}

