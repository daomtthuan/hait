<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Template_model');

		//Do your magic here
	}
public function index(){
		$this->Template_model->get(1);
}

}

/* End of file Controllername.php */
