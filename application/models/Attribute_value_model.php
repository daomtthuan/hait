<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attribute_value_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function add($data){
		$this->db->insert('attribute_value',$data);
	}
	public function get(){

		$query = $this->db->get('attribute_value');
		$data=$query->result_array();
		return $data;
	}
	public function update($data){
		$this->db->where('attribute_value_id', $data['attribute_value_id']);
		$this->db->update('attribute_value', $data);
	}
	public function delete($id){
		$this->db->where('attribute_value_id', $id);
		$this->db->delete('attribute_value');
	}



}

/* End of file .php */


