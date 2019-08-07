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
			//$this->Value_model->delete($form_id);
		} else {
			//Them moi
			$this->$form_id=$this->Form_model->insert_new_form(1,'Khoa noi',1);
		}
		log_message('debug', "Form id:". $data["form_id"]);
		foreach($data as $key => $val)
		{

				//log_message('debug',$key);

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
