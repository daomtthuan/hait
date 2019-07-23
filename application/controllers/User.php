<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['main']='user/home';
		$data['page_title'] = ucfirst('Trang chủ');
		$this->load->view('general/layout',$data);
	}

	public function new_form()
	{
		$data['main']='tools/form';
		$data['page_title'] = ucfirst('Tạo mới biểu mẫu');
		$this->load->view('general/layout',$data);
	}

	public function list_form()
	{
		$data['main']='tools/datatable';
		$data['page_title'] = ucfirst('Danh sách biểu mẫu');
		$this->load->view('general/layout',$data);
	}

}

?>