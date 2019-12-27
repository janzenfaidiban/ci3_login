<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
    function __construct() {
		session_start();
		parent::__construct();
		$this->load->model('login_model');
    }	

	/*
	Fungsi menampilkan halaman login
	Halaman yang pertama kali muncul
	*/
	public function index()
	{
		$this->load->view('login_page');
	}

	/*
	Fungsi melakukan proses login
	Menyesuaikan email dan password yang dimasukan pada halaman login dengan database
	*/
    function login_process(){		
		/*
		Fungsi pengalihan apabila session masih aktif maka akan dialihkan ke halaman 'login_sucess'
		*/
		if(isset($_SESSION['email']) ) { 
        	redirect('login_success'); 
       	}
			
		$this->load->library('form_validation'); 
	 		$this->form_validation->set_rules('email', 'email', 'required'); 
         	$this->form_validation->set_rules('password', 'password', 'required|min_length[4]'); 
           	if ( $this->form_validation->run() == TRUE ) {
				
				/*
				Menyesuaikan data yang dimasukan dengan data di database
				Fungsi dibuat di 'login_model'
				*/
				$this->load->model('login_model'); 
              	$result = 	$this->login_model->do_login( 
                            $this->input->post('email'),  
                            md5($this->input->post('password')) 
                          	);
				
			 	if ($result == TRUE) { 
						/*
						Membuat session dengan nama 'email'
						*/
						$_SESSION['email'] = $this->input->post('email');

						/*
						Menampilkan halaman 'login_sucess' apabila proses login berhasil atau data yang dimasukan sesuai dengan data di database
						*/
						redirect('login_sucess'); 
				}
		}
		/*
		Menampilkan halaman login apabila proses login gagal atau data yang dimasukan tidak sesuai
		*/
		redirect('login');	
	}

	/*
	Fungsi untuk keluar
	*/
	function logOut(){
		session_destroy(); 
        redirect('login');
	}
}
