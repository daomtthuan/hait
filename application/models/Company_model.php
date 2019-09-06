<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($data){
		$this->db->insert('company',$data);
	}
	public function get(){
		$query = $this->db->get('company');
		$data=$query->result_array();
		return $data;
	}
	public function update($data){
		$this->db->where('company_id', $data['company_id']);
		$this->db->update('company', $data);
	}
	public function delete($id){
		$this->db->where('form_id', $id);
		$this->db->delete('company');
	}
}

/* End of file .php */



