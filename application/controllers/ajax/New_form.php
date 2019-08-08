<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class New_Form extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Value_model');
		$this->load->model('Form_model');
	}
	function index_post()
	{
		$data = $this->post(NULL,TRUE);
		$form_id=$data['form_id'];
		if($form_id){
			//Cap nhat
			$this->Value_model->delete($form_id);
		} else {
			//Them moi
			$this->$form_id=$this->Form_model->insert_new_form(1,'Khoa noi',1);
		}
		log_message('debug', "Form id:". $data["form_id"]);
		if($data["step1"]){
			$this->Value_model->insert($data["step1"],$form_id,"step1");
		}
		if($data["step2"]){
			$this->Value_model->insert($data["step2"],$form_id,"step2");
		}
		if($data["step3"]){
			$this->Value_model->insert($data["step3"],$form_id,"step3");
		}
		if($data["step4"]){
			$this->Value_model->insert($data["step4"],$form_id,"step4");
		}
		if($data["step5"]){
			$this->Value_model->insert($data["step5"],$form_id,"step5");
		}
		if($data["step6"]){
			$this->Value_model->insert($data["step6"],$form_id,"step6");
		}
		if($data["step7"]){
			$this->Value_model->insert($data["step7"],$form_id,"step7");
		}
		if($data["step8"]){
			$this->Value_model->insert($data["step8"],$form_id,"step8");
		}
		//

		$result=true;
		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}
	}
}
