<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Khang_sinh_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($data){
		$this->db->insert('khang_sinh',$data);
	}
	public function get(){
		$query = $this->db->get('khang_sinh');
		$data=$query->result_array();
		return $data;
	}
	public function update($data){
		$this->db->where('khang_sinh_id', $data['khang_sinh_id']);
		$this->db->update('khang_sinh', $data);
	}
	public function delete($khang_sinh_id){
		$this->db->where('khang_sinh_id', $khang_sinh_id);
		$this->db->delete('form');
	}
}

/* End of file .php */



