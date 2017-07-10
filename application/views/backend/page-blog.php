<!DOCTYPE html> <?php $page='blog'; ?>
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
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
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
        Blog Post Manager
        <small>Manage your posts</small>
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
      <form method="post" action="<?=site_url('c_blog/addPost');?>"> <!-- form -->
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
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Post Baru</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="col-md-12">
                <input type="text" id="judul" class="form-control" placeholder="Judul" name="judul">
                <!-- toolbar -->
                <?php include 'el-toolbar.php'; ?>
              </div>
              <div class="col-md-12">
                <div id="editor"></div>
                <input type="text" name="article" id="article" hidden> <!-- to retain data from #editor -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">...</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <p><i class="fa fa-calendar"></i> Diposkan pada <i><?php echo date('d-m-Y'); ?></i></p>
              <p><i class="fa fa-user"></i> Oleh <?php if(isset($_SESSION['username'])){echo $_SESSION['nama'];} ?></p>
              <hr>
              <div class="form-group">
                <label>Kategori</label>
                  <select class="select2_single form-control" tabindex="-1" name="kategori">
                    <option></option>
                    <?php 
                      if (count($kategori) != 0){
                        foreach ($kategori as $row) {
                    ?>
                    <option value="<?=$row['kategori']?>"><?=$row['kategori']?></option>
                    <?php
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
              <input type="text" name="author" value="<?=$_SESSION['nama']; ?>" hidden>
              <!-- /hidden inputs -->
              <div class="form-group">
                <a class="btn btn-default" id="kategori" data-toggle="modal" data-target="#add_kategori"><i class="fa fa-plus"></i> Tambah Kategori</a>
              </div>
              <hr>
              <div class="form-group">
                <label>Post Cover</label>
                <input type="file" class="form-control" id="imgCover">
                <input type="text" hidden name="imgCover" id="txtImgCover">
              </div>
              <div class="form-group">
                <img class="img-responsive" id="imgCover64">
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" id="publish" class="btn btn-danger"><i class="fa fa-paper-plane"></i>&nbsp; Publish</button>
            </div>
          </div>
        </div>
      </div>
      </form> <!-- /form -->

      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">List Of Blog Articles</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <?php
            if (count($data) != 0) {
              foreach ($data as $row) {
          ?>
          <div class="col-md-12" style="margin-bottom: 15px;">
            <div class="media">
          <?php 
                if($row['username'] === $_SESSION['username']){
          ?>
              <div class="pull-right">
                <a title="Hapus" href="<?=site_url('c_blog/delete/').$row['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                <a title="Edit" href="<?=site_url('c_backend/page_blog_edit/').$row['id'];?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
              </div>
          <?php
                }
          ?>
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="<?=$row['cover']?>" alt="">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><a href="javascript:void(0);"><?=$row['judul']?></a></h4>
                <small>
                  <i class="fa fa-user"></i> <?=$row['author']?> &nbsp; | &nbsp;
                  <i class="fa fa-calendar-o"></i> <?=date('d/m/Y H:i', strtotime($row['tanggal']));?> &nbsp; | &nbsp;
                  <i class="fa fa-tag"></i> <?=$row['kategori'];?> &nbsp; | &nbsp;
                  <i class="fa fa-eye"></i> <?=$row['viewer'];?>
                </small><br>
                <?php 
                  $filterTxt = preg_replace("/<img[^>]+\>/i", " ", $row['article']);
                  $clearTxt = strip_tags($filterTxt);
                  $limitTxt = substr($clearTxt, 0, 300);

                  echo $limitTxt.' &hellip;';
                ?>
              </div>
            </div>
            <hr>
          </div>
          <?php
              }
            }else{
          ?>
          <h4 class="text-center">You don't have any post, let's make some amazing stuff!</h4>
          <?php
            }
          ?>
        </div>
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

  <!-- kategori modal -->
  <?php include 'el-kategori.php'; ?>
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

</body>
</html>
