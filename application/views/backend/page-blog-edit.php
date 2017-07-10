<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Lockscreen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url();?>assets/lib/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>assets/lib/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/skins/_all-skins.min.css">
  <!-- Bootstrap Wysiwyg -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap-wysiwyg.css">
  <!-- select2 -->
  <link rel="stylesheet" href="<?=base_url();?>assets/lib/select2/select2.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/custom.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="col-md-12">
  <div class="lockscreen-wrapper" style="max-width: 1000px;">
  
    <div class="lockscreen-logo">
      <a href=""><b>Edit</b>Page</a>
    </div>

    <!-- Default box -->
    <form method="post" action="<?=site_url('c_blog/edit/').$data->id;?>">
    <div class="row">
      <div class="col-md-9">
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
        <div class="box box-success">
          <div class="box-header with-border"></div>
          <div class="box-body">
            <div class="col-md-12">
              <input type="text" id="judul" class="form-control" placeholder="Judul" name="judul" value="<?=$data->judul?>">
              <!-- toolbar -->
              <?php include 'el-toolbar.php';?>
            </div>
            <div class="col-md-12">
              <div id="editor"><?=$data->article?></div>
              <input type="text" name="article" id="article" hidden > <!-- to retain data from #editor -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="box box-success">
          <div class="box-header with-border"></div>
          <div class="box-body">
            <p><i class="fa fa-calendar"></i> Diedit pada <i><?php echo date('d-m-Y'); ?></i></p>
            <p><i class="fa fa-user"></i> Oleh <?php if(isset($_SESSION['username'])){echo $_SESSION['nama'];} ?></p>
            <hr>
            <div class="form-group">
              <label>Kategori</label>
                <select class="select2_single form-control" tabindex="-1" name="kategori" required>
                  <option></option>
                  <?php 
                    if (count($kategori) != 0){
                      foreach ($kategori as $row) {
                        if($row['kategori'] == $data->kategori){
                  ?>
                  <option selected value="<?=$row['kategori']?>"><?=$row['kategori']?></option>
                  <?php
                        }else{
                  ?>
                  <option value="<?=$row['kategori']?>"><?=$row['kategori']?></option>
                  <?php
                        }
                      }
                    }else{
                  ?>
                  <option>You don't have any categories</option>
                  <?php
                    }
                  ?>
                </select>
            </div>
            <!-- hidden inputs -->
            <input type="text" name="author" value="<?=$_SESSION['nama']; ?>" hidden >
            <input type="text" name="tanggal_edit" value="<?=date('Y-m-d H:i:s'); ?>" hidden>
            <!-- /hidden inputs -->
            <div class="form-group">
              <a class="btn btn-default" data-toggle="modal" data-target="#add_kategori"><i class="fa fa-plus"></i> Tambah Kategori</a>
            </div>
            <hr>
            <div class="form-group">
              <label>Post Cover</label>
              <input type="file" class="form-control" id="imgCover">
              <input type="text" value="<?=$data->cover?>" hidden name="imgCover" id="txtImgCover">
            </div>
            <div class="form-group">
              <img class="img-responsive" id="imgCover64" src="<?=$data->cover?>">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" id="publish" class="btn btn-danger"><i class="fa fa-save"></i>&nbsp; Simpan</button>
          </div>
        </div>
      </div>
    </div>
    </form> <!-- /form -->

    <div class="lockscreen-footer text-center">
      <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="http://almsaeedstudio.com">SIM Desa</a>.</strong> All rights
      reserved.
    </div>
    <!-- kategori modal -->
    <?php include 'el-kategori.php'; ?>
  </div>
</div>
<!-- /.center -->

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
<!-- jquery hotkey -->
<script src="<?=base_url();?>assets/lib/jquery.hotkeys.js"></script>
<!-- Google Prettify -->
<script src="<?=base_url();?>assets/lib/prettify.js"></script>
<!-- Bootstrap WYSIWYG -->
<script src="<?=base_url();?>assets/lib/bootstrap-wysiwyg.js"></script>
<!-- select2 -->
<script src="<?=base_url();?>assets/lib/select2/select2.full.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>assets/js/demo.js"></script>
<script type="text/javascript">
  $('#article').val($('#editor').html());
</script>
</body>
</html>
