<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User extends My_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['role'] = 'user';
		$data['page_title'] = 'Trang chủ';

		$data['main']= 'user/home';
		$data['script'] = '';

		$this->load->view('general/layout',$data);
	}

	public function new_form()
	{
		$data['role'] = 'user';
		$data['page_title'] = 'Tạo mới biểu mẫu';

		$data['main']='tools/form';
		$data['script'] = '<script src="'.base_url('public/js/tools/new_form.js').'"></script>';

		$this->load->view('general/layout',$data);
		if($this->input->post()){
			$this->load->model('Form_model');
			$form_id=$this->Form_model->insert_new_form(1,'Khoa noi',1);
			$this->load->model('Template_model');
			$this->Template_model->insert_form(1,$form_id);
			echo 'Form '.$form_id.'creat success';
			$data = $this->input->post(NULL,TRUE);
			foreach($data as $key => $val)
			{
				$this->load->model('Value_model');
				$this->Value_model->update($form_id,$key,$val);
			}
		}
	}

	public function edit_form($form_id)
	{
		$data['role'] = 'user';
		$data['page_title'] = 'Chỉnh sửa biểu mẫu';

		$data['main']='tools/form';
		$data['script'] =
			'<script>var json = "'.base_url('ajax/get/'.$form_id).'"</script>'.
			'<script src="'.base_url('public/js/tools/edit_form.js').'"></script>';

		$this->load->view('general/layout',$data);

	}

	public function list_form()
	{
		$data['role'] = 'user';
		$data['page_title'] = 'Danh sách biểu mẫu';

		$data['main']='tools/list_form';
		$data['script'] =
			'<script>'.
				'var edit = "'.base_url('user/edit_form').'",'.
				'json = "'.base_url('ajax/formList').'"'.
			'</script>'.
			'<script src="'.base_url('public/js/tools/list_form.js').'"></script>';

		$this->load->view('general/layout',$data);
	}
	public function test_form()
	{
		$data['role'] = 'user';
		$data['page_title'] = 'Tạo mới biểu mẫu';

		$data['main']='tools/form1';
	    $data['script'] = '<script src="'.base_url('public/js/tools/new_form.js').'"></script>';

		$this->load->view('general/layout',$data);
		if($this->input->post()){
			$this->load->model('Form_model');
			$form_id=$this->Form_model->insert_new_form(1,'Khoa noi',1);
			$this->load->model('Template_model');
			$this->Template_model->insert_form(1,$form_id);
			echo 'Form '.$form_id.'creat success';
			$data = $this->input->post(NULL,TRUE);
			foreach($data as $key => $val)
			{
				$this->load->model('Value_model');
				$this->Value_model->update($form_id,$key,$val);
			}
			/*
			$this->load->model('Form_model');
			$form_id=$this->Form_model->insert_new_form(1,'Khoa noi',1);
			$this->Template_model->insert_form(1,$form_id);
			echo 'Form '.$form_id.'creat success';
			$data = $this->input->post(NULL,TRUE);
			foreach($data as $key => $val)
			{
				$this->load->model('Value_model');
				$this->Value_model->update($form_id,$key,$val);
			}*/
		}
	}
}
