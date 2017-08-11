<!DOCTYPE html> <?php $page='landing2'; $page_title = 'S.I.MDesa - Add Event';?>
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Event
        <small>Buat dan hapus event</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">

        <div class="col-md-8">
          <?php 
            if (isset($_SESSION['pesan']) && $_SESSION['pesan'] !== null) {
          ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4 style="margin: 0;"><i class="icon fa fa-check"></i> <?php echo $_SESSION['pesan']; ?></h4>
          </div>
          <?php
            }
          ?>
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Event Lists</h3>
            </div>
            <div class="box-body text-center">
              <?php 
                foreach ($data as $row) {
              ?>
              <div class="col-md-4">
                <div class="table-wrapper">
                  <div class="callout callout-danger" style="background: url('<?=$row['gambar']?>') center center no-repeat;">
                    <a title="Hapus" href="<?=site_url('c_landing/delete/').$row['id'];?>" class="close" style="text-decoration: none; padding-top: 10px; padding-right: 10px; position: absolute; right: 0; top: 0; z-index: 5;">&times;</a>
                    <h4><?=$row['nama_acara']?></h4>
                    <p><?=$row['desc_acara']?></p>
                  <div class="mask"></div>
                  </div>
                </div>
              </div>
              <?php
                }
              ?>              
            </div>
          </div>
        </div>

        <form method="post" action="<?=site_url('c_landing/addEvent');?>">
        <div class="col-md-4">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Add Event</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Nama Event</label>
                <input type="text" class="form-control" name="eventName" maxlength="100" required>
              </div>
              <div class="form-group">
                <label>Deskripsi Event</label>
                <textarea class="form-control" name="eventDesc" maxlength="150" required></textarea>
              </div>
              <div class="form-group">
                <label>Gambar Event</label>
                <input type="file" class="form-control" onchange="toBase64(this, '#eventGbr64', '#eventGbr')">
                <input type="text" hidden id="eventGbr" name="eventGbr">
              </div>
              <div class="form-group">
                <img id="eventGbr64" class="img-responsive">
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-danger"><i class="fa fa-plus"></i>&nbsp; Tambah</button>
            </div>
          </div>
        </div>
        </form>

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
