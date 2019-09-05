<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');

class Delete extends REST_Controller
{
	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Form_model');
        $this->load->model('Meta_link_model', 'meta');
        $this->load->model('Value_model');
	}
	function index_get($para)
	{
		$this->Form_model->delete($para);
        $this->Value_model->delete($para);
        $this->meta->delete($para);
		$this->response("success", REST_Controller::HTTP_OK);
	}
}
