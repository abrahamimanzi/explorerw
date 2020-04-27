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

    <body id="page-top" class="embassy">
        <!-- Navigation -->
        <?php include 'views/header-common.php';?>

        <!-- Page Header -->
        <header class="masthead" style="background:#000;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-12 mx-auto home-content">
                        <div class="site-heading">
                            <h1 style="line-height: 50px;">Embassy of <br> Rwanda in Germany </h1>
                            <div class="emb-flag">
                                <i class="flag-icon flag-icon-rw"></i>
                                <img src="./images/mixer.png" width="25px;">
                                <i class="flag-icon flag-icon-de"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="row m-0 icon-embassy-list">
            <div class="container mx-auto row">
                <div class="col-md-2 col-4">
                    <div class="service-icon">
                        <i class="flaticon flaticon-print"></i>
                        <span>Apply For Visa</span>
                    </div>
                </div>

                <div class="col-md-2 col-4">
                    <div class="service-icon">
                        <i class="flaticon flaticon-debt"></i>
                        <span>Working Visa</span>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="service-icon">
                        <i class="flaticon flaticon-destination"></i>
                        <span>Visitors</span>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="service-icon">
                        <i class="flaticon flaticon-id-card-1"></i>
                        <span>Citizenship</span>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="service-icon">
                        <i class="flaticon flaticon-group"></i>
                        <span>Refugees & asylum</span>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="service-icon" style="border-right: none;">
                        <i class="flaticon flaticon-open-book"></i>
                        <span>study in Rwanda</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="container py-5">
            <div class="section-header">
                <div class="section-title float-left">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>About the Governement</h2>
                            <p class="normal-embassy">
                                The Republic of Rwanda is the first country to offer e-Residency, a government issued digital identity that empowers entrepreneurs around the world to set up and run a location-independent business.The Republic of Rwanda is the first country to offer e-Residency, a government issued digital identity that empowers entrepreneurs around the world to set up and run a location-independent business.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="normal-embassy">
                                The Republic of Rwanda is the first country to offer e-Residency, a government issued digital identity that empowers entrepreneurs around the world to set up and run a location-independent business.The Republic of Rwanda is the first country to offer e-Residency, a government issued digital identity that empowers entrepreneurs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="bg-light">
            <div class="row m-0">
                <div class="col-md-6 left-invest">
                    <h2 class="c-presidency__title pb-4">Apply for a Visa</h2>
                    <div class="bullets-lines">
                        <span class="icon_feat">
                              <i class="icon icon-check"></i>
                          </span>
                        <h6>Two Passport Photo</h6>
                        <div class="side_icon_box_content">
                            The reasons for the failure of a transaction are usually associated with insufficient funds,
                        </div>
                    </div>
                    <div class="bullets-lines">
                        <span class="icon_feat">
                              <i class="icon icon-check"></i>
                          </span>
                        <h6>Invitations Later</h6>
                        <div class="side_icon_box_content">
                            The reasons for the failure of a transaction are usually associated with insufficient funds,
                        </div>
                    </div>
                    <div class="bullets-lines">
                        <span class="icon_feat">
                              <i class="icon icon-check"></i>
                          </span>
                        <h6>Financial Papers</h6>
                        <div class="side_icon_box_content">
                            The reasons for the failure of a transaction are usually
                        </div>
                    </div>
                    <a href="embassy-form.html">
                        <button class="btn btn-outline my-3">Get Started</button>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12 p-0">
                            <img src="images/embassy.jpg" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <div class="container">
            <div class="row my-5 py-5">
                <div class="col-md-12">
                    <div class="section-header mb-4">
                        <div class="section-title float-left">
                            <h2>Blogs & News</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="images/blog1.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title news-title">
                        <a href="#">Jack ma In Kigali</a>
                      </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="images/blog2.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title news-title">
                        <a href="#">Smart Cities Session</a>
                      </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="images/blog3.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title news-title">
                        <a href="#">Car free Days</a>
                      </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? </p>
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