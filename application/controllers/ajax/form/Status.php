<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');

class Status extends REST_Controller
{
	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Form_model');
	}

	function index_get($form_id,$status)
	{
		$data = $this->Form_model->update_status($form_id,$status);
		$this->response("success", REST_Controller::HTTP_OK);
	}
}
