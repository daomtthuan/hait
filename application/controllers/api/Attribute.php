<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class Attribute extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Attribute_model', 'att');
	}

	function index_get()
	{
		$attributes = $this->att->get();
		if ($attributes) {
			$this->response($attributes, REST_Controller::HTTP_OK);
		} else {
			$this->response(NULL, REST_Controller::HTTP_NOT_FOUND);
		}
	}
	function index_post()
	{
		$attribute_name=$this->post('attribute_name');
		$result = $this->att->add($attribute_name);
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
