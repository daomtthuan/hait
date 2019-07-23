<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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
		$data['script'] = ucfirst('<script src="'.$this->config->base_url().'public/js/tools/new_form.js"></script>');

		$this->load->view('general/layout',$data);
	}

	public function list_form()
	{
		$data['main']='tools/datatable';
		$data['page_title'] = ucfirst('Danh sách biểu mẫu');
		$data['script'] = ucfirst('');
		$this->load->view('general/layout',$data);
	}

}

?>