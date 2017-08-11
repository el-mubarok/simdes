<!DOCTYPE html> <?php $page='about'; $page_title = 'S.I.MDesa - About Desa';?>
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

    <section class="content-header">
      <h1>
        About Me
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

      <form method="post" action="<?=site_url('c_about/upData/inpAbout');?>">
      <div class="box box-primary">
        <div class="box-body text-center" style="height: 300px; background: url(<?=$about_desa->cover;?>) center center; background-size: cover;">
        </div>
      </div>

      <div class="box box-primary">
        <div class="box-header with-border">
          <h2 class="box-title">Tentang Desa Kami</h2>
          <div class="box-tools pull-right">
            <button type="submit" class="btn btn-box-tool" title="Simpan">
              <i class="fa fa-save"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="form-group">
            <textarea class="form-control" name="tentang_desa" style="min-height: 100px;" placeholder="Katakan sesuatu tentang desa"><?=$about_desa->tentang;?></textarea>
          </div>
          <button type="submit" class="btn btn-danger" title="Simpan">
              <i class="fa fa-save"></i>&nbsp;Simpan
          </button>
        </div>
      </div>
      </form>

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

      <div class="row">
        <form method="post" action="<?=site_url('c_about/upData/inpProfil');?>">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h2 class="box-title">Profil Kepala Desa</h2>
              <div class="box-tools pull-right">
                <button type="submit" class="btn btn-box-tool" title="Simpan">
                  <i class="fa fa-save"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="text-center">
                <div class="form-group">
                  <label>Foto</label>
                  <img id="cropped" src="<?php if($_SESSION['photo'] != null){echo $biografi->foto;}else{echo base_url().'/assets/img/avatar04.png';} ?>" class="img-responsive">
                </div>
                <div class="form-group">
                  <input type="file" id="file_img" name="" class="inp_file">
                  <label for="file_img" class="btn btn-danger"><i class="fa fa-upload"></i> Pilih File ...</label>
                  <input type="text" id="photoTxt" hidden name="photo" value="<?php if($_SESSION['photo'] != null){echo $biografi->foto;}else{echo base_url().'/assets/img/avatar04.png';} ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?=$biografi->nama;?>">
              </div>
              <div class="form-group">
                <label for="posisi">Posisi</label>
                <input type="text" name="posisi" id="posisi" class="form-control" value="<?=$biografi->posisi;?>">
              </div>
              <div class="form-group">
                <label for="datepicker">TTL</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="ttl" class="form-control pull-right datepicker" id="datepicker" value="<?=$biografi->ttl;?>">
                </div>
              </div>
              <div class="form-group">
                <label for="datepicker">Tanggal Lantik</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_lantik" class="form-control pull-right datepicker" id="datepicker" value="<?=$biografi->tanggal_lantik;?>">
                </div>
              </div>
              <div class="form-group">
                <label>Periode</label>

                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input placeholder="Dari" id="dari" type="text" class="form-control" value="<?=explode('/', $biografi->periode)[0]?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input placeholder="Sampai" id="sampai" type="text" class="form-control" value="<?=explode('/', $biografi->periode)[1]?>">
                    </div>
                  </div>
                  <div class="col-md-12"><small id="period_pre"></small></div>
                </div>
                <input type="text" id="period" name="periode" hidden value="<?=$biografi->periode;?>">

              </div>
              <div class="form-group">
                <label for="pend">Pendidikan Terakhir</label>
                <select id="pend" class="form-control" name="pend_terakhir">
                  <option></option>
                  <?php 
                    $pend = array('SD', 'SMP', 'SMA', 'Perguruan Tinggi', 'Lain');
                    $data = $biografi->pendidikan_terkhir;
                    for($i=0; $i<5; $i++){
                      if($biografi->pendidikan_terkhir == $pend[$i]){
                  ?>
                  <option selected><?=$pend[$i];?></option>
                  <?php
                      }
                      else{
                  ?>
                  <option><?=$pend[$i];?></option>
                  <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" style="max-width: 100%; min-width: 100%; min-height: 100px; max-height: 100%;"><?=$biografi->alamat;?></textarea>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-envelope-o"></i>
                  </div>
                  <input type="mail" class="form-control pull-right" name="email" id="email" value="<?=$biografi->email;?>">
                </div>
              </div>
              <div class="form-group">
                <label for="tentang">Tentang Saya</label>
                <textarea class="form-control" id="tentang" name="tentang" style="max-width: 100%; min-width: 100%; min-height: 100px; max-height: 100%;"><?=$biografi->tentang;?></textarea>
              </div>
              <div class="form-group">
                <label for="telp">Telepon</label>
                <input type="text" name="telp" id="telp" class="form-control" pattern="(^0\d*|\d*|\d*-\d*|^0\d*-\d*)" title="Telp rumah : xxxx-xxxxx | Mobile : xxxxxxxxxxxx" value="<?=$biografi->telp;?>">
              </div>

              <button type="submit" class="btn btn-danger" title="Simpan">
                  <i class="fa fa-save"></i>&nbsp;Simpan
              </button>

            </div>
          </div>
        </div>
        </form>

        <form method="post" action="<?=site_url('c_about/upData/inpDesa');?>">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h2 class="box-title">Profil Desa</h2>
              <div class="box-tools pull-right">
                <button type="submit" class="btn btn-box-tool" title="Simpan">
                  <i class="fa fa-save"></i></button>
              </div>
            </div>
            <div class="box-body">
              
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" style="max-width: 100%; min-width: 100%; min-height: 100px; max-height: 100%;"><?=$about_desa->alamat;?></textarea>
              </div>
              <div class="form-group">
                <label for="telp">Telepon</label>
                <input type="text" name="telp" id="telp" class="form-control" pattern="(^0\d*|\d*|\d*-\d*|^0\d*-\d*)" title="Telp rumah : xxxx-xxxxx | Mobile : xxxxxxxxxxxx" value="<?=$about_desa->telp;?>">
                <small>Ex: 031-372178 or 085682719928</small>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?=$about_desa->email;?>">
              </div>
              <div class="form-group">
                <label for="fax">Fax</label>
                <input type="text" name="fax" id="fax" class="form-control" pattern="(^0\d*|\d*|\d*-\d*|^0\d*-\d*)" title="Telp rumah : xxxx-xxxxx | Mobile : xxxxxxxxxxxx" value="<?=$about_desa->fax;?>">
                <small>Ex: 031-372178</small>
              </div>
              <div class="form-group">
                <label>Cover</label>
                <input type="file" class="form-control" id="imgCover">
                <input type="text" hidden name="imgCover" id="txtImgCover">
              </div>
              <div class="form-group text-center" style="width: 300px; display: block; margin: 0 auto; position: relative;">
                <img class="img-responsive" id="imgCover64" src="<?=$about_desa->cover;?>">
              </div>

              <button type="submit" class="btn btn-danger" title="Simpan">
                  <i class="fa fa-save"></i>&nbsp;Simpan
              </button>

            </div>
          </div>
        </div>
        </form>

        <form method="post" action="<?=site_url('c_about/upData/inpLokasi');?>">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h2 class="box-title">Lokasi</h2>
              <div class="box-tools pull-right">
                <button type="submit" class="btn btn-box-tool" title="Simpan">
                  <i class="fa fa-save"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div style="width: 100%; height: 300px;">
                <div id="map" style="width: 100%; height: 100%;"></div>
              </div>
              <hr>
              <div class="form-group">
                <label for="latlong">Ubah Lokasi <br><small>Masukkan Latitude &amp; Lonitude</small></label>
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" placeholder="Latitude" class="form-control" name="latitude" pattern="(-\d*|\d*.\d*|-\d*.\d*)" title="ex: -34.397" value="<?=$about_desa->latitude?>">
                    <small>Latitude</small>
                  </div>
                  <div class="col-md-6">
                    <input type="text" placeholder="Longitude" class="form-control" name="longitude" pattern="(-\d*|\d*.\d*|-\d*.\d*)" title="ex: 150.644" value="<?=$about_desa->longitude?>">
                    <small>Longitude</small>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i>&nbsp;Simpan</button>
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
<script type="text/javascript">
  $('#dari').keyup(function(event) {
    $('#period').val($('#dari').val() + " / " + $('#sampai').val());
    $('#period_pre').html($('#dari').val() + " / " + $('#sampai').val());
  });
  $('#sampai').keyup(function(event) {
    $('#period').val($('#dari').val() + " / " + $('#sampai').val());
    $('#period_pre').html($('#dari').val() + " / " + $('#sampai').val());
  });
  $('#dari').mouseup(function(event) {
    $('#period').val($('#dari').val() + " / " + $('#sampai').val());
    $('#period_pre').html($('#dari').val() + " / " + $('#sampai').val());
  });
  $('#sampai').mouseup(function(event) {
    $('#period').val($('#dari').val() + " / " + $('#sampai').val());
    $('#period_pre').html($('#dari').val() + " / " + $('#sampai').val());
  });
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url();?>assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- InputMask -->
<script src="<?=base_url();?>assets/lib/input-mask/jquery.inputmask.js"></script>
<script src="<?=base_url();?>assets/lib/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?=base_url();?>assets/lib/input-mask/jquery.inputmask.extensions.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url();?>assets/lib/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url();?>assets/lib/fastclick/fastclick.js"></script>
<script src="<?=base_url();?>assets/lib/datepicker/bootstrap-datepicker.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>assets/js/app.min.js"></script>
<!-- iEdit -->
<script src="<?=base_url();?>assets/lib/iEdit-master/src/iEdit.js"></script>
<script src="<?=base_url();?>assets/js/iedit-script.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>assets/js/demo.js"></script>
<!-- <script type="text/javascript" src="http://www.google.com/jsapi"></script> -->
<script type="text/javascript">
  //Datemask dd/mm/yyyy
  $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
  $("[data-mask]").inputmask();

  function initMap(){
    var latlg = {lat: <?php echo $about_desa->latitude;?>, lng: <?php echo $about_desa->longitude;?>};
    var map = new google.maps.Map(document.getElementById('map'),{
      center: latlg,
      zoom: 10
    });
    var marker = new google.maps.Marker({
      position: latlg,
      map: map
    });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6cOzxOh0oLqn4bdNjRyxBJga9fn92vLQ&callback=initMap" async defer></script>
</body>
</html>
