<?php



class Dashboard extends CI_Controller {



	public function __construct(){

	  parent::__construct();

	  //$this->load->library('javascript');

	  //$this->load->library('form_validation');

	  //$this->load->library('email');

	  //$this->load->library('session');

	}

	function index() {

//echo 'test' ; die;
        if(! $this->session->userdata('isLoggedIn') ) {

            redirect('/login');

        }

            $this->load->view('dashboard');

    }



}

