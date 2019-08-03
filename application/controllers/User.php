<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User extends MY_Controller {

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

	public function form($step = "1")
	{
		if ($step == '7-1') $step = "7_1";
		else if ($step == '7-2') $step = "7_2";

		$data['role'] = 'user';
		$data['page_title'] = 'Tạo mới biểu mẫu - Bước '.(($step == '7_1' || $step == '7_2' ) ? '7' : $step);
		$data['main'] = 'tools/form/step'.$step;

		$this->load->view('general/layout',$data);
	}

	public function form_list()
	{
		$data['role'] = 'user';
		$data['page_title'] = 'Danh sách biểu mẫu';
		$data['main'] = 'tools/form_list';

		$this->load->view('general/layout',$data);
	}

}
