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
	function check_exists($data)
	{
		$this->db->where('username',$data['username']);
		$this->db->where('password',$data['password']);
		$query = $this->db->get('login');
		if ($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
	function check_role($user_name){
		echo 'User_name:'.$user_name;
		$user_id = $this->get_user_id($user_name);
		echo 'User_id:'.$user_id;
		$this->db->select('role_id');
		$this->db->from('room');
		$this->db->join('company', 'room.company_id = company.company_id');
		$this->db->join('membership', 'room.room_id = membership.room_id');
		$this->db->where('membership.user_id',$user_id);
		$query = $this->db->get();
		$row = $query->row();
		$role_id=$row->role_id;
		return $role_id;
	}
	function get_user_id($username)
	{
		$this->db->where('username',$username);
		$query = $this->db->get('login');
		$row = $query->row();
		$user_id="";
		if (isset($row))
		{
			$user_id=$row->user_id;
		}
		return $user_id;
	}
}

/* End of file .php */



