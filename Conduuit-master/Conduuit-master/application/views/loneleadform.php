<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>User Info -</title>

<?php $this->load->view('head'); ?>

</head>

<body>

<?php $this->load->view('header'); ?>

<div class="main-container container-fluid">

  <?php $this->load->view('leftside'); ?>
  <
  <div class="main-content">

    <div class="page-content">

      <div class="page-header position-relative">

        <h1> LoneEagle   Info <small> <i class="icon-double-angle-right"></i> <?php echo $header['title'];?> </small></h1>

      </div>

      <!--/.page-header-->

      <div class="row-fluid">

        <!--PAGE CONTENT BEGINS-->

        <!--/row-->

          <div class="widget-header">

            <h4>Information</h4>

          </div>
          <?php //print_r($data) ;  die;?>

          <div class="widget-body clearfix">

            <div class="widget-main">

              <div class="row-fluid"> 

                <div class="span6">

                  <label>First Name</label>

                  <input  value="<?=$data['FIRST_NAME'] ;?>" maxlength="128" class="span12" type="text"  > 

                </div>
                <div class="span6">

                  <label>Last Name</label>

                  <input  value="<?=$data['LAST_NAME'] ;?>" maxlength="128" class="span12" type="text"  > 

                </div>
                </div>
                 <div class="row-fluid">

                <div class="span6">

                  <label>EmailAddress</label>

                  <input value="<?=$data['EMAIL'] ;?>" class="span12" type="text">

                </div>
                <div class="span6">

                  <label>Username </label>

                  <input  value="<?=$data['LOGIN'] ;?>" class="span12" type="text" >

                </div>
                </div>
                
                 <div class="row-fluid">
                

                <div class="span6">

                  <label>Type of Business</label>

                  <input  value="<?=$data['TYPE_BUSINESS'] ;?>"  class="span12" type="text" >

                </div>
                 <div class="span6">

                  <label>Phone Number</label>

                  <input  value="<?=$data['PHONE_NUMBER'] ;?>"  class="span12" type="text" >

                </div>

              </div>

              <div class="row-fluid">
                <div class="span6">

                  <label>Account Type</label>

                  <input   value="<?=$data['ACCOUNT_TYPE'] ;?>" class="span12" type="text">

                </div>

                <div class="span6">

                  <label>City</label>

                  <input  value="<?=$data['CITY'] ;?>" class="span12" type="text" >

                </div>
                </div>
                
                 <div class="row-fluid">
                 

                <div class="span6">

                  <label>Zip</label>

                  <input value="<?=$data['ZIPCODE'] ;?>" class="span12" type="text" >

                </div>
                <div class="span6">

                  <label>State</label>

                  <input  value="<?=$data['STATE'] ;?>" class="span12" type="text" >

                </div>

              </div>

                <div class="row-fluid">                

                <div class="span6">

                  <label>Company</label>

                  <input  value="<?=$data['COMPANY'] ;?>" class="span12" type="text" >

                </div>

                <div class="span6">

                  <label>Current Career Level</label>

                  <input  value="<?=$data['CAREER_LEVEL'] ;?>" class="span12" type="text" >

                </div>
                </div>
                <div class="row-fluid">                

                <div class="span6">

                  <label>Education Level</label>

                  <input  value="<?=$data['EDUCATIONAL_LEVEL'] ;?>" class="span12" type="text" >

                </div>

                <div class="span6">

                  <label>Registration Date</label>

                  <input  value="" class="span12" type="text" >

                </div>
                </div>
                <div class="row-fluid">                

                <div class="span6">

                  <label>User Status</label>

                  <input value="" class="span12" type="text">

                </div>

                
                </div>

       </div>

          </div>

          <div class="form-actions">

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

