<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Login_model');
	}

	public function index()
	{
		// $user=$this->session->userdata('login');
		// if($user){
		// 	if($role =$this->Login_model->check_role($user)){
		// 		if($role=='admin'){
		// 			$data['main']='user/home';
		// 			$data['page_title'] = ucfirst('Trang quản trị');
		// 			$data['script'] = ucfirst('');
		// 			$this->load->view('general/layout',$data);
		// 		} elseif ($role=='user'){
		// 			redirect( base_url('user') );
		// 		} else{
		// 			$this->load->view('general/login');
		// 			print_r('The account role not set');
		// 		}
		// 	}
		// }

		$data['role'] = 'admin';
		$data['page_title'] = 'Trang chủ';
		$data['main']= 'admin/home';

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
		$data['main'] = 'admin/tool/form/list_form';

		$this->load->view('general/layout',$data);
	}
}

?>
