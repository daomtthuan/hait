<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Value_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function insert_array( $batch){
		$this->db->insert_batch('value', $batch);
	}
	public function insert($source_data,$form_id,$form_part){
		$query1 = $this->db->get('view_datatype');
		$batch=array();
		foreach($source_data as $key => $val)
		{
			$datatype="";
			$form_attribute_id=$form_id."_".$key;
			foreach ($query1->result() as $row)
			{
				if($key==$row->attribute_name)
				{
					$datatype=$row->data_type;
				}
			}
			if($val && $datatype){
				$data=array(
					"form_attribute_id"=>$form_attribute_id,
					"form_id"=>$form_id,
					"form_part"=>$form_part,
					"attribute_name"=>$key,
					"data_type"=>$datatype,
					"value"=>$val
				);
				$batch[]= $data;
			}
		}
		$this->db->insert_batch('value', $batch);
	}
	public function get(){
		$query = $this->db->get('value');
		$data=$query->result_array();
		return $data;
	}
	public function update($form_id,$key,$value){
		echo 'Key'.$key.'value'.$value;
		$like_pt=$form_id.'_';
		$data = array(
			'value' => $value,
		);
		$this->db->like('form_attribute_id', $like_pt);
		$this->db->where('attribute_name',$key);
		$this->db->update('value', $data);
	}
	public function delete($id){
		$this->db->where('form_attribute_id', $id);
		$this->db->delete('value');
	}
	//helper
	public function search($attribute_name){
		$call_procedure ="call search_datatype('$attribute_name')";
		$query=$this->db->query($call_procedure);
		$row = $query->row();
		if (isset($row))
		{
			return $row->data_type;

		}
	}
	public function update_datatype($form_id){

	}
}

/* End of file .php */



