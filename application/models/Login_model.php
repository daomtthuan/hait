<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($data){
		$this->db->insert('login',$data);
	}
	public function get(){
		$query = $this->db->get('login');
		$data=$query->result_array();
		return $data;
	}
	public function update($data){
		$this->db->where('login_id', $data['login_id']);
		$this->db->update('login', $data);
	}
	public function delete($login_id){
		$this->db->where('login_id', $login_id);
		$this->db->delete('login');
	}
}

/* End of file .php */



