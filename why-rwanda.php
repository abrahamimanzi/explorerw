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

    <body id="page-top" class="why-rwanda">
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
                        <span class="subheading">Discover the Ease of Doing Business in a paradise country in Africa</span>
                        <!-- <div class="col-md-8 mx-auto my-5">
                            <div class="input-group">
                                <input type="" class="form-control" name="">
                                <div class="input-group-append">
                                    <button class="btn btn-success search-btn" id="autocomplete" type="button"><i class="icon icon-search"></i>Search</button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="d-none d-sm-none d-md-block d-lg-block">
                        <div class="row" id="myTab">
                            <div class="col-md-3 col-12 active">
                                <div class="service-icon tablinks" id="defaultOpen" onclick="openTab(event, 'about-rwanda')">
                                    <i class="flaticon-destination"></i>
                                    <span>About Rwanda</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="service-icon tablinks" onclick="openTab(event, 'why-rwanda')">
                                    <i class="flaticon flaticon-print"></i>
                                    <span>Why Rwanda</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="service-icon tablinks" onclick="openTab(event, 'why-visit')">
                                    <i class="flaticon flaticon-bicycle"></i>
                                    <span>Why Visit</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="service-icon tablinks" onclick="openTab(event, 'latest-news')">
                                    <i class="flaticon flaticon-checklist"></i>
                                    <span>Latest News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>

    <!-- Main Content -->

    <div class="container tabcontent" id="about-rwanda">
        <div class="row my-5">
            <div class="col-md-4">
                <div class="card h-10">
                    <img src="./images/Coat_of_arms_of_Rwanda.svg" class="img img-responsive">
                    <div class="card-body">
                        <h4 class="card-title news-title">
                            <span class="name">Seal of Rwanda</span>
                        </h4>
                        <span class="title">Motto: Unity, Work, Patriotism</span>
                    </div>
                </div>
                <div class="card h-10">
                    <img src="./images/flag.png" class="img img-responsive">
                    <div class="card-body">
                        <h4 class="card-title news-title">
                            <span class="name">Flag of Rwanda</span>
                        </h4>
                        <span class="title">The flag represents national unity, respect for work, heroism, and confidence in the future.</span>
                    </div>
                </div>
                <div class="card h-10">
                        <audio controls>
                        <source src="<?=DN;?>/videos/Hymne_National_du_Rwanda.ogg.mp3" type="audio/ogg">
                        <source src="<?=DN;?>/videos/Hymne_National_du_Rwanda.ogg.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                    <div class="card-body">
                        <h4 class="card-title news-title">
                            <span class="name">Anthem: Rwanda nziza</span>
                        </h4>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="section-header">
                    <div class="section-title float-left">
                        <h2>About Rwanda</h2>
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
    </div>

    <div class="container tabcontent" id="why-rwanda">
        <div class="row my-5">
            <div class="col-md-8">
                <div class="section-header">
                    <div class="section-title float-left">
                        <h2>Why Rwanda</h2>
                    </div>
                </div>
                <p class="normal-embassy">
                    Rwanda is referred to as a country of a Thousand Hills due to its amazing sceneries, enchant landscapes, and breathtaking nature. Rwanda is a small country endowed with a natural charm that makes visitors want to come back or even stay. Here are four reasons why your next visit, tour or trip should be in Rwanda.
                </p>
                <p class="normal-embassy">
                    Rwanda is home to Mountain Gorillas, these are rare and endangered around the world whereby their entire population around the world is less than a thousand. So, your visit to Rwanda will give you a rare chance of coming face to face with mountain gorilla. This is an enriching sight and experience that is bound to be one of your lifetime cherished memories. Moreover, while tracking the gorillas, you can trek the forest and visit Diana Fossey’s Tomb. Visiting her tomb will offer you a humbling lesson of the coexistence of nature and life.
                </p>
                <p class="normal-embassy">
                    Rwanda’s history teaches the world about the depth of the wickedness of humankind once hatred is watered as well as a lesson to live in peace and harmony. Rwanda experienced one of the world’s saddest killing which is the 1994 Genocide against the Tutsis, so your visit would be incomplete if you leave the country without a visit to one of the Genocide Memorial Sites in the country. Here you learn about the country’s darkest history, witness through pictures and mass graves but at the same time leave you with greater hopes for the future as you learn about how Rwanda has risen despite the challenging past.
                </p>
                <p class="normal-embassy">
                    Rwanda is blessed with breathtaking nature that makes tourists want to stay forever. Rwanda is a small country endowed with natural touristic attractions. Among those attractions, you will find Volcanoes National Park which is the home of rare and endangered mountain gorillas. While in the Volcanoes National Park you will get the opportunity to see elephants, primates, and different bird species. Rwanda's Akagera National Park is home to the big fives of the jungle meaning that during your visit to this park you might be able to see Lions, Elephants, Leopards, Rhinoceros, and Buffalos. In Rwanda, you will be able to tour rain forests such as Nyungwe Forest while in Nyungwe National Park you will have rich experiences such as the Canopy walk, hiking, and tracking of Chimpanzees and Monkeys. Lastly, Rwanda is endowed with abundant water bodies in the form of lakes and rivers, while in Rwanda don't leave without a cruise on Lake Kivu which will be a relaxing experience.
                </p>
                <p class="normal-embassy">
                    Home Grown Solutions are the initiatives put forward by the Rwandan government to deal with the challenges of the aftermath of the 1994 Genocide against the Tutsis. Rwanda is one of the fast-developing African nations and this comes as a result of decentralized leadership which focused on unity, reconciliation, and patriotism after the 1994 Genocide against the Tutsis. Therefore, the rapid development resulted from different development initiatives created by the government such as Umuganda, Mutuelle de Sante, Girinka among others. So, if you are avid learn to visit Rwanda to learn about her unbelievable resurrection story not only by hearing stories but by witnessing with your eyes what came after the 1994 ruins.
                </p>
            </div>
            <div class="col-md-4">
                <div class="card card-10">
                    <img src="./images/paul.jpg" class="img img-responsive">
                    <div class="card-name">
                        <span class="name">H.E Paul Kagame</span>
                        <span class="title">The President of Republic of RWANDA</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="tabcontent" id="why-visit">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-8">
                    <div class="section-header">
                        <div class="section-title float-left">
                            <h2>Reasons to Visit Rwanda</h2>
                        </div>
                    </div>
                    <p class="normal-embassy">
                        The Republic of Rwanda has emerged as one of the world’s leading international business centres and regional hubs. This cosmopolitan countly of diversity is at the crossroad of the globe and has transformed itself into a buzzing international metropolis. With easy accessibility, state-of-the-art infrastructure and modern venues, Rwanda is the place to be when it comes to business. Here are 10 reasons why…
                    </p>
                </div>
            </div>
        </div>
        
        <section id="domain-hosting" class="bg-light push-right gorilla-trekking">
            <div class="container visit-content">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <h2 class="c-presidency__title">Easy to get to</h2>
                        <p>When visiting the ‘Land of a Thousand Hills’, one should not miss out on the magnificent opportunity to visit Rwanda’s Volcanoes National Park consisting of 125 sq km of mountain forest and home to the six Virunga Volcanoes and the world famous mountain gorillas. Protected within the park, the lushly forested slopes of the mountains form an appropriately dramatic natural setting for what is arguably the most poignant and memorable wildlife experience in the world: gorilla trekking.
