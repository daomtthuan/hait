<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_attribute_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function get(){
		$query = $this->db->get('product_attribute');
		$data=$query->result_array();
		return $data;
	}
	public function add($data){
		$this->db->insert('product_attribute',$data);
	}
	public function delete($data){
		$this->db->where('product_id', $data['product_id']);
		$this->db->where('attribute_value_id', $data['attribute_value_id']);
		$this->db->delete('product_attribute');
	}

}

/* End of file .php */
