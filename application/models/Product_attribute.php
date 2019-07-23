<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_attribute extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function get_all(){
		$query = $this->db->get('product_attribute');
		$data=$query->result_array();
		return $data;
	}
	public function add($data){
		$this->db->insert('product_attribute',$data);
	}
	public function delete($product_id,$attribute_id){
		$this->db->where('product_id', $product_id);
		$this->db->where('product_id', $attribute_id);
		$this->db->delete('product_attribute');
	}

}

/* End of file .php */
