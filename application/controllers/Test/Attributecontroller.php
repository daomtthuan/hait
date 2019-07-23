<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AttributeController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Attribute');

	}
	public function get_att()
	{
		$datatable=$this->Attribute->get();
		echo "<pre>";
		print_r($datatable);
		echo "</pre>";
	}
	public function add_att(){
		$data = array(
			'attribute_name' => 'My Name'
		);
		$this->Attribute->add_attribute($data);
		$this->get_att();
	}
	public  function update_att(){
		$data = array(
			'attribute_id' => '1',
			'attribute_name' => 'Form 1'
		);
		$this->Attribute->update_attribute(1,$data);
		$this->get_att();
	}
	public function delete_att(){
		$this->Attribute->delete_attribute(1);
		$this->get_att();
	}

}

/* End of file Controllername.php */
