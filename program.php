<?php include 'admin/core/init.php';?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <title>TAS2018</title>
    <?php // include 'includes/head-common.php';?>

    <!-- Bootstrap core CSS -->
    <link href="<?=DN;?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?=DN;?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?=DN;?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Custom styles for this template -->
<!-- <link rel='stylesheet' href="<?=DN?>/css/ta-style.css" type='text/css' media='all' /> -->
    <!-- <link href="css/creative.min.css" rel="stylesheet"> -->
    <link href="<?=DN;?>/css/lightslider.min.css" rel="stylesheet" />
    <link href="<?=DN;?>/css/normalize.css" rel="stylesheet">
    <link href="<?=DN;?>/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="https://www.fonts.com/font/monotype/gill-sans" rel="stylesheet">
    <style>
        .daycontent {
            display: none;
            padding: 6px 12px;
            -webkit-animation: fadeEffect 1s;
            animation: fadeEffect 1s;
        }
    </style>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <?php include 'views/header-common.php';?>

    <!-- <div class="row no-margin">
        <div class="col-md-12 text-center no-padding">
            <img src="img/png/Coat of Arm-04.png" class="mn-logo" alt="Coat of Arm-04">
            <h1 class="hd-title"><b>Republic of Rwanda</b></h1>
            <h6 class="hd-line">Ministry of Information Technnology & Communications</h6>
        </div>
    </div> -->
    <!-- <div class="row no-padding no-margin fixed-top">
        <div class="col-md-12 no-padding">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                </div>
            </nav>
        </div>
    </div> -->

    <section class="bg-primary agenda" style="padding-top: 10rem;">
        <div class="container">
            <h2 class="text-center">Transform Africa Summit 2018 Program</h2>
        </div>
        <div class="outer bg-blue">
            <div class="inner agenda-inner">
                <div class="agenda-holder">
                    <div class="agenda-days">

                        <a class=" tablinks" href="#" data-day="Wednesday, 09 May" onclick="openCity(event, 'one')" id="defaultOpen"><span><div class="short">Wed</div><div class="long">Wednesday</div> 9 May</span></a>

                        <a class="tablinks" href="#" data-day="Thursday, 10 May" onclick="openCity(event, 'two')"><span><div class="short">Thu</div><div class="long">Thursday</div> 10 May</span></a>

                        <a class="tablinks" href="#" data-day="Friday, 11 May" onclick="openCity(event, 'three')"><span><div class="short">Fri</div><div class="long">Friday</div> 11 May</span></a>

                        <!-- <a class="" href="#" data-day="Thursday, 01 Mar"><span><div class="short">Thu</div><div class="long">Thursday</div> 01 Mar</span></a> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="outer">
            <div class="inner">
                <div class="filtered"></div>
            </div>
        </div>
        <div class="outer">
            <div class="inner">
                <div class="agenda-content">

                    <div id="one" class="daycontent">
                        <div class="loader-wrapper" style="display: none;">
                            <div class="loader">
                                <svg class="circular" viewBox="25 25 50 50">
                                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
                                </svg>
                            </div>
                        </div>
                        <div class="inside no-results" style="display: none;">
                            <h2>No sessions found. Please refine your filters.</h2>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">09:00</span>
                                <span class="fixed-hour">09:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #21376b; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="748" href="#" class="session-item entity" data-fid="1566" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Opening Session</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#21376b;">Plenary 1</span>
                                            <span class="list-time">09:00 - 10:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/future-services-provider.png" scale="0">A Conversation on harnessing the potential of Smart Cities for Africa & Launch of the Africa Smart Cities Blueprint</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">09:30</span>
                                <span class="fixed-hour">09:30</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #fecf33; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1674" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Digital Services</h2>
                                            <h3 class="presented">Lorem ipsum dolor sit amet</h3>
                                            <span class="list-category" style="color:#fecf33;">Plenary 2</span>
                                            <span class="list-time">09:30 - 19:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0">Transforming service deliver</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">10:00</span>
                                <span class="fixed-hour">10:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #ed552b; display: block;" data-track="58" data-day="Monday, 26 Feb" data-theme="0" href="#" class="session-item entity" data-fid="1633" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Smart Cities:</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#ed552b;">Plenary 3</span>
                                            <span class="list-time">10:00 - 11:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme">Building safe & secure cities</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">10:30</span>
                                <span class="fixed-hour">10:30</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #f78e20; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="749" href="#" class="session-item entity" data-fid="1649" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Access to Broadband</h2>
                                            <!-- <h3 class="presented">IBM</h3> -->
                                            <span class="list-category" style="color:#f78e20;">Breakout 1</span>
                                            <span class="list-time">10:30 - 17:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/applied-ai.png" scale="0">Forging a community of Smart Africa Leaders & Movers</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: #068ec1; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="745" href="#" class="session-item entity" data-fid="1652" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Mayor’s Forum (Invitation only)</h2>
                                            <!-- <h3 class="presented">Modern Marketing Summit</h3> -->
                                            <span class="list-category" style="color:#068ec1;">More Summit Streams</span>
                                            <span class="list-time">10:30 - 19:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-digital-consumer.png" scale="0">Exclusive opportunity to tackle key issues with decision-makers</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">11:00</span>
                                <span class="fixed-hour">11:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #3fad49; display: block;" data-track="55" data-day="Monday, 26 Feb" data-theme="750" href="#" class="session-item entity" data-fid="1556" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Face the Gorillas</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#3fad49;">Smart Cities Edition</span>
                                            <span class="list-time">11:00 - 11:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: #21376b; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="747" href="#" class="session-item entity" data-fid="1571" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Ms Geek Africa 2017</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#21376b;">Final Pitch</span>
                                            <span class="list-time">11:00 - 12:10</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">Innovation</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: #fecf33; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1594" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Youth Connekt Competition</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#fecf33;">Africa’s youth interact and lend their voice and minds to the continent development agenda.</span>
                                            <span class="list-time">11:00 - 12:10</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0">Innovation</span>
                                        </div>
                                    </a>
                                </div>


                                
                            </div>
                        </div>

                    </div>


                    

                    


                    


                    <div id="two" class="daycontent">
                        <div class="agenda-hour-wrap" >
                            <div class="agenda-hour">
                                <span class="abs-hour">09:00</span>
                                <span class="fixed-hour">09:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: block;" data-track="62" data-day="Tuesday, 27 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1576" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Leaders Summit</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Plenary 4</span>
                                            <span class="list-time">09:00 - 10:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0">Fast Tracking Africa’s Digital Transformation</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: block;" data-track="54" data-day="Tuesday, 27 Feb" data-theme="385" href="#" class="session-item entity" data-fid="1657" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Financing the Digital Economy</h2>
                                            <h3 class="presented">IAB</h3>
                                            <span class="list-category" style="color:#8317D0;">Plenary 5</span>
                                            <span class="list-time">09:00 - 18:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/content-media.png" scale="0">Prospect & future outlook</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">09:15</span>
                                <span class="fixed-hour">09:15</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: none;" data-track="54" data-day="Tuesday, 27 Feb" data-theme="747" href="https://www.mobileworldcongress.com/session/gti-summit-2018/" class="session-item entity" data-fid="1667" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Business Leaders’ Symposium</h2>
                                            <h3 class="presented">GTI</h3>
                                            <span class="list-category" style="color:#8317D0;">Plenary 6</span>
                                            <span class="list-time">09:15 - 12:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">Private sector driving Africa’s digital economy</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">10:00</span>
                                <span class="fixed-hour">10:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(119, 120, 123); display: none;" data-track="58" data-day="Tuesday, 27 Feb" data-theme="0" href="#" class="session-item entity" data-fid="1622" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Local to Global</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#77787B;">Breakout 2</span>
                                            <span class="list-time">10:00 - 11:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme">Unleashing the African Innovation Potential</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: none;" data-track="54" data-day="Tuesday, 27 Feb" data-theme="746" href="https://www.mobileworldcongress.com/session/live-co-creating-solutions-with-digital/" class="session-item entity" data-fid="1666" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Smart Cities</h2>
                                            <!-- <h3 class="presented">PwC</h3> -->
                                            <span class="list-category" style="color:#8317D0;">Breakout 3</span>
                                            <span class="list-time">10:00 - 17:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/tech-in-society.png" scale="0">Rethinking Transportation</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(248, 239, 48); display: none;" data-track="55" data-day="Tuesday, 27 Feb" data-theme="750" href="#" class="session-item entity" data-fid="1673" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Digital talent in the globalized economy</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#F8EF30;">Breakout 4</span>
                                            <span class="list-time">10:00 - 11:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">How ready is Africa?</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">10:30</span>
                                <span class="fixed-hour">10:30</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: none;" data-track="54" data-day="Tuesday, 27 Feb" data-theme="749" href="https://www.mobileworldcongress.com/session/automation-and-ai-in-mobile-networks/" class="session-item entity" data-fid="1610" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Smart Cities</h2>
                                            <!-- <h3 class="presented">Award Solutions</h3> -->
                                            <span class="list-category" style="color:#8317D0;">Breakout 5</span>
                                            <span class="list-time">10:30 - 16:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/applied-ai.png" scale="0">Rethinking Transportation</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">11:00</span>
                                <span class="fixed-hour">11:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(248, 239, 48); display: none;" data-track="55" data-day="Tuesday, 27 Feb" data-theme="750" href="https://www.mobileworldcongress.com/session/4yfn-awards-semifinal-2/" class="session-item entity" data-fid="1561" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Big Data & IoT</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#F8EF30;">Breakout 6</span>
                                            <span class="list-time">11:00 - 12:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">The Value proposition for Africa</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Tuesday, 27 Feb" data-theme="748" href="#" class="session-item entity" data-fid="1581" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>More Summit Streams</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">11:00 - 12:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/future-services-provider.png" scale="0"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Tuesday, 27 Feb" data-theme="746" href="https://www.mobileworldcongress.com/session/technology-in-the-future-mobile-world/" class="session-item entity" data-fid="1596" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Africa Smart Women & Girls Initiative</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">11:00 - 12:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/tech-in-society.png" scale="0">Roundtable (Invitation only)</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Tuesday, 27 Feb" data-theme="747" href="#" class="session-item entity" data-fid="1613" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Face the Gorillas:</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Smart Cities Edition</span>
                                            <span class="list-time">11:00 - 12:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Tuesday, 27 Feb" data-theme="745" href="#" class="session-item entity" data-fid="1615" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Smart Cities Exhibition | Leader’s Exhibition Tour</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">11:00 - 12:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-digital-consumer.png" scale="0"></span>
                                        </div>
                                    </a>
                                </div>


                            </div>
                        </div>

                    </div>



                    <div id="three" class="daycontent">
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">09:00</span>
                                <span class="fixed-hour">09:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: block;" data-track="54" data-day="Wednesday, 28 Feb" data-theme="747" href="#" class="session-item entity" data-fid="1634" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Transforming Mobile Network Economics of 4G/5G</h2>
                                            <h3 class="presented">Mavenir</h3>
                                            <span class="list-category" style="color:#8317D0;">Partner Programmes</span>
                                            <span class="list-time">09:00 - 12:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">The Network</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">09:30</span>
                                <span class="fixed-hour">09:30</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Wednesday, 28 Feb" data-theme="745" href="https://www.mobileworldcongress.com/session/keynote-8/" class="session-item entity" data-fid="1585" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Keynote 8</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">09:30 - 11:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-digital-consumer.png" scale="0">The Digital Consumer</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: none;" data-track="54" data-day="Wednesday, 28 Feb" data-theme="748" href="https://www.mobileworldcongress.com/session/seizing-the-upside-of-disruption-new-marketplaces-where-industries-collide/" class="session-item entity" data-fid="1635" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Seizing the upside of disruption – new marketplaces where industries collide</h2>
                                            <h3 class="presented">EY</h3>
                                            <span class="list-category" style="color:#8317D0;">Partner Programmes</span>
                                            <span class="list-time">09:30 - 12:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/future-services-provider.png" scale="0">Future Services Provider</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: none;" data-track="54" data-day="Wednesday, 28 Feb" data-theme="385" href="https://www.mobileworldcongress.com/session/creative-storytelling-11-the-fusion-of-tv-and-digital/" class="session-item entity" data-fid="1636" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Creative Storytelling 1:1: the fusion of TV and digital</h2>
                                            <h3 class="presented">Tremor Video DSP, a Taptica Company</h3>
                                            <span class="list-category" style="color:#8317D0;">Partner Programmes</span>
                                            <span class="list-time">09:30 - 12:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/content-media.png" scale="0">Content &amp; Media</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">10:00</span>
                                <span class="fixed-hour">10:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(119, 120, 123); display: none;" data-track="58" data-day="Wednesday, 28 Feb" data-theme="0" href="https://www.mobileworldcongress.com/session/expanding-digital-services-to-the-next-billion/en/" class="session-item entity" data-fid="1631" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Expanding Digital Services To The Next Billion</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#77787B;">Ministerial Programme (Invite Only)</span>
                                            <span class="list-time">10:00 - 11:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(248, 239, 48); display: none;" data-track="55" data-day="Wednesday, 28 Feb" data-theme="750" href="https://www.mobileworldcongress.com/session/demoday-by-numa/" class="session-item entity" data-fid="1643" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Demoday By NUMA</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#F8EF30;">4YFN</span>
                                            <span class="list-time">10:00 - 12:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(248, 239, 48); display: none;" data-track="55" data-day="Wednesday, 28 Feb" data-theme="750" href="https://www.mobileworldcongress.com/session/pitching-session-10/" class="session-item entity" data-fid="1664" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Pitching Session</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#F8EF30;">4YFN</span>
                                            <span class="list-time">10:00 - 11:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">10:30</span>
                                <span class="fixed-hour">10:30</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: none;" data-track="54" data-day="Wednesday, 28 Feb" data-theme="747" href="https://www.mobileworldcongress.com/session/transforming-networks-for-5g/" class="session-item entity" data-fid="1562" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Transforming Networks for 5G</h2>
                                            <h3 class="presented">Award Solutions</h3>
                                            <span class="list-category" style="color:#8317D0;">Partner Programmes</span>
                                            <span class="list-time">10:30 - 16:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">The Network</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">11:00</span>
                                <span class="fixed-hour">11:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(248, 239, 48); display: none;" data-track="55" data-day="Wednesday, 28 Feb" data-theme="750" href="https://www.mobileworldcongress.com/session/pitching-session-12/" class="session-item entity" data-fid="1670" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Pitching Session</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#F8EF30;">4YFN</span>
                                            <span class="list-time">11:00 - 12:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">11:30</span>
                                <span class="fixed-hour">11:30</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Wednesday, 28 Feb" data-theme="383" href="https://www.mobileworldcongress.com/session/new-and-old-managing-the-transition-to-autonomous-driving/" class="session-item entity" data-fid="1563" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>New and Old: Managing the transition to Autonomous Driving</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">11:30 - 12:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0">The Fourth Industrial Revolution</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Wednesday, 28 Feb" data-theme="748" href="https://www.mobileworldcongress.com/session/exploring-the-rise-of-operator-led-ott-services/" class="session-item entity" data-fid="1578" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Exploring the Rise of Operator-Led OTT Services</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">11:30 - 12:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/future-services-provider.png" scale="0">Future Services Provider</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Wednesday, 28 Feb" data-theme="746" href="https://www.mobileworldcongress.com/session/introducing-the-augmented-human/" class="session-item entity" data-fid="1593" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Introducing the Augmented Human</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">11:30 - 12:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/tech-in-society.png" scale="0">Tech in Society</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Wednesday, 28 Feb" data-theme="385" href="https://www.mobileworldcongress.com/session/live-events-and-fan-engagement/" class="session-item entity" data-fid="1599" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Live Events and Fan Engagement</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">11:30 - 12:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/content-media.png" scale="0">Content &amp; Media</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(119, 120, 123); display: none;" data-track="58" data-day="Wednesday, 28 Feb" data-theme="0" href="https://www.mobileworldcongress.com/session/educate-to-innovate-opening-new-markets-to-the-digital-revolution/en/" class="session-item entity" data-fid="1617" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Educate to Innovate: Opening New Markets to the Digital Revolution</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#77787B;">Ministerial Programme (Invite Only)</span>
                                            <span class="list-time">11:30 - 13:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(119, 120, 123); display: none;" data-track="58" data-day="Wednesday, 28 Feb" data-theme="0" href="https://www.mobileworldcongress.com/session/accelerating-digital-health-through-the-power-of-collaboration/en/" class="session-item entity" data-fid="1630" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Accelerating Digital Health through the Power of Collaboration</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#77787B;">Ministerial Programme (Invite Only)</span>
                                            <span class="list-time">11:30 - 13:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">12:00</span>
                                <span class="fixed-hour">12:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(248, 239, 48); display: none;" data-track="55" data-day="Wednesday, 28 Feb" data-theme="750" href="https://www.mobileworldcongress.com/session/4yfn-awards-final/" class="session-item entity" data-fid="1557" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>4YFN Awards Final</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#F8EF30;">4YFN</span>
                                            <span class="list-time">12:00 - 13:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(248, 239, 48); display: none;" data-track="55" data-day="Wednesday, 28 Feb" data-theme="750" href="https://www.mobileworldcongress.com/session/disruption-inside-fostering-profiting-from-intrapreneurship/" class="session-item entity" data-fid="1641" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Disruption Inside: Fostering &amp; Profiting From Intrapreneurship</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#F8EF30;">4YFN</span>
                                            <span class="list-time">12:00 - 13:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">13:30</span>
                                <span class="fixed-hour">13:30</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Wednesday, 28 Feb" data-theme="383" href="https://www.mobileworldcongress.com/session/keynote-9/" class="session-item entity" data-fid="1603" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Keynote 9</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">13:30 - 14:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0">The Fourth Industrial Revolution</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">14:30</span>
                                <span class="fixed-hour">14:30</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(119, 120, 123); display: none;" data-track="58" data-day="Wednesday, 28 Feb" data-theme="0" href="https://www.mobileworldcongress.com/session/capturing-the-big-data-potential-for-social-good/en/" class="session-item entity" data-fid="1619" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Capturing the Big Data Potential for Social Good</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#77787B;">Ministerial Programme (Invite Only)</span>
                                            <span class="list-time">14:30 - 15:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">14:45</span>
                                <span class="fixed-hour">14:45</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: none;" data-track="54" data-day="Wednesday, 28 Feb" data-theme="383" href="https://www.mobileworldcongress.com/session/ai-visibility-keys-to-mobile-security/" class="session-item entity" data-fid="1646" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Revolutionizing Mobile Network Security</h2>
                                            <h3 class="presented">Palo Alto Networks</h3>
                                            <span class="list-category" style="color:#8317D0;">Partner Programmes</span>
                                            <span class="list-time">14:45 - 16:35</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0">The Fourth Industrial Revolution</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">15:00</span>
                                <span class="fixed-hour">15:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Wednesday, 28 Feb" data-theme="748" href="https://www.mobileworldcongress.com/session/customer-centricity-rethinking-care-and-experience/" class="session-item entity" data-fid="1568" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Customer Centricity: Rethinking Care and Experience</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">15:00 - 16:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/future-services-provider.png" scale="0">Future Services Provider</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Wednesday, 28 Feb" data-theme="746" href="https://www.mobileworldcongress.com/session/smart-community-collaboration/" class="session-item entity" data-fid="1573" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Smart Community Collaboration</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">15:00 - 16:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/tech-in-society.png" scale="0">Tech in Society</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Wednesday, 28 Feb" data-theme="383" href="https://www.mobileworldcongress.com/session/delivering-the-iot-ecosystem/" class="session-item entity" data-fid="1587" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Delivering the IoT Ecosystem</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">15:00 - 16:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0">The Fourth Industrial Revolution</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Wednesday, 28 Feb" data-theme="385" href="https://www.mobileworldcongress.com/session/entertainment-at-the-network-edge/" class="session-item entity" data-fid="1614" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Future Networks and Content Optimisation</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">15:00 - 16:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/content-media.png" scale="0">Content &amp; Media</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(248, 239, 48); display: none;" data-track="55" data-day="Wednesday, 28 Feb" data-theme="750" href="https://www.mobileworldcongress.com/session/pitching-session-5/" class="session-item entity" data-fid="1659" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Pitching Session</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#F8EF30;">4YFN</span>
                                            <span class="list-time">15:00 - 16:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: none;" data-track="54" data-day="Wednesday, 28 Feb" data-theme="747" href="https://www.mobileworldcongress.com/session/rf-technologies-for-5g-era/" class="session-item entity" data-fid="1669" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>RF Technologies for 5G Era</h2>
                                            <h3 class="presented">Fingu/Gewei</h3>
                                            <span class="list-category" style="color:#8317D0;">Partner Programmes</span>
                                            <span class="list-time">15:00 - 19:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">The Network</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">16:00</span>
                                <span class="fixed-hour">16:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(119, 120, 123); display: none;" data-track="58" data-day="Wednesday, 28 Feb" data-theme="0" href="https://www.mobileworldcongress.com/session/prediction-panel-what-expectations-can-we-set-for-the-industry-for-the-year-ahead/en/" class="session-item entity" data-fid="1628" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Prediction Panel: What Expectations Can We Set for the Industry for the Year Ahead?</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#77787B;">Ministerial Programme (Invite Only)</span>
                                            <span class="list-time">16:00 - 17:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(248, 239, 48); display: none;" data-track="55" data-day="Wednesday, 28 Feb" data-theme="750" href="https://www.mobileworldcongress.com/session/pitching-session-9/" class="session-item entity" data-fid="1663" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Pitching Session</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#F8EF30;">4YFN</span>
                                            <span class="list-time">16:00 - 17:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">16:30</span>
                                <span class="fixed-hour">16:30</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Wednesday, 28 Feb" data-theme="745" href="https://www.mobileworldcongress.com/session/why-should-we-trust-your-digital-security/" class="session-item entity" data-fid="1565" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Why Should We Trust Your Digital Security?</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">16:30 - 17:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-digital-consumer.png" scale="0">The Digital Consumer</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Wednesday, 28 Feb" data-theme="383" href="https://www.mobileworldcongress.com/session/vehicles-as-a-service/" class="session-item entity" data-fid="1588" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Vehicles as a Service</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">16:30 - 17:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0">The Fourth Industrial Revolution</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Wednesday, 28 Feb" data-theme="749" href="https://www.mobileworldcongress.com/session/ai-everywhere-digital-transformation/" class="session-item entity" data-fid="1589" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>AI Everywhere: Digital Transformation</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">16:30 - 17:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/applied-ai.png" scale="0">Applied AI</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Wednesday, 28 Feb" data-theme="748" href="https://www.mobileworldcongress.com/session/zero-rated-data-opportunities/" class="session-item entity" data-fid="1604" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Zero-Rated Data Opportunities</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">16:30 - 17:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/future-services-provider.png" scale="0">Future Services Provider</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">17:00</span>
                                <span class="fixed-hour">17:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: none;" data-track="54" data-day="Wednesday, 28 Feb" data-theme="748" href="https://www.mobileworldcongress.com/session/gdpr-briefing-cyber-security-impacts/" class="session-item entity" data-fid="1648" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>GDPR Briefing: Cyber Security Impacts</h2>
                                            <h3 class="presented">Palo Alto Networks</h3>
                                            <span class="list-category" style="color:#8317D0;">Partner Programmes</span>
                                            <span class="list-time">17:00 - 19:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/future-services-provider.png" scale="0">Future Services Provider</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(248, 239, 48); display: none;" data-track="55" data-day="Wednesday, 28 Feb" data-theme="750" href="https://www.mobileworldcongress.com/session/pitching-session-14/" class="session-item entity" data-fid="1676" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Pitching Session</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#F8EF30;">4YFN</span>
                                            <span class="list-time">17:00 - 18:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">09:45</span>
                                <span class="fixed-hour">09:45</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: none;" data-track="54" data-day="Thursday, 01 Mar" data-theme="383" href="https://www.mobileworldcongress.com/session/ide-drone-summit-the-business-of-commercial-drones/" class="session-item entity" data-fid="1654" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>IDE Drone Summit: The Business of Commercial Drones</h2>
                                            <h3 class="presented">E.J. Krause &amp; Associates, Inc.</h3>
                                            <span class="list-category" style="color:#8317D0;">Partner Programmes</span>
                                            <span class="list-time">09:45 - 13:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0">The Fourth Industrial Revolution</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">10:00</span>
                                <span class="fixed-hour">10:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Thursday, 01 Mar" data-theme="750" href="https://www.mobileworldcongress.com/session/keynote-10/" class="session-item entity" data-fid="1579" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Keynote 10</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">10:00 - 11:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: none;" data-track="54" data-day="Thursday, 01 Mar" data-theme="0" href="https://www.mobileworldcongress.com/session/software-ag/" class="session-item entity" data-fid="1647" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Software AG</h2>
                                            <h3 class="presented">Software AG</h3>
                                            <span class="list-category" style="color:#8317D0;">Partner Programmes</span>
                                            <span class="list-time">10:00 - 11:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: none;" data-track="54" data-day="Thursday, 01 Mar" data-theme="0" href="https://www.mobileworldcongress.com/session/b-yond/" class="session-item entity" data-fid="1677" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>B.Yond</h2>
                                            <h3 class="presented">B.Yond</h3>
                                            <span class="list-category" style="color:#8317D0;">Partner Programmes</span>
                                            <span class="list-time">10:00 - 11:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: none;" data-track="54" data-day="Thursday, 01 Mar" data-theme="0" href="https://www.mobileworldcongress.com/session/icar-vision-systems/" class="session-item entity" data-fid="1679" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Icar Vision Systems</h2>
                                            <h3 class="presented">Icar Vision Systems</h3>
                                            <span class="list-category" style="color:#8317D0;">Partner Programmes</span>
                                            <span class="list-time">10:00 - 11:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">11:30</span>
                                <span class="fixed-hour">11:30</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: none;" data-track="54" data-day="Thursday, 01 Mar" data-theme="747" href="https://www.mobileworldcongress.com/session/infineon/" class="session-item entity" data-fid="1637" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>5G MmWave – Disruptive Step?</h2>
                                            <h3 class="presented">Infineon</h3>
                                            <span class="list-category" style="color:#8317D0;">Partner Programmes</span>
                                            <span class="list-time">11:30 - 12:30</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">The Network</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">12:00</span>
                                <span class="fixed-hour">12:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Thursday, 01 Mar" data-theme="383" href="https://www.mobileworldcongress.com/session/iot-5g-use-cases/" class="session-item entity" data-fid="1584" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>IoT &amp; 5G Use Cases</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">12:00 - 13:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0">The Fourth Industrial Revolution</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Thursday, 01 Mar" data-theme="746" href="https://www.mobileworldcongress.com/session/the-mobile-future-of-humanitarian-crises/" class="session-item entity" data-fid="1592" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>The Mobile Future of Humanitarian Crises</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">12:00 - 13:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/tech-in-society.png" scale="0">Tech in Society</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Thursday, 01 Mar" data-theme="385" href="https://www.mobileworldcongress.com/session/power-of-personalisation/" class="session-item entity" data-fid="1616" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Power of Personalisation</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">12:00 - 13:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/content-media.png" scale="0">Content &amp; Media</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: none;">
                            <div class="agenda-hour">
                                <span class="abs-hour">14:00</span>
                                <span class="fixed-hour">14:00</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Thursday, 01 Mar" data-theme="747" href="https://www.mobileworldcongress.com/session/debate-do-5g-business-cases-depend-more-on-core-or-edge-upgrades/" class="session-item entity" data-fid="1572" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Debate: Do 5G Business Cases Depend More on Core or Edge Upgrades?</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">14:00 - 15:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">The Network</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Thursday, 01 Mar" data-theme="749" href="https://www.mobileworldcongress.com/session/ai-everywhere-future-of-work/" class="session-item entity" data-fid="1605" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>AI Everywhere: Future of Work</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">14:00 - 15:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/applied-ai.png" scale="0">Applied AI</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: none;" data-track="62" data-day="Thursday, 01 Mar" data-theme="750" href="https://www.mobileworldcongress.com/session/innovation-battle-of-the-startups/" class="session-item entity" data-fid="1606" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Innovation: Battle of the Startups</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Conference</span>
                                            <span class="list-time">14:00 - 15:00</span>
                                            <span class="list-location"></span>
                                            <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script>
                    function openCity(evt, cityName) {
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("daycontent");
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablinks");
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(" active-day", "");
                        }
                        document.getElementById(cityName).style.display = "block";
                        evt.currentTarget.className += " active-day";
                    }


                    // Get the element with id="defaultOpen" and click on it
                    document.getElementById("defaultOpen").click();
                    </script>


                </div>
            </div>
        </div>

    </section>

    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">Confirmed speakers</h2>
            <div class="row">
                <div class="col-lg-3">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid mb-3" src="img/speaker pics-01-01.png" alt="">
                        <h5>H.E. Paul Kagame</h5>
                        <p class="font-weight-light mb-0">President of the Republic of Rwanda</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid mb-3" src="img/speaker pics-04.png" alt="">
                        <h5>Dr. Hamadoun Toure</h5>
                        <p class="font-weight-light mb-0">Executive Director, Smart Africa</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid mb-3" src="img/speaker pics-02.png" alt="">
                        <h5>Houlin Zhao</h5>
                        <p class="font-weight-light mb-0">Secretary-General of the International Telecommunication Union</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid mb-3" src="img/speaker pics-03.png" alt="">
                        <h5>Hon Jean de Dieu RURANGIRWA</h5>
                        <p class="font-weight-light mb-0">Minister of Information Technology & Communications</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper-portfolio text-center style3 container-fluid special">
        <div class="container">
            <h2 class="">Partner Organisations</h2>
        </div>
        <div class="12u 12(wide)" style="margin-top:0px;">
            <ul id="slide" class="lightSlider">
                <li>
                    <img alt="MYICT" src="img/partner/myict.png" />
                </li>
                <li>
                    <img alt="RDB" src="img/partner/rdb.png" />
                </li>
                <li>
                    <img alt="Rura" src="img/partner/rura.png" />
                </li>
                <li>
                    <img alt="Akagera Aviation" src="img/partner/akagera-aviation.png" />
                </li>
                <li>
                    <img alt="Smart africa" src="img/partner/smart-africa.png" />
                </li>
                <li>
                    <img alt="inmarsat" src="img/partner/inmarsat.png" />
                </li>
                <li>
                    <img alt="Carnegie Mellon University" src="img/partner/carnegie-mellon-university.png" />
                </li>
                <li>
                    <img alt="HANCOM" src="img/partner/hancom.png" />
                </li>
                <li>
                    <img alt="African Development Bank" src="img/partner/adb.png" />
                </li>
                <li>
                    <img alt="iaccelerator" src="img/partner/iaccelerator.png" />
                </li>
                <li>
                    <img alt="jica" src="img/partner/jica.png" />
                </li>
                <li>
                    <img alt="Kigali City" src="img/partner/kigali-city.png" />
                </li>
                <li>
                    <img alt="Microsoft" src="img/partner/microsoft.png" />
                </li>
                <li>
                    <img alt="intel" src="img/partner/intel.png" />
                </li>
                <li>
                    <img alt="yegometo" src="img/partner/yegometo.png" />
                </li>
                <li>
                    <img alt="RwandAir" src="img/partner/rwandair.png" />
                </li>
                <li>
                    <img alt="gsma" src="img/partner/gsma.png" />
                </li>
                <li>
                    <img alt="Global voice group" src="img/partner/globalvoicegroup.png" />
                </li>
                <li>
                    <img alt="SEACOM" src="img/partner/seacom.png" />
                </li>
            </ul>
        </div>
    </section>

    <section id="#" class="bg-grey">
        <div class="container">

            <div class="row no-padding no-margin">
                <div class="col-md-12 text-center">
                    <h1 style="color: #1976d2; font-size: 30px;">Private Sector Smart Africa Member:</h1>
                </div>
            </div>

        </div>
        <div class="row no-padding no-margin">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/partner/rwandair.png" alt="Untitled-1-07" style="max-width: 100%;">
                    </div>
                    <div class="col-md-3">
                        <img src="img/partner/yegometo.png" alt="Untitled-1-07" style="max-width: 100%;">
                    </div>
                    <div class="col-md-3">
                        <img src="img/partner/carnegie-mellon-university.png" alt="Untitled-1-07" style="max-width: 100%;">
                    </div>
                    <div class="col-md-3">
                        <img src="img/partner/akagera-aviation.png" alt="Untitled-1-07" style="max-width: 100%;">
                    </div>

                </div>
                <!-- <div class="col-md-12">
                        <img src="img/png/Untitled-1-07.png" alt="Untitled-1-07" style="max-width: 100%;height: 200px;">
                    </div>  -->
            </div>

        </div>

    </section>


    <script src="<?=DN?>/js/jssor.slider.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
              {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:$Jease$.$Swing,$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:$Jease$.$Swing,$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Rows: 3,
                $Cols: 6,
                $SpacingX: 14,
                $SpacingY: 12,
                $Orientation: 2,
                $Align: 156
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            // var MAX_WIDTH = 960;
            // var MAX_WIDTH = 1080;
            var MAX_WIDTH = 1600;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssora093 {display:block;position:absolute;cursor:pointer;}
        .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093:hover {opacity:.8;}
        .jssora093.jssora093dn {opacity:.6;}
        .jssora093.jssora093ds {opacity:.3;pointer-events:none;}

        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:480px;overflow:hidden;visibility:hidden;background-color:#24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="videos/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-01.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-01.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-02.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-02.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-03.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-03.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-04.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-04.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-05.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-05.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-06.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-06.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-07.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-07.jpg" />
            </div>
            <!-- <div>
                <img data-u="image" src="img/gallery/720x480/tas17-08.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-08.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-09.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-09.jpg" />
            </div> -->
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-10.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-10.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-11.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-11.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-12.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-12.jpg" />
            </div>
            <!-- <div>
                <img data-u="image" src="img/gallery/720x480/tas17-13.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-13.jpg" />
            </div> -->
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-14.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-14.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-15.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-15.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-16.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-16.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-17.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-17.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-18.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-18.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-19.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-19.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-20.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-20.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-21.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-21.jpg" />
            </div>
            <!-- <div>
                <img data-u="image" src="img/gallery/720x480/tas17-22.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-22.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-23.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-23.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/720x480/tas17-24.jpg" />
                <img data-u="thumb" src="img/gallery/720x480/tas17-24.jpg" />
            </div> -->
            <!-- <div style="background-color:#ff7c28;">
                <div style="position:absolute;top:50px;left:50px;width:450px;height:62px;z-index:0;font-size:16px;color:#000000;line-height:24px;text-align:left;padding:5px;box-sizing:border-box;">Photos in this slider are to demostrate jssor slider,<br />
                    which are not licensed for any other purpose.
                </div>
                <img data-u="thumb" src="img/gallery/720x480/019.jpg" />
            </div> -->
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:360px;height:480px;background-color:#000;" data-autocenter="2" data-scale-left="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:99px;height:66px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewBox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:390px;" data-autocenter="2">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>


    <?php /* ?>
    <section class="showcase no-padding">
        <div class="container-fluid p-0">
            <div class="row no-gutters bg-green white">
                <!-- <div class="row no-gutters">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Updated For Bootstrap 4</h2>
                        <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
                    </div>
                </div> -->
                <div class="row no-gutters">
                    <!-- <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div> -->
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Lorem ipsum dolor sit amet</h2>
                        <p class="lead mb-0">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Aliquam nec nisl quis quam faucibus condimentum. Fusce placerat dolor sed elit porta, elementum aliquam arcu tristique. Nam diam tortor, sagittis vitae enim eu, venenatis vehicula nunc. Proin velit lectus, mollis eget pellentesque in, feugiat eu dui. In tempor consequat placerat. Morbi interdum nisl et mi dictum facilisis. Suspendisse sit amet imperdiet massa, ut vehicula nibh. Aliquam vel nunc quam.</p>
                        <p class="lead mb-0">consectetur adipiscing elit. Duis ut viverra felis. Nam vel ipsum ac leo aliquam volutpat quis a lectus. Maecenas mollis ante libero, in hendrerit lectus tincidunt nec. Aenean id erat auctor, tristique risus vestibulum, ultrices nunc. Aenean condimentum elementum maximus. Donec tincidunt, nunc et semper bibendum, sapien lectus facilisis turpis, ac vehicula enim nisl efficitur lectus. Ut eleifend sodales justo.</p>
                        <p class="lead mb-0">Maecenas in interdum nunc. Mauris ultricies dictum purus at efficitur. Ut faucibus dui magna, vitae ultrices lorem feugiat id. Mauris rhoncus tortor ut sodales dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam maximus est in sapien viverra, cursus dignissim urna placerat. Integer posuere nisi finibus diam feugiat tempus. Nullam pretium dictum congue. Maecenas at nisl at magna aliquam ultrices. In vel feugiat odio. Integer dolor sem, lobortis et tortor a, commodo pellentesque magna. Phasellus id eros ac quam aliquam fringilla.</p>
                    </div>
                    <div class="col-lg-6 my-auto showcontact  bg-dack-orange">
                        <h2>Contact Us</h2>
                        <form>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Second Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Second Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Telephone number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Telephone number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Organisation Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Organisation Name">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <!-- <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php */ ?>

            <?php include 'views/footer-common.php';?>

    <!-- Bootstrap core JavaScript -->
    <script src="<?=DN;?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?=DN;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?=DN;?>/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=DN;?>/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?=DN;?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?=DN;?>/js/lightslider.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?=DN;?>/js/creative.min.js"></script>
    <script type = "text/javascript" >
        $(document).ready(function() {
            $("#slide").lightSlider({
                item: 6,
                auto: true,
                loop: true,
                speed: 1000, //ms'
            });
        });
        $(document).ready(function() {
            $("#lightSlider, #lightSlider1, #lightSlider2, #lightSlider3, #lightSlider4, #lightSlider5").lightSlider({
                item: 1,
                auto: true,
                loop: true,
            });
        }); 
    </script>

</body>

</html>






















