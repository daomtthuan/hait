<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($data){
		$this->db->insert('room',$data);
	}
	public function get(){
		$query = $this->db->get('room');
		$data=$query->result_array();
		return $data;
	}
	public function update($data){
		$this->db->where('room_id', $data['room_id']);
		$this->db->update('room', $data);
	}
	public function delete($room_id){
		$this->db->where('room_id', $room_id);
		$this->db->delete('room');
	}
}

/* End of file .php */




