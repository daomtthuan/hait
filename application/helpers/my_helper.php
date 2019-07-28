<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getDatatype'))
{
	function getDatatype($name = ''){

		$this->load->model('Value_model');

		$datatype=$this->Value_model->search($name);
		return $datatype;
	}
}
