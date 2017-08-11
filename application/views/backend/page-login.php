<!DOCTYPE html> <?php $page_title = 'S.I.MDesa - Login';?>
<html>
<head>
  <?php include 'head-tag.php'; ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>S.I.M</b>Desa</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="<?php if(isset($_SESSION['wrong_msg'])) echo 'border: 1px solid #f56954;'; ?>">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?=site_url('c_auth/getLogin');?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username" autofocus required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

    <div class="form-group">
      <a href="#">I forgot my password</a><br>
      <a href="<?=site_url('c_backend/daftar');?>" class="text-center">Register a new membership</a>
    </div>

  </div><br>
  <?php if(isset($_SESSION['wrong_msg'])){ ?>
  <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4 style=""><i class="icon fa fa-ban"></i> Whoops!</h4>
    <?php echo $_SESSION['wrong_msg']; ?>
  </div>
  <?php } ?>
  
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="<?=base_url();?>assets/lib/jquery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url();?>assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_url();?>assets/lib/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
