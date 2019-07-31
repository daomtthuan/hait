<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class New_form extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Value_model');
		$this->load->model('Form_model');
	}
	function index_post()
	{
		$form_id=$this->Form_model->insert_new_form(1,'Khoa noi',1);
		$data = $this->post(NULL,TRUE);
		$query1 = $this->db->get('view_datatype');
		$batch=array();
		foreach($data as $key => $val)
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
				$data_item=array(
					"form_attribute_id"=>$form_attribute_id,
					"form_id"=>$form_id,
					"form_part"=>"1",
					"attribute_name"=>$key,
					"data_type"=>$datatype,
					"value"=>$val
				);
				$batch[]= $data_item;
			}
		}
		$result=$this->db->insert_batch('value', $batch);
		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}
	}

}


