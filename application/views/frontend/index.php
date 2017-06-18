<!DOCTYPE html>
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
    <link href="<?=base_url();?>assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="<?=base_url();?>assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="<?=base_url();?>assets/css/colors/default.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">Titan</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
             <li><a href="<?=site_url('landing/index');?>">Home</a></li>
             <li><a href="<?=site_url('landing/admin');?>">Profile</a></li>
             <li><a href="<?=site_url('landing/gallery');?>">Gallery</a></li>
             <li><a href="<?=site_url('landing/blog_single');?>">About</a></li>
              <!-- home profile gallery about -->
            </ul>
          </div>
        </div>
      </nav>
      <section class="home-section bg-dark-60 portfolio-page-header parallax-bg" id="home" data-background="assets/images/portfolio/portfolio_header_bg.jpg">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1">Hello &amp; welcome</div>
            <div class="font-alt mb-40 titan-title-size-4">We are Titan</div><a class="section-scroll btn btn-border-w btn-round" href="#portfolio">Our Works</a>
          </div>
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
              <li class="work-item illustration webdesign"><a href="portfolio_single_featured_image1.html">
                  <div class="work-image"><img src="<?=base_url();?>assets/images/portfolio/masonry-portfolio1.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Corporate Identity</h3>
                    <div class="work-descr">Illustration</div>
                  </div></a></li>
              <li class="work-item marketing photography"><a href="portfolio_single_featured_image2.html">
                  <div class="work-image"><img src="<?=base_url();?>assets/images/portfolio/masonry-portfolio2.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Bag MockUp</h3>
                    <div class="work-descr">Marketing</div>
                  </div></a></li>
              <li class="work-item illustration photography"><a href="portfolio_single_featured_slider1.html">
                  <div class="work-image"><img src="<?=base_url();?>assets/images/portfolio/masonry-portfolio3.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Disk Cover</h3>
                    <div class="work-descr">Illustration</div>
                  </div></a></li>
              <li class="work-item marketing photography"><a href="portfolio_single_featured_slider2.htmll">
                  <div class="work-image"><img src="<?=base_url();?>assets/images/portfolio/masonry-portfolio4.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Business Card</h3>
                    <div class="work-descr">Photography</div>
                  </div></a></li>
              <li class="work-item illustration webdesign"><a href="portfolio_single_featured_video1.html">
                  <div class="work-image"><img src="<?=base_url();?>assets/images/portfolio/masonry-portfolio5.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Web Design</h3>
                    <div class="work-descr">Webdesign</div>
                  </div></a></li>
              <li class="work-item marketing webdesign"><a href="portfolio_single_featured_video2.html">
                  <div class="work-image"><img src="<?=base_url();?>assets/images/portfolio/masonry-portfolio6.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">New Product</h3>
                    <div class="work-descr">Marketing</div>
                  </div></a></li>
              <li class="work-item marketing webdesign"><a href="portfolio_single_featured_image1.html">
                  <div class="work-image"><img src="<?=base_url();?>assets/images/portfolio/masonry-portfolio7.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">New Product</h3>
                    <div class="work-descr">Marketing</div>
                  </div></a></li>
              <li class="work-item marketing"><a href="portfolio_single_featured_slider1.html">
                  <div class="work-image"><img src="<?=base_url();?>assets/images/portfolio/masonry-portfolio9.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Bottle MockUp</h3>
                    <div class="work-descr">Marketing</div>
                  </div></a></li>
              <li class="work-item illustration photography"><a href="portfolio_single_featured_slider2.html">
                  <div class="work-image"><img src="<?=base_url();?>assets/images/portfolio/masonry-portfolio10.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Personal Identity</h3>
                    <div class="work-descr">Photography</div>
                  </div></a></li>
              <li class="work-item illustration marketing"><a href="portfolio_single_featured_video1.html">
                  <div class="work-image"><img src="<?=base_url();?>assets/images/portfolio/masonry-portfolio11.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Business Card</h3>
                    <div class="work-descr">Webdesign</div>
                  </div></a></li>
              <li class="work-item illustration webdesign"><a href="portfolio_single_featured_image2.html">
                  <div class="work-image"><img src="<?=base_url();?>assets/images/portfolio/masonry-portfolio8.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Paper Clip</h3>
                    <div class="work-descr">Illustration</div>
                  </div></a></li>
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
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail"><a href="#"><img src="assets/images/work-1.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Our trip to the Alps</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>&nbsp;| 23 November | 3 Comments
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail"><a href="#"><img src="assets/images/work-2.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Shore after the tide</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">Andy River</a>&nbsp;| 11 November | 4 Comments
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail"><a href="#"><img src="assets/images/work-3.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">We in New Zealand</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">Dylan Woods</a>&nbsp;| 5 November | 15 Comments
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">About Titan</h5>
                  <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                  <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                  <p>Email:<a href="#">somecompany@example.com</a></p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Recent Comments</h5>
                  <ul class="icon-list">
                    <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                    <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                    <li>Andy on <a href="#">Eco bag Mockup</a></li>
                    <li>Jack on <a href="#">Bottle Mockup</a></li>
                    <li>Mark on <a href="#">Our trip to the Alps</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Blog Categories</h5>
                  <ul class="icon-list">
                    <li><a href="#">Photography - 7</a></li>
                    <li><a href="#">Web Design - 3</a></li>
                    <li><a href="#">Illustration - 12</a></li>
                    <li><a href="#">Marketing - 1</a></li>
                    <li><a href="#">Wordpress - 16</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Popular Posts</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                        <div class="widget-posts-meta">23 january</div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                        <div class="widget-posts-meta">15 February</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">TitaN</a>, All Rights Reserved</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
      </div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="<?=base_url();?>assets/lib/jquery/dist/jquery.js"></script>
    <script src="<?=base_url();?>assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/lib/wow/dist/wow.js"></script>
    <script src="<?=base_url();?>assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="<?=base_url();?>assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="<?=base_url();?>assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="<?=base_url();?>assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="<?=base_url();?>assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="<?=base_url();?>assets/lib/smoothscroll.js"></script>
    <script src="<?=base_url();?>assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="<?=base_url();?>assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="<?=base_url();?>assets/js/plugins.js"></script>
    <script src="<?=base_url();?>assets/js/main.js"></script>
  </body>
</html>