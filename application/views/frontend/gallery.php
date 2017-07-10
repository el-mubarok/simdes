<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <?php
      $title = 'Gallery of Us'; 
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
            <div class="row multi-columns-row">
              <style> a.gallery{height: 329px;} </style>
              <?php 
                if (count($data) != 0) {
                  foreach ($data as $row) {
              ?>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="gallery-item">
                  <div class="gallery-image">
                    <a class="gallery" href="<?=$row['gambar']?>" title="<?=$row['deskripsi']?>"
                    style="background: url('<?=$row['gambar']?>') center center;
                    background-size: cover;">
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <?php
                  }
                }
              ?>
              
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