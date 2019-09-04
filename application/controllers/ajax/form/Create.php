<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class Create extends REST_Controller
{
	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Form_model');
		$this->load->model('Room_model');
        $this->load->library('ion_auth');
	}
	function index_get()
	{
        $user = $this->ion_auth->user()->row();
		$form_id=$this->Form_model->insert_new_form($user->id,$this->Room_model->get_name($user->company),$user->company,"CHINH");
		if ($form_id) {
			$this->response($form_id, REST_Controller::HTTP_OK);
		} else {
			$this->response(NULL, REST_Controller::HTTP_NOT_FOUND);
		}
	}
}