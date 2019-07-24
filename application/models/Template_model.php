<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_model extends CI_Model
{
	 public function __construct()
	 {
	 	parent::__construct();
	 	//Do your magic here
	 }
	private function get($form_id)
	{
		$this->db->select('*');
		$this->db->from('attribute_value');
		$this->db->join('attribute', 'attribute_value.attribute_id = attribute.attribute_id');
		$this->db->join('product_attribute', 'product_attribute.attribute_value_id = attribute_value.attribute_value_id');
		$this->db->where('product_id',$form_id);
		$query = $this->db->get();
		$data=$query->result_array();
		/*
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		*/
	}
	public function insert($form_id){
	 	$data=$this->get($form_id);
	 	

	}
}

/* End of file .php */
