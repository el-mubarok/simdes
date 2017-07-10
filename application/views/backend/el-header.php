<header class="main-header">
  <!-- Logo -->
  <a href="" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>S</b>D</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>SIM</b>DESA</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-transparent navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php if($_SESSION['photo'] != null){echo $_SESSION['photo'];}else{echo base_url('assets/img/avatar04.png');} ?>" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php if($_SESSION['photo'] != null){echo $_SESSION['photo'];}else{echo base_url('assets/img/avatar04.png');} ?>" class="img-circle" alt="User Image">

              <p>
                <?php if(isset($_SESSION['username'])){echo $_SESSION['nama'];} ?>
                <small>Admin</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?=site_url('c_backend/page_profile');?>" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="<?=site_url('c_auth/logOut');?>" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>