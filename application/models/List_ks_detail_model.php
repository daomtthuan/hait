<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_ks_detail_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($data){
		$this->db->insert('list_ks_detail',$data);
	}
	public function get(){
		$query = $this->db->get('list_ks_detail');
		$data=$query->result_array();
		return $data;
	}
	public function update($data){
		$this->db->where('id_ks', $data['id_ks']);
		$this->db->where('list_id', $data['list_id']);
		$this->db->update('lis_ks_detail', $data);
	}
	public function delete($list_id){
		$this->db->where('list_id', $list_id);
		$this->db->delete('list_ks_detail');
	}
}

/* End of file .php */




