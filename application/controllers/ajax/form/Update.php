<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');

class Update extends REST_Controller
{
	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Value_model');
		$this->load->model('Form_model');
		$this->load->model('Meta_link_model', 'meta');
		$this->load->model('List_ks_model');
        $this->load->library('ion_auth');
	}

	function index_post()
	{
		$data = $this->post(NULL, TRUE);
		$dataObject = (Object)$data;
		$form_id = $dataObject->form_id;
		$this->Form_model->update_content($form_id, $dataObject->stringJSON);
		if ($form_id) {
			//Cap nhat
			$this->Value_model->delete($form_id);
			$this->meta->delete($form_id);

			log_message('debug', "Form id:" . $data['form_id']);
			$this->Value_model->insert($data, $form_id, "all");
			if(isset($dataObject->vp)){
				$this->update_nk($dataObject->vp, "vp", $form_id);
			}
			if(isset($dataObject->nktn)){
				$this->update_nk($dataObject->nktn, "nktn", $form_id);
			}
			if(isset($dataObject->nkh)){
				$this->update_nk($dataObject->nkh, "nkh", $form_id);
			}
			if(isset($dataObject->nkvm)){
				$this->update_nk($dataObject->nkvm, "nkvm", $form_id);
			}
			if(isset($dataObject->danh_sach_khang_sinh)){
				$this->update_khangsinh($dataObject->danh_sach_khang_sinh,$form_id);
			}
			$this->response(array('status' => 'success'));
		} else {
			//Them moi
			$this->response(NULL, REST_Controller::HTTP_NOT_FOUND);
		}
	}

	function update_nk($array, $name, $form_id)
	{
		if ($array) {
			$relates = $this->meta->get_relate($form_id);
            $user = $this->ion_auth->user()->row();
            $form_id=$this->Form_model->insert_new_form($user->id,$this->Room_model->get_name($user->company),$user->company,$name);
			$id = $this->Form_model->insert_new_form(1, 'Khoa noi', 1, $name);
			$this->meta->add($form_id, $id);
			$this->Value_model->insert($array, $form_id, $name);
		}
	}
	function update_khangsinh($array,$form_id){
		$array=(array)$array;
		if($array){

		}
	}

}
