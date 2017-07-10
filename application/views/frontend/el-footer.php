<div class="module-small bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="widget">
          <h5 class="widget-title font-alt">About S.I.M Desa</h5>
          <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
          <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
          <p>Email:<a href="#"> somecompany@example.com</a></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="widget">
          <h5 class="widget-title font-alt">Menu</h5>
          <ul class="icon-list">
            <li><a href="<?=site_url('c_frontend/index');?>">Home</a></li>
            <li><a href="<?=site_url('c_frontend/profile');?>">Profile</a></li>
            <li><a href="<?=site_url('c_frontend/gallery');?>">Gallery</a></li>
            <li><a href="<?=site_url('c_frontend/about');?>">About</a></li>
            <li><a href="<?=site_url('c_frontend/blog_grid');?>">Blog Grid</a></li>
            <li><a href="<?=site_url('c_frontend/blog_single');?>">Blog Single</a></li>
            <li><a href="<?=site_url('c_backend/page_home');?>">Admin</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-3">
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
      </div>
      <div class="col-sm-3">
        <div class="widget">
          <h5 class="widget-title font-alt">Popular Posts</h5>
          <ul class="widget-posts">
            <?php
              foreach ($popularFooter as $row) {
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
</div>
<hr class="divider-d">
<footer class="footer bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <p class="copyright font-alt">&copy; <?=date('Y');?>&nbsp;<a href="index.html">S.I.M Desa <i class="fa fa-heart text-danger"></i></a>, All Rights Reserved</p>
      </div>
      <div class="col-sm-6">
        <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>

<script type="text/javascript">
  function loadPost(id){
    window.location.assign("<?=site_url('c_frontend/blog_single/');?>"+id);
  }
</script>