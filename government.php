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

    <body id="page-top">
        <!-- Navigation -->
        <?php include 'views/header-common.php';?>

        <!-- Page Header -->
        <header class="masthead" style="background:#000;margin-bottom:0px;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-12 mx-auto home-content">
                        <div class="site-heading">
                            <h1 style="line-height: 50px;">Republic Of Rwanda</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content -->
        <section class="statistics mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 stat-list">
                        <strong>17</strong>
                        <p>Ministries</p>
                    </div>
                    <div class="col-md-3 stat-list">
                        <strong>031</strong>
                        <p>Embassies</p>
                    </div>
                    <div class="col-md-3 stat-list">
                        <strong>041</strong>
                        <p>Local Government</p>
                    </div>
                    <div class="col-md-3 stat-list" style="border-right:none;">
                        <strong>60</strong>
                        <p>District</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main Content -->
        <div class="container">

            <div class="row my-5">
                <div class="col-md-4">
                    <div class="card card-10">
                        <img src="./images/paul.jpg" class="img img-responsive">
                        <div class="card-name">
                            <span class="name">H.E Paul Kagame</span>
                            <span class="title">The President of Republic of RWANDA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="section-header">
                        <div class="section-title float-left">
                            <h2>About the Government</h2>
                        </div>
                    </div>
                    <p class="normal-embassy">
                        The Republic of Rwanda is the first country to offer e-Residency, a government issued digital identity that empowers entrepreneurs around the world to set up and run a location-independent business.The Republic of Rwanda is the first country to offer e-Residency, a government issued digital identity that empowers entrepreneurs around the world to set up and run a location-independent business.
                    </p>
                    <p class="normal-embassy">
                        The Republic of Rwanda is the first country to offer e-Residency, a government issued digital identity that empowers entrepreneurs around the world to set up and run a location-independent business.The Republic of Rwanda is the first country to offer e-Residency, a government issued digital identity that empowers entrepreneurs around the world to set up and run a location-independent business.
                    </p>
                    <p class="normal-embassy">
                        The Republic of Rwanda is the first country to offer e-Residency, a government issued digital identity that empowers
                    </p>
                </div>
            </div>
            <div class="section-header">
                <div class="section-title float-left">
                    <h2>25 Ministries</h2>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-12 row mb-5">
                    <div class="col-12 col-md-4">
                        <div class="serviceInfo">
                            <b>MINAGRI</b>
                            <p>Ministry of Agriculture and Animal Resources</p>
                            <a href="agriculture.html" class="mini_link">http://www.minagri.gov.rw/</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="serviceInfo">
                            <b>MITEC</b>
                            <p>Ministry of ICT and Innovation</p>
                            <a href="#" class="mini_link">http://minict.gov.rw/home/</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="serviceInfo">
                            <b>MINAFET</b>
                            <p>Ministry of Foreign Affairs and Cooperation</p>
                            <a href="#" class="mini_link">http://www.minaffet.gov.rw/</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="serviceInfo">
                            <b>MINISANTE</b>
                            <p>Minsitry of Health</p>
                            <a href="#" class="mini_link">http://www.moh.gov.rw</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="serviceInfo">
                            <b>MINADEF</b>
                            <p>Ministry of Defence</p>
                            <a href="#" class="mini_link">http://minict.gov.rw/home/</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="serviceInfo">
                            <b>MINECOFIN</b>
                            <p>Ministry of Finance and Economic Planning</p>
                            <a href="#" class="mini_link">http://www.minecofin.gov.rw</a>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-md-12">
                            <center>
                                <button class="btn btn-primary">
                                    Discover More <i class="icon icon-arrow-right"></i>
                                </button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="section-header">
                <div class="section-title float-left">
                    <h2>35 Embassies</h2>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-12 row mb-5">
                    <div class="col-12 col-md-4 p-0">
                        <div class="serviceInfo">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="float-left left-icon">
                                        <i class="flag-icon flag-icon-de"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <b>Embassy of  Rwanda in Germarny</b>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-0">
                        <div class="serviceInfo">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="float-left left-icon">
                                        <i class="flag-icon flag-icon-ar"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <b>Embassy of Rwanda in Argentina</b>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-0">
                        <div class="serviceInfo">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="float-left left-icon">
                                        <i class="flag-icon flag-icon-br"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <b>Embassy of Rwanda in Brazil</b>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-0">
                        <div class="serviceInfo">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="float-left left-icon">
                                        <i class="flag-icon flag-icon-gb"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <b>Embassy of  Rwanda in UK</b>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-0">
                        <div class="serviceInfo">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="float-left left-icon">
                                        <i class="flag-icon flag-icon-fr"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <b>Embassy of Rwanda in France</b>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-0">
                        <div class="serviceInfo">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="float-left left-icon">
                                        <i class="flag-icon flag-icon-us"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <b>Embassy of Rwanda in Germarny</b>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-md-12">
                            <center>
                                <button class="btn btn-primary">
                                    Discover More <i class="icon icon-arrow-right"></i>
                                </button>
                            </center>
                        </div>
                    </div>
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