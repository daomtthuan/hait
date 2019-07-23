<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_ks_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($data){
		$this->db->insert('list_ks',$data);
	}
	public function get(){
		$query = $this->db->get('list_ks');
		$data=$query->result_array();
		return $data;
	}
	public function update($data){
		$this->db->where('list_id', $data['list_id']);
		$this->db->update('list_ks', $data);
	}
	public function delete($id){
		$this->db->where('list_id', $id);
		$this->db->delete('list_ks');
	}
}

/* End of file .php */



