<!DOCTYPE html> <?php $page='gallery'; $page_title = 'S.I.MDesa - Add Gallery';?>
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
        Blank page
        <small>it all starts here</small>
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
          <div class="box box-primary">
            <div class="box-header with-border">
              <h2 class="box-title">Preview Banner</h2>
            </div>
        <?php
          $gambar = base_url().'assets/images/section-8.jpg';
          $desc1 = 'Deskripsi 1';
          $desc2 = 'Long Deskripsi 2';

          if (isset($banner)) {
            $gambar = $banner->gambar;
            $desc1 = $banner->desc_1;
            $desc2 = $banner->desc_2;
          }
        ?>
            <div class="box-body text-center">
              <div class="img-bg" style="background: url('<?php echo $gambar;?>') center center no-repeat;">
                <div class="img-content">
                  <h1><?php echo $desc1;?></h1>
                  <h4><i><?php echo $desc2;?></i></h4>
                </div>
                <div class="mask"></div>
              </div>
            </div>
          </div>
        </div>

        <?php if(count($banner) != 0 && isset($banner)){ ?>
        <form method="post" action="<?=site_url('c_gallery/updateBanner');?>">
        <?php }else{ ?>
        <form method="post" action="<?=site_url('c_gallery/setBanner');?>">
        <?php } ?>
        <input type="text" hidden name="page" value="gallery">
        
        <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Banner</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Deskripsi 1</label>
                <input type="text" class="form-control" name="bannerDesc1" value="<?php echo $desc1;?>">
              </div>
              <div class="form-group">
                <label>Deskripsi 2</label>
                <textarea class="form-control" name="bannerDesc2" maxlength="200"><?php echo $desc2;?></textarea>
              </div>
              <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" onchange="toBase64(this, '#bannerGbr64', '#bannerGbr')">
                <input type="text" hidden id="bannerGbr" name="bannerGbr" value="<?php echo $gambar;?>">
              </div>
              <div class="form-group">
                <img id="bannerGbr64" class="img-responsive" src="<?php echo $gambar;?>">
              </div>
            </div>
            <div class="box-footer">
              <?php if (count($banner) != 0) { ?>
              <button class="btn btn-danger"><i class="fa fa-save"></i>&nbsp; Simpan</button>
              <?php }else{ ?>
              <button class="btn btn-danger"><i class="fa fa-plus"></i>&nbsp; Buat</button>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      </form>

      <div class="row">
        <div class="col-md-8">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Preview Gallery</h3>
            </div>
            <div class="box-body">
              
              <?php 
                foreach ($data as $row) {
              ?>
              <div class="col-md-4" style="margin-bottom: 30px;">
                <div class="img-bg" style="background: url('<?=$row['gambar']?>') center center no-repeat; height: 200px;">
                  <div class="img-content">
                    <a title="Hapus" href="<?=site_url('c_gallery/delete/').$row['id'];?>" class="close" style="padding-top: 10px; padding-right: 10px; position: absolute; right: 0; top: 0; z-index: 5;">&times;</a>
                    <h4><?=$row['deskripsi']?></h4>
                  </div>
                  <div class="mask"></div>
                </div>
              </div>
              <?php
                }
              ?>

            </div>
          </div>
        </div>

        <form method="post" action="<?=site_url('c_gallery/addGallery');?>">
        <div class="col-md-4">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Gallery</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Gambar/Foto</label>
                <input type="file" class="form-control" onchange="toBase64(this, '#galleryGbr64', '#galleryGbr')">
                <input type="text" id="galleryGbr" hidden name="galleryGbr">
              </div>
              <div class="form-group">
                <img id="galleryGbr64" class="img-responsive">
              </div>
              <div class="form-group">
                <label>Keterangan Gambar/Foto</label>
                <input type="text" class="form-control" name="imgDesc">
              </div>
            </div>
            <div class="box-footer">
              <button class="btn btn-danger"><i class="fa fa-paper-plane"></i>&nbsp; Simpan</button>
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
