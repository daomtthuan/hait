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
		$data['role'] = 'Admin';
		$data['page_title'] = 'Trang chủ';
		$data['main']= 'Admin/Home';

		$this->load->view('general/Layout',$data);
	}

	public function form($type, $step = '1')	{

		if(strtolower($type) != 'view') show_404();

		switch ($step) {
			case '1': case '2': case '3': case '4': case '5': case '6': case '8': break;
			case '7-1':	$step = '7_1'; break;
			case '7-2':	$step = '7_2'; break;
			default: show_404();
		}

		$data['role'] = 'Admin';
		$data['page_title'] = 'Xem biểu mẫu - Bước '.(($step == '7_1' || $step == '7_2' ) ? '7' : $step);
		$data['main'] = 'tool/form/Step'.$step;
		$data['type'] = 'view';

		$this->load->view('general/Layout',$data);
	}

	public function information()	{
		$data['role'] = 'Admin';
		$data['page_title'] = 'Thông tin tài khoản';
		$data['main']= 'general/Information';

		$this->load->view('general/Layout',$data);
	}

	public function alert()	{
		$data['role'] = 'Admin';
		$data['page_title'] = 'Thông báo';
		$data['main']= 'general/Alert';

		$this->load->view('general/Layout',$data);
	}

	public function list_form()	{
		$data['role'] = 'Admin';
		$data['page_title'] = 'Danh sách biểu mẫu';
		$data['main'] = 'tool/form/List_Admin';

		$this->load->view('general/Layout',$data);
	}

	public function list_nkbv()	{
		$data['role'] = 'Admin';
		$data['page_title'] = 'Danh sách nhiễm khuẩn bệnh viện';
		$data['main'] = 'tool/analysis/List_Nkbv';

		$this->load->view('general/Layout',$data);
	}
}

?>
