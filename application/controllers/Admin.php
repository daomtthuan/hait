<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		if (!$this->ion_auth->is_admin())
		{
			$this->session->set_flashdata('message', 'You must be an admin to view this page');
			redirect('login', 'index');
		}
	}

	public function index()
	{
		$data['role'] = 'admin';
		$data['page_title'] = 'Trang chủ';
		$data['main']= 'admin/home';

		$this->load->view('general/layout',$data);
	}

	public function form($step = '1')	{
		switch ($step) {
			case '1': case '2': case '3': case '4': case '5': case '6': case '8': break;
			case '7-1':	$step = '7_1'; break;
			case '7-2':	$step = '7_2'; break;
			default: show_404();
		}

		$data['role'] = 'user';
		$data['page_title'] = 'Tạo mới biểu mẫu - Bước '.(($step == '7_1' || $step == '7_2' ) ? '7' : $step);
		$data['main'] = 'tool/form/step'.$step;

		$this->load->view('general/layout',$data);
	}

	public function list_form($status)	{
		switch ($status) {
			case 'unfinished': $data['page_title'] = 'Danh sách biểu mẫu - Chưa hoàn thành'; break;
			case 'verifying': $data['page_title'] = 'Danh sách biểu mẫu - Chờ kiểm duyệt'; break;
			case 'verified': $data['page_title'] = 'Danh sách biểu mẫu - Đã kiểm duyệt'; break;
			default: show_404();
		}

		$data['role'] = 'admin';
		$data['main'] = 'tool/form/list';

		$this->load->view('general/layout',$data);
	}
}

?>
