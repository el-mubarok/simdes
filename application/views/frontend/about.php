<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <?php
      $title = 'About of Us'; 
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
      
      <!-- Navbar -->
      <?php include 'el-navbar.php'; ?>
      <?php if(isset($banner)) ?>
      <div class="main">
        <section class="module bg-dark-60 about-page-header" data-background="<?=$about_desa->cover?>">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">About</h2>
                <!-- <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div> -->
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">
                <h2 class="module-title font-alt">Sekilas Tentang Kami</h2>
                <div class="module-subtitle font-serif"><?=$about_desa->tentang;?></div>
              </div>
            </div>
          </div>
        </section>

        <?php if(isset($biografi)) ?>
        <section class="module pt-0 pb-0" id="about">
          <div class="row position-relative m-0">
            <div class="col-xs-12 col-md-6 col-md-offset-6 side-image" data-background="<?=$biografi->foto;?>"></div>
            <div class="col-xs-12 col-md-6 side-image-text">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="module-title font-alt align-left">Tentang Kepala Desa</h2>


                  <blockquote><?=ucwords($biografi->tentang);?></blockquote>
                  <style>
                    table tr td{
                      padding: 10px;
                    }
                  </style>
                  <table>
                    <tr>
                      <td><h5>Nama</h5></td>
                      <td>:</td>
                      <td><h5><?=ucwords($biografi->nama);?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Posisi</h5></td>
                      <td>:</td>
                      <td><h5><?=ucwords($biografi->posisi);?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Tempat Tanggal Lahir</h5></td>
                      <td>:</td>
                      <td><h5><?=ucwords($biografi->ttl);?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Tanggal Lantik</h5></td>
                      <td>:</td>
                      <td><h5><?=ucwords($biografi->tanggal_lantik);?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Periode</h5></td>
                      <td>:</td>
                      <td><h5><?=ucwords($biografi->periode);?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Pendidikan Terakhir</h5></td>
                      <td>:</td>
                      <td><h5><?=ucwords($biografi->pendidikan_terkhir);?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Alamat</h5></td>
                      <td>:</td>
                      <td><h5><?=ucwords($biografi->alamat);?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>E-Mail</h5></td>
                      <td>:</td>
                      <td><h5><?=ucwords($biografi->email);?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Telepon</h5></td>
                      <td>:</td>
                      <td><h5><?=ucwords($biografi->telp);?></h5></td>
                    </tr>
                  </table>

                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="module" id="team">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Our Location</h2>
                <!-- <div class="features-icon"><span class="icon-map"></span></div>  -->
                <!-- <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div> -->
                <div class="module-subtitle font-serif" style="margin-bottom: 0;">
                  Our Latitude &amp; Longitude <br>
                  <h3 style="margin-bottom: 0;"><?php echo $about_desa->latitude; ?> &amp; <?php echo $about_desa->longitude; ?></h3>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- data-background="<?=base_url();?>assets/images/section-6.jpg" -->
        <section class="module bg-dark-60" style="height: 517px;" id="map" >
        </section>
        <script type="text/javascript">
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
        
        <section class="module" id="services">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">More About Us</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>

            <div class="module-subtitle font-serif" style="margin-bottom: 0;">
              <style type="text/css">
                p > span{
                  font-size: 30px;
                  padding-right: 10px;
                }
              </style>
              <p><span class="icon-streetsign"></span> Alamat : <?=$about_desa->alamat;?></p>
              <p><span class="icon-phone"></span> Telepon : <?=$about_desa->telp;?></p>
              <p><span class="icon-envelope"></span> E-Mail : <?=$about_desa->email;?></p>
              <p><span class="icon-printer"></span> Fax : <?=$about_desa->fax;?></p>              
            </div>

          </div>
        </section>
        <?php include 'el-footer.php'; ?>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <?php include 'script.php'; ?>
  </body>
</html>