<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class Update_Form extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Value_model');
		$this->load->model('Form_model');
		$this->load->model('Meta_link_model','meta');
	}
	function index_post()
	{
		$data = $this->post(NULL,TRUE);
		$form_id=$data['form_id'];
		$this->Form_model->update_content($form_id,json_encode($data));
		if($form_id){
			//Cap nhat
			$this->Value_model->delete($form_id);
			$this->meta->delete($form_id);
		} else {
			//Them moi
			$this->$form_id=$this->Form_model->insert_new_form(1,'Khoa noi',1,"CHINH");
		}
		log_message('debug', "Form id:". $data["form_id"]);
		if(isset($data["step1"])){
			$this->Value_model->insert($data["step1"],$form_id,"step1");
		}
		if(isset($data["step2"])){
			log_message('debug',"Bước 2");
			//Lấy dữ liệu step 2
			$arr = $data["step2"];
			//Lấy dữ liệu nhiễm khuẩn bệnh viện
			//Nếu có nhiễm khuẩn bệnh viện thì tiến hành insert
			if($arr){
				if(isset($arr["vp"])){
					//insert viêm phổi
					$vp_id="";
					$this->$vp_id=$this->Form_model->insert_new_form(1,'Khoa noi',1,"VP");
					$this->meta->add($form_id,$vp_id);
					$this->Value_model->insert($arr["vp"],$form_id,"VP");
				}
				if(isset($arr["nktn"])){
					//insert nhiễm khuẩn tiết niệu
					$nktn_id=$this->Form_model->insert_new_form(1,'Khoa noi',1,"NKTN");
					$this->meta->add($form_id,$nktn_id);
					$this->Value_model->insert($arr["nktn"],$form_id,"NKTN");
				}
				if(isset($arr["nkh"])){
					//insert nhiễm khuẩn huyết
					$nkh_id=$this->Form_model->insert_new_form(1,'Khoa noi',1,"NKH");
					$this->meta->add($form_id,$nkh_id);
					$this->Value_model->insert($arr["nkh"],$form_id,"NKH");
				}
				if(isset($arr["nkvm"])){
					//insert nhiễm khuẩn vết mổ
					$nkvm_id=$this->Form_model->insert_new_form(1,'Khoa noi',1,"NKVM");
					$this->meta->add($form_id,$nkvm_id);
					$this->Value_model->insert($arr["nkvm"],$form_id,"NKVM");
				}
			}

			//$this->Value_model->step2($data["step2"],$form_id);
		}
		if(isset($data["step3"])){
			$this->Value_model->insert($data["step3"],$form_id,"step3");
		}
		if(isset($data["step4"])){
			$this->Value_model->insert($data["step4"],$form_id,"step4");
		}
		if(isset($data["step5"])){
			$this->Value_model->insert($data["step5"],$form_id,"step5");
		}
		if(isset($data["step6"])){
			$this->Value_model->insert($data["step6"],$form_id,"step6");
		}
		if(isset($data["step7"])){
			$this->Value_model->insert($data["step7"],$form_id,"step7");
		}
		if(isset($data["step8"])){
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
