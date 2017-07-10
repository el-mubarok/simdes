<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <?php
      $title = 'Information'; 
      include 'el-header.php'; 
    ?>
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

      <?php if(isset($banner)) ?>
      <div class="home-section">
        <section class="module bg-dark-60 gallery-page-header parallax-bg" data-background="<?=$banner->gambar?>">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt"><?=$banner->desc_1?></h2>
                <div class="module-subtitle font-serif"><?=$banner->desc_2?></div>
              </div>
            </div>
          </div>
        </section>

        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                <div class="row post-masonry post-columns">
                <?php
                  if($this->uri->segment(3)){
                    $no = $this->uri->segment(3);
                  }else{
                    $no = 0;
                  }
                  foreach ($data as $row) {
                ?>
                  <div class="col-md-6 col-lg-6">
                    <div class="post">
                      <div class="post-thumbnail" style="background: #fefefe;"><a href="#"><img style="position: relative; display: block; margin: 0 auto;" src="<?=$row['cover']?>" alt="Blog-post Thumbnail"/></a></div>
                      <div class="post-header font-alt">
                        <h2 class="post-title"><a href="<?=site_url('c_frontend/blog_single/').$row['id'];?>"><?=$row['judul']?></a></h2>
                        <div class="post-meta">By&nbsp;<a href="#"><?=$row['author']?></a>&nbsp;| <?=date('d M Y', strtotime($row['tanggal']))?>
                        </div>
                      </div>
                      <div class="post-entry">
                        <?php 
                          $filterTxt = preg_replace("/<img[^>]+\>/i", " ", $row['article']);
                          $clearTxt = strip_tags($filterTxt);
                          $limitTxt = substr($clearTxt, 0, 130);
                        ?>
                        <p><?=$limitTxt?> &hellip;</p>
                      </div>
                      <div class="post-more"><a class="more-link" href="<?=site_url('c_frontend/blog_single/').$row['id'];?>">Read more</a></div>
                    </div>
                  </div>
                <?php } ?>
                </div>
                <div class="pagination font-alt">
                  <?php 
                    foreach ($links as $row) {
                ?>
                  <?=$row?>
                <?php
                    }
                  ?>
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