<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	function  insert_new_form($user_create,$room_name,$room_id,$type){
		$data=array(
			'loai_form' => $type ,
			'user_create' => $user_create,
			'user_check' => "",
			'status'=>"CREATE",
			'infection'=>"0",
			'room_name'=>$room_name,
			'room_id'=>$room_id
		);
		$this->db->insert('form',$data);
		$lastid=$this->db->insert_id();
		return $lastid;
	}
	public function add($data){
		$this->db->insert('form',$data);
		$lastid=$this->db->insert_id();
		return $lastid;
	}
	public function get(){
		$query = $this->db->get('form');
		$data=$query->result_array();
		return $data;
	}
	public function update($data){
		$this->db->where('form_id', $data['form_id']);
		$this->db->update('form', $data);
	}
	public function delete($id){
		$this->db->where('form_id', $id);
		$this->db->delete('form');
	}
	public function table(){
		$query=$this->db->query("call pivot_gridview");
		$data=$query->result_array();
		return $data;
	}

}

/* End of file .php */



