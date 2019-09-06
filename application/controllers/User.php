<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User extends MY_Controller {

	public function __construct()	{
		parent::__construct();
		$this->load->library('ion_auth');
		if (!$this->ion_auth->in_group('user'))
		{
			redirect('', 'index');
		}
	}

	public function index()	{
		$data['role'] = 'User';
		$data['page_title'] = 'Trang chủ';
		$data['main']= 'User/Home';

		$this->load->view('general/Layout',$data);
	}

	public function information()	{
		$data['role'] = 'User';
		$data['page_title'] = 'Thông tin tài khoản';
		$data['main']= 'general/Information';

		$this->load->view('general/Layout',$data);
	}

	public function alert()	{
		$data['role'] = 'User';
		$data['page_title'] = 'Thông báo';
		$data['main']= 'general/Alert';

		$this->load->view('general/Layout',$data);
	}

	public function form($type, $step = '1')	{
		switch ($step) {
			case '1': case '2': case '3': case '4': case '5': case '6': case '8': break;
			case '7-1':	$step = '7_1'; break;
			case '7-2':	$step = '7_2'; break;
			default: show_404();
		}

		switch (strtolower($type)) {
			case 'edit': $data['page_title'] = 'Tạo mới biểu mẫu - Bước '.(($step == '7_1' || $step == '7_2' ) ? '7' : $step); break;
			case 'view': $data['page_title'] = 'Xem biểu mẫu - Bước '.(($step == '7_1' || $step == '7_2' ) ? '7' : $step); break;
			default: show_404();
		}

		$data['role'] = 'User';
		$data['main'] = 'tool/form/step'.$step;
		$data['type'] = strtolower($type);

		$this->load->view('general/Layout',$data);
	}

	public function list_form()	{
		$data['role'] = 'User';
		$data['page_title'] = 'Danh sách biểu mẫu';
		$data['main'] = 'tool/form/List_User';

		$this->load->view('general/Layout',$data);
	}

}
