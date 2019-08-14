<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attribute_model extends CI_Model
{
		public function __construct()
		{
			parent::__construct();
		}
		public function add($attribute_name){
			$data['attribute_id']='';
			$data['attribute_name']=$attribute_name;
			$this->db->insert('attribute',$data);
		}
		public function get(){
			$query = $this->db->get('attribute');
			$data=$query->result_array();
			return $data;
		}
		public function update($attribute_id,$attribute_name){
			$data['attribute_id']=$attribute_id;
			$data['attribute_name']=$attribute_name;
			$this->db->where('attribute_id', $attribute_id);
			$this->db->update('attribute', $data);
		}
		public function delete($id){
			$this->db->where('attribute_id', $id);
			$this->db->delete('attribute');
		}



}

/* End of file .php */

