<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User extends My_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['navi'] = '';
		$data['role'] = 'user';
		$data['page_title'] = 'Trang chủ';

		$data['main']= 'user/home';
		$data['script'] = '';

		$this->load->view('general/layout',$data);
	}

	public function new_form($step)
	{
		$data['navi'] = $step>1 ? '<script>if (!(sessionStorage.getItem("completed") >= '.($step-1).')) window.location.href = "'.base_url('user/new-form/'.($step-1)).'"</script>' : '';
		$data['role'] = 'user';
		$data['page_title'] = 'Tạo mới biểu mẫu - Bước '.$step;

		$data['main'] = 'tools/form/step'.$step;
		$data['script'] = '<script src="'.base_url('public/js/tools/new_form/step'.$step.'.js').'"></script>';

		$this->load->view('general/layout',$data);
	}


	public function edit_form($form_id)
	{
		$data['navi'] = '';
		$data['role'] = 'user';
		$data['page_title'] = 'Chỉnh sửa biểu mẫu';

		$data['main'] = 'tools/form';
		$data['script'] =
			'<script>var json = "'.base_url('ajax/get/'.$form_id).'"</script>'.
			'<script src="'.base_url('public/js/tools/edit_form.js').'"></script>';

		$this->load->view('general/layout',$data);
	}

	public function list_form()
	{
		$data['navi'] = '';
		$data['role'] = 'user';
		$data['page_title'] = 'Danh sách biểu mẫu';

		$data['main'] = 'tools/list_form';
		$data['script'] =
			'<script>'.
				'var edit = "'.base_url('user/edit-form').'",'.
				'json = "'.base_url('ajax/formList').'"'.
			'</script>'.
			'<script src="'.base_url('public/js/tools/list_form.js').'"></script>';

		$this->load->view('general/layout',$data);
	}

}
