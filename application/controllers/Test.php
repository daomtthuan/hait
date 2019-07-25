<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Template_model');
		$this->load->helper('form');
	}
	public function index(){
		//$this->Template_model->insert(1,1,1);

		$data['form_id']='1';
		$this->load->view('tools/form1.php',$data);
		//print_r($this->Template_model->get_id('ngay_vao_khoa',1));
		if($this->input->post()){
			$data = $this->input->post(NULL,TRUE);
			foreach($data as $key => $val)
			{
				$this->Template_model->update_value($key,$val);
			}
		}
	}
	public function get_id($name,$form_id){
		$id=$this->Template_model->get_id($name,$form_id);
		return $id;
	}
	public function create(){
		$this->Template_model->insert(1,1,1);
	}
	public function call(){
		$this->Template_model->call_proc();
	}
	public function grib(){
		$this->load->view('tools/grib.php');
	}


}

/* End of file Controllername.php */
