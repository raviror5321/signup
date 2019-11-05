<?php

class Employer extends CI_Controller {

	public function __construct(){
	  parent::__construct();
	  //$this->load->library('javascript');
	  $this->load->library('form_validation');
	  $this->load->library('email');
	  //$this->load->library('session');
	  $this->load->model('Loneeagle_m');
	}
	function index() {
		 
       $this->listing();
    }
	
	function listing(){

		$data['rows']= $this->Loneeagle_m->employer_user_listing();
			//echo '<pre>';
			//print_r($data['rows']); die;

		foreach($data['rows'] as $k=>$v){

			$res = $this->Loneeagle_m->user_data_listing($v['ID']);
			//echo '<pre>';
			//print_r($res); die;
				$data['rows'][$k]['TYPE_BUSINESS'] = $res['TYPE_BUSINESS'];
				$data['rows'][$k]['PHONE_NUMBER'] = $res['PHONE_NUMBER'];
				$data['rows'][$k]['ACCOUNT_TYPE'] = $res['ACCOUNT_TYPE'];
				$data['rows'][$k]['STATE'] = $res['STATE'];
				$data['rows'][$k]['CITY'] = $res['CITY'];
				$data['rows'][$k]['ZIPCODE'] = $res['ZIPCODE'];
				$data['rows'][$k]['COMPANY'] = $res['COMPANY'];
				$data['rows'][$k]['EDUCATIONAL_LEVEL'] = $res['EDUCATIONAL_LEVEL'];
				$data['rows'][$k]['CAREER_LEVEL'] = $res['CAREER_LEVEL'];
				$data['rows'][$k]['MOBILE_NUMBER'] = $res['MOBILE_NUMBER'];
				//$data['rows'][$k]['user_status'] = $res['user_status'];
		}
			//echo '<pre>';
				//print_r($data['rows']); die;

		 $this->load->view('employer',$data);
	}

	function leadform($id=null){

	$data['rows']= $this->Loneeagle_m->employer_user_listing($id);
	$res = $this->Loneeagle_m->user_data_listing($id);

	$final['data'] = array_merge($data['rows'][0],$res);

	//echo '<pre>';
	//print_r($final); die;
	$this->load->view('employerleadform',$final);
}
}
?>