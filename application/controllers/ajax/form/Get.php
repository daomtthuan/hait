<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');

class Get extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
	}
	/*
	 * Chức năng: lấy danh sách form
	 * Giao thức: ajax
	 * Tham số: status của form
	 * Model sử dụng: Form_model->get_form();
	 * */

	function index_get($para)
	{
		$this->load->model('Form_model');
		$data = $this->Form_model->get_form($para);
		$this->response($data, REST_Controller::HTTP_OK);
	}

}
