<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <?php
      $title = 'Home'; 
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

      <section class="home-section home-fade home-full-height" id="home">
        <div class="hero-slider">
          <ul class="slides">
            <?php 
              foreach ($banner as $row) {
            ?>
            <li class="bg-dark-30 bg-dark" style="background-image:url('<?=$row['gambar']?>');">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-30 titan-title-size-1"><?=$row['desc_1']?></div>
                  <div class="font-alt mb-40 titan-title-size-4"><?=$row['desc_2']?></div><a class="section-scroll btn btn-border-w btn-round" href="#about">Learn More</a>
                </div>
              </div>
            </li>
            <?php
              }
            ?>
          </ul>
        </div>
      </section>

      <div class="main">
        <section class="module" id="portfolio">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <ul class="filter font-alt" id="filters">
                  <li><a class="current wow fadeInUp" href="#" data-filter="*">Our Activities</a></li>
                </ul>
              </div>
            </div>
            <ul class="works-grid works-grid-masonry works-grid-3 works-hover-d" id="works-grid">
              <?php
                foreach ($event as $row) {
              ?>
              <li class="work-item illustration webdesign"><a href="portfolio_single_featured_image1.html">
                <div class="work-image"><img src="<?=$row['gambar']?>" alt="Portfolio Item"/></div>
                <div class="work-caption font-alt">
                  <h3 class="work-title"><?=$row['nama_acara']?></h3>
                  <div class="work-descr"><?=$row['desc_acara']?></div>
                </div></a>
              </li>
              <?php
                }
              ?>
            </ul>
          </div>
        </section>

        <section class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3 text-center">
                <h4 class="font-alt mb-20">Let's work together</h4><a class="btn btn-border-w" href="contact3.html">Contact Us</a>
              </div>
            </div>
          </div>
        </section>

        <section class="module" id="news">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Latest blog posts</h2>
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
            <div class="row multi-columns-row post-columns">
              <?php 
                foreach ($latestBlog as $row) {
              ?>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail" onclick="loadPost(<?=$row['id']?>);" style="cursor: pointer; width: 100%;height: 217px;background: url('<?=$row['cover']?>') center center;background-size: cover;"></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="<?=site_url('c_frontend/blog_single/').$row['id'];?>"><?=$row['judul']?></a></h2>
                    <div class="post-meta">By&nbsp;<a href="#"><?=$row['author']?></a>&nbsp;| <?php echo date("d M", strtotime($row['tanggal']))?>
                    </div>
                  </div>
                  <div class="post-entry">
                    <?php
                      $filterTxt = preg_replace("/<img[^>]+\>/i", " ", $row['article']);
                      $clearTxt = strip_tags($filterTxt);
                      $limitTxt = substr($clearTxt, 0, 130);
                    ?>
                    <p>
                      <?=$limitTxt;?> &hellip;
                    </p>
                  </div>
                  <div class="post-more"><a class="more-link" href="<?=site_url('c_frontend/blog_single/').$row['id'];?>">Read more</a></div>
                </div>
              </div>
              <?php
                } 
              ?>
            </div>
          </div>
        </section>

        <!-- footer -->
        <?php include 'el-footer.php'; ?>
        
      </div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <?php include 'script.php'; ?>
    
  </body>
</html>