<?php
  // defines page name for navbar active/non-active
  // and give 'active' class for navbar item
  $pages = array('gallery', 'blog', 'landing1', 'landing2', 'profile', 'home', 'about');
  $home='home'; $blog='blog'; $landing='landing'; $landing1='landing1'; $landing2='landing2'; $gallery='gallery'; $profile='profile'; $about='about';

  for ($i=0; $i < count($pages); $i++) {
    if ($page == $pages[$i]) {
      if ($pages[$i] == $home) {$home='active';}
      elseif ($pages[$i] == $blog) {$blog='active';}
      elseif ($pages[$i] == $gallery) {$gallery='active';}
      elseif ($pages[$i] == $profile) {$profile='active';}
      elseif ($pages[$i] == $about) {$about='active';}
      elseif ($pages[$i] == $landing1) {
        $landing='active';
        $landing1='active';
      }
      elseif ($pages[$i] == $landing2) {
        $landing='active';
        $landing2='active';
      }
      else{}
    }
  }
?>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php if($_SESSION['photo'] != null){echo $_SESSION['photo'];}else{echo base_url('assets/img/avatar04.png');} ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">NAVIGASI</li>
      <li class="<?=$home;?>">
        <a href="<?=site_url('c_backend/page_home');?>">
          <i class="fa fa-home"></i> <span>Home</span>
        </a>
      </li>
      <li class="treeview <?=$landing?>">
        <a href="javascript:void(0);">
          <i class="fa fa-fighter-jet"></i> <span>Landing Page</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="<?=$landing1?>"><a href="<?=site_url('c_backend/page_landing01');?>"><i class="fa fa-circle-o"></i> Top Banner</a></li>
          <li class="<?=$landing2?>"><a href="<?=site_url('c_backend/page_landing02');?>"><i class="fa fa-circle-o"></i> Add Event <span class="label label-danger pull-right"><?=$eventCount;?></span></a></li>
        </ul>
      </li>
      <li class="<?=$gallery?>">
        <a href="<?=site_url('c_backend/page_gallery');?>">
          <i class="fa fa-picture-o"></i> <span>Gallery Page</span>
        </a>
      </li>
      <li class="<?=$blog?>">
        <a href="<?=site_url('c_backend/page_blog');?>">
          <i class="fa fa-pencil-square"></i> <span>Blog Page</span> <span class="label label-danger pull-right"><?=$blogCount?></span>
        </a>
      </li>
      <li class="<?=$profile?>">
        <a href="<?=site_url('c_backend/page_profile');?>">
          <i class="fa fa-info-circle"></i> <span>Profile Page</span>
        </a>
      </li>
      <li class="<?=$about?>">
        <a href="<?=site_url('c_backend/page_About');?>">
          <i class="fa fa-user"></i> <span>About Page</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>