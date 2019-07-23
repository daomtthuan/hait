<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($data){
		$this->db->insert('user',$data);
	}
	public function get(){
		$query = $this->db->get('user');
		$data=$query->result_array();
		return $data;
	}
	public function update($data){
		$this->db->where('user_id', $data['user_id']);
		$this->db->update('user', $data);
	}
	public function delete($user_id){
		$this->db->where('user_id', $user_id);
		$this->db->delete('user');
	}
}

/* End of file .php */




