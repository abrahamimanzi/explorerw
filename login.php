<?php   
require_once 'admin/core/init.php'; 
require_once 'app/controller-login.php'; 
if($session_subscriber->isLoggedIn()){ 
	// Redirect::to(DN.'/net');
    
    Redirect::to(DN.'/');   
}?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <?php include 'includes/head-common.php';?>
    <?php // include 'includes/head-common-h.php';?>
    <title>Explore Rwanda  - Official travel guide to Rwanda</title>
    <!-- <link rel='stylesheet' href="<?=DN?>/css/other.css"  /> -->
    <!-- <link rel='stylesheet' href="<?=DNADMIN?>/css/app.css"  /> -->
    <link rel='stylesheet' href="<?=DNADMIN?>/css/app_login_form.css"  />
    <script src="<?=DNADMIN?>/js/app_signup_form.js"></script>
    <link href="<?=DN?>/css/custom-login.css" rel="stylesheet">
    <style type="text/css">
        hr{
            width: -webkit-fill-available !important;
        }
    </style>
</head>
<body class="home page page-id-2">
    
    <?php include 'views/header-common.php';?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?=DN?>/images/homeback.jpg'); margin-bottom: 0;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 mx-auto home-content">
                    <div class="site-heading">

                <?php 
                    if(Input::checkInput('request','get','1')){
                        $post_request = Input::get('request','get');
                        switch($post_request){
                            case 'resetpassword':
                                include 'views/login/login-resetpassword'.P;
                                break; 
                            case 'forgotpassword':
                                include 'views/login/login-forgotpassword'.P;
                                break;   
                            default:
                                include 'views/login/login-form'.P;
                            break;
                        }
                    }?>
                        <!-- <h1>Welcome to Rwanda</h1>
                        <span class="subheading">How can we help you?</span>
                        <div class="col-md-8 mx-auto my-5">
                            <div class="input-group">
                                <input type="" class="form-control" name="">
                                <div class="input-group-append">
                                    <button class="btn btn-success search-btn" id="autocomplete" type="button"><i class="icon icon-search"></i>Search</button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- <div class="d-none d-sm-none d-md-block d-lg-block">
                        <div class="row">
                            <div class="col-md-2 col-12">
                                <div class="service-icon">
                                    <a href="government.html">
                                        <i class="flaticon flaticon-government"></i>
                                    </a>
                                    <span>Government</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="service-icon">
                                    <a href="embassy.html">
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
                    </div> -->
                </div>
            </div>
    </header>
    
	
    <!--wrapper-->

    <!-- Scripts -->
    <!-- <script src="<?=DN;?>/js/jquery.min.js"></script>
    <script src="<?=DN;?>/js/jquery.scrolly.min.js"></script>
    <script src="<?=DN;?>/js/jquery.scrollex.min.js"></script>
    <script src="<?=DN;?>/js/skel.min.js"></script>
    <script src="<?=DN;?>/js/util.js"></script> -->
    <!--[if lte IE 8]><script src="<?=DN;?>/js/ie/respond.min.js"></script><![endif]-->
    <!-- <script src="<?=DN;?>/js/main.js"></script>
    <script src="<?=DN;?>/js/lightslider.js"></script>
    <script src="<?=DN;?>/js/yk.js"></script> -->



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

