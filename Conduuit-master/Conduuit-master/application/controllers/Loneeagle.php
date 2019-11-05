<?php

class Loneeagle extends CI_Controller {

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

		$data['rows']= $this->Loneeagle_m->user_listing();

		
		foreach($data['rows'] as $k=>$v){

			$res = $this->Loneeagle_m->user_data_listing($v['ID']);
				$data['rows'][$k]['TYPE_BUSINESS'] = $res['TYPE_BUSINESS'];
				$data['rows'][$k]['PHONE_NUMBER'] = $res['PHONE_NUMBER'];
				$data['rows'][$k]['ACCOUNT_TYPE'] = $res['ACCOUNT_TYPE'];
				$data['rows'][$k]['STATE'] = $res['STATE'];
				$data['rows'][$k]['CITY'] = $res['CITY'];
				$data['rows'][$k]['ZIPCODE'] = $res['ZIPCODE'];
				$data['rows'][$k]['COMPANY'] = $res['COMPANY'];
				$data['rows'][$k]['EDUCATIONAL_LEVEL'] = $res['EDUCATIONAL_LEVEL'];
				$data['rows'][$k]['CAREER_LEVEL'] = $res['CAREER_LEVEL'];
				//$data['rows'][$k]['user_status'] = $res['user_status'];
		
	}

		 $this->load->view('loneeagle',$data);
	}

function leadform($id= null){

	$data['rows']= $this->Loneeagle_m->user_listing($id);
	$res = $this->Loneeagle_m->user_data_listing($id);

	$final['data'] = array_merge($data['rows'][0],$res);

	//echo '<pre>';
	//print_r($final	); die;
	$this->load->view('loneleadform',$final);
}

}
?>