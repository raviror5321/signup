 <a class="menu-toggler" id="menu-toggler" href="#"> <span class="menu-text"></span> </a>
<div class="sidebar" id="sidebar">  
  <!--#sidebar-shortcuts-->
  <ul class="nav nav-list">
    <li class="active"> <a href="<?php echo base_url(); ?>dashboard"> <i class="icon-dashboard"></i> <span class="menu-text"> Dashboard  </span> </a> </li>


	
      <li <?php if($this->router->class=='user') echo 'class="active open"'?>> <a href="<?php echo base_url(); ?>Loneeagle" class="dropdown-toggle"> <i class="icon-group"></i> <span class="menu-text">LoneEagle</span> <b class="arrow icon-angle-down"></b> </a>
        
      </li>

    
    <li <?php if($this->router->class=='callcenter') echo 'class="active open"'?>> <a href="<?php echo base_url(); ?>Employer" class="dropdown-toggle"> <i class="icon-exchange"></i> <span class="menu-text"> Employer</span> <b class="arrow icon-angle-down"></b> </a>
     
    </li>
    
    
    
        <li <?php if($this->router->class=='agents') echo 'class="active open"'?>> <a href="<?php echo base_url(); ?>Advancesearch" class="dropdown-toggle"> <i class="icon-eye-open"></i> <span class="menu-text">Advance Search</span> <b class="arrow icon-angle-down"></b> </a>
      
    </li>
    

</div>