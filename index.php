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
    <header class="masthead" style="background-image: url('images/homeback.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-12 mx-auto home-content">
                    <div class="site-heading">
                        <h1>Welcome to Rwanda</h1>
                        <span class="subheading">How can we help you?</span>
                        <div class="col-md-8 mx-auto my-5">
                            <div class="input-group">
                                <input type="" class="form-control" name="">
                                <div class="input-group-append">
                                    <button class="btn btn-success search-btn" id="autocomplete" type="button"><i class="icon icon-search"></i>Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-sm-none d-md-block d-lg-block">
                        <div class="row">
                            <div class="col-md-2 col-12">
                                <div class="service-icon">
                                    <a href="<?=DN;?>/government">
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
                                    <a href="<?=DN;?>/transport">
                                    <i class="flaticon flaticon-bus-1"></i>
                                    <span>Transports</span>
                                    </a>
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
                    </div>
                </div>
            </div>
    </header>

    <!-- Main Content -->

    <div class="container">
        <div class="section-header">
            <div class="section-title float-left">
                <h2>Citizens Services </h2>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-12 row mb-5">
                <div class="col-12 col-md-4">
                    <div class="serviceInfo">
                        <b>Birth certificate</b>
                        <p>Parenting, civil partnerships, divorce and Lasting Power of Attorney</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="serviceInfo">
                        <b>Money and tax</b>
                        <p>Parenting, civil partnerships, divorce and Lasting Power of Attorney</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="serviceInfo">
                        <b>Environment and natural resources</b>
                        <p>Parenting, civil partnerships, divorce and Lasting Power of Attorney</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="serviceInfo">
                        <b>Citizenship and living in the Rwanda</b>
                        <p>Citizenship and living in the Rwanda, divorce and Lasting Power of Attorney</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="serviceInfo">
                        <b>National security and defence</b>
                        <p>Parenting, civil partnerships, divorce and Lasting Power of Attorney</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="serviceInfo">
                        <b>Childcare and parenting</b>
                        <p>Parenting, civil partnerships, divorce and Lasting Power of Attorney</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="serviceInfo">
                        <b>Culture, history and sport</b>
                        <p>Parenting, civil partnerships, divorce and Lasting Power of Attorney</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="serviceInfo">
                        <b>Doing business with government</b>
                        <p>Parenting, civil partnerships, divorce and Lasting Power of Attorney</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="serviceInfo">
                        <b>International trade and investment</b>
                        <p>Parenting, civil partnerships, divorce and Lasting Power of Attorney</p>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="col-md-12">
                            <button class="btn btn-primary">
                                More Services <i class="icon icon-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section id="domain-hosting" class="bg-light">
        <div class="container visit-content">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="c-presidency__title">Visit Rwanda</h2>
                    <p>Known as the land of a thousand hills, Rwanda’s stunning scenery and warm, friendly people offer unique experiences in one of the most remarkable countries in the world. It is blessed with extraordinary biodiversity, with incredible wildlife living throughout its volcanoes, montane rainforest and sweeping plains.</p>
                    <button class="btn btn-outline my-3">Discover More</button>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row my-5 py-5">
            <div class="col-md-12">
                <div class="section-header mb-4">
                    <div class="section-title float-left">
                        <h2>Press Room</h2>
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