<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class Product_attribute extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Product_attribute_model', 'key');
	}

	function index_get()
	{
		$values = $this->product->get();
		if ($values) {
			$this->response($values, REST_Controller::HTTP_OK);
		} else {
			$this->response(NULL, REST_Controller::HTTP_NOT_FOUND);
		}
	}
	function index_post()
	{
		$data=array(
			"product_id"=>'',
			"name"=>$this->post('name'),
			"description"=>$this->post('description'),
			"product_type"=>$this->post('product_type')
		);
		$result = $this->product->add($data);
		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}
	}
	public function index_put()
	{
		$data=array(
			"product_id"=>$this->put('product_id'),
			"name"=>$this->put('name'),
			"description"=>$this->put('description'),
			"product_type"=>$this->put('product_type')
		);
		$result = $this->product->update($data);
		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}
	}
	function index_delete($attribute_id)
	{
		$result = $this->product->delete($attribute_id);

		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}
	}
}


