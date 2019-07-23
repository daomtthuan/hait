<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Value_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($data){
		$this->db->insert('value',$data);
	}
	public function get(){
		$query = $this->db->get('value');
		$data=$query->result_array();
		return $data;
	}
	public function update($data){
		$this->db->where('form_attribute_id', $data['form_attribute_id']);
		$this->db->update('value', $data);
	}
	public function delete($id){
		$this->db->where('form_attribute_id', $id);
		$this->db->delete('value');
	}
}

/* End of file .php */



