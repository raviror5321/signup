<!DOCTYPE html>
<?php //print_r($GLOBALS['TYPE_OF_BUSINESS']); die; ?>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>Advance Search-</title>

<?php $this->load->view('head'); ?>

</head>

<body>

<?php $this->load->view('header'); ?>

<div class="main-container container-fluid">

  <?php $this->load->view('leftside'); ?>

  <div class="main-content">

    <div class="page-content">

      <div class="page-header position-relative">

        <h1> Advance Search <small> <i class="icon-double-angle-right"></i> <?php echo $header['title'];?> </small></h1>

      </div>


      <!--/.page-header-->

      <div class="row-fluid">

        <!--PAGE CONTENT BEGINS-->

        <!--/row-->

        <form id="buyer_add" action="Advancesearch/search/" method="get">

        <?php //extract($view_data);?>

        <?php //$action = (isset($id) && !empty($id)) ? 'Employer/addsetup/'.$id : 'Employer/addsetup/';?>
        <?php //$action = 'Advancesearch/search/';?>

        <?php //echo form_open( $action ); ?>

        <?php //echo validation_errors(); extract($view_data);?>

          <div class="widget-header">

            <h4>Choose Type</h4>

          </div>

          <div class="widget-body clearfix">

            <div class="widget-main">

              <div class="row-fluid">

               <div class="span6">

                  <label>Choose Type</label>

                 <select class="span12" name="choose">
                    <option value="">Select</option>
                    <option value="0">Employer</option>
                    <option value="1">LoneEagle</option>

                  </select>

                </div>
              </div>
           </div>
        </div>

        

          <div class="widget-header">

            <h4>Information</h4>

          </div>

          <div class="widget-body clearfix">

            <div class="widget-main">

              <div class="row-fluid">

                <div class="span6">

                  <label>First Name</label>

                  <input name="first_name" value="<?=$name;?>" maxlength="128" class="span12" type="text"  > 

                </div>
                <div class="span6">

                  <label>Last Name</label>

                  <input name="last_name" value="<?=$name;?>" maxlength="128" class="span12" type="text"  > 

                </div>
                </div>
                 <div class="row-fluid">
                 
                 

                <div class="span6">

                  <label>Email</label>

                  <input name="email" value="<?=$tier_price;?>" class="span12" type="text" >

                </div>

                <div class="span6">

                  <label>Username</label>

                  <input name="login"  value="<?=$ping_url_test;?>" class="span12" type="text" >

                </div>
                </div>
                 <div class="row-fluid">
                <div class="span6">

                  <label>Type of Business</label>

                 <select class="span12" name="type_of_business">
                    <option value="">Select</option>

                    <?php foreach($GLOBALS['TYPE_OF_BUSINESS'] as  $v){

                  $selected = ($v == $status) ? ' selected' : '';

                echo '<option value="'.$v.'" '.$selected.'>'.$v.'</option>';

              }?>

                  </select>

                </div>
                 <div class="span6">

                  <label>Phone Number </label>

                  <input name="phone_number"  value="<?=$ping_url_live;?>"  class="span12" type="text" >

                </div>

              </div>
              <div class="row-fluid">
                <div class="span6">

                  <label>Choose Your Type </label>

                 <select class="span12" name="Choose_your_type">
                    <option value="">Select</option>

                    <?php foreach($GLOBALS['CHOOSE_YOUR_TYPE'] as  $v){

                  $selected = ($v == $status) ? ' selected' : '';

                echo '<option value="'.$v.'" '.$selected.'>'.$v.'</option>';

              }?>

                  </select>

                </div>

                <div class="span6">

                  <label>State </label>

                  <select class="span12" name="state">
                    <option value="">Select</option>

                    <?php foreach($GLOBALS['STATE'] as  $v){

                  $selected = ($v == $status) ? ' selected' : '';

                echo '<option value="'.$v.'" '.$selected.'>'.$v.'</option>';

              }?>

                  </select>

                </div>
                </div>
                
                 <div class="row-fluid">
                 

                <div class="span6">

                  <label>City </label>

                  <input name="city" value="<?=$parameter3;?>" class="span12" type="text" >

                </div>
                <div class="span6">

                  <label>Zip Code</label>

                  <input name="zip" value="<?=$parameter3;?>" class="span12" type="text" >

                </div>

              </div>

             

                <div class="row-fluid"> 
               

                <div class="span6">

                  <label>Company </label>

                  <input name="company" value="<?=$timeout;?>" class="span12" type="text" >



                  </select>

                </div>

                <div class="span6">

                  <label>Current Career Level </label>

                  <select class="span12" name="CC_level">
                    <option value="">Select</option>

                    <?php foreach($GLOBALS['CURRENT_CAREER_LEVEL'] as  $v){

                  $selected = ($v == $status) ? ' selected' : '';

                echo '<option value="'.$v.'" '.$selected.'>'.$v.'</option>';

              }?>

                  </select>

                </div>
                </div>
                 <div class="row-fluid"> 
               

                <div class="span6">

                  <label>Education Level  </label>
                   <select class="span12" name="educational_level">
                    <option value="">Select</option>

                    <?php foreach($GLOBALS['EDUCATIONAL_LEVEL'] as  $v){

                  $selected = ($v == $status) ? ' selected' : '';

                echo '<option value="'.$v.'" '.$selected.'>'.$v.'</option>';

              }?>

                  </select>

                </div>
                <div class="span6">

                  <label>Mobile Number </label>

                  <input name="mobile_number" value="<?=$timeout;?>" class="span12" type="text" >
                  </select>

                </div>

                
                </div>

              

       </div>

          </div>

          <div class="form-actions">

            <button class="btn btn-info" type="submit"> <i class="icon-ok bigger-110"></i> Search </button>

                 

            <button class="btn cancel" type="button" onClick=""><i class="icon-undo bigger-110"></i> cancel </button>

          </div>

          </form>

          <!--PAGE CONTENT ENDS-->

          <!--/.span-->

        </div>

        <!--/.row-fluid-->

      </div>

      <!--/.page-content-->

      <!--/#ace-settings-container-->

    </div>

    <!--/.main-content-->

  </div>

<!--/.main-container-->

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse"> <i class="icon-double-angle-up icon-only bigger-110"></i> </a>

<?php $this->load->view('footer'); ?>

<!--inline scripts related to this page-->

<script type="text/javascript">

	$(function() {

		$("#smtpsetup_add").validate({

			rules: {

				protocol: {required: true},

				smtphost: {required: true},
				smtpport: {required: true},

				smtpuser: {required: true,	minlength: 3},

				smtppass: {required: true,	minlength: 2},

				charset: {required: true,	minlength: 2},
				mailtype: {required: true,	minlength: 2},
				newline: {required: true,	minlength: 2},
				smtpFooter: {required: true,	minlength: 2},
				
				

				//confirmPassword: {	equalTo: "#password"},

				//email: {required: true,	email: true},

				//phone: {required: true,	digits: true,	minlength: 10},

				//company: {required: true,	minlength: 3},

				//mode: {required: true},

				//status: {required: true}

			}

		});

	})

</script>

</body>

</html>

