<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');

class Nkbv extends REST_Controller
{
    public function __construct($config = 'rest')
    {
        parent::__construct($config);
    }
    function index_get($type, $para)
    {

    }
}