<?php

class Advancesearch extends CI_Controller {

	public function __construct(){
	  parent::__construct();
	  //$this->load->library('javascript');
	  $this->load->library('form_validation');
	  $this->load->library('email');
	  //$this->load->library('session');
	  $this->load->model('Loneeagle_m');
	}
	function index() {
		
       $this->advsearch();
    }
	
    function advsearch(){
    	//echo 'dinesh'; die;

    		$data['data'] = array('loneeagle','employer');
    		//print_r($data); die;
    		$this->load->view('advsearch',$data);

			//$this->load->view('advsearch',$data);


    }

	function search(){
		//print_r($_POST); die;


		$this->Loneeagle_m->advancesearch();



		//
	}

}
?>