<!DOCTYPE html> <?php $page='landing1'; $page_title = 'S.I.MDesa - Home Banner';?>
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
        Banner Settings
        <small>Atur banner pada halaman utama</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        $id = array(0, 1, 2);
        $desc_1 = array('Deskripsi 1');
        $desc_2 = array('Deskripsi lebih ...');
        $gambar = array(base_url().'assets/images/section-9.jpg', base_url().'assets/images/section-9.jpg', base_url().'assets/images/section-9.jpg');
        $a = 0;

        if (count($data) != 0) {
          foreach ($data as $row){
            $id[$a] = $row['id'];
            $desc_1[$a] = $row['desc_1'];
            $desc_2[$a] = $row['desc_2'];
            $gambar[$a] = $row['gambar'];
            $a++; 
          }
        }
      ?>
      <div class="row">
      <!-- Default box -->
      <?php for ($i=0; $i < 3; $i++) { ?>
      <div class="">
        <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h2 class="box-title">Preview Banner <?=$i+1?></h2>
            </div>
            <div class="box-body text-center">
              <div class="img-bg" style="background: url('<?php echo $gambar[$i]?>') center center no-repeat;">
                <div class="img-content">
                  <h4><?=$desc_1[$i]?></h4>
                  <h2><?=$desc_2[$i]?></h2>
                  <!-- <a href="javascript:void(0);" class="btn btn-default" style="background-color: transparent; border-color: #fff; color: #fff;">Learn More</a> -->
                </div>
                <div class="mask"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

      <?php if(count($data) != 0 && isset($data)){ ?>
      <form method="post" action="<?=site_url('c_landing/updateBanner');?>">
      <?php }else{ ?>
      <form method="post" action="<?=site_url('c_landing/setBanner');?>">
      <?php } ?>

      <?php for ($i=0; $i < 3; $i++) { ?>
      <input type="text" hidden value="<?php echo $id[$i];?>" name="id<?=$i+1?>">
      <div class="">
        <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h2 class="box-title">Banner <?=$i+1?></h2>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Deskripsi 1</label>
                <input type="text" value="<?=$desc_1[$i]?>" class="form-control" name="bannerDesc1<?=$i+1?>">
              </div>
              <div class="form-group">
                <label>Deskripsi 2</label>
                <textarea class="form-control" name="bannerDesc2<?=$i+1?>"><?=$desc_2[$i]?></textarea>
              </div>
              <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" onchange="toBase64(this, '#bannerGbr64<?=$i+1?>', '#bannerGbr<?=$i+1?>')">
                <input type="text" value="<?=$gambar[$i];?>" hidden id="bannerGbr<?=$i+1;?>" name="bannerGbr<?=$i+1;?>">
              </div>
              <div class="form-group">
                <img src="<?php echo $gambar[$i];?>" id="bannerGbr64<?=$i+1;?>" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

      <div class="col-md-12">
        <div class="">
          <div class="box-body text-center">
            <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i>&nbsp; Simpan</button>
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
