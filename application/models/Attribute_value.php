<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attribute_value extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}
	public function add_value($data){
		$this->db->insert('attribute_value',$data);
	}
	public function get_value(){

		$query = $this->db->get('attribute_value');
		$data=$query->result_array();

		return $data;
	}
	public function update_value($id,$data){
		$this->db->where('attribute_value_id', $id);
		$this->db->update('attribute_value', $data);
	}
	public function delete__value($id){
		$this->db->where('attribute_value_id', $id);
		$this->db->delete('attribute_value');
	}



}

/* End of file .php */


