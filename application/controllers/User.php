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


