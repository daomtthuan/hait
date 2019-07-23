<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');
class Attribute_api extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('Attribute', 'att');
	}

	function index_get()
	{
		$attributes = $this->att->get();
		if ($attributes) {
			$this->response($attributes, REST_Controller::HTTP_OK);
		} else {
			$this->response(NULL, REST_Controller::HTTP_NOT_FOUND);
		}
	}
	function index_post()
	{
		$result = $this->att->add_attribute($this->post);
		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}
	}
	public function index_put()
	{
		$contact_id = $this->put('contact_id');
		$result = $this->att->update_contact($contact_id,$this->put);

		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}
	}
	function index_delete($attribute_id)
	{

		$result = $this->att->delete_attribute($attribute_id);

		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}
	}


	/*
        function index_post()
        {
            $contact_name = $this->post('contact_name');
            $contact_address = $this->post('contact_address');
            $contact_phone = $this->post('contact_phone');

            $result = $this->cm->add_contact($contact_name, $contact_address, $contact_phone);

            if ($result === FALSE) {
                $this->response(array('status' => 'failed'));
            } else {
                $this->response(array('status' => 'success'));
            }
        }

        public function index_put()
        {
            $contact_id = $this->put('contact_id');
            $contact_name = $this->put('contact_name');
            $contact_address = $this->put('contact_address');
            $contact_phone = $this->put('contact_phone');

            $result = $this->cm->update_contact($contact_id, $contact_name, $contact_address, $contact_phone);

            if ($result === FALSE) {
                $this->response(array('status' => 'failed'));
            } else {
                $this->response(array('status' => 'success'));
            }
        }

        function index_delete($contact_id)
        {

            $result = $this->cm->delete_contact($contact_id);

            if ($result === FALSE) {
                $this->response(array('status' => 'failed'));
            } else {
                $this->response(array('status' => 'success'));
            }
        }
    */
}
