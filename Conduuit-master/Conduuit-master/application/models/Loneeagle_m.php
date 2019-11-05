<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Loneeagle_m extends CI_Model {
 
  public function __construct() {
    parent::__construct();
  }
 function user_listing($id=null){
 	if(!empty($id)){
 		
 		$this->db->where('ID',$id);
 	}
 	$this->db->where('USER_STATUS',1);
 	$this->db->select();
 	$res =$this->db->get('dx_users')->result_array();
 	return $res;
  }
  function employer_user_listing($id=null){
    if(!empty($id)){
    $this->db->where('ID',$id);
  }

 	$this->db->where('USER_STATUS',0);
 	$this->db->select();
 	$res =$this->db->get('dx_users')->result_array();
 	return $res;
  }
function user_data_listing($id){
 	

 	//$this->db->select('*');
 	
 	$this->db->where('USER_ID',$id );

 	$res1= $this->db->get('dx_users_props_values')->result_array();

 				$data = array();	
			       

 	foreach( $res1 as $k=>$v ){


 					if($v['PROPERTY_ID'] == 7 )  $data['TYPE_BUSINESS'] = $v['VALUE'];	
 		           elseif($v['PROPERTY_ID'] == 151 ) $data['PHONE_NUMBER'] = $v['VALUE'];
                    elseif($v['PROPERTY_ID'] == 152 ) $data['ACCOUNT_TYPE'] = $v['VALUE'];
                    elseif($v['PROPERTY_ID'] == 154 ) $data['CITY'] = $v['VALUE'];
                    elseif($v['PROPERTY_ID'] == 155 ) $data['ZIPCODE'] = $v['VALUE'];
                    elseif($v['PROPERTY_ID'] == 153 ) $data['STATE'] = $v['VALUE'];
                    elseif($v['PROPERTY_ID'] == 156 ) $data['COMPANY'] = $v['VALUE'];
                    elseif($v['PROPERTY_ID'] == 158 ) $data['CAREER_LEVEL'] = $v['VALUE'];
                    elseif($v['PROPERTY_ID'] == 157 ) $data['EDUCATIONAL_LEVEL'] = $v['VALUE'];
                    elseif($v['PROPERTY_ID'] == 162 ) $data['MOBILE_NUMBER'] = $v['VALUE'];

                   // if($k['PROPERTY_ID'] == 7 )   $data[$i][''] = $k['VALUE'];
                    //if($k['PROPERTY_ID'] == 163 ) $data[$i]['user_status'] = $k['VALUE'];
                   
 			
 			//$data1 = call_user_func_array('array_merge', $data);

                     
                }
                //echo '<pre>';
			    //print_r($data); exit;

 	return $data;

 	//echo '<pre>';
 	//print_r($data); die;

 }
 function advancesearch(){

  print_r($_POST); die;



 }



}