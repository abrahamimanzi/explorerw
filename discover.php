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

    <body id="page-top" class="discover">
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
        <section id="two" class="spotlights" style="padding: 0;">
            <section style="padding: 0;">
                <a class="image col-lg-5 col-md-5 col-sm-12" style="float: left;">
                    <img src="images/kigali-city.jpg" alt="Kigali City" data-position="center center">
                </a>
                <div class="content bg-green col-lg-7 col-md-7 col-sm-12">
                    <div class="inner">
                        <header class="major">
                            <h2>Kigali City</h2>
                        </header>
                        <p class="text-white">Peacefully nestled along picturesque hilltops, Kigali is a thriving African city immediately notable for its cleanliness, orderliness, and hospitality.
                            <br> Kigali is a great place to begin or end any Rwanda journey as it’s conveniently located in the geographic center of the country. The city is clean and safe, with extremely welcoming people. Travelers will enjoy exploring the great cultural activities – including several award-winning museums</p>
                        <!--  <ul class="actions">
                                <li><a class="button">Learn more</a></li>
                                </ul>  -->
                    </div>
                </div>
            </section>
            <section style="padding: 0;">
                <a class="image col-lg-5 col-md-5 col-sm-12" style="float: left;">
                    <img src="images/Lake-Muhazi.jpg" alt="Lake Muhazi" data-position="center center">
                </a>
                <div class="content bg-green col-lg-7 col-md-7 col-sm-12">
                    <div class="inner">
                        <header class="major">
                            <h2>Muhazi</h2>
                        </header>
                        <p class="text-white">Long and shallow, Lake Muhazi twists and turns its way through a flooded valley for more than 40km before reaching its eastern shore, not far from the northern exit of eastern Rwanda’s crown jewel, Akagera National Park. The east end of the lake sits right along the road to Nyagatare, and makes for a perfect place to break the journey for a meal and a cold drink after long hours spent bumping along the park’s dirt roads. If you stick around after your fresh-caught lunch and let the lake breezes guide you, you’ll quickly find that the live music at the lakeside bars, dozens of traditional villages along the shore, and the fantastic birding and fishing on offer will keep you here well longer than expected.</p>
                        <!--  <ul class="actions">
                                <li><a class="button">Learn more</a></li>
                                </ul>  -->
                    </div>
                </div>
            </section>

            <section style="padding: 0;">
                <a class="image col-lg-5 col-md-5 col-sm-12" style="float: left;">
                    <img src="images/gorillas.jpg" alt="Gorilla Trekking" data-position="center center">
                </a>
                <div class="content bg-green col-lg-7 col-md-7 col-sm-12">
                    <div class="inner">
                        <header class="major">
                            <h2>Gorilla Trekking</h2>
                        </header>
                        <p class="text-white">When visiting the ‘Land of a Thousand Hills’, one should not miss out on the magnificent opportunity to visit Rwanda’s Volcanoes National Park consisting of 125 sq km of mountain forest and home to the six Virunga Volcanoes and the world famous mountain gorillas. Protected within the park, the lushly forested slopes of the mountains form an appropriately dramatic natural setting for what is arguably the most poignant and memorable wildlife experience in the world: gorilla trekking.
                            <br> Nothing can prepare one for the impact of encountering a fully-grown silverback gorilla, up to three times the size of an average man, yet remarkably peaceable and tolerant of human visitors.</p>
                        <!--  <ul class="actions">
                                <li><a class="button">Learn more</a></li>
                                </ul>  -->
                    </div>
                </div>
            </section>

            <section style="padding: 0;">
                <a class="image col-lg-5 col-md-5 col-sm-12">
                    <img src="images/king-place.jpg" alt="King's Palace" data-position="top center">
                </a>
                <div class="content bg-orange col-lg-7 col-md-7 col-sm-12">
                    <div class="inner">
                        <header class="major">
                            <h2>King's Palace</h2>
                        </header>
                        <p class="text-white">Based in Nyanza, 88 km south of Kigali City, this was the residence of King Mutara III Rudahigwa and the Royal Palace that was traditionally built. This Palace offers a detailed look into Rwandan traditional seat of their monarchy, it is an impressive museum, restored to its 19th century state and made entirely with traditional materials.
                            <br>Recently the Long horned Traditional cows, known in Kinyarwanda as “Inyambo” were also introduced because of the fact that cows form an integral part of Rwandan Culture . On the neighboring hill of Mwima, one can also visit the burial grounds of King Mutara III and his wife Queen Rosalie Gicanda.</p>
                    </div>
                </div>
            </section>

            <section style="padding: 0;">
                <a class="image col-lg-5">
                    <img src="images/akagera-park.jpg" alt="Akagera National Park" data-position="25% 25%">
                </a>
                <div class="content bg-yellow col-lg-7">
                    <div class="inner">
                        <header class="major">
                            <h2>Akagera National Park</h2>
                        </header>
                        <p class="text-white">Akagera National Park has exceptional levels of biodiversity and forms the largest protected wetland in central Africa. It is home to a large variety of species restricted to the papyrus swamps such as the Sitatun sought-after Shoebill Stork.
                            <br>Notable game includes elephant, buffalo, topi, zebra, waterbuck, roan antelope and eland. Other antelope are duiker, oribi, bohor reedbuck, klipspringer, bushbuck and impala. Of the primates, olive baboons, vervets and the secretive blue monkey are seen during the day, with bushbabies often seen on night drives.Larger predators including leopard, hyena, side- striped jackal and lion are also present in the park.</p>
                    </div>
                </div>
            </section>

            <section style="padding: 0;">
                <a class="image col-lg-5">
                    <img src="images/volcanoes.jpg" alt="Akagera National Park" data-position="25% 25%">
                </a>
                <div class="content bg-yellow col-lg-7">
                    <div class="inner">
                        <header class="major">
                            <h2>Volcanoes National Park</h2>
                        </header>
                        <p class="text-white">When visiting the ‘Land of a Thousand Hills’, one should not miss out on the magnificent opportunity to visit Rwanda’s Volcanoes National Park consisting of 125 sq km of mountain forest and home to the six Virunga Volcanoes and the world famous mountain gorillas. Protected within the park, the lushly forested slopes of the mountains form an appropriately dramatic natural setting for what is arguably the most poignant and memorable wildlife experience in the world: gorilla trekking. Nothing can prepare one for the impact of encountering a fully-grown silverback gorilla, up to three times the size of an average man, yet remarkably peaceable and tolerant of human visitors.</p>
                    </div>
                </div>
            </section>

            <section style="padding: 0;">
                <a class="image col-lg-5">
                    <img src="images/nyungwe.jpg" alt="Nyungwe National Park" data-position="25% 25%">
                </a>
                <div class="content bg-blue col-lg-7">
                    <div class="inner">
                        <header class="major">
                            <h2>Nyungwe National Park</h2>
                        </header>
                        <p class="text-white">Nyungwe is one of the world’s most beautiful and pristine mountain rainforests. It’s believed to be one of Africa’s oldest forests, staying green even through the Ice Age, which explains its diversity. Home to habituated chimpanzees and 12 other primates species (including a 400-strong troop of habituated Ruwenzori Black &amp; White Colobus), it’s also a birder’s paradise with over 300 species, including 16 endemics, and is home to 75 different species of mammal.
                            <br>Hiking or even biking the beautiful terrain, tracking the famous chimpanzees, experiencing the canopy walk, witnessing beautiful birds, relaxing by waterfalls are just a glimpse of activities that Nyungwe offers.</p>
                    </div>
                </div>
            </section>

            <section style="padding: 0;">
                <a class="image col-lg-5">
                    <img src="images/canopy.png" alt="Nyungwe National Park" data-position="25% 25%">
                </a>
                <div class="content bg-blue col-lg-7">
                    <div class="inner">
                        <header class="major">
                            <h2>Canopy Walkway</h2>
                        </header>
                        <p class="text-white">Suspended above a ravine in the lush montane rainforest of Nyungwe National Park, the canopy walkway provides an exhilarating perspective on the ancient treetops and wildlife.<br>The 160m long and 70m high suspension bridge is accessible as part of a guided tour along the Igishigishigi trail, or to those hiking the Imbaraga or Umuyove trails.<br>Having escaped the last ice age, the Nyungwe forest is a hotbed of biodiversity. Along the hour’s walk to the canopy walkway from the Uwinka Reception Centre, visitors will see countless butterflies, orchids and colourful birds, including many endemic to the region.</p>
                    </div>
                </div>
            </section>

            <section style="padding: 0;">
                <a class="image col-lg-5">
                    <img src="images/memorial.jpg" alt="Genocide Memorial" data-position="25% 25%">
                </a>
                <div class="content bg-lightgreen col-lg-7">
                    <div class="inner">
                        <header class="major">
                            <h2>Genocide Memorial</h2>
                        </header>
                        <p class="text-white">In 2001, in collaboration with Rwanda’s National Commission for the Fight Against Genocide (CNLG), the Aegis Trust raised the $2 million required to build the Kigali Genocide Memorial.
                            <br>The centre was officially opened on 7 April 2004 to mark the tenth commemoration of the 1994 genocide against the Tutsi in Rwanda. The memorial is the final resting place for up to 259,000 victims of the genocide and serves as a place where people can grieve for their lost loved ones and remember them. It also serves as a museum where both local and international visitors can learn about the history, implementation and consequences of the genocide.</p>
                    </div>
                </div>
            </section>

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