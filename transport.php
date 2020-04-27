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

    <body id="page-top" class="transport">
        <!-- Navigation -->
        <?php include 'views/header-common.php';?>

        <!-- Page Header -->
        <header class="masthead" style="background-image: url('images/homeback.jpg');margin-bottom: 0px;padding-bottom: 3rem;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-12 mx-auto home-content">
                        <div class="site-heading">
                            <h1>Rwanda Transport:</h1>
                            <h1>Getting Around in Rwanda</h1>
                            <p class="subheading">Whether you are in Rwanda as a visitor, tourist or a newly relocated person, you will need to familiarize yourself with the means of transport in Rwanda. Typically, they are three common means of transport which are public transport, Motor-taxi, and motorbikes.</p>
                            
                        </div>
                        
                    </div>
                </div>
        </header>
        <div class="row m-0 icon-transport-list">
            <div class="container mx-auto row">
                <div class="col-md-3 col-3">
                    <div class="service-icon tablinks" id="defaultOpen" onclick="openTab(event, 'car')">
                        <i class="flaticon flaticon-print"></i>
                        <span>By Car</span>
                    </div>
                </div>

                <div class="col-md-3 col-3">
                    <div class="service-icon tablinks" onclick="openTab(event, 'taxi')">
                        <i class="flaticon flaticon-debt"></i>
                        <span>By Taxi</span>
                    </div>
                </div>
                <div class="col-md-3 col-3">
                    <div class="service-icon tablinks" onclick="openTab(event, 'bus')">
                        <i class="flaticon flaticon-destination"></i>
                        <span>By Bus</span>
                    </div>
                </div>
                <div class="col-md-3 col-3">
                    <div class="service-icon tablinks" onclick="openTab(event, 'motorcycle')">
                        <i class="flaticon flaticon-id-card-1"></i>
                        <span>By Motorcycle</span>
                    </div>
                </div>
            </div>

        </div>
        <!-- Main Content -->
        <section class="bg-light tabcontent" id="car">
            <div class="row m-0">
                <div class="col-md-6 left-invest">
                    <h2 class="c-presidency__title pb-4">By Car</h2>
                    <div class="bullets-lines">
                        <p>You can also hire a car for your daily travels once you arrive in Rwanda. Different car hires companies to offer car hire services for travelers on different occasions such as safaris, leisure, business, etc and their drivers can deliver the car to the airport upon your arrival. Those companies include Kigali 24-7 taxi, Kigali Car Rentals, Rent a Car Rwanda Ltd, and Self Drive Rwanda. </p>
                    </div>
                    <table class="table table-striped col-sm-12">
                        <thead>
                            <tr>
                                <!-- <th><strong class="text-blue">Category of Cars</strong></th> -->
                                <th><strong class="text-blue">Car Type</strong></th>
                                <!-- <th><strong class="text-blue">Daily Price</strong></th> -->
                                <th><strong class="text-blue">Daily Price ex VAT (USD)</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- <td>Category 1</td> -->
                                <td>Land Cruiser V8</td>
                                <!-- <td>252,000</td> -->
                                <td>$200</td>
                            </tr>
                            <tr>
                                <!-- <td>Category 2</td> -->
                                <td>Land Cruiser Prado, Toyota Fortuna</td>
                                <!-- <td>168,000</td> -->
                                <td>$180</td>
                            </tr>
                            <tr>
                                <!-- <td>Category 3</td> -->
                                <td>RAV4, Vitara</td>
                                <!-- <td>126,000</td> -->
                                <td>$120</td>
                            </tr>
                            <tr>
                                <!-- <td>Category 4</td> -->
                                <td>Luggage Van</td>
                                <!-- <td>126,000</td> -->
                                <td>$150</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <a href="embassy-form.html">
                        <button class="btn btn-outline my-3">Get Started</button>
                    </a> -->
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
        <section class="bg-light tabcontent" id="taxi">
            <div class="row m-0">
                <div class="col-md-6 left-invest">
                    <h2 class="c-presidency__title pb-4">By Taxi</h2>
                    <div class="bullets-lines">
                        <p>This is the most expensive and safest means of transport among the three. They are two taxi companies in Rwanda, Yego cabs and Move: Yego Cabs, you call 9191 to get their services and prices are calculated per traveled kilometers. Move, you download their mobile application and use it to access their services.</p>
                    </div>
                    <!-- <a href="embassy-form.html">
                        <button class="btn btn-outline my-3">Get Started</button>
                    </a> -->
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
        <section class="bg-light tabcontent" id="bus">
            <div class="row m-0">
                <div class="col-md-6 left-invest">
                    <h2 class="c-presidency__title pb-4">By Bus</h2>
                    <div class="bullets-lines">
                        <p>This is the cheapest mean of transport in the country, and it is mostly subjected to traffic jams in the rush hours. These are busses operated by different transportation agencies and companies in the countries. They are several bus terminals and bus stops in all districts of the country, and this is where you catch your bus form. For buses traveling around the city, you need a Tap & Go Card which you can buy from any bus terminal for 500RWF and you keep recharging it either from the Tap& Go agents found in bus terminals or some bus stops, however, you can recharge using your phone (MTN Mobile Money or Tigo/Airtel Cash).<br>To catch a bus for a journey outside of Kigali City you do not need a Tap & Go card, you just go to the nearest bus terminal and pay to get a ticket. For some locations, they are more than three travel agencies operating from there meaning that they will be a bus every time, for other locations you will have to wait for 30 minutes for the next bus.</p>
                    </div>
                    <!-- <a href="embassy-form.html">
                        <button class="btn btn-outline my-3">Get Started</button>
                    </a> -->
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
        <section class="bg-light tabcontent" id="motorcycle">
            <div class="row m-0">
                <div class="col-md-6 left-invest">
                    <h2 class="c-presidency__title pb-4">By Motorcycle</h2>
                    <div class="bullets-lines">
                        <p>This is the most common and fastest mean of transport given the fact that the rider can take you exactly to the door of your house depending on how you direct them. However, you need to make sure that the rider is not drunk or ask them to slow down if they are over speeding.</p>
                    </div>
                    <!-- <a href="embassy-form.html">
                        <button class="btn btn-outline my-3">Get Started</button>
                    </a> -->
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