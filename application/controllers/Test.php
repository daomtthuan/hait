<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Template_model');
		$this->load->model('Form_model');
		$this->load->helper('form');
	}
	public function index(){
		//$this->Template_model->insert(1,1,1);

		$data['form_id']='1';
		$this->load->view('tools/form1.php',$data);
		//print_r($this->Template_model->get_id('ngay_vao_khoa',1));
		if($this->input->post()){
			$data = $this->input->post(NULL,TRUE);
			foreach($data as $key => $val)
			{
				$this->Template_model->update_value($key,$val);
			}
		}
	}
	public function get_id($name,$form_id){
		$id=$this->Template_model->get_id($name,$form_id);
		return $id;
	}
	public function create(){
		$this->Template_model->insert(1,1,1);
	}
	public function call(){
		$this->Template_model->call_proc();
	}
	public function grib(){
		$this->load->view('tools/grib.php');
	}
	public function ajax(){
		$data=$this->Template_model->get_value(1);
		echo json_encode($data);
	}
	public function new_form($template_id){
		$this->load->model('Form_model');
		$form_id=$this->Form_model->insert_new_form(1,'Khoa noi',1);
		$this->Template_model->insert_form($template_id,$form_id);
		echo 'Form '.$form_id.'creat success';
	}
	public function datatype(){
		/*
		$this->load->model('Attribute_value_model');
		$data_type= $this->Attribute_value_model->search('ngay_vao_khoa');
		echo $data_type;*/
		/*
		$this->load->model('Form_model');
		$form_id=$this->Form_model->insert_new_form(1,'Khoa noi',1);
		echo $form_id;
		*/
		/*
		$this->load->model('Value_model');
		$this->Value_model->update_datatype(1);
		*/
		$this->load->model('Login_model');
		$data=$this->Login_model->get_user_data('npduy') ;
		print_r($data);
	}
	public function libtest(){

		$this->Mycar->turn_right('olala');
	}
	public function get_form(){
		$data=$this->Form_model->get_form('all');
		print_r($data);
	}

}

/* End of file Controllername.php */
