<!DOCTYPE html> <?php $page='profile'; ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMDES - Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url();?>assets/lib/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>assets/lib/font-awesome/css/font-awesome.min.css">
  <!-- iEdit -->
  <link rel="stylesheet" href="<?=base_url();?>assets/lib/iEdit-master/src/iEdit.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- header element -->
  <?php include 'el-header.php'; ?>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?php include 'el-sidebar.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        <small>Manage your Profile</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">
          <!-- Coding enthusiast. Someone who love learn something new. especially about web programming and web design. happy to share about knowledge and learn from other. -->
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php if($_SESSION['photo'] != null){echo $_SESSION['photo'];}else{echo base_url().'assets/img/avatar04.png';}?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?=$_SESSION['nama']?></h3>
              <p class="text-muted text-center"><?=$_SESSION['pekerjaan']?></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tentang Saya</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-envelope-o margin-r-5"></i> E-Mail</strong>

              <p class="text-muted">
                <?=$_SESSION['email']?>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Catatan</strong>

              <p><?=$_SESSION['about']?></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">

              <style type="text/css">
                #cropped{
                  box-shadow: 0 1px 6px 0 rgba(0, 0, 0, .4);
                  width: 150px;
                  position: relative;
                  display: block;
                  margin: 0 auto;
                }
                .inp_file{
                  width: .1px;
                  height: .1px;
                  opacity: 0;
                  overflow: hidden;
                  position: relative;
                  z-index: -1;
                }
                .inp_file + label{
                  display: block;
                  margin: 0 auto;
                  width: 50%;
                  padding: 6px 12px;
                  cursor: pointer;
                  transition: .3s all;
                }
              </style>

              <form action="<?=site_url('c_profile/updateDb');?>" method="post">
              <div class="active tab-pane" id="settings">
                <div class="row">
                  <div class="col-sm-6" style="border-right: 1px solid #eee; border-style: thick;">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="nama" value="<?=$_SESSION['nama']?>">
                    </div>
                    <div class="form-group">
                      <label>E-Mail</label>
                      <input type="email" class="form-control" name="email" value="<?=$_SESSION['email']?>">
                    </div>
                    <div class="form-group">
                      <label>Pekerjaan</label>
                      <input type="text" class="form-control" name="pekerjaan" value="<?=$_SESSION['pekerjaan']?>">
                    </div>
                    <div class="form-group">
                      <label>Tentang Saya</label>
                      <textarea class="form-control" name="about" maxlength="200" style="max-width: 100%; max-height: 100%; min-width: 100%; min-height: 150px"><?=$_SESSION['about']?></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6 text-center">
                    <div class="form-group">
                      <label>Profile Photo</label>
                      <img id="cropped" src="<?php if($_SESSION['photo'] != null){echo $_SESSION['photo'];}else{echo base_url().'/assets/img/avatar04.png';} ?>" class="img-responsive">
                    </div>
                    <div class="form-group">
                      <input type="file" id="file_img" name="" class="inp_file">
                      <label for="file_img" class="btn btn-danger"><i class="fa fa-upload"></i> Pilih File ...</label>
                      <input type="text" id="photoTxt" hidden name="photo" value="<?php if($_SESSION['photo'] != null){echo $_SESSION['photo'];}else{echo base_url().'/assets/img/avatar04.png';} ?>">
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Simpan</button>
                  </div>
                </div>
              </div>
              </form>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include 'el-footer.php'; ?>

  <!-- Control Sidebar -->
  <?php include 'el-control-sidebar.php'; ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="<?=base_url();?>assets/lib/jquery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url();?>assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src=".<?=base_url();?>assets/lib/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url();?>assets/lib/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>assets/js/app.min.js"></script>
<!-- iEdit -->
<script src="<?=base_url();?>assets/lib/iEdit-master/src/iEdit.js"></script>
<script src="<?=base_url();?>assets/js/iedit-script.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>assets/js/demo.js"></script>
</body>
</html>
