<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_sucess extends CI_Controller {
    
    function __construct() {
		session_start();
		parent::__construct();
        if(!isset($_SESSION['email'])){redirect('login');}
    }	

	public function index()
	{
		$this->load->view('login_sucess');
	}

}
