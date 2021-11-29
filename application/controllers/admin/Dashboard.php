<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct(){
        parent::__construct();
		ini_set("display_errors", 1);
        error_reporting(1);
    }  
	public function index()
	{
		$this->load->view('');
	}
}
