<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$data['main']='user/home';
		$data['page_title'] = ucfirst('Trang chủ');
		$data['script'] = ucfirst('');
		$this->load->view('general/layout',$data);
	}

	public function new_form()
	{
		$data['main']='tools/form';
		$data['page_title'] = ucfirst('Tạo mới biểu mẫu');
		$data['script'] = ucfirst('<script src="'.base_url('public/js/tools/new_form.js').'"></script>');
		$this->load->view('general/layout',$data);
		if($this->input->post()){
			$this->load->model('Form_model');
			$form_id=$this->Form_model->insert_new_form(1,'Khoa noi',1);
			$this->Template_model->insert_form($template_id,$form_id);
			echo 'Form '.$form_id.'creat success';
			$data = $this->input->post(NULL,TRUE);
			foreach($data as $key => $val)
			{
				$this->load->model('Value_model');
				$this->Value_model->update_value($form_id,$key,$val);
			}
		}
	}

	public function edit_form()
	{
		$data['main']='tools/form';
		$data['page_title'] = ucfirst('Chỉnh sửa biểu mẫu');
		$data['script'] = ucfirst('<script>var url = "'.base_url('ajax/get/1').'"</script><script src="'.base_url('public/js/tools/edit_form.js').'"></script>');
		$this->load->view('general/layout',$data);
	}

	public function list_form()
	{
		$data['main']='tools/list_form';
		$data['page_title'] = ucfirst('Danh sách biểu mẫu');
		$data['script'] = ucfirst('<script>var editUrl = "'.base_url('user/edit_form').'", jsonUrl = "'.base_url('ajax/formList').'"</script><script src="'.base_url('public/js/tools/list_form.js').'"></script>');
		$this->load->view('general/layout',$data);
	}
}


