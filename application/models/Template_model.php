<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_model extends CI_Model
{
	 public function __construct()
	 {
	 	parent::__construct();
	 	//Do your magic here
	 }
	public function get($form_id)
	{
		echo 'ok';
		$query=$this->db->query("SELECT * FROM attribute_value AS av INNER JOIN attribute AS a ON av.attribute_id = a.attribute_id WHERE av.attribute_value_id IN (SELECT attribute_value_id FROM product_attribute WHERE product_id= '1') ORDER BY a.attribute_name");
		$data=$query->result_array();
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
}

/* End of file .php */
