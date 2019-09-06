<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		if (!$this->ion_auth->is_admin())
		{
			$this->session->set_flashdata('message', 'You must be an admin to view this page');
			redirect('', 'index');
		}
	}

	public function index()
	{
		$data['role'] = 'admin';
		$data['page_title'] = 'Trang chủ';
		$data['main']= 'admin/home';

		$this->load->view('general/layout',$data);
	}

	public function form($type, $step = '1')	{

		if(strtolower($type) != 'view') show_404();

		switch ($step) {
			case '1': case '2': case '3': case '4': case '5': case '6': case '8': break;
			case '7-1':	$step = '7_1'; break;
			case '7-2':	$step = '7_2'; break;
			default: show_404();
		}

		$data['role'] = 'admin';
		$data['page_title'] = 'Xem biểu mẫu - Bước '.(($step == '7_1' || $step == '7_2' ) ? '7' : $step);
		$data['main'] = 'tool/form/step'.$step;
		$data['type'] = 'view';

		$this->load->view('general/layout',$data);
	}

	public function information()	{
		$data['role'] = 'admin';
		$data['page_title'] = 'Thông tin tài khoản';
		$data['main']= 'general/information';

		$this->load->view('general/layout',$data);
	}

	public function alert()	{
		$data['role'] = 'admin';
		$data['page_title'] = 'Thông báo';
		$data['main']= 'general/alert';

		$this->load->view('general/layout',$data);
	}

	public function list_form()	{
		$data['role'] = 'admin';
		$data['page_title'] = 'Danh sách biểu mẫu';
		$data['main'] = 'tool/form/list_admin';

		$this->load->view('general/layout',$data);
	}

	public function list_nkbv()	{
		$data['role'] = 'admin';
		$data['page_title'] = 'Danh sách nhiễm khuẩn bệnh viện';
		$data['main'] = 'tool/analysis/list_nkbv';

		$this->load->view('general/layout',$data);
	}
}

?>
