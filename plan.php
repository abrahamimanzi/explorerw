<?php include 'admin/core/init.php';?>
<?php
$success = false;
$error = false;
$nosubNav = true;
?> 
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js">
<head>  
    <?php include 'includes/head-common.php';?>
    <title>Plan your trip - Transform Africa Summit</title>	 
    
    <link rel="stylesheet" href="intlTelInput/build/css/intlTelInput.css">
    <script src="intlTelInput/build/js/intlTelInput.js"></script>
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="home page page-id-2">
    <?php include 'views/header-mc.php';?>
               
	<div id="wrapper" class="home nav-top-mc"> 
    <div class="container-fluid">
      <div class="row">
          <img class="img img-responsive no-padding" style="width: 100%" src="<?=DN?>/img/plan.jpg"/>
      </div>
    </div>

    <section class="bg-img-white">
        <div class="container">
          <div class="col-md-3 col-sm-6 col-lg-3">
            <a href="<?=DN?>/visa" class="">
              <div class="latest-post latest-post-plat waves-effect">
                  <img src="img/visa.jpg" class="img-responsive" alt="register">
                  <h4 style="padding-bottom: 20px;">Visas & Vaccinations</h4>
                  <!-- <a href="<?=DN?>/visa" class="btn btn-primary">Click Here</a> -->
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
            <a href="<?=DN?>/accomodation" class="">
              <div class="latest-post latest-post-plat waves-effect">
                  <img src="img/Accommodation.jpg" class="img-responsive" alt="sponsor">
                  <h4 style="padding-bottom: 20px;">Accommodation</h4>
                  <!-- <a href="<?=DN?>/accomodation" class="btn btn-primary">Click Here</a> -->
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
            <a href="<?=DN?>/transport" class="">
              <div class="latest-post latest-post-plat waves-effect">
                  <img src="img/Transport (1).jpg" class="img-responsive" alt="">
                  <h4 style="padding-bottom: 20px;">Transport in Kigali</h4>
                  <!-- <a href="<?=DN?>/transport" class="btn btn-primary">Click Here</a> -->
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
            <a href="<?=DN?>/discover" class="">
              <div class="latest-post latest-post-plat waves-effect">
                  <img src="img/discoverrwanda.jpg" class="img-responsive" alt="">
                  <h4 style="padding-bottom: 20px;">Discover Rwanda</h4>
                  <!-- <a href="<?=DN?>/discover" class="btn btn-primary">Click Here</a> -->
              </div>
            </a>
          </div>
        </div>
      </section>



          <!-- Footer -->
          <footer id="footer">
            <?php //include 'views/footer-common.php';?>
      <?php include 'views/footer-colombe.php';?>
          </footer>           
    </div><!--wrapper--> 



      <!-- Scripts -->
      <script src="<?=DN;?>/js/jquery.min.js"></script>
      <script src="<?=DN;?>/js/jquery.scrolly.min.js"></script>
      <script src="<?=DN;?>/js/jquery.scrollex.min.js"></script>
      <script src="<?=DN;?>/js/skel.min.js"></script>
      <script src="<?=DN;?>/js/util.js"></script>
      <!--[if lte IE 8]><script src="<?=DN;?>/js/ie/respond.min.js"></script><![endif]-->
      <script src="<?=DN;?>/js/main.js"></script>
      <script src="<?=DN;?>/js/lightslider.js"></script>
      <script src="<?=DN;?>/js/yk.js"></script>
    
</body>
</html>