<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_detail_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($data){
		$this->db->insert('form_detail',$data);
	}
	public function get(){
		$query = $this->db->get('form_detail');
		$data=$query->result_array();
		return $data;
	}
	public function update($data){
		$this->db->where('form_attribute_id', $data['form_attribute_id']);
		$this->db->where('form_id', $data['form_id']);
		$this->db->where('attribute_id', $data['attribute_id']);
		$this->db->update('form_detail', $data);
	}
	public function delete($form_attribute_id,$form_id,$attribute_id){
		$this->db->where('form_attribute_id', $form_attribute_id);
		$this->db->where('form_id', $form_id);
		$this->db->where('attribute_id', $attribute_id);
		$this->db->delete('form_detail');
	}
}

/* End of file .php */



