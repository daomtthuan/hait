<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($data){
		$this->db->insert('form',$data);
	}
	public function get(){
		$query = $this->db->get('form');
		$data=$query->result_array();
		return $data;
	}
	public function update($data){
		$this->db->where('form_id', $data['form_id']);
		$this->db->update('form', $data);
	}
	public function delete($id){
		$this->db->where('form_id', $id);
		$this->db->delete('form');
	}
}

/* End of file .php */



