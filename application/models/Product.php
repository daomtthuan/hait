<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function get_all(){
		$query = $this->db->get('product');
		$data=$query->result_array();
		return data;
	}
	public function update_product($id,$data){
		$this->db->where('product_id', $id);
		$this->db->update('product', $data);
	}
	public function delete_product($id){
		$this->db->where('product_id', $id);
		$this->db->delete('product');
	}
}

/* End of file .php */
