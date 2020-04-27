<?php include 'admin/core/init.php';?>
<?php
$success = false;
$error = false;
$nosubNav = true;

if(isset($_POST['register_submited'])){
    $prfx = 'register-';
    $get_str = "?webToken=1&request=register-new";
    foreach($_POST as $index=>$val){
        $ar = explode($prfx,$index);
        if(count($ar)){
            $_EDIT[end($ar)] = $val;
            if(!empty($ar[1])){
                $get_str .= '&participant-'.@$ar[1].'='.urlencode($val);
            }
        }
    }
//    echo $get_str;
    header("LOCATION: ".DNADMIN."/testapi.php".$get_str);
    exit();
  }
?> 
<!DOCTYPE html>
<html lang="en">

  <head>
    <title>TAS2018</title>
    <?php include 'includes/head-common.php';?>
    <link href="css/style.css" rel="stylesheet">
    <!-- flexslider -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <!-- //flexslider -->
    <!-- Owl-Carousel-CSS --> <link rel="stylesheet" href="css/owl.carousel.css"   type="text/css" media="all">
    <!-- //stylesheet -->
    <script type='text/javascript' src="<?=DN?>/js/jquery.js"></script>
    <script type='text/javascript' src="<?=DN?>/bootstrap/js/bootstrap.min.js"></script> 
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <?php include 'views/header-mc.php';?>
    <div id="wrapper" class="home nav-top-mc">
      <div class="container-fluid">
          <div class="row">
              <img class="img img-responsive" src="<?=DN?>/img/register-banner.jpg" style="width:100%"/>
          </div>
      </div>

      <section class="bg-f0">
        <div class="container-fluid">
          <div class="container col-mc-box">
            <div id="other" >
              <div class="w3_tittle second two"><h3 class="agile-tittle two gal reg reg-box-title">Get the pass that suits you</h3> 
                <div class="line-style second"><span class="second"></span></div>
              </div>
              <div class="col-md-12 col-mc-box">
                <div class="col-md-12 col-mc-box">
                  <a class="btn btn-program-mc-box box-1" href="<?=DN?>/register-invite">Does your company need an invite? Get it here.</a>
                </div>
                <div class="col-md-12 col-mc-box">
                  <a class="btn btn-program-mc-box box-2" href="<?=DN?>/register">No need for an invite? Register directly here.</a>
                </div>
                <div class="col-md-12 col-mc-box">
                  <a class="btn btn-program-mc-box box-3" href="<?=DN?>/register">Government or media? Apply for your pass here.</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="accreditation" style="padding: 0 0 3rem 0;">
        <div class="container">
          <div class="w3_tittle second two"><h3 class="agile-tittle two gal reg"> Registration &amp; Accreditation Deadlines</h3> 
            <div class="line-style second over-title"><span class="second"></span></div>
          </div>
          <div class="col-md-6 col-sm-6 man-grid">
            <ul>
              <li>
                <i class="fa fa-square" aria-hidden="true"></i>International Delegates
                <p><i class="fa fa-long-arrow-right"></i> Registration closes: <span class="border-orange-color">3 May 2018</span></p>
                <p><i class="fa fa-long-arrow-right"></i> Accreditation opens: <span class="border-light-blue-color">3 May 2018</span></p>
                <p><i class="fa fa-long-arrow-right"></i> Accreditation closes: <span class="border-blue-color">9 May 2018</span></p>
              </li>
            </ul>
          </div>

          <div class="col-md-6 col-sm-6 man-grid">
            <ul>
              <li>
                <i class="fa fa-square" aria-hidden="true"></i>Local Delegates (Rwanda Residents)
                <p><i class="fa fa-long-arrow-right"></i> Registration closes: <span class="border-orange-color">3 May 2018</span></p>
                <p><i class="fa fa-long-arrow-right"></i> Accreditation opens: <span class="border-light-blue-color">3 May 2018</span></p>
                <p><i class="fa fa-long-arrow-right"></i> Accreditation closes: <span class="border-blue-color">5 May 2018</span></p>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- footer -->
      <?php include 'views/footer-colombe.php';?>
      <!-- //footer -->
    </div>

</body>

</html>