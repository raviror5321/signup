  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>LoneEagle - </title>
<?php $this->load->view('head'); ?>
</head>
<body>
<?php $this->load->view('header'); ?>

<div class="main-container container-fluid"> 
  <?php $this->load->view('leftside'); ?>

  <div class="main-content">
    
    <div class="page-content">
      <div class="page-header position-relative">
        <h1> LoneEagle <small> <i class="icon-double-angle-right"></i> Listing </small>  </h1>
      </div>
      <!--/.page-header-->
          <!--/row-->
          <div class="row-fluid">
            <table id="sample-table-2" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email Address</th>
                  <th>Username</th>
                 <!-- <th>Type of Business</th>-->
                  <th>Phone Number</th>
                 <!-- <th>Account Type</th>
                  <th>City</th>
                  <th>Zip</th>
                  <th>State</th>
                  <th>Company</th>
                  <th>Current Career Level</th>
                  <th>Education Level</th>
                  <th>Registration Date</th>
                  <th>Active / Inactive </th>  -->                
                </tr>
              </thead>            
              <tbody>
              <?php //echo '<pre>';
                 //print_r($rows); die; ?>
              
        <?php  foreach($rows as $v){ //print_r($v);?>
                <tr>                 
                  <td><?php echo $v['FIRST_NAME']; ?></td>
                  <td><?php echo $v['LAST_NAME']; ?></td>
                  <td><?php echo $v['EMAIL']; ?></td>
                  <td><?php echo $v['LOGIN']; ?></td>
                  <!--<td><?php //echo $v['TYPE_BUSINESS']; ?></td>-->
                  <td><?php echo $v['PHONE_NUMBER']; ?></td>
                  <!--<td><?php //echo $v['ACCOUNT_TYPE']; ?></td>                  
                  <td><?php //echo $v['CITY']; ?></td>
                  <td><?php //echo $v['ZIPCODE']; ?></td>
                  <td><?php //echo $v['STATE']; ?></td>
                  <td><?php //echo $v['COMPANY']; ?></td>
                  <td><?php //echo $v['CAREER_LEVEL']; ?></td>
                  <td><?php //echo $v['EDUCATIONAL_LEVEL']; ?></td>
                  <td><?php  ?></td>
                  <td><?php  ?></td>-->
                  
                 
                
                  <td>
          <a href="<?php echo base_url(); ?>Loneeagle/leadform/<?php echo $v['ID']; ?>" class="tooltip-info blue" data-rel="tooltip" title="Edit lead type"><i class="icon-pencil bigger-130"></i></a> </td>
                </tr>
                <?php }?>
                
                
              </tbody>
            </table>
          </div>
          
          <!--PAGE CONTENT ENDS-->
        </div>
        
        
        
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
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.bootstrap.js"></script>
<!--inline scripts related to this page-->
<script type="text/javascript">
      $(function() {
        var oTable1 = $('#sample-table-2').dataTable();
        $('.icon-trash').on('click' , function(){
          return confirm("Are you sure, you want to delete!");
        });
        $('table th input:checkbox').on('click' , function(){
          var that = this;
          $(this).closest('table').find('tr > td:first-child input:checkbox')
          .each(function(){
            this.checked = that.checked;
            $(this).closest('tr').toggleClass('selected');
          });
            
        });
      
      
        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
          var $source = $(source);
          var $parent = $source.closest('table')
          var off1 = $parent.offset();
          var w1 = $parent.width();
      
          var off2 = $source.offset();
          var w2 = $source.width();
      
          if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
          return 'left';
        }
      })
    </script>
</body>
</html>
