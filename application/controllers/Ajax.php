<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Template_model');
		$this->load->helper('form');
	}
	public function get($id){
		$data=$this->Template_model->get_value($id);
		echo json_encode($data);
	}
	public function formList(){
		$this->load->model('Form_model');
		$data=$this->Form_model->table();
		echo json_encode($data);
	}

}

?>