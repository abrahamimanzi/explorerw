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
          <div class="container">
        <div id="other" >
          <div class="w3_tittle second two"><h3 class="agile-tittle two gal reg">Get the pass that suits you</h3> 
            <div class="line-style second"><span class="second"></span></div>
          </div>
          <div class="col-sm-12">
            <p class="text-center text-default text-introduction">Join over 4,000 visitors at the Transform Africa Summit and network with like minded industry players transforming the ICT sector in Africa. Engage with innovators, pioneers &amp; leaders from both the public &amp; private sector not only from Africa, but across the globe.</p>

            <div class="col-md-4 col-sm-4">
              <a href="<?=DN?>/corporate-pass" class="a-box">
                <div class="welcome-section text-center waves-effect">
                    <img src="img/corporate.jpg" class="img-responsive" alt="..">
                    <h4>Corporate Package</h4>
                    <div class="border"></div>
                    <p>Enjoy discounts & extra benefits for your corporate team of 5 delegates or more. Applicable to Gold & Platinum categories only.</p><br/>
                    <a href="<?=DN?>/corporate-pass" class="btn btn-primary">Get your pass</a>
                </div>
              </a>
            </div>
              
            <div class="col-md-4 col-sm-4">
              <a href="<?=DN?>/register-pass" class="a-box">
                <div class="welcome-section text-center waves-effect">
                    <img src="img/individual.jpg" class="img-responsive" alt="..">
                    <h4>Individual Passes</h4>
                    <div class="border"></div>
                    <p>Click here to register for a Silver, Gold or Platinum Pass as an individual.</p><br/><br/>
                    <a href="<?=DN?>/register-pass" class="btn btn-primary">Get your pass</a>
                </div>
              </a>
            </div>
              
            <div class="col-md-4 col-sm-4">
              <a href="<?=DN?>/register-smart-africa-member" class="a-box">
                <div class="welcome-section text-center waves-effect">
                    <img src="img/smart-africa.jpg" class="img-responsive" alt="..">
                    <h4>Smart Africa Private Sector</h4>
                    <div class="border"></div>
                    <p>If your country or company is a Smart Africa member, please click here to get in touch with the Smart Africa team so you can access your membership benefits.</p>
                    <a href="<?=DN?>/register-smart-africa-member" class="btn btn-primary">Get your pass</a>
                </div>
              </a>
            </div>

            <div class="col-md-4 col-sm-4">
              <a href="<?=DN?>/register-gov" class="a-box">
                <div class="welcome-section text-center waves-effect">
                    <img src="img/gov.jpg" class="img-responsive" alt="..">
                    <h4>Government</h4>
                    <div class="border"></div>
                    <p>If you are a Government Official, please click here to get in touch with the Smart Africa team who will follow appropraite protocol to assist.</p><br/>
                    <a href="<?=DN?>/register/government" class="btn btn-primary">Get your pass</a>
                </div>
              </a>
            </div>
              
            <div class="col-md-4 col-sm-4">
              <a href="<?=DN?>/register/media" class="a-box">
                <div class="welcome-section text-center waves-effect">
                    <img src="img/media.jpg" class="img-responsive" alt="..">
                    <h4>Media</h4>
                    <div class="border"></div>
                     <p>If you are a member of the media and would like to attend summit, please click here to apply for a pass.</p><br/>
                     <a href="<?=DN?>/register/media" class="btn btn-primary">Get your pass</a>
                </div>
              </a>
            </div>
              
            <div class="col-md-4 col-sm-4">
              <a href="<?=DN?>/register/visitor" class="a-box">
                <div class="welcome-section text-center waves-effect">
                    <img src="img/visitor.jpg" class="img-responsive" alt="..">
                    <h4>Exhibition Visitor / Students </h4>
                    <div class="border"></div>
                    <p>Free exhibition passes are available to students, academia, ICT related incubation hub tenants amongst others. Subject to availability. Apply here.</p>
                    <a href="<?=DN?>/register/visitor" class="btn btn-primary">Get your pass</a>
                </div>
              </a>
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