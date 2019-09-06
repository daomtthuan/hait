<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class Get_value extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Template_model', 'temp');
	}

	function index_get()
	{
		$forms = $this->temp->get_value(1);
		if ($forms) {
			$this->response($forms, REST_Controller::HTTP_OK);
		} else {
			$this->response(NULL, REST_Controller::HTTP_NOT_FOUND);
		}
	}

	/**
	 *
	 */
}


