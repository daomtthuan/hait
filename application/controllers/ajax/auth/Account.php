<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class Account extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->library('ion_auth');
	}
	function index_get()
	{
		$user = $this->ion_auth->user()->row();
		$id=$user->id;
		$this->load->model('User_model');
		$data=$this->User_model->info($id);
		$data=(array)$data;
		$data['admin']=$this->ion_auth->is_admin();
		$data=(object)$data;
		if ($data) {
			$this->response($data, REST_Controller::HTTP_OK);
		} else {
			$this->response(NULL, REST_Controller::HTTP_NOT_FOUND);
		}
	}
}
