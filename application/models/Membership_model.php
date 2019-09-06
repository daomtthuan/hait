<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($data){
		$this->db->insert('membership',$data);
	}
	public function get(){
		$query = $this->db->get('membership');
		$data=$query->result_array();
		return $data;
	}
	public function update($data){
		$this->db->where('membership_id', $data['membership_id']);
		$this->db->update('membership', $data);
	}
	public function delete($membership_id){
		$this->db->where('membership_id', $membership_id);
		$this->db->delete('membership');
	}
}

/* End of file .php */




