<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
		ini_set("display_errors", 1);
        error_reporting(1);
    }  
	public function index()
	{
		$this->load->view('authorization/login');
	}
	public function loginProcess(){
		$this->load->view('dashboard/dashboard');
	}
	public function test(){
		$this->load->view('profile');
	}
}
