<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Template_model');
		$this->load->helper('form');
	}
	public function get($id){
		$data=$this->Template_model->get_value($id);
		echo json_encode($data);
	}
	public function formList(){
		$this->load->model('Form_model');
		$data=$this->Form_model->table();
		echo json_encode($data);
	}
	public function listKs(){
		$this->load->model('Khang_sinh_model');
		$data=$this->Khang_sinh_model->get();
		echo json_encode($data);
	}
	public function insertForm(){
		if($this->input->post()){
			//get_data here
		}
	}
	public function readSession(){
		$data= $this->session->userdata();
		echo json_encode($data);
	}


}

?>
