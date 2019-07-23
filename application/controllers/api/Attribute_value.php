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

	/**
	 *
	 */
	function index_post()
	{
		$attribute_id=$this->post('attribute_id');
		$value=$this->post('value');
		$data_type=$this->post('data_type');
		$default_value=$this->post('default_value');
		$description=$this->post('description');
		$data=array(
			"attribute_value_id"=>'',
			"attribute_id"=>$attribute_id,
			"value"=>$value,
			"data_type"=>$data_type,
			"default_value"=>$default_value,
			"description"=>$description,
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
		$attribute_id=$this->put('attribute_id');
		$attribute_name=$this->put('attribute_name');
		$result = $this->att->update($attribute_id,$attribute_name);
		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}
	}
	function index_delete($attribute_id)
	{
		$result = $this->att->delete($attribute_id);

		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}
	}
}