Nothing can prepare one for the impact of encountering a fully-grown silverback gorilla, up to three times the size of an average man, yet remarkably peaceable and tolerant of human visitors.</p>
                        <!-- <button class="btn btn-outline my-3">Discover More</button> -->
                    </div>
                </div>
            </div>
        </section>

        <section id="domain-hosting" class="bg-light king-palace">
            <div class="container visit-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="c-presidency__title">World-class infrastructure</h2>
                        <p>Based in Nyanza, 88 km south of Kigali City, this was the residence of King Mutara III Rudahigwa and the Royal Palace that was traditionally built. This Palace offers a detailed look into Rwandan traditional seat of their monarchy, it is an impressive museum, restored to its 19th century state and made entirely with traditional materials.</p>
                        <p>Recently the Long horned Traditional cows, known in Kinyarwanda as “Inyambo” were also introduced because of the fact that cows form an integral part of Rwandan Culture . On the neighboring hill of Mwima, one can also visit the burial grounds of King Mutara III and his wife Queen Rosalie Gicanda.</p>
                        <!-- <button class="btn btn-outline my-3">Discover More</button> -->
                    </div>
                </div>
            </div>
        </section>
        
        <section id="domain-hosting" class="bg-light push-right volcanoes">
            <div class="container visit-content">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <h2 class="c-presidency__title">Hotels for all needs and budgets</h2>
                        <p>When visiting the ‘Land of a Thousand Hills’, one should not miss out on the magnificent opportunity to visit Rwanda’s Volcanoes National Park consisting of 125 sq km of mountain forest and home to the six Virunga Volcanoes and the world famous mountain gorillas. Protected within the park, the lushly forested slopes of the mountains form an appropriately dramatic natural setting for what is arguably the most poignant and memorable wildlife experience in the world: gorilla trekking.
