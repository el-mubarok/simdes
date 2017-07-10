<!DOCTYPE html> <?php $page = 'blog' ?>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Titan | Multipurpose HTML5 Template</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <?php include 'style.php'; ?>

  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      
      <!-- navbar -->
      <?php include 'el-navbar.php'; ?>

      <div class="main home-section">
        <section class="module-small">
          <div class="container">
            <div class="row">
            <?php if (isset($data))?>
              <div class="col-sm-8">
                <div class="post">
                  <div class="post-thumbnail"><img src="<?=$data->cover?>" alt="Blog Featured Image"/></div>
                  <div class="post-header font-alt">
                    <h1 class="post-title"><?=$data->judul?></h1>
                    <div class="post-meta">By&nbsp;<a href="#"><?=$data->author?></a> | <?=date('d M Y', strtotime($data->tanggal))?> | <a href="#"><?=$data->kategori?></a>
                    </div>
                  </div>
                  <div class="post-entry">
                    <p><?=$data->article?></p>
                  </div>
                </div>

                <div class="widget">
                  <h5 class="widget-title font-alt">About The Author</h5>
                  <div class="media">
                    <div class="media-left">
                      <img class="media-object" style="max-width: 64px; height: auto;" src="<?=$data->photo?>">
                    </div>
                    <div class="media-body">
                      <h3 class="alt-features-title font-alt"><?=$data->author?></h3>
                      <?=$data->about?><br>
                      <a href="">All post by the author</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                <div class="widget">
                  <form role="form">
                    <div class="search-box">
                      <input class="form-control" type="text" placeholder="Search..."/>
                      <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                  </form>
                </div>
                <div class="widget">
                  <h5 class="widget-title font-alt">Blog Categories</h5>
                  <ul class="icon-list">
                    <?php 
                      foreach ($jmlKtg as $row) {
                    ?>
                    <li><a href="#"><?=$row['kategori']?> - <?=$row['jumlah']?></a></li>
                    <?php
                      } 
                    ?>
                  </ul>
                </div>
                <div class="widget">
                  <h5 class="widget-title font-alt">Popular Posts</h5>
                  <ul class="widget-posts">
                    <?php
                      foreach ($popular as $row) {
                    ?>
                    <li class="clearfix">
                      <div class="widget-posts-image" onclick="loadPost(<?=$row['id']?>);" style="cursor: pointer; width: 64px; height: 64px; background: url('<?=$row['cover']?>') center center; background-size: cover;"></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="<?=site_url('c_frontend/blog_single/').$row['id'];?>"><?=$row['judul']?></a></div>
                        <div class="widget-posts-meta"><?=date('d M Y', strtotime($row['tanggal']))?></div>
                      </div>
                    </li>
                    <?php
                      }
                    ?>
                  </ul>
                </div>
                
              </div>
            </div>
          </div>
        </section>
        
        <!-- footer -->
        <?php include 'el-footer.php'; ?>
        
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <?php include 'script.php'; ?>
    
  </body>
</html>