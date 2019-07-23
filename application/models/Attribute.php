<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attribute extends CI_Model
{
		public function __construct()
		{
			parent::__construct();

			//Do your magic here
		}
		public function add_attribute($data){
			$this->db->insert('attribute',$data);
		}
		public function get(){

			$query = $this->db->get('attribute');
			$data=$query->result_array();
			return $data;
		}
		public function update_attribute($id,$data){
			$this->db->where('attribute_id', $id);
			$this->db->update('attribute', $data);
		}
		public function delete_attribute($id){
			$this->db->where('attribute_id', $id);
			$this->db->delete('attribute');
		}



}

/* End of file .php */

