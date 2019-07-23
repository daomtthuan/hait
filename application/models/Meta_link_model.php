<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meta_link_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($data){
		$this->db->insert('meta_link',$data);
	}
	public function get(){
		$query = $this->db->get('meta_link');
		$data=$query->result_array();
		return $data;
	}
	public function update($data){
		$this->db->where('main_form_id', $data['main_form_id']);
		$this->db->where('relate_form_id', $data['relate_form_id']);
		$this->db->update('meta_link', $data);
	}
	public function delete($main_form_id,$relate_form_id){
		$this->db->where('main_form_id', $main_form_id);
		$this->db->where('relate_form_id', $relate_form_id);
		$this->db->delete('meta_link');
	}
}

/* End of file .php */



