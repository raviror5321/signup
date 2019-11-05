<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
	  parent::__construct();
	  $this->load->library('javascript');
	  $this->load->library('form_validation');
	  $this->load->library('email');
	  $this->load->library('session');
	  //$this->load->model('cclogin_m');
	}
	public function index()
	{
		
		if( $this->session->userdata('isLoggedIn') ) {

			if ($this->agent->is_referral())
		       redirect( $this->agent->referrer());
			else	
            	redirect('/dashboard');
        } else {
        	//echo 'suthar';die;
            $this->show_login(false);
       	 }
}
	function show_login( $show_error = false ) {
        $data['error'] = $show_error;
        $this->load->helper('form');
        $this->load->view('login',$data);
    }

function login_user() {
	//echo 'test';  die;	

		        // Grab the email and password from the form POST
		 //$login_role = $this->input->post('form-field-radio');
        $email = $this->input->post('email');
        
        $pass  = $this->input->post('password');
		
     	 // Create an instance of the user model
	  $this->load->model('User_m');

	  //echo 'tesasdt'; die;
        //Ensure values exist for email and pass, and validate the user's credentials
        if( $email && $pass && $this->User_m->validate_user($email,$pass)) {
        	//echo 'dinesh'; die;

        	$newdata = array(
                   'userType'  => 'admin',
                   'logged_in' => TRUE,
                   'isLoggedIn'=>TRUE
               );

			$this->session->set_userdata($newdata);
			
            // If the user is valid, redirect to the main view
            redirect('/Dashboard');
        } else {
            // Otherwise show the login screen with an error message.
            $this->show_login(true);
        }
	 
	
    }
    function logout() {
      $this->session->sess_destroy();
      $this->index();
    }


}
