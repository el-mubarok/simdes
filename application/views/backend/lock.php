<!DOCTYPE html> <?php $page_title = 'S.I.MDesa - Locked';?>
<html>
<head>
  <?php include 'head-tag.php'; ?>
</head>
<body class="hold-transition lockscreen" style="<?php if(isset($_SESSION['wrong'])){echo "background-color: #f2dede";} ?>">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="login-logo">
    <a href=""><b>S.I.M</b>Desa</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name"><?=$_SESSION['username'];?></div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="<?=$_SESSION['photo']; ?>" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" method="post" action="<?=site_url('c_auth/getLogin');?>">
      <div class="input-group">
        <input type="password" name="password" class="form-control" placeholder="password">
        <input type="text" name="username" hidden value="<?=$_SESSION['username'];?>">

        <div class="input-group-btn">
          <button type="button" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->
  </div>
  <!-- /.lockscreen-item -->

  <!-- <div class="alert alert-danger alert-dismissible" style="margin-top: 15px;">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <span style=""><i class="icon fa fa-ban"></i> Whoops!</span>
  </div> -->

  <p class="text-danger text-center">Whoops something wrong ...</p>
  
  <div class="help-block text-center">
    Enter your password to retrieve your session
  </div>
  <div class="text-center">
    <a href="login.html">Or sign in as a different user</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; <?php echo date('Y'); ?> <strong><a href="http://almsaeedstudio.com">SIM Desa</a>.</strong> <br> All rights
    reserved.
  </div>
</div>
<!-- /.center -->

<!-- jQuery 2.2.0 -->
<script src="<?=base_url();?>assets/lib/jquery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url();?>assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
