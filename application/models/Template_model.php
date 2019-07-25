<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_model extends CI_Model
{
	 public function __construct()
	 {
	 	parent::__construct();
	 	//Do your magic here
	 }
	public function insert($template_id,$form_id,$part)
	{
		$this->db->select('*');
		$this->db->from('attribute_value');
		$this->db->join('attribute', 'attribute_value.attribute_id = attribute.attribute_id');
		$this->db->join('product_attribute', 'product_attribute.attribute_value_id = attribute_value.attribute_value_id');
		$this->db->where('product_id',$template_id);
		$query = $this->db->get();
		foreach ($query->result() as $row)
		{
			$form_attribute_id=$form_id.'_'.$row->attribute_value_id;
			$data = array(
				'form_id' => $form_id ,
				'attribute_id' => $row->attribute_value_id,
				'field_part' => $part,
				'form_attribute_id'=>$form_attribute_id
			);
			$this->db->insert('form_detail', $data);
			$value_data=array(
				'value'=>$row->default_value,
				'data_type'=>$row->data_type,
				'form_attribute_id'=>$form_attribute_id,
				'attribute_name'=>$row->attribute_name
			);
			$this->db->insert('value', $value_data);
		}
	}
	public function get_id($name,$form_id){
	 	$like_pt=$form_id.'_';
	 	//echo $like_pt;
		$this->db->like('form_attribute_id', $like_pt);
		$this->db->where('attribute_name',$name);
		$query=$this->db->get('value');
		$row = $query->row();
		$form_attribute_id= $row->form_attribute_id;
		/*
		$row = $query->row();
		$form_attribute_id=$row->role_id;
		print_r($form_attribute_id);
		*/
		return $form_attribute_id;
	}
	public function update_value($key,$value){
	 	echo 'Key'.$key.'value'.$value;
		$data = array(
			'value' => $value,
		);
		$this->db->where('form_attribute_id', $key);
		$this->db->update('value', $data);
	}
	public function call_proc(){
		$query=$this->db->query("call pivot_form");
		$data=$query->result_array();
		print_r($data);
	}


}
/*
 *
 * */

/* End of file .php */
