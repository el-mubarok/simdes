<!DOCTYPE html> <?php $page='home'; $page_title = 'S.I.MDesa - Home';?>
<html>
<head>
  <?php include 'head-tag.php'; ?>
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

    <!-- Main content -->
    <section class="content">

      <div class="jumbotron text-center">
        <h1>Hi, <?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} ?>!</h1>
        <p>Selamat Datang Di Halaman Admin SIMDESA <br><small class="text-muted">Ini Adalah Halaman Awal</small></p>
        <p><a class="btn btn-default btn-lg" href="#" role="button"> <i class="fa fa-lightbulb-o"></i> Tutorial</a></p>
      </div>

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
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>assets/js/demo.js"></script>
</body>
</html>
