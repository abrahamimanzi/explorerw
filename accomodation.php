<?php include 'admin/core/init.php';?>
<?php
$success = false;
$error = false;
$nosubNav = true;
?> 
<!DOCTYPE html>
<html>
    <style>
        .fa-star{
            color: #f78e20!important;
            /*background:  #f78e20!important;*/
            font-size: 17px!important;
            padding: 1px;
        }
    </style>
<head>
    <?php include 'includes/head-common.php';?>
    <title>Accommodation - Transform Africa Summit 2018</title>   
    
    <link rel="stylesheet" href="intlTelInput/build/css/intlTelInput.css">
    <script src="intlTelInput/build/js/intlTelInput.js"></script>

    <link href="css/style.css" rel="stylesheet">
</head>
<body class="home page page-id-2">
    <?php include 'views/header-mc.php';?> 

  <!--===========================================
=            Popular deals section            =
============================================-->
  <div class="container-fluid nav-top-mc">
          <div class="row">
              <img class="img img-responsive" src="<?=DN?>/img/accommodation-banner.jpg" style="width:100%"/>
          </div>
      </div>
  <section class="popular-deals section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <div class="w3_tittle second two"><h3 class="agile-tittle two gal">Accommodation</h3> 
              <div class="line-style second"><span class="second"></span></div>
            </div>
            <p class="text-default text-introduction">Transform Africa Summit official hotel booking are managed by our accommodation partner.</p>

            <p class="text-default text-introduction">Use the link below to access the site</p>

            <p class="text-default text-introduction">*Please note that the conference shuttle service will only serve the hotels listed on this site.</p>

            <p class="text-default text-introduction">
            <a href="https://www.gotravelcart.com//B2C/Admin/GTC/EventInfoCart.aspx?Ref_Type=HTL&CID=52&CityCode=KGL&EventName=TRANSFORM%20AFRICA%20SUMMIT%202018&SSr=EVTHL#">[Click here to book your accommodation.]</a>
            </p>

            <!-- <p class="text-default text-introduction">Delegates will have access to preferential hotel rates once registration is complete. </p>

            <p class="text-default text-introduction">You will receive an email with a link to book your hotel upon receipt of your confirmation email.</p> -->
            <!-- <br /> -->
            <!-- <p class="text-default text-introduction">Click here to register for the summit.</p> -->
            <!-- <a href="<?=DN?>/register"><button style="margin: 0px;" class="button btn-inv">Click here to register to attend the summit</button></a> -->
          
          </div>
        </div>
      </div>
  </section>

  <!-- footer -->
      <?php include 'views/footer-colombe.php';?>
      <!-- //footer -->
</div>
  <!--wrapper--> 
          
</body>
</html>