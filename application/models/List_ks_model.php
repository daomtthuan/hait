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
        $lastid = $this->db->insert_id();
        return $lastid;
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
		$this->db->where('form_id', $id);
		$this->db->delete('list_ks');
	}
    public function search_formid($id){
        $this->db->where('form_id', $id);
        $query = $this->db->get('list_ks');
        $row = $query->row();
        if(isset($row->list_id)){
            $list_id =$row->list_id;
            return $list_id;
        }
    }
}

/* End of file .php */



