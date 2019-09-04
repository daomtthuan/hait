<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');

class Get extends REST_Controller
{
	public function __construct($config = 'rest')
	{
		parent::__construct($config);
	}
	function index_get($type, $para)
	{
		switch (strtolower($type)) {
			// * Chức năng: lấy danh sách form thông qua status
			case 'list':
				$this->load->model('Form_model');
				$data = $this->Form_model->get_form($para);
				$this->response($data, REST_Controller::HTTP_OK);
				break;

			// * Chức năng: lấy form thông qua id
			case 'form':
				$this->load->model('Form_model', 'form');
				$forms = $this->form->get_json($para);
				if ($forms) {
					$this->response($forms, REST_Controller::HTTP_OK);
				} else {
					$this->response(NULL, REST_Controller::HTTP_NOT_FOUND);
				}
				break;

			default:
				$this->response(NULL, REST_Controller::HTTP_NOT_FOUND);
				break;
		}
	}
}
