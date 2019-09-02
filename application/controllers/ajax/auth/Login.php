<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class Login extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->library('ion_auth');
	}
	function index_post()
	{
		$data = $this->post(NULL, TRUE);
		$identity = $data['mail'];
		$password = $data['password'];
		$remember = $data['remember']; // remember the user
		$result= $this->ion_auth->login($identity, $password, $remember);
		log_message("debug","user: ".$identity." has been login ".$result);
		if ($result) {
			if(!$this->ion_auth->is_admin()){
				$this->response("user", REST_Controller::HTTP_OK);
			} else{
				$this->response("admin", REST_Controller::HTTP_OK);
			}
		} else {
			$this->response(NULL, REST_Controller::HTTP_NOT_FOUND);
		}
	}
	function index_get()
	{
	 	$result= $this->ion_auth->logged_in();

		if ($result) {
			$this->response($result, REST_Controller::HTTP_OK);
		} else {
			$this->response($result, REST_Controller::HTTP_NOT_FOUND);
		}
	}

}
