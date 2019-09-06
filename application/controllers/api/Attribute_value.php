<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class Attribute_value extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Attribute_value_model', 'value');
	}

	function index_get()
	{
		$values = $this->value->get();
		if ($values) {
			$this->response($values, REST_Controller::HTTP_OK);
		} else {
			$this->response(NULL, REST_Controller::HTTP_NOT_FOUND);
		}
	}
	function index_post()
	{
		$data=array(
			"attribute_value_id"=>'',
			"attribute_id"=>$this->post('attribute_id'),
			"value"=>$this->post('value'),
			"data_type"=>$this->post('data_type'),
			"default_value"=>$this->post('default_value'),
			"description"=>$this->post('description'),
		);
		$result = $this->value->add($data);
		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}
	}
	public function index_put()
	{
		$data=array(
			"attribute_value_id"=>$this->put('attribute_value_id'),
			"attribute_id"=>$this->put('attribute_id'),
			"value"=>$this->put('value'),
			"data_type"=>$this->put('data_type'),
			"default_value"=>$this->put('default_value'),
			"description"=>$this->put('description'),
		);
		$result = $this->value->update($data);
		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}
	}
	function index_delete($attribute_id)
	{
		$result = $this->value->delete($attribute_id);

		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}
	}
}
/*
		$attribute_id=$this->post('attribute_id');
		$value=$this->post('value');
		$data_type=$this->post('data_type');
		$default_value=$this->post('default_value');
		$description=$this->post('description');
		*/
