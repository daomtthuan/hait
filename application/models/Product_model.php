<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function add($data){
		$this->db->insert('product',$data);
	}
	public function get(){
		$query = $this->db->get('product');
		$data=$query->result_array();
		return $data;
	}
	public function update($data){
		$this->db->where('product_id', $data['product_id']);
		$this->db->update('product', $data);
	}
	public function delete($id){
		$this->db->where('product_id', $id);
		$this->db->delete('product');
	}
}

/* End of file .php */
