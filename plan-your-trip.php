<?php 
include 'admin/core/init.php';
require_once 'app/controller-login.php'; 
if($session_subscriber->isLoggedIn()){ 
    // Redirect::to(DN.'/net'); 
     
    // Redirect::to(DN.'/net'); 
}?>
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
    <title>Explore Rwanda  - Official travel guide to Rwanda</title>
    <?php include 'includes/head-common.php';?>
    <link rel='stylesheet' href="<?=DNADMIN?>/css/app_login_form.css"  />
    <script src="<?=DNADMIN?>/js/app_signup_form.js"></script>
    <link href="<?=DN?>/css/custom-login.css" rel="stylesheet">
    </head>

    <body id="page-top" class="plan">
    <!-- Navigation -->
    <?php include 'views/header-common.php';?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('images/homeback.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-12 mx-auto home-content">
                    <div class="site-heading">
                        <h1>Plan your trip in Rwanda</h1>
                    </div>
                    <!--<div class="d-none d-sm-none d-md-block d-lg-block">
                        <div class="row">
                            <div class="col-md-2 col-12">
                                <div class="service-icon">
                                    <a href="government">
                                        <i class="flaticon flaticon-government"></i>
                                    </a>
                                    <span>Government</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="service-icon">
                                    <a href="embassies">
                                        <i class="flaticon flaticon-print"></i>
                                    </a>
                                    <span>Embassies</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="service-icon">
                                    <i class="flaticon flaticon-bus-1"></i>
                                    <span>Transports</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="service-icon">
                                    <a href="agriculture.html">
                                        <i class="flaticon flaticon-agriculture"></i>
                                    </a>
                                    <span>Agriculture</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="service-icon">
                                    <i class="flaticon-destination"></i>
                                    <span>Tourism</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="service-icon">
                                    <i class="flaticon flaticon-care"></i>
                                    <span>Health Care</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="service-icon">
                                    <a href="agriculture.html">
                                        <i class="flaticon flaticon-debt"></i>
                                    </a>
                                    <span>Business & finance</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="service-icon">
                                    <i class="flaticon flaticon-policeman"></i>
                                    <span>security & safety</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="service-icon">
                                    <a href="agriculture.html">
                                        <i class="flaticon flaticon-education"></i>
                                    </a>
                                    <span>Education</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="service-icon">
                                    <a href="agriculture.html">
                                        <i class="flaticon flaticon-bicycle"></i>
                                    </a>
                                    <span>Sports Services</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="service-icon">
                                    <i class="flaticon flaticon-group"></i>
                                    <span>Gov Programs</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="service-icon">
                                    <a href="agriculture.html">
                                        <i class="flaticon flaticon-checklist"></i>
                                    </a>
                                    <span>Other Services</span>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
    </header>

    <!-- Main Content -->

    <div class="container">
        <div class="row my-5 py-5">
            <div class="col-md-12">
                <div class="section-header mb-4">
                    <div class="section-title float-left">
                        <h2 class="two-line">Get all the information you need regarding visas, lodging, travel and tourism while here in Rwanda.</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <a href="<?=DN;?>/visa">
                        <img class="card-img-top" src="images/visa.jpg" alt="">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title news-title">
                    <a href="<?=DN;?>/visa">Visas & Vaccinations</a>
                  </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <a href="<?=DN;?>/accommodation">
                        <img class="card-img-top" src="images/accommodation.jpg" alt="">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title news-title">
                    <a href="<?=DN;?>/accommodation">Accommodation</a>
                  </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <a href="<?=DN;?>/transport">
                        <img class="card-img-top" src="images/transport.jpg" alt="">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title news-title">
                    <a href="<?=DN;?>/transport">Transport in Rwanda</a>
                  </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <a href="<?=DN;?>/discover">
                        <img class="card-img-top" src="images/discoverrwanda.jpg" alt="">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title news-title">
                    <a href="<?=DN;?>/discover">Discover Rwanda</a>
                  </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? </p>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="container">
                    <div class="col-md-12">
                        <button class="btn btn-primary">
                            More Blogs & News <i class="icon icon-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="">
        <div class="row m-0 partner_media" style="box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.05);">
            <div class="col-md-3 col-12">
                <img src="./images/partner1.png" class="client-logo img-fluid">
            </div>
            <div class="col-md-3 col-12">
                <img src="./images/partner2.png" class="client-logo img-fluid">
            </div>
            <div class="col-md-3 col-12">
                <img src="./images/partner3.png" class="client-logo img-fluid">
            </div>
            <div class="col-md-3 col-12">
                <img src="images/partner4.png" class="client-logo img-fluid">
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include 'views/footer-common.php';?>
    <!-- //footer -->


    <!-- Bootstrap core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="<?=DN;?>/vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?=DN;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=DN;?>/vendor/slick/slick.js" type="text/javascript"></script>

    <!-- Custom scripts for this template -->
    <script src="<?=DN;?>/js/custom.js"></script>









</body>

</html>