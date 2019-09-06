<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AttributeValueController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Attribute_value');

	}
	public function get_att()
	{
		$datatable=$this->Attribute_value->get_value();
		echo "<pre>";
		print_r($datatable);
		echo "</pre>";
	}
	public function add_att(){
		$data = array(
			'attribute_id' => '1',
			'value' => 'Steroid',
			'data_type' => 'boolean',
			'default_value' => 'false',
			'description'=>'jsadksajhdjsa',
		);
		$this->Attribute_value->add_value($data);
		$this->get_att();
	}
	public  function update_att(){
		$data = array(
			'attribute_id' => '1',
			'attribute_name' => 'Form 1'
		);
		$this->Attribute_value->update_value(1,$data);
		$this->get();
	}
	public function delete_att(){
		$this->Attribute_value->delete_value(1);
		$this->get();
	}

}

/* End of file Controllername.php */
