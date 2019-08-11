<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class New_form extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Form_model');
	}
	function index_get()
	{
		$form_id=$this->Form_model->insert_new_form(1,'Khoa noi',1,"CHINH");
		if ($form_id) {
			$this->response($form_id, REST_Controller::HTTP_OK);
		} else {
			$this->response(NULL, REST_Controller::HTTP_NOT_FOUND);
		}
	}
}
