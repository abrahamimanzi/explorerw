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
        <header class="masthead" style="background-image: url('images/homeback.jpg');margin-bottom: 0px;padding-bottom: 3rem;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-12 mx-auto home-content">
                        <div class="site-heading">
                            <h1>Discover Rwanda</h1>
                            <p class="subheading">Rwanda is a green, mountainous landscape renowned for its Volcanoes National Park that encompasses the 4,507m-tall Mt. Karisimbi and 4 other forested volcanoes, as well as being home to mountain gorillas and golden monkeys. Adding to that the Nyungwe National Park, with ancient mountain rainforest that’s a habitat for chimpanzees and other primates, the vast Akagera National park and other iconic sites, your visit to the YouthConnekt Africa Summit will present unique opportunities to enrich your travel experience by exploring the Land of Thousand Hills.</p>
                            
                        </div>
                        
                    </div>
                </div>
        </header>

        <!-- Main Content -->

        <section id="domain-hosting" class="bg-light push-right gorilla-trekking">
            <div class="container visit-content">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <h2 class="c-presidency__title">GORILLA TREKKING</h2>
                        <p>When visiting the ‘Land of a Thousand Hills’, one should not miss out on the magnificent opportunity to visit Rwanda’s Volcanoes National Park consisting of 125 sq km of mountain forest and home to the six Virunga Volcanoes and the world famous mountain gorillas. Protected within the park, the lushly forested slopes of the mountains form an appropriately dramatic natural setting for what is arguably the most poignant and memorable wildlife experience in the world: gorilla trekking.
Nothing can prepare one for the impact of encountering a fully-grown silverback gorilla, up to three times the size of an average man, yet remarkably peaceable and tolerant of human visitors.</p>
                        <button class="btn btn-outline my-3">Discover More</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="domain-hosting" class="bg-light king-palace">
            <div class="container visit-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="c-presidency__title">KING'S PALACE</h2>
                        <p>Based in Nyanza, 88 km south of Kigali City, this was the residence of King Mutara III Rudahigwa and the Royal Palace that was traditionally built. This Palace offers a detailed look into Rwandan traditional seat of their monarchy, it is an impressive museum, restored to its 19th century state and made entirely with traditional materials.</p>
                        <p>Recently the Long horned Traditional cows, known in Kinyarwanda as “Inyambo” were also introduced because of the fact that cows form an integral part of Rwandan Culture . On the neighboring hill of Mwima, one can also visit the burial grounds of King Mutara III and his wife Queen Rosalie Gicanda.</p>
                        <button class="btn btn-outline my-3">Discover More</button>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="domain-hosting" class="bg-light push-right volcanoes">
            <div class="container visit-content">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <h2 class="c-presidency__title">VOLCANOES NATIONAL PARK</h2>
                        <p>When visiting the ‘Land of a Thousand Hills’, one should not miss out on the magnificent opportunity to visit Rwanda’s Volcanoes National Park consisting of 125 sq km of mountain forest and home to the six Virunga Volcanoes and the world famous mountain gorillas. Protected within the park, the lushly forested slopes of the mountains form an appropriately dramatic natural setting for what is arguably the most poignant and memorable wildlife experience in the world: gorilla trekking.
Nothing can prepare one for the impact of encountering a fully-grown silverback gorilla, up to three times the size of an average man, yet remarkably peaceable and tolerant of human visitors.</p>
                        <button class="btn btn-outline my-3">Discover More</button>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="domain-hosting" class="bg-light akagera">
            <div class="container visit-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="c-presidency__title">AKAGERA NATIONAL PARK</h2>
                        <p>Akagera National Park has exceptional levels of biodiversity and forms the largest protected wetland in central Africa. It is home to a large variety of species restricted to the papyrus swamps such as the Sitatun sought-after Shoebill Stork.
Notable game includes elephant, buffalo, topi, zebra, waterbuck, roan antelope and eland. Other antelope are duiker, oribi, bohor reedbuck, klipspringer, bushbuck and impala. Of the primates, olive baboons, vervets and the secretive blue monkey are seen during the day, with bushbabies often seen on night drives.Larger predators including leopard, hyena, side- striped jackal and lion are also present in the park.</p>
                        <button class="btn btn-outline my-3">Discover More</button>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="domain-hosting" class="bg-light push-right nyungwe">
            <div class="container visit-content">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <h2 class="c-presidency__title">NYUNGWE NATIONAL PARK</h2>
                        <p>Nyungwe is one of the world’s most beautiful and pristine mountain rainforests. It’s believed to be one of Africa’s oldest forests, staying green even through the Ice Age, which explains its diversity. Home to habituated chimpanzees and 12 other primates species (including a 400-strong troop of habituated Ruwenzori Black & White Colobus), it’s also a birder’s paradise with over 300 species, including 16 endemics, and is home to 75 different species of mammal.<br>Hiking or even biking the beautiful terrain, tracking the famous chimpanzees, experiencing the canopy walk, witnessing beautiful birds, relaxing by waterfalls are just a glimpse of activities that Nyungwe offers.</p>
                        <button class="btn btn-outline my-3">Discover More</button>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="domain-hosting" class="bg-light memorial">
            <div class="container visit-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="c-presidency__title">GENOCIDE MEMORIAL</h2>
                        <p>In 2001, in collaboration with Rwanda’s National Commission for the Fight Against Genocide (CNLG), the Aegis Trust raised the $2 million required to build the Kigali Genocide Memorial.<br>The centre was officially opened on 7 April 2004 to mark the tenth commemoration of the 1994 genocide against the Tutsi in Rwanda. The memorial is the final resting place for up to 259,000 victims of the genocide and serves as a place where people can grieve for their lost loved ones and remember them. It also serves as a museum where both local and international visitors can learn about the history, implementation and consequences of the genocide.</p>
                        <button class="btn btn-outline my-3">Discover More</button>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="domain-hosting" class="bg-light push-right canopy">
            <div class="container visit-content">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <h2 class="c-presidency__title">CANOPY WALKWAY</h2>
                        <p>Suspended above a ravine in the lush montane rainforest of Nyungwe National Park, the canopy walkway provides an exhilarating perspective on the ancient treetops and wildlife.<br>The 160m long and 70m high suspension bridge is accessible as part of a guided tour along the Igishigishigi trail, or to those hiking the Imbaraga or Umuyove trails.<br>Having escaped the last ice age, the Nyungwe forest is a hotbed of biodiversity. Along the hour’s walk to the canopy walkway from the Uwinka Reception Centre, visitors will see countless butterflies, orchids and colourful birds, including many endemic to the region.</p>
                        <button class="btn btn-outline my-3">Discover More</button>
                    </div>
                </div>
            </div>
        </section>
        



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