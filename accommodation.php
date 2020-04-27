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
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css"  />
    <script src="<?=DNADMIN?>/js/app_signup_form.js"></script>
    <link href="<?=DN?>/css/custom-login.css" rel="stylesheet">
    </head>

    <body id="page-top" class="accommodation">
    <!-- Navigation -->
    <?php include 'views/header-common.php';?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('images/accommodation-slider.jpg')">
        <div class="overlay"></div>
        <div class="container">

            <div class="property-info">

                <span class="property-thumb-info-label" style="visibility: hidden;">
                    <span class="label price">$358,000</span>
                    <span class="label"><a href="#" class="btn-more">More Detail</a></span>
                </span>
                <div class="property-thumb-info-content">
                    <h2><a href="#">Find and book hotel in Rwanda</a></h2>

                    <form method="POST">
                        <div class="br_liste">
                            <div class="form-group input-group">
                                    <select name="location" data-placeholder="Choose Hotel Location" class="form-control chzn-select no-margin sel-locat" tabindex="5">
                                        <option value=""> Search by Hotel name or Location </option>
                                        <optgroup label="KIGALI CITY">KIGALI CITY
                                            <option>Kacyiru</option>
                                        </optgroup>
                                        <optgroup label="WESTERN PROVENCE">WESTERN PROVENCE
                                            <option>Kibuye</option>
                                        </optgroup>
                                        <optgroup label="EASTERN PROVENCE">EASTERN PROVENCE
                                            <option>Rwamagana</option>
                                        </optgroup>
                                        <optgroup label="SOUTHERN PROVENCE">SOUTHERN PROVENCE
                                            <option>Nyanza</option>
                                        </optgroup>
                                        <optgroup label="NORTHERN PROVENCE">NORTHERN PROVENCE
                                            <option>Musanze</option>
                                        </optgroup>
                                    </select>
                            </div>
                            <div class="form-group input-group">
                                <input id="dp1" type="text" class="form-control clickable input-md" id="DtChkIn" placeholder="&#xf133;  Check-In">
                            </div>
                            <div class="form-group input-group">
                                <input id="dp2" type="text" class="form-control clickable input-md" id="DtChkOut" placeholder="&#xf133;  Check-Out">
                            </div>



                            <!-- <div class="form-group input-group col-lg-5 col-md-5 col-xs-12 float-lefto">
                                <span class="input-group-addon no-border-radius">Price</span>
                                <div class="form-control no-margin no-border-radius no-padding-up-down">
                                    <div class="col-lg-12 no-padding">
                                        <div class="panel panel-success no-border">
                                            <div class="panel-body no-padding slider-price-sea">
                                                    <div class="layout-slider" >
                                                        <input id="Slider2"  name="pricerange" value="50;200" />
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="app">
                                <div class='input-group date' id=''>
                                    <input type='text' class="form-control datepicker form-control" v-model="value" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                            </div> -->
                            <div class="form-group input-group ">
                                <!-- <span class="input-group-addon no-border-radius">Star Rating</span>
                                <div class="star-rating-sea" style="">
                                    <div class="starRating">
                                        <div>
                                            <div>
                                                <div>
                                                    <div>
                                                        <input id="rating1" type="radio" name="starrating" value="1">
                                                        <label for="rating1"><span>1</span></label>
                                                    </div>
                                                    <input id="rating2" type="radio" name="starrating" value="2" checked>
                                                    <label for="rating2"><span>2</span></label>
                                                </div>
                                                <input id="rating3" type="radio" name="starrating" value="3">
                                                <label for="rating3"><span>3</span></label>
                                            </div>
                                            <input id="rating4" type="radio" name="starrating" value="4">
                                            <label for="rating4"><span>4</span></label>
                                        </div>
                                        <input id="rating5" type="radio" name="starrating" value="5">
                                        <label for="rating5"><span>5</span></label>
                                    </div>
                                </div> -->
                                    <input type="submit" class="main-search-botton form-control btn btn-success search-btn" value="Find Hotels" name="mainsearch" style="" />
                            </div>
                        </div>
                    </form>
                    <?php 
                        $hidden = 0;
                        if ($hidden != 0) {
                    ?>
                    <div class="col-xs-6 col-sm-2 no-padding-left">
                        <div class="form-group">
                            <label class="sr-only" for="location">Choose Hotel Location</label>
                            <!-- <input class="form-control" type="text" data-placeholder="Location"> -->
                            <select id="location" name="location" data-placeholder="Choose Hotel Location" class="chosen-select" style="display: none;">
                                <option selected="selected" value="Location">Choose Hotel Location</option>
                                <option value="United States">United States</option>
                            </select><div class="chosen-container chosen-container-single" style="width: 165px;" title="" id="location_chosen"><a class="chosen-single chosen-default" tabindex="-1"><span>Choose Hotel Location</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-2 no-padding-left">
                        <div class="form-group">
                            <label class="sr-only" for="location">Location</label>
                            <select id="location" name="location" data-placeholder="Location" class="chosen-select" style="display: none;">
                                <option selected="selected" value="Location">Min Price</option>
                                <option value="United States">United States</option>
                            </select><div class="chosen-container chosen-container-single" style="width: 165px;" title="" id="location_chosen"><a class="chosen-single" tabindex="-1"><span>Min Price</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-2 no-padding-left">
                        <div class="form-group">
                            <label class="sr-only" for="location">Location</label>
                            <select id="location" name="location" data-placeholder="Location" class="chosen-select" style="display: none;">
                                <option selected="selected" value="Location">Max Price</option>
                                <option value="United States">United States</option>
                            </select><div class="chosen-container chosen-container-single" style="width: 165px;" title="" id="location_chosen"><a class="chosen-single" tabindex="-1"><span>Max Price</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-2 no-padding-left">
                        <div class="form-group">
                            <label class="sr-only" for="location">Check in</label>
                            <select id="location" name="location" data-placeholder="Location" class="chosen-select" style="display: none;">
                                <option selected="selected" value="Location">Check in</option>
                                <option value="United States">United States</option>
                            </select><div class="chosen-container chosen-container-single" style="width: 165px;" title="" id="location_chosen"><a class="chosen-single" tabindex="-1"><span>Check in</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-2 no-padding-left">
                        <div class="form-group">
                            <label class="sr-only" for="location">Check out</label>
                            <select id="location" name="location" data-placeholder="Location" class="chosen-select" style="display: none;">
                                <option selected="selected" value="Location">Check in</option>
                                <option value="United States">United States</option>
                            </select><div class="chosen-container chosen-container-single" style="width: 165px;" title="" id="location_chosen"><a class="chosen-single" tabindex="-1"><span>Check in</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-2 no-padding-left">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Find your home</button>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                    <p style="visibility: hidden;">Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium.</p>
                </div>
            </div>




            <!--<div class="row">
                <div class="col-lg-10 col-md-10 col-12 mx-auto home-content">
                    <div class="site-heading">
                        <h1>Plan your trip in Rwanda</h1>
                    </div>
                    <div class="d-none d-sm-none d-md-block d-lg-block">
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
                    </div>
                </div>
            </div>-->
    </header>

    <!-- Main Content -->

    <div class="container">
        <div class="row my-5 py-5">
            <div class="col-md-12">
                <div class="section-header mb-4">
                    <div class="section-title float-left">
                        <h2>Popular cities</h2>
                        <p>See the top destinations people are traveling to</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cities">
                <div class="card h-100">
                    <a href="#">
                        <img class="card-img-top" src="images/visa.jpg" alt="">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title news-title">
                    <a href="#">Kigali</a>
                  </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cities">
                <div class="card h-100">
                    <a href="#">
                        <img class="card-img-top" src="images/accommodation.jpg" alt="">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title news-title">
                    <a href="#">Rubavu</a>
                  </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cities">
                <div class="card h-100">
                    <a href="<?=DN;?>/transport">
                        <img class="card-img-top" src="images/transport.jpg" alt="">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title news-title">
                    <a href="<?=DN;?>/transport">Musanze</a>
                  </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cities">
                <div class="card h-100">
                    <a href="<?=DN;?>/discover">
                        <img class="card-img-top" src="images/discoverrwanda.jpg" alt="">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title news-title">
                    <a href="<?=DN;?>/discover">Kibuye</a>
                  </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cities">
                <div class="card h-100">
                    <a href="<?=DN;?>/discover">
                        <img class="card-img-top" src="images/discoverrwanda.jpg" alt="">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title news-title">
                    <a href="<?=DN;?>/discover">Nyanza</a>
                  </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cities">
                <div class="card h-100">
                    <a href="<?=DN;?>/discover">
                        <img class="card-img-top" src="images/discoverrwanda.jpg" alt="">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title news-title">
                    <a href="<?=DN;?>/discover">Rwamagana</a>
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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="<?=DN;?>/js/custom.js"></script>




    <script type="text/javascript">
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dp1').datepicker({

            beforeShowDay: function(date) {
                return date.valueOf() >= now.valueOf();
            },
            autoclose: true

        }).on('changeDate', function(ev) {
            if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

                var newDate = new Date(ev.date);
                newDate.setDate(newDate.getDate() + 1);
                checkout.datepicker("update", newDate);

            }
            $('#dp2')[0].focus();
        });

        var checkout = $('#dp2').datepicker({
            beforeShowDay: function(date) {
                if (!checkin.datepicker("getDate").valueOf()) {
                    return date.valueOf() >= new Date().valueOf();
                } else {
                    return date.valueOf() > checkin.datepicker("getDate").valueOf();
                }
            },
            autoclose: true

        }).on('changeDate', function(ev) {});
    </script>





</body>

</html>