Nothing can prepare one for the impact of encountering a fully-grown silverback gorilla, up to three times the size of an average man, yet remarkably peaceable and tolerant of human visitors.</p>
                        <!-- <button class="btn btn-outline my-3">Discover More</button> -->
                    </div>
                </div>
            </div>
        </section>
        
        <section id="domain-hosting" class="bg-light akagera">
            <div class="container visit-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="c-presidency__title">State-of-the-art venues</h2>
                        <p>Akagera National Park has exceptional levels of biodiversity and forms the largest protected wetland in central Africa. It is home to a large variety of species restricted to the papyrus swamps such as the Sitatun sought-after Shoebill Stork.
Notable game includes elephant, buffalo, topi, zebra, waterbuck, roan antelope and eland. Other antelope are duiker, oribi, bohor reedbuck, klipspringer, bushbuck and impala. Of the primates, olive baboons, vervets and the secretive blue monkey are seen during the day, with bushbabies often seen on night drives.Larger predators including leopard, hyena, side- striped jackal and lion are also present in the park.</p>
                        <!-- <button class="btn btn-outline my-3">Discover More</button> -->
                    </div>
                </div>
            </div>
        </section>
        
        <section id="domain-hosting" class="bg-light push-right nyungwe">
            <div class="container visit-content">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <h2 class="c-presidency__title">Abundance of business opportunities</h2>
                        <p>Nyungwe is one of the world’s most beautiful and pristine mountain rainforests. It’s believed to be one of Africa’s oldest forests, staying green even through the Ice Age, which explains its diversity. Home to habituated chimpanzees and 12 other primates species (including a 400-strong troop of habituated Ruwenzori Black & White Colobus), it’s also a birder’s paradise with over 300 species, including 16 endemics, and is home to 75 different species of mammal.<br>Hiking or even biking the beautiful terrain, tracking the famous chimpanzees, experiencing the canopy walk, witnessing beautiful birds, relaxing by waterfalls are just a glimpse of activities that Nyungwe offers.</p>
                        <!-- <button class="btn btn-outline my-3">Discover More</button> -->
                    </div>
                </div>
            </div>
        </section>
        
        <section id="domain-hosting" class="bg-light memorial">
            <div class="container visit-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="c-presidency__title">A growing knowledge hub</h2>
                        <p>In 2001, in collaboration with Rwanda’s National Commission for the Fight Against Genocide (CNLG), the Aegis Trust raised the $2 million required to build the Kigali Genocide Memorial.<br>The centre was officially opened on 7 April 2004 to mark the tenth commemoration of the 1994 genocide against the Tutsi in Rwanda. The memorial is the final resting place for up to 259,000 victims of the genocide and serves as a place where people can grieve for their lost loved ones and remember them. It also serves as a museum where both local and international visitors can learn about the history, implementation and consequences of the genocide.</p>
                        <!-- <button class="btn btn-outline my-3">Discover More</button> -->
                    </div>
                </div>
            </div>
        </section>
        
        <section id="domain-hosting" class="bg-light push-right canopy">
            <div class="container visit-content">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <h2 class="c-presidency__title">Safe and secure for all</h2>
                        <p>Suspended above a ravine in the lush montane rainforest of Nyungwe National Park, the canopy walkway provides an exhilarating perspective on the ancient treetops and wildlife.<br>The 160m long and 70m high suspension bridge is accessible as part of a guided tour along the Igishigishigi trail, or to those hiking the Imbaraga or Umuyove trails.<br>Having escaped the last ice age, the Nyungwe forest is a hotbed of biodiversity. Along the hour’s walk to the canopy walkway from the Uwinka Reception Centre, visitors will see countless butterflies, orchids and colourful birds, including many endemic to the region.</p>
                        <!-- <button class="btn btn-outline my-3">Discover More</button> -->
                    </div>
                </div>
            </div>
        </section>


    </section>


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