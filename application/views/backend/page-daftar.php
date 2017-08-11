<!DOCTYPE html>
<html>
<head>
  <?php $page_title = 'S.I.MDesa - Daftar Sebagai Admin'; include 'head-tag.php'; ?>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>S.I.M</b>Desa</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="<?=site_url('c_auth/getDaftar');?>" method="post">
      <div class="form-group has-feedback ">
        <input type="text" class="form-control text-center" placeholder="Full name" name="full_name" autofocus required>
        <span class="glyphicon  form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" minlength="6" name="username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="pass" class="form-control" minlength="8" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="conf_pass" class="form-control" placeholder="Retype password" onkeyup="checkPass()" required>
        <span id="icon_check" class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label id="asd">
              <input type="checkbox" id="verifikasi" onchange="console.log('checked')"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" id="register" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="<?=site_url('c_backend/login');?>" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

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

  var reg = $('#register');
  var verify = $('#verifikasi');

  reg.attr('disabled', '');
  verify.attr('disabled', '');

  verify.on('ifChecked', function(e) {
    reg.removeAttr('disabled');
  });
  verify.on('ifUnchecked', function(e) {
    reg.attr('disabled', '');
  });

  function checkPass(){
    var chkbx = $('.icheckbox_square-blue');
    var iconchk = $('#icon_check');
    var verify = $('#verifikasi');

    if ($('#conf_pass').focus(true) && $('#conf_pass').val() == "") {
      iconchk.attr('class', 'glyphicon glyphicon-log-in form-control-feedback');
      verify.attr('disabled', '');
      chkbx.addClass('disabled');
      chkbx.removeClass('checked');
    }else{
      if ($('#conf_pass').val() == $('#pass').val()) {
        iconchk.attr('class', 'glyphicon glyphicon-ok form-control-feedback');
        verify.removeAttr('disabled');
        chkbx.removeClass('disabled');
      }else{
        iconchk.attr('class', 'glyphicon glyphicon-remove form-control-feedback');
        verify.attr('disabled', '');
        chkbx.addClass('disabled');
        chkbx.removeClass('checked');
      }
    }
  }
</script>
</body>
</html>
