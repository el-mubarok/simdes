<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">S.I.M Desa</a>
    </div>
    <div class="collapse navbar-collapse" id="custom-collapse">
      <?php if(isset($page) && $page === 'blog') { ?>
      <ul class="nav navbar-nav navbar-right">
      <style>.navbar-transparent .navbar-header > a{color: #333;} .navbar-transparent .nav li > a{color: #333;}</style>
      <?php } else { ?>
      <ul class="nav navbar-nav navbar-right">
      <?php } ?>
       <li><a href="<?=site_url('c_frontend/index');?>">Home</a></li>
       <li><a href="<?=site_url('c_frontend/gallery');?>">Gallery</a></li>
       <li><a href="<?=site_url('c_frontend/blog_grid');?>">Blog</a></li>
       <li><a href="<?=site_url('c_frontend/about');?>">About</a></li>
      </ul>
    </div>
  </div>
</nav>