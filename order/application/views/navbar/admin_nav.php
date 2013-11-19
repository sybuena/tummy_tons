<div class="navbar navbar-top navbar-inverse">
  <div class="navbar-inner">
    <div class="container-fluid">

      <a class="brand" href="#">Tummy Tons</a>    
      <!-- the new toggle buttons -->

      <ul class="nav pull-right">
        <li class="toggle-primary-sidebar hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-primary"><button type="button" class="btn btn-navbar"><i class="icon-th-list"></i></button></li>

        <li class="hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-top"><button type="button" class="btn btn-navbar"><i class="icon-align-justify"></i></button></li>

      </ul>

          <div class="nav-collapse nav-collapse-top collapse">

            <ul class="nav full pull-right">
              <li class="dropdown user-avatar">

                <!-- the dropdown has a custom user-avatar class, this is the small avatar with the badge -->

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span>
                    <img class="menu-avatar" src="<?php echo base_url().'assets/images/avatar1.jpg'; ?>" />
                    <span><?php //echo $firstname; ?> <i class="icon-caret-down"></i></span>
                    <span class="badge badge-dark-red">5</span>
                  </span>
                </a>

                <ul class="dropdown-menu">

                  <!-- the first element is the one with the big avatar, add a with-image class to it -->
                  <li class="with-image">
                    <div class="avatar">
                      <img src="<?php echo base_url().'assets/images/avatar1.jpg'; ?>" />
                    </div>
                    <span><?php //echo $firstname.' '.$surname; ?></span>
                  </li>

                  <li class="divider"></li>

                  <li><a href="#"><i class="icon-user"></i> <span>Profile</span></a></li>
                  <li><a href="#"><i class="icon-cog"></i> <span>History</span></a></li>
                  
                  <li><a href="<?php echo base_url().'admin/logout';?>"><i class="icon-off"></i> <span>Logout</span></a></li>
                </ul>
              </li>
            </ul>

            <form class="navbar-search pull-right">
              <input type="text" class="search-query animated" placeholder="Search">
              <i class="icon-search"></i>
            </form>

           
          </div>
      

    </div>
  </div>
</div><div class="sidebar-background">
  <div class="primary-sidebar-background"></div>
</div>

<div class="primary-sidebar">

  <!-- Main nav -->
  <ul class="nav nav-collapse collapse nav-collapse-primary">

    <li class="active">
      <span class="glow"></span>
      <a href="<?php echo base_url().'admin'; ?>">
          <i class="icon-dashboard icon-2x"></i>
          <span>Dashboard</span>
      </a>
    </li>
	    	
    <li class="dark-nav ">

      <span class="glow"></span>
      <a class="accordion-toggle collapsed " data-toggle="collapse" href="#MB8CPSHAKP">
          <i class="icon-group icon-2x"></i>
            <span>
              Users
              <i class="icon-caret-down"></i>
            </span>

      </a>

      <ul id="MB8CPSHAKP" class="collapse ">
        
            <li class="">
              <a href="<?php echo base_url().'admin/users'; ?>">
                  <i class="icon-user"></i> Members
              </a>
            </li>
            
            <li class="">
              <a href="../other/wizard.html">
                  <i class="icon-user"></i> Contacts
              </a>
            </li>
        
      </ul>

    </li>
            
    <li class="">
      <span class="glow"></span>
      <a href="<?php echo base_url().'admin/products'; ?>">
          <i class="icon-bar-chart icon-2x"></i>
          <span>Products</span>
      </a>
    </li>
    
    <li class="">
      <span class="glow"></span>
      <a href="<?php echo base_url().'admin/orders'; ?>">
          <i class="icon-bar-chart icon-2x"></i>
          <span>Orders</span>
      </a>
    </li>
	
  </ul>

  <?php /*<div class="hidden-tablet hidden-phone">
    <div class="text-center" style="margin-top: 60px">
      <div class="easy-pie-chart-percent" style="display: inline-block" data-percent="89"><span>89%</span></div>
      <div style="padding-top: 20px"><b>CPU Usage</b></div>
    </div>

    <hr class="divider" style="margin-top: 60px">

    <div class="sparkline-box side">

      <div class="sparkline-row">
        <h4 class="gray"><span>Orders</span> 847</h4>
        <div class="sparkline big" data-color="gray"><!--25,3,28,4,15,4,17,25,15,12,10,8--></div>
      </div>

      <hr class="divider">
      <div class="sparkline-row">
        <h4 class="dark-green"><span>Income</span> $43.330</h4>
        <div class="sparkline big" data-color="darkGreen"><!--5,10,24,20,27,21,24,9,12,14,26,23--></div>
      </div>

      <hr class="divider">
      <div class="sparkline-row">
        <h4 class="blue"><span>Reviews</span> 223</h4>
        <div class="sparkline big" data-color="blue"><!--15,12,11,14,6,24,17,4,20,29,9,11--></div>
      </div>

      <hr class="divider">
    </div>
  </div>*/ ?>


</div>