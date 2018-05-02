<?php include 'admin/core/init.php';?>
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
    <title>TAS2018</title>
    <?php include 'includes/head-common.php';?>
  </head>

  <body id="page-top">
    <!-- Navigation -->
    <?php include 'views/header-mc.php';?>
    <div id="wrapper" class="home nav-top-mc">

    <?php  ?>
    <section class="showcase no-padding">
        <div class="container-fluid p-0">
            <div class="row no-gutters bg-blue white">
                
                <!-- <div class="col-lg-3 order-lg-1 my-auto showcase-text-link bg-dack-blue showcase-text-link-min">
                    <p class="text-white" id="days">Days</p>
                </div> -->
                <div class="col-md-4 order-lg-1 my-auto showcase-text-link bg-blue showcase-text-link-min">
                    <p class="text-white countdown-title">Have you registered for <br>TAS 2018?</p>
                </div>
                <div class="col-md-8 ">
                    <div class="row">
                        <div class="col-xs-3 order-lg-1 my-auto showcase-text-link bg-dack-blue showcase-text-link-min">
                            <a href="#" class="text-white countdown-value" id="days">Days</a>
                        </div>
                        <div class="col-xs-3 order-lg-1 my-auto showcase-text-link bg-yellow showcase-text-link-min">
                            <a href="#" class="text-white countdown-value" id="hours">Text</a>
                        </div>
                        <div class="col-xs-3 order-lg-1 my-auto showcase-text-link bg-orange showcase-text-link-min">
                            <a href="#" class="text-white countdown-value" id="minutes">Text</a>
                        </div>
                        <div class="col-xs-3 order-lg-1 my-auto showcase-text-link bg-green showcase-text-link-min">
                            <a href="#" class="text-white countdown-value" id="seconds">Text</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php  ?>
    <header class="masthead masthead-mc text-center text-white">
        <div class="container">
            <div class="row">
                <h2 class="hd-wel header-title-mc"> Welcome to Transform Africa Summit 2018<br></h2>
                <h2 class="header-title-mc"> <span style="color: #f78e20;">7 - 10 May 2018</span> | Kigali Convention Center | Rwanda<br></h2>
                <!-- <h4 class="hd-desc header-what-mc" id="countdowndateEvent"></h4> -->
                <!-- <h4 class="hd-desc header-what-mc">What would you like to do?</h4> -->

                <div class="text-center">
                    <!-- <a class="btn btn-program-mc-reg" href="<?=DN?>/registerone"><i class="fa fa-pencil" aria-hidden="true"></i> Get your pass</a> -->
                    <div class="col-md-4 col-xs-12 col-sm-12 img-icon-mc" style="visibility: hidden;">
                        <a class="js-scroll-trigger icon-attend" href="<?=DN?>/register">
                            <img src=" img/Register-to-attend.png" alt="icon-02" class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">Get your pass</h4>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-12 img-icon-mc">
                        <a class="js-scroll-trigger icon-attend" href="<?=DN?>/registerone">
                            <img src=" img/Register-to-attend.png" alt="icon-02" class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">Get your pass</h4>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-12 img-icon-mc" style="visibility: hidden;">
                        <a class="js-scroll-trigger icon-attend" href="<?=DN?>/register">
                            <img src=" img/Register-to-attend.png" alt="icon-02" class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">Get your pass</h4>
                        </a>
                    </div>
                </div>
                
                    <!-- <div class="col-md-4 col-xs-6 col-sm-4 img-icon-mc">
                        <a class="js-scroll-trigger icon-attend" href="<?=DN?>/register">
                            <img src=" img/Register-to-attend.png" alt="icon-02" class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">Get your pass</h4>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 col-sm-4 img-icon-mc">
                        <a class="js-scroll-trigger icon-program" href="<?=DN?>/#program">
                            <img src=" img/View-the-program.png" alt="icon-05" class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">View<br> the program</h4>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 col-sm-4 img-icon-mc">
                        <a class="js-scroll-trigger icon-exhibit" href="<?=DN?>/sponsor">
                            <img src=" img/Exhibit.png" alt="icon-04" class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">Sponsor<br> or Exhibit</h4>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 col-sm-4 img-icon-mc">
                        <a class="js-scroll-trigger icon-speak" href="<?=DN?>/platinum">
                            <img src=" img/platimun-hm.png" alt="icon-06"  class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">Register for Platinum<br><span> program</span></h4>
                        </a>
                    </div>
                
                    <div class="col-md-4 col-xs-6 col-sm-4 img-icon-mc">
                        <a class="js-scroll-trigger icon-golf" id="myBtn" href="#">
                            <img src=" img/Register-for-the-golf-tournament.png" alt="icon-03" class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">Register for TAS2018 Golf<span class=""> tournament</span></h4>
                        </a>
                        
                        <div id="myModal" class="modal">

                            
                            <div class="modal-content modal-content-golf">
                                <span class="close">&times;</span>
                                <h4 style="text-shadow: none;">Transform Africa Summit 2018 Golf tournament</h4>
                                <hr class="hr-book-layout" style="width: 100%;">
                                <p>To participate in the Transform Africa Summit 2018 golf tournament, please register as a platinum delegate following the links below:</p>

                                <div class="row">
                                    <ul class="portfolio-filter portfolio-filter-links">
                                        <li class="col-md-6 col-xs-12"><a class="btn btn-default" href="<?=DN?>/register-corporate">Corporate package<span class="hidden-xs"> (5 delegates or more)</span></a></li>
                                        <li class="col-md-6 col-xs-12"><a class="btn btn-default" href="<?=DN?>/register-pass">Individual registration</a></li>
                                    </ul>
                                </div>
                                
                            </div>

                        </div> -->
                        <script>
                            // Get the modal
                            var modal = document.getElementById('myModal');

                            // Get the button that opens the modal
                            var btn = document.getElementById("myBtn");

                            // Get the <span> element that closes the modal
                            var span = document.getElementsByClassName("close")[0];

                            // When the user clicks the button, open the modal 
                            btn.onclick = function() {
                                modal.style.display = "block";
                            }

                            // When the user clicks on <span> (x), close the modal
                            span.onclick = function() {
                                modal.style.display = "none";
                            }

                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script>
                    </div>
                   <!--  <div class="col-md-4 col-xs-6 col-sm-4 img-icon-mc">
                        <a class="js-scroll-trigger icon-media" href="<?=DN?>/register/media">
                            <img src=" img/Get-my-media-pass.png" alt="icon-07" class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">Get my <br><span class="sm-hm-link hidden-xs">lo</span><span class="sm2-hm-link"> lor</span><span class="sm3-hm-link"> lore</span>media pass <span class="sm-hm-link-last hidden-xs">loream</span>
                                <span class="gap-fix-mc"> lorem ipsum</span></h4>
                        </a>
                    </div> -->
                    <!-- <div class="col-md-3 col-xs-6 col-sm-4 img-icon-mc">
                        <a class="js-scroll-trigger icon-trip" href="<?=DN?>/plan">
                            <img src=" img/Plan-my-trip.png" alt="icon-07" class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">Plan<br> my trip</h4>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-4 img-icon-mc">
                        <a class="js-scroll-trigger icon-sponser" target="_blank" href="https://www.smartafrica.org/">
                            <img src=" img/logo-smart-hm.png" alt="icon-04" class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">Learn more about<br/> Smart Africa</h4>
                        </a>
                    </div> -->
              
            </div>
        </div>
    </header>

    <section class="bg-black no-padding">
        <div class="col-lg-12 order-lg-1 text-white showcase-img no-padding">
            <a href="<?=DN?>/register/gold">
                <img src="img/banner-01-2.jpg">
            </a>
            
        </div>
    </section>
                
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("May 7, 2018 08:30:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

          // Get todays date and time
          var now = new Date().getTime();

          // Find the distance between now an the count down date
          var distance = countDownDate - now;

          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // Display the result in the element with id="demo"
          // document.getElementById("countdowndateEvent").innerHTML = days + "d " + hours + "h "
          // + minutes + "m " + seconds + "s ";

          // Display the result in the element with id="demo"
          document.getElementById("days").innerHTML = days + "<br>Days";
          document.getElementById("hours").innerHTML = hours + "<br>Hours";
          document.getElementById("minutes").innerHTML = minutes + "<br>Minutes";
          document.getElementById("seconds").innerHTML = seconds + "<br>Seconds";

          // If the count down is finished, write some text
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdowndateEvent").innerHTML = "EXPIRED";
          }
        }, 1000);
    </script>




    <!-- <section class="bg-blue no-padding">
        <div class="container">
            <div class="col-lg-12 order-lg-1 text-white showcase-img no-padding">
                <p id="countdowndate" class="countdown"></p>
            </div>
        </div>
    </section> -->

    <section class="bg-grey">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="mod-in text-center">
                        <figure><img src="img/4,000+-attendees.png" alt="4,000+ attendees" width="68" height="68" scale="0"></figure>
                        <h5>4,000+ attendees</h5>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="mod-in text-center">
                        <figure><img src="img/100+-exhibitors.png" alt="2,300+ exhibitors" width="68" height="68" scale="0"></figure>
                        <h5>100+ exhibitors</h5>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="mod-in text-center">
                        <figure><img src="img/Africa-Heads-of-States.png" alt="400+ Operator Companies" width="68" height="68" scale="2"></figure>
                        <h5>Africa Heads of States</h5>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="mod-in text-center">
                        <figure><img src="img/80+-countries-represented.png" alt="208 countries represented" width="68" height="68" scale="2"></figure>
                        <h5>90+ countries represented</h5>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="mod-in text-center">
                        <figure><img src="img/Africa-ICT-Project-owners.png" alt="10,000+ Operator Attendees" width="68" height="68" scale="2"></figure>
                        <h5>Africa ICT Project owners</h5>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="mod-in text-center">
                        <figure><img src="img/smart-africa-logo.png" alt="10,000+ Operator Attendees" width="68" height="68" scale="2"></figure>
                        <h5>Powered by Smart Africa</h5>
                    </div>
                </div>
            </div>
            <!-- <div class="col-m-12">
                <h4 class="hd-desc header-what-mc" style="text-align: center;">Powered by Smart Africa</h4>
            </div> -->
        </div>
    </section>

   <section class="contact-w3ls">
        <div class="container" style="width: 100%;">
            <div class="row">
                <div class="w3_tittle second two"><h3 class="agile-tittle two gal reg">Speakers</h3> 
                    <div class="line-style second"><span class="second"></span></div>
                </div>
            </div>
            <div class="12u 12(wide)" style="margin-top:0px;">
                <ul id="slide" class="lightSlider lightSlider-mc">
                    <!-- <li>
                        <img alt="H.E Paul Kagame" src="img/H.E-Paul-Kagame.jpg">
                        <div class="port-info">
                            <h5>H.E Paul Kagame</h5>
                            <p>President of the Republic of Rwanda</p>
                        </div>
                    </li> -->
                    <li>
                        <div class="line-style second"><span class="second"></span></div>
                        <img alt="Dr. Toure" src="img/dr-toure.jpg">
                        <div class="port-info">
                            <h5>Dr. Hamadoun Tour&eacute;</h5>
                            <p>Executive Director, Smart Africa Secretariat</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Houlin Zhao" src="img/zhao.jpg">
                        <div class="port-info">
                            <h5>Houlin Zhao</h5>
                            <p>Secretary General of the International Telecommunication Union</p>
                        </div>
                    </li>
                    <!-- <li>
                        <img alt="Bob Kahn" src="img/kahn.jpg">
                        <div class="port-info">
                            <h5>Bob Khan</h5>
                            <p>Father of the Internet</p>
                        </div>
                    </li> -->
                    <li>
                        <img alt="Strive Masiyiwa" src="img/masiyiwa.jpg">
                        <div class="port-info">
                            <h5>Strive Masiyiwa</h5>
                            <p>Founder and Chairman of Econet Group</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Jean de Dieu" src="img/rurangirwa.jpg">
                        <div class="port-info">
                            <h5>Jean de Dieu Rurangirwa</h5>
                            <p>Minister of Information Technology and Communications, <br>Republic of Rwanda</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Ashish Thakkar" src="img/thakkar.jpg">
                        <div class="port-info">
                            <h5>Ashish Thakkar</h5>
                            <p>Founder of Mara Group and Mara Foundation</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Andrus Ansip" src="img/ansip.jpg">
                        <div class="port-info">
                            <h5>Andrus Ansip</h5>
                            <p>European Commissioner of Digital Single Market</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Grey Wyler" src="img/wyler.jpg">
                        <div class="port-info">
                            <h5>Greg Wyler</h5>
                            <p>Executive Chairman of OneWeb and Founder of O3b Networks</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Grey Wyler" src="img/nsengimana.jpg">
                        <div class="port-info">
                            <h5>Jean Philbert Nsengimana</h5>
                            <p>Special Advisor, Smart Africa</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Hon. Joe Mucheru " src="img/ministers/Mucheru.jpg">
                        <div class="port-info">
                            <h5>Hon. Joe Mucheru</h5>
                            <p>Cabinet Secretary in the Ministry of Information and Communications, <br>Republic of Kenya</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Yasser Elkady" src="img/ministers/yasser.jpg">
                        <div class="port-info">
                            <h5>Yasser ElKady</h5>
                            <p>Minister of Communications and Information Technology(MCIT), <br>Arab Republic of Egypt</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Hon. Joe Mucheru " src="img/ministers/Carvalho.jpg">
                        <div class="port-info">
                            <h5>Hon. José Carvalho da Rocha</h5>
                            <p>Minister of Telecommunications and Information Technologies, <br>Republic of Angola</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Hon. Arouna Modibo Touré" src="img/ministers/Arouna.jpg">
                        <div class="port-info">
                            <h5>Hon. Arouna Modibo Touré</h5>
                            <p>Minister of Digital Economy and Communication, <br>Republic of Mali</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Hon. Madeleine Alingué" src="img/ministers/Alingué.jpg">
                        <div class="port-info">
                            <h5>Hon. Madeleine Alingué</h5>
                            <p>Minister of Posts and New Technologies, <br>Republic of Chad</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Hon. Bruno Nabagné Kone" src="img/ministers/Nabagne.jpg">
                        <div class="port-info">
                            <h5>Hon. Bruno Nabagné Kone</h5>
                            <p>Minister of Communication Digital Economy and the Post, <br>Republic of Côte d&#39;Ivoire</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Hon. Alain Claude Billie" src="img/ministers/Billie.jpg">
                        <div class="port-info">
                            <h5>Hon. Alain Claude Billie</h5>
                            <p>Minister for the Digital Economy, Communication, Culture and Arts. Spokesman for the Government, <br>Republic of Gabon</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Hon. Abdoulaye Bibi Baldé" src="img/ministers/BALDE.jpg">
                        <div class="port-info">
                            <h5>Hon. Abdoulaye Bibi Baldé</h5>
                            <p>Minister of  Communication, Telecommunication, Posts and the Digital Ecosystem, <br>Republic of Senegal</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Hon. Cina Lawson" src="img/ministers/Cina.jpg">
                        <div class="port-info">
                            <h5>Hon. Cina Lawson</h5>
                            <p>Minister of Mail and Telecommunications, <br>Republic of Togo</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Hon. Moustapha Mamy Diaby" src="img/ministers/Moustapha.jpg">
                        <div class="port-info">
                            <h5>Hon. Moustapha Mamy Diaby</h5>
                            <p>Minister of Posts, Telecommunications and Digital Economy, <br>Republic of Guinea Conakry</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Hon. Emery Okundji Ndjovu" src="img/ministers/Emery.png">
                        <div class="port-info">
                            <h5>Hon. Emery Okundji Ndjovu</h5>
                            <p>Minister of Telecommunications, New Information and Communication Technologies, <br>Democratic Republic of Congo</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Hon. Anouar Maârouf" src="img/ministers/Anouar.jpg">
                        <div class="port-info">
                            <h5>Hon. Anouar Maârouf</h5>
                            <p>Minister of Information Technologies and Digital Economy, <br>Republic of Tunisia</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Hon. Aurelie Adam Soule Zoumarou" src="img/ministers/Aurelie.jpg">
                        <div class="port-info">
                            <h5>Hon. Aurelie Adam Soule Zoumarou</h5>
                            <p>Minister of Digital Economy and Communication, <br>Republic of Benin</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Hon. Michael Makuei Lueth" src="img/ministers/lueth.jpg">
                        <div class="port-info">
                            <h5>Hon. Michael Makuei Lueth</h5>
                            <p>Minister of Information, Telecommunication and Postal Services, <br>Republic of South Sudan</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="showcase no-padding" style="padding: 0;">
        <div class="container-fluid p-0">
            <div class="row no-gutters bg-orange">
              <div class="col-lg-6 order-lg-1 my-auto showcase-text-onvideo">
                    <h2 class="hd-wel header-title-mc">About the Summit</h2>
                    <img src="videos/TAS-2018-line-02.svg">
                    <p class="lead mb-0" style="color: #fff; font-size: 1.1em;">The Transform Africa Summit is the Smart Africa flagship event. Following three successful editions, the fourth Transform Africa 2018 Summit will take place at the Kigali Convention Center from 7 – 10 May 2018.</p>
                    <br>
                    <p class="lead mb-0" style="color: #fff; font-size: 1.1em;">Under the theme &#39;Accelerating Africa&#39;s Single Digital Market&#39;, the summit is expected to attract over 4,000 participants, including Heads of State and Government, First Ladies, UN Broadband Commissioners, Ministers, Public & Private Sector, International organisations, Industry leaders, Investors, Entrepreneurs, Young innovators, Civil Society and Academia.</p>
                    <br>
                    <p class="lead mb-0" style="color: #fff; font-size: 1.1em; padding-bottom: 14px;">This year&#39;s summit will also feature the  first Transform Africa Economic Forum, a Government to Business engagement which will take place  on 7 May 2018, where attending Ministers and Cabinet Secretaries will engage with a targeted audience of business leaders and high net worth investors on investment opportunities and areas of collaboration.</p>
                </div>
                <a onclick="playPause()" id="home-video" class="pointer col-lg-6 order-lg-2 text-white showcase-video" target="" style="padding: 0 0; top: 0; bottom: 0;">
                    <div class="wrap-all">
                        <img id="imgvideo" class="img img-responsive" src="img/video-play.png" style=" position: absolute; left: 0; top: 0;  width: 100%;">
                                
                        <video id="video1" style="min-width: 100%;">
                            <source src="./videos/Transform Africa Summit 2017_highlight.mp4" type="video/mp4">
                            <source src="http://localhost/tas18/videos/YouthConnect-sponsor-video-ogg.ogg" type="video/ogg">
                        </video>
                                <div class="btm btm-mc Watch-video" style="">
                                    <h2 class="view-in-2" style="color: #fff;">Watch 2017 highlights</h2>
                                </div>
                    </div>
                </a>
                    <script> 
                      var myVideo = document.getElementById("video1"); 

                      function playPause() { 
                          document.getElementById('imgvideo').style.display = "none";
                          $('.Watch-video').css("display", "none");
                          if (myVideo.paused) 
                              myVideo.play(); 
                          else 
                              myVideo.pause(); 
                      } 

                      function makeBig() { 
                          myVideo.width = 560; 
                      } 

                      function makeSmall() { 
                          myVideo.width = 320; 
                      } 

                      function makeNormal() { 
                          myVideo.width = 420; 
                      } 
                    </script>
            </div>
        </div>
    </section>

    <section class="hm-highlights" id="about">
        <div class="container">
        <div class="row">
            <div class="w3_tittle second two"><h3 class="agile-tittle two gal reg">Summit Highlights 2018</h3> 
                <div class="line-style second"><span class="second"></span></div>
            </div>
        </div>
          <div class="row">
            <div class="col-md-6 borders">
                <div class="sizes">
                    <a class="pa_italic collapsed link-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><h4 class="sizecolor">
                        Leaders Summit

                        <!-- <aa class="pa_italic collapsed link-collapse btn-program-mc btn-program-mc-high pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <span class="glyphicon glyphicon-plus collapse-icon-hm" aria-hidden="true"> Read more</span><i class="glyphicon glyphicon-minus collapse-icon-hm" aria-hidden="true"> Read less</i>
                        </a> -->
                   </h4></a>
                   <div class=" panel-group panel-mc" id="accordion">
                       
                       <p class="sze panel-collapse collapse"  id="collapseOne">
                        This year&#39;s session will feature high level dialogue between Heads of States, private sector business leaders and executives of international organizations on creating a single digital market for Africa. 
                        </p>
                   </div>
                </div>
                <div class="changecolors">
                     <a class="pa_italic collapsed link-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><h4 class="sizecl"> 
                        Smart Africa Women&#39;s Summit 

                        <!-- <aa class="pa_italic collapsed link-collapse btn-program-mc btn-program-mc-high pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span class="glyphicon glyphicon-plus collapse-icon-hm" aria-hidden="true"> Read more</span><i class="glyphicon glyphicon-minus collapse-icon-hm" aria-hidden="true"> Read less</i>
                        </a> -->
                    </h4></a>
                    <div class=" panel-group panel-mc" id="accordion">
                        <p class="sze panel-collapse collapse"  id="collapseTwo">
                        The Smart Africa Women&#39;s Summit will bring to the forefront the strategic interventions that are being pursued to empower women and girls to participate in the digital economy. The summit will look to highlight programs that women and girls can participate in.
                        </p>
                    </div>
                </div>
                <div class="sizesbg">
                    <a class="pa_italic collapsed link-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><h4 class="sizeclor">
                        Smart Africa Exhibition

                        <!-- <aa class="pa_italic collapsed link-collapse btn-program-mc btn-program-mc-high pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <span class="glyphicon glyphicon-plus collapse-icon-hm" aria-hidden="true"> Read more</span><i class="glyphicon glyphicon-minus collapse-icon-hm" aria-hidden="true"> Read less</i>
                        </a> -->
                    </h4></a>
                    <div class=" panel-group panel-mc" id="accordion">
                        <p class="sze panel-collapse collapse"  id="collapseThree">
                        Exhibitors from across the globe will showcase their innovations & technologies that will transform governments & businesses in Africa into the digital economy & society. 
                        </p>
                    </div>
                </div>
                <div class="changecolors">
                    <a class="pa_italic collapsed link-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><h4 class="sizecl">
                        Smart Africa Plenaries 

                        <!-- <aa class="pa_italic collapsed link-collapse btn-program-mc btn-program-mc-high pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <span class="glyphicon glyphicon-plus collapse-icon-hm" aria-hidden="true"> Read more</span><i class="glyphicon glyphicon-minus collapse-icon-hm" aria-hidden="true"> Read less</i>
                        </a> -->
                    </h4></a>
                    <div class=" panel-group panel-mc" id="accordion">
                        <p class="sze panel-collapse collapse"  id="collapseFour">A series of plenary and parallel sessions will focus on the road map to a single digital market for Africa tackling a wide range of topics including investments, infrastructure, skills gap and decentralized regulatory policies across the continent. </p>
                    </div>
                </div>
                <div class="sizes">
                    <a class="pa_italic collapsed link-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><h4 class="sizecolor">
                        Blockchain Hub 

                        <!-- <aa class="pa_italic collapsed link-collapse btn-program-mc btn-program-mc-high pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <span class="glyphicon glyphicon-plus collapse-icon-hm" aria-hidden="true"> Read more</span><i class="glyphicon glyphicon-minus collapse-icon-hm" aria-hidden="true"> Read less</i>
                        </a> -->
                    </h4></a>
                    <div class=" panel-group panel-mc" id="accordion">
                        <p class="sze panel-collapse collapse"  id="collapseFive">
                        Up till recently, blockchain technology has been associated with cryptocurrencies such as Bitcoin and platforms like Ethereum. This hub&#39;s activities explore the wider applications of the technology and it&#39;s will form the basis to which we will create a roadmap to adopting Blockchain technology in Africa. 
                        </p>
                    </div>
                </div>
                <div class="sizesbg">
                    <a class="pa_italic collapsed link-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><h4 class="sizeclor">
                        Digital Health Hub 

                        <!-- <aa class="pa_italic collapsed link-collapse btn-program-mc btn-program-mc-high pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <span class="glyphicon glyphicon-plus collapse-icon-hm" aria-hidden="true"> Read more</span><i class="glyphicon glyphicon-minus collapse-icon-hm" aria-hidden="true"> Read less</i>
                        </a> -->
                    </h4></a>
                    <div class=" panel-group panel-mc" id="accordion">
                        <p class="sze panel-collapse collapse"  id="collapseSix">
                        This hub will explore how Africa will adopt & harness the technology driven innovation that is already disrupting healthcare across the globe by increasing capabilities and improving experiences between medical professionals and patients. 
                        </p>
                    </div>
                </div>
                <div class="sizes">
                    <a class="pa_italic collapsed link-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><h4 class="sizecolor">
                        The 4th Industrial Revolution Hub   

                        <!-- <aa class="pa_italic collapsed link-collapse btn-program-mc btn-program-mc-high pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <span class="glyphicon glyphicon-plus collapse-icon-hm" aria-hidden="true"> Read more</span><i class="glyphicon glyphicon-minus collapse-icon-hm" aria-hidden="true"> Read less</i>
                        </a> -->
                    </h4></a>
                    <div class=" panel-group panel-mc" id="accordion">
                        <p class="sze panel-collapse collapse"  id="collapseSeven">
                        The hub will host debates & discussions on strategies Africa needs to adopt to achieve inclusive growth in Africa and pursue industrialization strategies that can harness opportunities and minimize the threats of the fourth industrial revolution. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 borders">
                <div class="sizes">
                    <a class="pa_italic collapsed link-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight"><h4 class="sizecolor">
                        Partners Spotlight 

                        <!-- <aa class="pa_italic collapsed link-collapse btn-program-mc btn-program-mc-high pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            <span class="glyphicon glyphicon-plus collapse-icon-hm" aria-hidden="true"> Read more</span><i class="glyphicon glyphicon-minus collapse-icon-hm" aria-hidden="true"> Read less</i>
                        </a> -->
                    </h4></a>
                    <div class=" panel-group panel-mc" id="accordion">
                        <p class="sze panel-collapse collapse"  id="collapseEight">
                        The Partners Spotlight that will feature custom sessions
                        from our partners working on the frontier of revolutionizing solutions towards a digital Africa. Workshops, presentations, expert panels and one-on-one interviews with influencers will form the hubs program. 
                        </p>
                    </div>
                </div>
                <div class="changecolors">
                    <a class="pa_italic collapsed link-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine"><h4 class="sizecl"> 
                        Digital Governance Program 

                        <!-- <aa class="pa_italic collapsed link-collapse btn-program-mc btn-program-mc-high pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            <span class="glyphicon glyphicon-plus collapse-icon-hm" aria-hidden="true"> Read more</span><i class="glyphicon glyphicon-minus collapse-icon-hm" aria-hidden="true"> Read less</i>
                        </a> -->
                    </h4></a>
                    <div class=" panel-group panel-mc" id="accordion">
                        <p class="sze panel-collapse collapse"  id="collapseNine">Centered around e-gov & its ecosystem, this program will delve
                        into the automation of government services, improving efficiency of governance processes and the use of ICT to complement existing efforts. This program is hosted by the African Union Commission. </p>
                    </div>
                </div>
                <div class="sizesbg">
                    <a class="pa_italic collapsed link-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseTeen" aria-expanded="false" aria-controls="collapseTeen"><h4 class="sizeclor">
                        The Pavillion 

                        <!-- <aa class="pa_italic collapsed link-collapse btn-program-mc btn-program-mc-high pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseTeen" aria-expanded="false" aria-controls="collapseTeen">
                            <span class="glyphicon glyphicon-plus collapse-icon-hm" aria-hidden="true"> Read more</span><i class="glyphicon glyphicon-minus collapse-icon-hm" aria-hidden="true"> Read less</i>
                        </a> -->
                    </h4></a>
                    <div class=" panel-group panel-mc" id="accordion">
                        <p class="sze panel-collapse collapse"  id="collapseTeen">Located in the expansive foyer of the Kigali Convention Center, the Pavilion is an unmatched premium exhibition and innovation space that will feature countries, economic groupings, sponsors
                        and collective organizations showcasing their innovations and technologies in a customized premium environment. </p>
                    </div>
                </div>
                <div class="changecolors">
                    <a class="pa_italic collapsed link-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven"><h4 class="sizecl"> 
                        Ms Geek Africa 

                        <!-- <aa class="pa_italic collapsed link-collapse btn-program-mc btn-program-mc-high pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            <span class="glyphicon glyphicon-plus collapse-icon-hm" aria-hidden="true"> Read more</span><i class="glyphicon glyphicon-minus collapse-icon-hm" aria-hidden="true"> Read less</i>
                        </a> -->
                    </h4></a>
                    <div class=" panel-group panel-mc" id="accordion">
                        <p class="sze panel-collapse collapse"  id="collapseEleven">
                        Now in its 5th year, Ms. Geek is a competition designed to inspire African girls to be part of solving the continent&#39;s challenges using technology and encourage them to choose a career in Science, Technology, Engineering and Math. The competition will climax at the Smart Africa Women's Summit where the winner will be annouced</p>
                    </div>
                </div>
                <div class="sizes">
                    <a class="pa_italic collapsed link-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve"><h4 class="sizecolor">
                        Face the Gorillas 

                        <!-- <aa class="pa_italic collapsed link-collapse btn-program-mc btn-program-mc-high pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                            <span class="glyphicon glyphicon-plus collapse-icon-hm" aria-hidden="true"> Read more</span><i class="glyphicon glyphicon-minus collapse-icon-hm" aria-hidden="true"> Read less</i>
                        </a> -->
                    </h4></a>
                    <div class=" panel-group panel-mc" id="accordion">
                        <p class="sze panel-collapse collapse"  id="collapseTwelve">
                        This year&#39;s Face the Gorillas session will feature a record number of entrepreneurs from Smart Africa member states who will present their products to a panel of international investors and other financiers, seeking investment partnership and mentorship in their ICT business. 
                        </p>
                    </div>
                </div>
                <div class="changecolors">
                    <a class="pa_italic collapsed link-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen"><h4 class="sizeclor">
                        The Platinum Delegates Experience  

                        <!-- <aa class="pa_italic collapsed link-collapse btn-program-mc btn-program-mc-high pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                            <span class="glyphicon glyphicon-plus collapse-icon-hm" aria-hidden="true"> Read more</span><i class="glyphicon glyphicon-minus collapse-icon-hm" aria-hidden="true"> Read less</i>
                        </a> -->
                    </h4></a>
                    <div class=" panel-group panel-mc" id="accordion">
                        <p class="sze panel-collapse collapse"  id="collapseThirteen">
                        Platinum delegates will this year attend the exclusive the Transform Africa Economic
                        Forum, a government to business engagement platform on investment and collaboration opportunities. Platinum delegates will also enjoy private networking opportunities in premium networking spaces and dedicated services. 
                        </p>
                    </div>
                </div>
                <!-- <div class="size-btn">
                    <a href="<?=DN?>/register"><button class="button btn-inv" style="text-transform: none;">Click here to register to attend the summit</button></a>
                </div> -->
            </div>
          </div>
      </div>
    </section>
    
    <section class="contact-w3ls">
        <div class="container">
            <div class="w3_tittle second two"><h3 class="agile-tittle two gal reg">Get Involved Today</h3> 
            <div class="line-style second"><span class="second"></span></div>
          </div>
        </div>
        <div class="container">
          <div class="col-md-3 col-sm-6 col-lg-3">
              <div class="latest-post latest-post-plat waves-effect">
                  <img src="img/register to attend.jpg" class="img-responsive" alt="register">
                  <h4>Register to Attend</h4>
                  <p>Join 4,000 ICT enthusiasts at Africa&#39;s largest ICT summit.</p><br/>
                  <a href="<?=DN?>/register" class="btn btn-primary">Click Here</a>
              </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
              <div class="latest-post latest-post-plat waves-effect">
                  <img src="img/Exhibitor.jpg" class="img-responsive" alt="sponsor">
                  <h4>Sponsor or Exhibit</h4>
                  <p>More opportunities & more delegates. Participate in the largest summit to date!</p>
                  <a href="<?=DN?>/sponsor" class="btn btn-primary">Click Here</a>
              </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
              <div class="latest-post latest-post-plat waves-effect">
                  <img src="img/platinum.jpg" class="img-responsive" alt="">
                  <h4>Platinum program</h4>
                   <p>Exclusive experiences with unmatched networking opportunities</p><br/>
                  <a href="<?=DN?>/platinum" class="btn btn-primary">Click Here</a>
              </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
              <div class="latest-post latest-post-plat waves-effect">
                  <img src="img/plan_your_trip.jpg" class="img-responsive" alt="">
                  <h4>Plan Your Trip</h4>
                  <p>Get information on visa&#39;s accommodation, transport & tourism activites.</p>
                 <a href="<?=DN?>/plan" class="btn btn-primary">Click Here</a>
              </div>
          </div>
        </div>
      </section>

        <?php /* ?>
        <section class="contact-w3ls">
            <div class="container" style="width: 100%;">
                <div class="row">
                    <div class="w3_tittle second two"><h3 class="agile-tittle two gal reg">Confirmed Ministers</h3> 
                        <div class="line-style second"><span class="second"></span></div>
                    </div>
                </div>
                <div class="12u 12(wide)" style="margin-top:0px;">
                    <ul id="minister" class="lightSlider lightSlider-mc">
                        <li>
                            <img alt="Hon. Joe Mucheru " src="img/ministers/Mucheru.jpg">
                            <div class="port-info">
                                <h5>Hon.Joe Mucheru</h5>
                                <p>Cabinet secretary in the Ministry of information and communications <br/>Republic of Kenya</p>
                            </div>
                        </li>
                        <li>
                            <img alt="Hon. Joe Mucheru " src="img/ministers/Carvalho.jpg">
                            <div class="port-info">
                                <h5>Hon. José Carvalho da Rocha</h5>
                                <p>Minister of ICT<br/>Republic of Angola</p>
                            </div>
                        </li>
                        <li>
                            <img alt="Hon. Arouna Modibo Touré" src="img/ministers/Arouna.jpg">
                            <div class="port-info">
                                <h5>Hon. Arouna Modibo Touré</h5>
                                <p>Minister of Digital Economy and communication  <br/>Republic of Mali</p>
                            </div>
                        </li>
                        <li>
                            <img alt="Hon. Madeleine Alingué" src="img/ministers/Alingué.jpg">
                            <div class="port-info">
                                <h5>Hon. Madeleine Alingué</h5>
                                <p>Republic of Chad</p>
                            </div>
                        </li>
                        <li>
                            <img alt="Hon. Bruno Nabagné Kone" src="img/ministers/Nabagne.jpg">
                            <div class="port-info">
                                <h5>Hon. Bruno Nabagné Kone</h5>
                                <p>Minister of communication, digital economy and the post <br/>Republic of Côte d&#39;ivoire</p>
                            </div>
                        </li>
                        <li>
                            <img alt="Hon. Alain Claude Billie" src="img/ministers/Billie.jpg">
                            <div class="port-info">
                                <h5>Hon. Alain Claude Billie</h5>
                                <p>Minister for the Digital economy, Communicatioon, Culture and arts, spokesman for the government<br/>Republic of Gabon </p>
                            </div>
                        </li>
                        <li>
                            <img alt="Hon. Abdoulaye Bibi Baldé" src="img/ministers/BALDE.jpg">
                            <div class="port-info">
                                <h5>Hon. Abdoulaye Bibi Baldé</h5>
                                <p>Minister of  communication, telecommunication, posts and the digital Ecosystem <br/>Republic of Senegal</p>
                            </div>
                        </li>
                        <li>
                            <img alt="Hon. Cina Lawson" src="img/ministers/Cina.jpg">
                            <div class="port-info">
                                <h5>Hon. Cina Lawson</h5>
                                <p>Minister of Mail and Telecomunication <br/>Republic of Togo</p>
                            </div>
                        </li>
                        <li>
                            <img alt="Hon. Moustapha Mamy Diaby" src="img/ministers/Moustapha.jpg">
                            <div class="port-info">
                                <h5>Hon. Moustapha Mamy Diaby</h5>
                                <p>Minister of posts, telecomunications and digital economy <br/>Republic of Guinea Conakry</p>
                            </div>
                        </li>
                        <li>
                            <img alt="Hon. Emery Okundji Ndjovu" src="img/ministers/Emery.png">
                            <div class="port-info">
                                <h5>Hon. Emery Okundji Ndjovu</h5>
                                <p>Minister of telecommunications and new information and communication technologies <br/>Democratic Republic of Congo</p>
                            </div>
                        </li>
                        <li>
                            <img alt="Hon. Anouar Maârouf" src="img/ministers/Anouar.jpg">
                            <div class="port-info">
                                <h5>Hon. Anouar Maârouf</h5>
                                <p>Minister of Information Technologies and Digital Economy <br/>Republic of Tunisia</p>
                            </div>
                        </li>
                        <li>
                            <img alt="Hon. Aurelie Adam Soule Zoumarou" src="img/ministers/Aurelie.jpg">
                            <div class="port-info">
                                <h5>Hon. Aurelie Adam Soule Zoumarou</h5>
                                <p>Minister of Digital Economy  and communication <br/>Republic of Benin</p>
                            </div>
                        </li>
                        <li>
                            <img alt="Hon. Michael Makuei Lueth" src="img/ministers/lueth.jpg">
                            <div class="port-info">
                                <h5>Hon. Michael Makuei Lueth</h5>
                                <p>Minister of Information, Telecommunication and Postal Services <br/>Republic of South Sudan </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <?php */ ?>

      <section class="bg-blue" id="# no padding">
        <div class="container">
            <div class="row">
                <div class="w3_tittle second two"><h3 class="agile-tittle two gal reg text-white-mc">Who is attending this year?</h3> 
                    <div class="line-style second"><span class="second"></span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <ul class="text-white-mc-ul"><div style="clear: both;"></div>
                        <li>Heads of State and Government</li>
                        <li>First Ladies</li>
                        <li>Ministers in ICT, Finance, Trade & Industry and Health</li>
                        <li>Fintech companies</li>
                        <li>Blockchain experts</li>
                        <li>Digital health service providers</li>
                        <li>Artificial Intelligence firms & experts</li>
                        <li>ICT Private Sector service providers</li>
                        <li>Telecom & Utilities regulators</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-6">
                    <ul class="text-white-mc-ul"><div style="clear: both;"></div>
                        <li>International & Multilateral organizations</li>
                        <li>Africa&#39;s business influencers</li>
                        <li>Investment banks & Venture capitalists</li>
                        <li>Private equity fund managers</li>
                        <li>Start ups</li>
                        <li>Women & Girls in ICT champions</li>
                        <li>Tech innovators</li>
                        <li>Academia, consultants & leading digital leaders</li>
                        <li>Non-governmental organizations</li>
                     </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary agenda" id="program" style="padding-top: 30px;">
        <div class="container">
            <div class="w3_tittle second two program-section-mc"><h3 class="agile-tittle two gal reg">Program</h3> 
                <div class="line-style second"><span class="second"></span></div>
            </div>

            <div class="row" id="myProgram">
                <div class="col-md-3 col-xs-6">
                    <div class="div-program-mc active-pg" onclick="openCity(event, 'one')" id="defaultOpen">
                        <div class="pog-day">
                            <span style="font-size: 1.1em; margin-top: 5px; letter-spacing: 1px;"><i class="fa fa-calendar" aria-hidden="true"></i> Monday 7 May</span>
                        </div>
                        <div class="prog-message">
                            <span style="font-size: 1em; margin-top: 10px; letter-spacing: 1px; text-shadow: none;">Transform Africa Economic Forum</span>
                            <br/><span style="font-size: .9em;">Platinum & Gold delegates, Invited Government Officials</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="div-program-mc" onclick="openCity(event, 'two')">
                        <div class="pog-day">
                            <span style="font-size: 1.1em; margin-top: 5px; letter-spacing: 1px;"><i class="fa fa-calendar" aria-hidden="true"></i> Tuesday 8 May</span>
                        </div>
                        <div class="prog-message">
                            <span style="font-size: 1em; margin-top: 10px; letter-spacing: 1px; text-shadow: none;">Transform Africa Summit</span>
                            <br/><span style="font-size: .9em;">All Delegates</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="div-program-mc" onclick="openCity(event, 'three')">
                        <div class="pog-day">
                            <span style="font-size: 1.1em; margin-top: 5px; letter-spacing: 1px;"><i class="fa fa-calendar" aria-hidden="true"></i> Wednesday 9 May</span>
                        </div>
                        <div class="prog-message">
                            <span style="font-size: 1em; margin-top: 10px; letter-spacing: 1px; text-shadow: none;">Transform Africa Summit</span>
                            <br/><span style="font-size: .9em;">All Delegates</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="div-program-mc" onclick="openCity(event, 'four')">
                        <div class="pog-day">
                            <span style="font-size: 1.1em; margin-top: 5px; letter-spacing: 1px;"><i class="fa fa-calendar" aria-hidden="true"></i> Thursday 10 May</span>
                        </div>
                        <div class="prog-message">
                            <span style="font-size: 1em; margin-top: 10px; letter-spacing: 1px; text-shadow: none;">Golf Tournament</span>
                            <br/><span style="font-size: .9em;">Platinum tournament participants</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div id="myProgram">
              <div class="col-md-3 col-xs-6"><button class="btn btn-default btn-program-mc active-pg" onclick="openCity(event, 'one')" id="defaultOpen">Monday 7 May</button></div>
              <div class="col-md-3 col-xs-6"><button class="btn btn-default btn-program-mc" onclick="openCity(event, 'two')">Tuesday 8 May</button></div>
              <div class="col-md-3 col-xs-6"><button class="btn btn-default btn-program-mc" onclick="openCity(event, 'three')">Wednesday 9 May</button></div>
              <div class="col-md-3 col-xs-6"><button class="btn btn-default btn-program-mc" onclick="openCity(event, 'four')">Thursday 10 May</button></div>
            </div> -->

            <script type="text/javascript">
            // Add active class to the current button (highlight it)
            var header = document.getElementById("myProgram");
            var btns = header.getElementsByClassName("div-program-mc");
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active-pg");
                current[0].className = current[0].className.replace(" active-pg", "");
                this.className += " active-pg";
              });
            }
            </script>

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
                                <span class="abs-hour">09.00am</span>
                                <span class="fixed-hour">09.00am</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #f78e20; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="749" href="#" class="session-item session-item-mc entity" data-fid="1649" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2></h2>
                                            <h2 style="color:#f78e20;">Coffee and Networking</h2>
                                            <!-- <h3 class="presented">IBM</h3> -->
                                            <span class="list-category" style="color:#f78e20;"> </span
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/applied-ai.png" scale="0">Forging a community of Smart Africa Leaders & Movers</span> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="program-h4-mc">
                                <h4>Transform Africa Summit</h4>
                                <p>All Delegates</p>
                            </div>
                            <div class="agenda-hour">
                                <span class="abs-hour">11.00am</span>
                                <span class="fixed-hour">11.00am</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: #21376b; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="748" href="#" class="session-item entity" data-fid="1566" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#mon1" aria-expanded="false" aria-controls="collapseOne"><h2>Opening Session: Setting the Vision for Smart CFTA</h2></a>
                                            <h3 class="presented">Plenary: Connectivity</h3>
                                            <span class="list-category" style="color:#21376b;">Panel | Auditorium</span>
                                            <span class="list-time"></span>
                                            <span class="list-location"></span>
                                            
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#mon1" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="mon1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">The recent launch of Africa&#39;s Continental Free Trade Area was a tremendous milestone towards Africa&#39;s economic liberation bringing together close to 1.2 billion people with a combined gross domestic product (GDP) of more than $2 trillion. True to Smart Africa&#39;s mission of driving Africa&#39;s Single Digital Market,  it is a shared belief across the continent that digital technologies have the power to accelerate the pace towards AfCFTA goals and to make Africa more competitive outwardly.  This session is expected to highlight potential cross- border initiatives for investment and partnership opportunities relevant to AfCFTA.</span>
                                                            <h4>Welcoming Remarks</h4>
                                                            <span><strong>Hon. Clare Akamanzi,</strong> CEO, Rwanda Development Board</span>
                                                            <span><strong>Muhammad Jah,</strong> Member, AfroChampions Club</span>

                                                            <h4>Opening Remarks</h4>
                                                            <span><strong>Fode Ndiaye,</strong> Resident Coordinator, OneUN Rwanda</span>
                                                            <span><strong>Strive Masiyiwa,</strong> Chairman and Founder, Econet Group</span>
                                                            <span><strong>Dr. Hamadoun Touré,</strong> Executive Director, Smart Africa Secretariat</span>

                                                            <h4>Master of Ceremony</h4>
                                                            <span><strong>Faith keza,</strong> Chief Technology Officer, Rwanda Online</span>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="program-h4-mc">
                                <h4>Transform Africa Summit</h4>
                                <p>All Delegates</p>
                            </div>
                            <div class="agenda-hour">
                                <span class="abs-hour">11.30pm</span>
                                <span class="fixed-hour">11.30pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: #fecf33; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="748" href="#" class="session-item entity" data-fid="1566" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#mon2" aria-expanded="false" aria-controls="collapseOne"><h2>Digital Connectivity - An enabler and a foundation</h2></a>
                                            <!-- <h3 class="presented">Plenary: Connectivity</h3> -->
                                            <span class="list-category" style="color:#fecf33;">Panel | Auditorium</span>
                                            <span class="list-time"></span>
                                            <span class="list-location"></span>
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#mon2" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="mon2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">While building cross border infrastructure is still capital intensive and takes a long time, the existing mobile telecom infrastructure, fibre optic networks and satellite provides market connectivity immediately. The African Region is experiencing a rapid growth of mobile usage with 80.8% mobile penetration and 25.10% internet user&#39;s penetration, against 99.70% and 47.10% at world level (ITU source 2016). Globally, the value of cross-border data has surpassed that of goods. Data has become the new oil. However, infrastructure and harnessing the benefits of this new oil are still challenges. This session will discuss the role telecommunication operators should play going forward in the realization of the Smart CFTA.</span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Hon. Abdoulaye Bibi Baldé,</strong> Ministry of Communication, Telecommunications and ICT, Senegal</span>
                                                            <span><strong>Rob Shuter,</strong> Group President and CEO, MTN Group</span>
                                                            <span><strong>Atef Helmy,</strong> Senior Director, Orange, MEA </span>
                                                            <span><strong>Chérif Antigou,</strong> General Manager, Guinea Post and Telecommunication Authority Regulator (ARPT) </span>
                                                            <span><strong>Amrote Abdella,</strong> General Manager, Microsoft 4Afrika </span>

                                                            <h4>Special Intervention</h4>
                                                            <span><strong>Dr. Bello Moussa,</strong> Director Innovations and Industries Relations in Huawei SA region</span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Onica Makwakwa,</strong> Regional Coordinator, Alliance for Affordable Internet, Web Foundation</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">1.00pm</span>
                                <span class="fixed-hour">1.00pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: #ed552b; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="749" href="#" class="session-item session-item-mc entity" data-fid="1649" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2></h2>
                                            <h2 style="color:#f78e20;">Lunch - Sponsored by Ecobank Group</h2>
                                            <!-- <h3 class="presented">IBM</h3> -->
                                            <span class="list-category" style="color:#f78e20;"> </span
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/applied-ai.png" scale="0">Forging a community of Smart Africa Leaders & Movers</span> -->
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">2.00pm</span>
                                <span class="fixed-hour">2.00pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: #fecf33; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1674" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#mon3" aria-expanded="false" aria-controls="collapseOne"><h2>Financial Technology Platforms</h2></a>
                                            <h3 class="presented"></h3>
                                            <!-- <h3 class="presented">Leaders Summit: The building blocks for a successful single digital market for Africa</h3> -->
                                            <span class="list-category" style="color:#fecf33;"> PANEL | AUDITORIUM</span>
                                            <!-- <span class="list-time">Silver, Gold & Platinum delegates</span> -->
                                            <!-- <span class="list-location">Panel | Auditorium</span> -->
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0"></span> -->

                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#mon3" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="mon3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">Powered by young innovators, Africa pioneered  the mobile payment sector but lost intellectual property and leadership in the process. Cross border transactions heavily rely on outside costly platforms. This fintech revolution has created challenges and opportunities that are now at the helm of transforming the finance sector. In the quest to become a single digital market, this session will address the foreseen challenges and draw practical resolutions that are key to this vision.</span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Ade Ayeyemi,</strong> Group CEO, Ecobank
                                                            <span><strong>Guillaume Habarugira,</strong> CEO, Bridged 
                                                            <span><strong>Dr. Shikoh Gitau,</strong> Head of products, Safaricom 
                                                            <span><strong>Diane Karusisi,</strong> CEO, Bank of Kigali Group 
                                                            <!-- <span><strong>Chris Hale,</strong> Founder and CEO, Kountable -->

                                                            <h4>Special Interventions</h4>
                                                            <span><strong>Hon. Stanley Mutumba Simataa,</strong> Minister of Information, Communication and Technology, Namibia
                                                            <span><strong>C.D Glin,</strong> ‎President and CEO, ‎U.S. African Development Foundation

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Jean Claude Gaga,</strong> CEO, RSwitch 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">3.30pm</span>
                                <span class="fixed-hour">1.00pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: #ed552b; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="749" href="#" class="session-item session-item-mc entity" data-fid="1649" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2></h2>
                                            <h2 style="color:#f78e20;">Networking Break</h2>
                                            <!-- <h3 class="presented">IBM</h3> -->
                                            <span class="list-category" style="color:#f78e20;"> </span
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/applied-ai.png" scale="0">Forging a community of Smart Africa Leaders & Movers</span> -->
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="program-h4-mc">
                                <h4>Transform Africa Summit</h4>
                                <p>All Delegates</p>
                            </div>
                            <div class="agenda-hour">
                                <span class="abs-hour">4.00pm</span>
                                <span class="fixed-hour">3.30pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: #21376b; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="748" href="#" class="session-item entity" data-fid="1566" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#mon4" aria-expanded="false" aria-controls="collapseOne"><h2>Digital trade</h2></a>
                                            <!-- <h3 class="presented">Plenary: Connectivity</h3> -->
                                            <span class="list-category" style="color:#21376b;">Panel | Auditorium</span>
                                            <span class="list-time"></span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/future-services-provider.png" scale="0"> </span> -->

                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#mon4" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="mon4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">The session will focus on regulatory frameworks and technology platforms to be implemented in support of intra-African trade as well as exports of value added goods and services. This conversation will focus on how digital solutions can streamline supply chains, logistics, revenue protection, quality assurance traceability, insurance and payments across borders and discuss the elements of a strategy to grow a pan-african e-commerce ecosystem that will allow the emergence of home grown companies that are able to compete at global stage. </span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Gunter Nooke,</strong> Commissioner for Africa and Personal representative of German Chancellor for Africa, BMZ</span>
                                                            <span><strong>Prof. Christopher Abraham,</strong> CEO & Head, SP Jain, Dubai Campus</span>
                                                            <span><strong>Alex Kapungu,</strong> CEO, DMM Africa</span>
                                                            <span><strong>Tusabe Richard,</strong> Commissioner General, Rwanda Revenue Authority</span>
                                                            <span><strong>Chris Hale,</strong> Founder and CEO, Kountable

                                                            <h4>Special Interventions</h4>
                                                            <span><strong>Dr. Kituyi Mukhisa,</strong> Secretary General, UNCTAD</span>
                                                            <span><strong>Dr. Hermogene Nsengimana,</strong> Director General, Africa Standards Organisation</span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Lucy Mbabazi,</strong> Group Manager, Push Payment and Acquiring, EcoBank Group</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="program-h4-mc">
                                <h4>Transform Africa Summit</h4>
                                <p>Gold and Platinum tournament participants</p>
                            </div>
                            <div class="agenda-hour">
                                <span class="abs-hour">5.00pm</span>
                                <span class="fixed-hour">4.30pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: #3fad49; display: block;" data-track="55" data-day="Monday, 26 Feb" data-theme="750" href="#" class="session-item entity" data-fid="1556" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Closing & Call to Action</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#3fad49;">Panel | Auditorium</span>
                                            <!-- <span class="list-time">Platinum delegates</span> -->
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span> -->
                                            <span><strong>Jean Philbert Nsengimana,</strong> Special Advisor, Smart Africa Secretariat
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">6.30pm</span>
                                <span class="fixed-hour">5.30pm</span>
                            </div>
                            <div class="agenda-items">

                                <div class="agenda-item">
                                    <span style="border-left-color: #068ec1; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="745" href="#" class="session-item entity" data-fid="1652" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Cultural Soiree at the Kigali Conference & Exhibition Center</h2>
                                            <h3 class="presented">Session Partners: Institute of Electrical & Electronics Engineers (IEEE)</h3>
                                            <!-- <span class="list-category" style="color:#068ec1;">MH1</span> -->
                                            <span class="list-time">Silver, Gold and Platinum delegates</span>
                                            <span class="list-location">*Transport will be provided from the Kigali Convention Center</span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-digital-consumer.png" scale="0">Exclusive opportunity to tackle key issues with decision-makers</span> -->
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="two" class="daycontent">
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
                                <span class="abs-hour">8.30am</span>
                                <span class="fixed-hour">8.30am</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: #21376b; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="749" href="#" class="session-item session-item-mc entity" data-fid="1649" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2></h2>
                                            <h2 style="color:#f78e20;">Arrival of guests for The Leaders Summit</h2>
                                            <!-- <h3 class="presented">IBM</h3> -->
                                            <span class="list-category" style="color:#21376b;"> </span
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/applied-ai.png" scale="0">Forging a community of Smart Africa Leaders & Movers</span> -->
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">11.00am</span>
                                <span class="fixed-hour">11.00am</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: #fecf33; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1674" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue1" aria-expanded="false" aria-controls="collapseOne"><h2>Transform Africa Summit Opening Ceremony</h2></a>
                                            <h3 class="presented"></h3>
                                             <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#fecf33;"> Panel | AUDITORIUM</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0"></span> -->

                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue1" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="tue1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <h4>Welcoming Remarks</h4>
                                                            <span><strong>Dr. Hamadoun Touré,</strong> Executive Director, Smart Africa Secretariat</span>

                                                            <h4>Opening Remarks</h4>
                                                            <span><strong>Dr. Jared Cohon,</strong> President Emeritus and University Professor, Civil and Environmental Engineering & Engineering and Public Policy, Carnegie Mellon University</span>
                                                            <span><strong>Hon. Jean De Dieu Rurangirwa,</strong> Minister of Information Technology & Communications, Republic of Rwanda</span>

                                                            <h4>Keynote Address</h4>
                                                            <span><strong>H.E Paul Kagame, President of the Republic of Rwanda</strong>

                                                            <h4>Master of Ceremony</h4>
                                                            <span><strong>Louise Kanyonga,</strong> Head of Strategy and Competitiveness, Rwanda development Board</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">11.30am</span>
                                <span class="fixed-hour">11.00am</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: #068ec1; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1674" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue2" aria-expanded="false" aria-controls="collapseOne"><h2>Leaders Summit: The building blocks for a successful single digital market for Africa</h2></a>
                                            <h3 class="presented"></h3>
                                             <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#fecf33;"> Panel | AUDITORIUM</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0"></span> -->

                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue2" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="tue2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Attending Heads of State and Government</strong></strong>

                                                            <h4>Special Interventions</h4>
                                                            <span><strong>Moussa Faki Mahamat,</strong> Chairperson, AUC (TBC)</span>
                                                            <span><strong>Miroslav Lajčák,</strong> UN President of the General Assembly</span> 
                                                            <span><strong>Houlin Zhao,</strong> Secretary General, International Telecommunications Union</span>
                                                            <span><strong>Strive Masiyiwa,</strong> Chairman and Founder, Econet Group (TBC)</span>
                                                           <!--  <span><strong>Carlos Slim Helú,</strong> Chairman & CEO of Telmex, América Móvil and Grupo  Carso (TBC)</span> -->

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Julie Gichuru,</strong> Media Personality</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">1.00pm</span>
                                <span class="fixed-hour">1.00pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #ed552b; display: block;" data-track="58" data-day="Monday, 26 Feb" data-theme="0" href="#" class="session-item entity" data-fid="1633" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Lunch</h2>
                                            
                                            <span class="list-time"> - Courtyard Cafe, Ladder Restaurant<br> - Gold delegates may purchase their lunch in the Gold Filini Lounge<br> - Platinum delegates lunch will be held at Platinum Auditorium Club</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme">Building safe & secure cities</span> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">1.00pm</span>
                                <span class="fixed-hour">1.00pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: block;" data-track="62" data-day="Tuesday, 27 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1576" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Smart Africa Board Meeting - Working Lunch </h2>
                                            <h3 class="presented">With attending Heads of State, Smart Africa Platinum Private Sector Members and Special guests </h3>
                                            <span class="list-category" style="color:#0067EA;">Meeting | MH1</span>
                                            <span class="list-time">By Invitation Only</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0">Fast Tracking Africa&#39;s Digital Transformation</span> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">2.00pm</span>
                                <span class="fixed-hour">2.00pm</span>
                            </div>
                            <div class="agenda-items">
                                
                                <div class="agenda-item">
                                    <span style="border-left-color: #21376b; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="747" href="#" class="session-item entity" data-fid="1571" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue3" aria-expanded="false" aria-controls="collapseOne"><h2>Digital Identity, Connectivity & Regulations</h2></a>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#21376b;"> Panel | AUDITORIUM</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">Innovation</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue3" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="tue3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">Globally, the value of cross-border data has surpassed that of goods. Recent data breaches and scandals have reiterated the emphasis on regulatory resolve that protects consumers more and more. However, Africa&#39;s sovereign data remain exposed and there is need  put in place platforms that protect and create value of our own data. The value of data is still underestimated and so are other underlying enabling environments. The World Bank estimates that more than 1.5 billion people worldwide do not have access to formal identification documentation. Mobile operators have unique resources that enable them to bridge this gap through their secure, reliable and scalable forms of mobile-based platforms. This conversation will discuss the trends of regulations that need to be put in place to curb the identity crisis.</span>
                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Hon. Masahiko Tominaga,</strong> Vice Minister for policy coordination, Ministry of Internal Affairs and Communications, Japan</span>
                                                            <span><strong>Hon. Cina Lawson,</strong> Minister of Posts and digital economy, Republic of Togo</span>
                                                            <span><strong>Andrus Ansip,</strong> Vice-President and Commissioner, Digital Single Market. European Commission,</span>
                                                            <span><strong>Mats Granryd,</strong> Director General, GSMA</span>
                                                            <span><strong>Robert Pepper,</strong> Head, Global Connectivity and Technology Policy, Facebook, Facebook</span>
                                                            <span><strong>Maurits Tichelman,</strong> Vice President and General Manager, Global Markets and Partners EMEA Territory, Intel</span>

                                                            <h4>Special interventions</h4>
                                                            <span><strong>Phillipp Metzger,</strong> Director General, Swiss Federal Office of Communications</span>
                                                            <span><strong>Sunil Bharti Mittal,</strong> Founder and Chairman, Bharti Entreprises</span>
                                                            <span><strong>Nicholas Negroponte,</strong> MIT Media Lab</span>
                                                            <span><strong>H.E Prof. Abdulaziz Salem Al Ruwais,</strong> Governor of the Communications and Information Technology Commission (CITC), Saudi Arabia</span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Julie Gichuru,</strong> Media Personality</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: #fecf33; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1594" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue4" aria-expanded="false" aria-controls="collapseOne"><h2>Digital Health Hub</h2></a>
                                            <h3 class="presented">
                                            - State of Digital Health In Africa – Landscape and Countries Roadmaps<br>
                                            - Launch of Africa Alliance for Digital Health Network
                                            </h3>
                                            <span class="list-time">Co-organized with WHO, AFRO and ITU</span>
                                            <span class="list-category" style="color:#fecf33;">Panel | MH2A</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0">Innovation</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue4" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="tue4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">The African Region is experiencing a rapid development of ICT, with 80.8% mobile penetration and 25.10% internet users&#39; penetration, against 99.70% and 47.10% at world level (ITU source 2016). This situation allows using eHealth services in the African Region to contribute to strengthening health systems and accelerating the attainment of the SDGs, including UHC. In the African region, 26 countries have eHealth strategies. According to the WHO global survey on eHealth (2015), the most notable eHealth intervention in the region is mHealth, followed by social media, telehealth and eLearning. ICT is already transforming health systems and how healthcare is delivered. Marked progress has been made in initiating eHealth systems in the Region. However, challenges remain in enabling countries to sustain eHealth services and the required human resources skills.<br/>
 
                                                            This session will host key thought leaders on digital health in Africa, and explore means and ways to scale up existing digital health efforts for the acceleration of health related SDGs. It will also witness the launch of the Africa Alliance for Digital Health Network. </span>

                                                            <h4>Conversation Leaders</h4>
                                                            <!-- <span><strong>Hon. Mamy Lalatiana Andriamanarivo,</strong> Minister of Health, Madagascar (TBC)</span> -->
                                                            <span><strong>Andrew Rugege,</strong> ITU Regional Director for Africa</span>
                                                            <span><strong>Peter Benjamin,</strong> Executive Director, HealthEnabled</span>
                                                            <span><strong>Olasupo Oyadepo,</strong> President, Africa Alliance of Digital Health Networks</span>
                                                            <span><strong>Derrick Muneene,</strong> eHealth and mHealth regional technical advisor, World Health Organization - AFRO </span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Dr. Jeanine Condo,</strong> Director General, Rwanda Biomedical Center</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: #21376b; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="747" href="#" class="session-item entity" data-fid="1571" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Partner Spotlight</h2>
                                            <h3 class="presented">Transforming the automotive industry in Africa</h3>
                                            <span class="list-time">Sponsored by Volkswagen Group</span>
                                            <span class="list-category" style="color:#21376b;">Custom Session | AD12</span>
                                            <!-- <span class="list-time">By Invitation</span> -->
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">Innovation</span> -->
                        
                                            <h4 style="text-shadow: none;">Presentation</h4>
                                            <span class="list-time"><strong>Thomas Schaefer,</strong>Chairman & Managing Director, Volkswagen Group, South Africa</span>
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: #ed552b; display: block;" data-track="58" data-day="Monday, 26 Feb" data-theme="0" href="#" class="session-item entity" data-fid="1633" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Digital Transformation Hub</h2>
                                            <h3 class="presented">Discussion on Public-Private Partnerships to Implement Sustainable Smart Cities & Communities</h3>
                                            <span class="list-time">Sponsored by Inmarsat</span>
                                            <span class="list-category" style="color:#ed552b;">Panel | MH2B</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme">Building safe & secure cities</span> -->
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">3.30pm</span>
                                <span class="fixed-hour">3.30pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #f78e20; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="749" href="#" class="session-item session-item-mc entity" data-fid="1649" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2></h2>
                                            <h2 style="color:#f78e20;">Networking Break</h2>
                                            <!-- <h3 class="presented">IBM</h3> -->
                                            <span class="list-category" style="color:#f78e20;"> </span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/applied-ai.png" scale="0">Forging a community of Smart Africa Leaders & Movers</span> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">4.00pm</span>
                                <span class="fixed-hour">4.00pm</span>
                            </div>
                            <div class="agenda-items">
                                
                                <div class="agenda-item">
                                    <span style="border-left-color: #068ec1; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="745" href="#" class="session-item entity" data-fid="1652" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue5" aria-expanded="false" aria-controls="collapseOne"><h2>Spotlight Conversations with Business Leaders</h2></a>
                                            <!-- <h3 class="presented">Modern Marketing Summit</h3> -->
                                            <span class="list-category" style="color:#068ec1;">Plenary | AUDITORIUM</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-digital-consumer.png" scale="0">Exclusive opportunity to tackle key issues with decision-makers</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue5" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="tue5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span><strong>Greg Wyler,</strong> Founder and Executive Chairman, One Web</span>
                                                            <span><strong>Moderated by Patrick Nyirishema,</strong> Director General, Rwanda Utilities and Regulatory Authority</span>

                                                            <span class="list-location">Business Leader 2 (TBC)</span>
                                                            <span class="list-location">Business Leader 3 (TBC)</span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: #ed552b; display: block;" data-track="58" data-day="Monday, 26 Feb" data-theme="0" href="#" class="session-item entity" data-fid="1633" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue6" aria-expanded="false" aria-controls="collapseOne"><h2>Digital Health Hub</h2></a>
                                            <h3 class="presented">Government Leadership in Digital Health – Breaking Silos and Mitigating "pilotitis"</h3>
                                            <span class="list-time">Session Partners: ITU, WHO</span>
                                            <span class="list-category" style="color:#ed552b;"> Panel | MH2A</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme">Building safe & secure cities</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue6" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="tue6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">Government leadership for Digital Health has become increasingly important as there is a great need to build core systems & platforms as well as create harmonization in what is still a fragmented space.  The Digital Health Working group from the Broadband Commission released last year a report entitled "Digital Health: A Call for Government Leadership and Cooperation between ICT and Health" which demonstrated the importance of ICT ministries and e-Government agencies joining forces with Ministries of Health to develop and implement national digital health Strategies.<br/>
                                                            The session will explore the benefits as well as the challenges of the cross-sectorial implementation of such strategies.  Smart Africa is co-organizing this session with Novartis Social Business, as well as with the Novartis Foundation which co-chaired the above report and has emerged as a thought leader on advocating for national digital health strategies.</span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Hon. Aurelie Adam Soule Zoumarou,</strong> Minister of Digital Economy and Communication, Republic of Benin (TBC)</span>
                                                            <span><strong>Hon. Patrick Ndimubanzi,</strong> Minister of State, Ministry of Health, Rwanda</span>
                                                            <span><strong>Houlin Zhao, Secretary General,</strong> International Telecommunications Union</span>
                                                            <span><strong>Dr. OLU Olushayo Oluseun,</strong> World Health Organization- Country Representative</span>
                                                            <span><strong>Dr. Ann Aerts, Head,</strong> Novartis Foundation</span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Florence Gaudry-Perkins,</strong> Founder, Digital Health Partnerships</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: #068ec1; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="745" href="#" class="session-item entity" data-fid="1652" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue7" aria-expanded="false" aria-controls="collapseOne"><h2>Partner Spotlight</h2></a>
                                            <h3 class="presented">AU Commission Sponsored session Digital Governance program: "A conversation with the African union commission on benchmarking best practice e-government solutions."</h3>
                                            <span class="list-category" style="color:#068ec1;">Custom Session | MH1</span>
                                            <span class="list-time"></span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-digital-consumer.png" scale="0">Exclusive opportunity to tackle key issues with decision-makers</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue7" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="tue7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <h4>Opening Remarks</h4>

                                                            <span><strong>H.E. Dr. Amani Abou-Zeid,</strong> Commissioner for Infrastructure & Energy, AU</span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Eldrid Jordaan,</strong> CEO, GovChat</span> 
                                                            <span><strong>Clement Uwajeneza,</strong> CEO, RwandaOnline</span>
                                                            <span><strong>Riho Kurg,</strong> Vice President, Cybernetica</span>
                                                            <span><strong>Xue Man,</strong> VP,Huawei </span>
                                                            <span><strong>Koffi Henaku,</strong> CEO, HGT</span>

                                                            <h4>Special Interventions</h4>
                                                            <span><strong>H.E Dr. Okezie Victor Ikpeazu,</strong> Executive Governor, Abia State, Nigeria</span>
                                                             
                                                            <h4>Moderated by </h4>
                                                            <span><strong>Moctar Yedaly,</strong> Head of Information Society, AU Commission</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: #fecf33; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1594" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue8" aria-expanded="false" aria-controls="collapseOne"><h2>Partner Spotlight</h2></a>
                                            <h3 class="presented">JStart-up 250 Kick-Off Event "Final selection Process for Incubation Companies ICT Innovation Ecosystem Strengthening Project"</h3>
                                            <span class="list-category" style="color:#fecf33;">Panel | AD12</span>
                                            <span class="list-time">Sponsored by Japan International Cooperation Agency (JICA) & PSF ICT Chamber</span>
                                            <span class="list-location">Presentation and Pitching Style Competition</span>

                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#tue8" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="tue8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <h4>Judges</h4>
                                                            <span><strong>Antoine Sebera,</strong> Government Chief Innovation Officer, RISA</span>
                                                            <span><strong>Jimmy Rutabingwa,</strong> Vice Chairman, PSF ICT Chamber</span>
                                                            <span><strong>Crystal Rugege,</strong> Director of Strategy and Operations, CMU-A</span>
                                                            <span><strong>Francis Mugisha,</strong> Board Chairman, BRD</span>
                                                            <span><strong>Hiroshi Kato,</strong> Senior Vice President, JICA</span>

                                                            <h4>Moderated by</h4> 
                                                            <span><strong>Alex Ntale,</strong> CEO, PSF ICT Chamber </span>
                                                            <span><strong>Atsushi Yamanaka,</strong> Chief Advisor, JICA ICT Innovation Ecosystem Strengthening Project</span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">5.30pm</span>
                                <span class="fixed-hour">5.30pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #f78e20; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="749" href="#" class="session-item entity" data-fid="1649" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2></h2>
                                            <h2 style="color:#f78e20;">Shuttle Services to Cultural Soiree</h2>
                                           
                                            <span class="list-category" style="color:#f78e20;"> </span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">5.00pm</span>
                                <span class="fixed-hour">6.00pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #0067EA; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="748" href="#" class="session-item entity" data-fid="1566" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Digital Transformation Hub</h2>
                                            <h3 class="presented">The New Lens: Know, Treat, Suppress</h3>
                                            <span class="list-location">Sponsored by Imbuto Foundation</span>
                                            <span class="list-category" style="color:#fecf33;">Custom Session | MH2B</span>
                                            <span class="list-time"></span>
                                            <!-- <span class="list-location"></span> -->
                                            
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>   
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">6.30pm</span>
                                <span class="fixed-hour">6.00pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #21376b; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="748" href="#" class="session-item entity" data-fid="1566" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Gala Dinner at the Kigali Conference & Exhibition Center</h2>
                                             <h3 class="presented">Gold and Platinum delegates</h3>
                                            <span class="list-time">*Transport will be provided from the Kigali Convention Center</span>
                                            <!-- <span class="list-location"></span> -->
                                            
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>   
                    </div>

                    
                    <div id="three" class="daycontent">
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="program-h4-mc">
                                <h4>Transform Africa Summit</h4>
                                <p>All Delegates</p>
                            </div>
                            <div class="agenda-hour">
                                <span class="abs-hour">7.30am</span>
                                <span class="fixed-hour">8.00am</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: #f78e20; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1594" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Partner Spotlight</h2>
                                            <h3 class="presented">KT Networks Rwanda Breakfast</h3>
                                            <span class="list-category" style="color:#f78e20;">Custom Session | AD12</span>
                                            <span class="list-time">By Invitation Only</span>
                                            <span class="list-location"></span>
                                            
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: #fecf33; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1594" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Partner Spotlight </h2>
                                            <h3 class="presented">Inmarsat Consortium Rwanda Executive Breakfast</h3>
                                            <span class="list-category" style="color:#fecf33;">Meeting | Platinum Lounge | By Invitation Only</span>
                                            <span class="list-time">Sponsored by Inmarsat</span>
                                            <span class="list-location">By Invitation Only</span>
                                            
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="program-h4-mc">
                                <h4>Transform Africa Summit</h4>
                                <p>All Delegates</p>
                            </div>
                            <div class="agenda-hour">
                                <span class="abs-hour">8.00am</span>
                                <span class="fixed-hour">8.00am</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: rgb(0, 103, 234); display: block;" data-track="62" data-day="Tuesday, 27 Feb" data-theme="746" href="#" class="session-item entity" data-fid="1596" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed1" aria-expanded="false" aria-controls="collapseOne"><h2>Digital Transformation Hub</h2></a>
                                            <h3 class="presented">The Digital Economy and Transformation: Agriculture for Industrialization</h3>
                                             <span class="list-time">Sponsored by The Fazembat Foundation</span>
                                            <span class="list-category" style="color:#0067EA;">Panel | MH2B</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/tech-in-society.png" scale="0">Roundtable (Invitation only)</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed1" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">This session at Smart Africa aims to demonstrate the role of the digital economy in the transformation of Africa with a  focus on:<br/>
                                                            - How is digitization being harnessed to drive economic transformation<br/>
                                                            - What modalities exist to finance innovation and support technological change.<br/>
                                                            -How are education systems adapting and what need rethinking in the link between learning and doing.<br/>
                                                            - What roles are data analytics and large scale observatories playing to enable an inclusive transformation.<br/>
                                                            - What approaches make sense for industrialization in the face of the challenges from the 4th Industrial Revolution.<br/>
                                                            The hypotheses are that with better use of technologies for data gathering and modeling techniques, smart approaches to supporting innovation education and learning, and flexible approaches to financing innovation, we could enhance the quality of decision making and allow multiple stakeholders to arrive at the right solutions.<br/>
                                                            This session brings together policy makers, private sector entrepreneurs, educators and other experts to address these issues.</span>

                                                            <h4>Keynote speech</h4>
                                                            <span><strong>Hon. Uzziel Ndagijimana,</strong> Minister of Finance, Rwanda</span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Rafiq Elalami,</strong> Chief Information Officer, Head of Digital Learning Lab, UM6P</span>
                                                            <span><strong>James Mwangi,</strong> CEO, Equity Bank</span>
                                                            <span><strong>Kampeta Sayinzoga,</strong> Director General, NIRDA</span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Eric Kacou,</strong> Co-Founder and CEO, Entrepreneurial Solutions (ESPartners) </span>
                                                             
                                                            <h4>Closing Remarks:</h4> 
                                                            <span><strong>Jean Philbert Nsengimana,</strong> Special Advisor, Smart Africa</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: #3fad49; display: block;" data-track="55" data-day="Monday, 26 Feb" data-theme="750" href="#" class="session-item entity" data-fid="1556" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed2" aria-expanded="false" aria-controls="collapseOne"><h2>Face the Gorillas</h2></a>
                                            <h3 class="presented">Session Partners: Private Sector ICT Chamber, KLab</h3>
                                            <span class="list-category" style="color:#3fad49;">Pitching Session | Auditorium</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed2" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            
                                                            <h4>Investors (Gorillas)</h4>
                                                            <span><strong>Stephen Roux,</strong> Partner Dragon, Tree Capital </span> 
                                                            <span><strong>Eugene Nyagahene,</strong> Chairman, Tele10 Group</span>
                                                            <span><strong>Kenza Lahlou,</strong> Managing Partner, Outlierz Ventures </span>  
                                                            <span><strong>Eva Sow Ebion,</strong> Business Incubation Manager, CTIC Dakar </span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Yariv Cohen,</strong> Chairman, Kaenaart</span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: #21376b; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="747" href="#" class="session-item entity" data-fid="1571" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed3" aria-expanded="false" aria-controls="collapseOne"><h2>Ms Geek Africa</h2></a>
                                            <h3 class="presented">Session Partners: Imbuto Foundation</h3>
                                            <span class="list-category" style="color:#21376b;">Competition | MH1</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">Innovation</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed3" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            
                                                            <h4>Opening Remarks</h4>

                                                            <span><strong>Lucy Mbabazi,</strong> President, Girls in ICT</span>
                                                            <span><strong>Janet Longmore,</strong> President and Chairman, DOT</span>

                                                            <h4>Judges</h4>
                                                            <span><strong>Patience Gatera Umutesi,</strong> Country Director, Trademark EA
                                                            <span><strong>Angela Ngang&#39;a,</strong> Corporate Affairs Lead MEA Emerging Markets, Microsoft Corporations</span>
                                                            <span><strong>Romaric Sia,CEO,</strong> AfriSec & Assistant VP, InfoSec Ecobank Group</span>
                                                            <span><strong>Carole J Karema,</strong> IT Director, Crystal Ventures Ltd </span>

                                                            <h4>Special Interventions</h4>
                                                            <span><strong>Roland Lindenthal,</strong> Head of Department Education and Digital World, </span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Gaelle Nsengiyumva,</strong> Software Engineer & Network Expert, Rwanda Energy Group Ltd.</span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">9.00am</span>
                                <span class="fixed-hour">9.00am</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #fecf33; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1674" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Digital Health Hub</h2>
                                            <h3 class="presented"></h3>
                                            <h3 class="presented">African Alliance of Digital Health Networks</h3>
                                            <span class="list-time">Session Partners: ITU, WHO</span>
                                            <span class="list-category" style="color:#fecf33;">MH2A</span>
                                            <span class="list-location"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">10.00am</span>
                                <span class="fixed-hour">10.00am</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: rgb(0, 103, 234); display: block;" data-track="62" data-day="Tuesday, 27 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1576" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed4" aria-expanded="false" aria-controls="collapseOne"><h2>The Roadmap to the $300 Billion Investment Goal</h2></a>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;">Panel | Auditorium</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0">Fast Tracking Africa&#39;s Digital Transformation</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed4" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">Smart Africa Secretariat has set to attract an investment target worth $300 Billion for the continent. Drawing from the panelists&#39; respective areas of expertise, stances on what needs to occur in order to achieve this ambitious target will be discussed. This session will also look into Africa&#39;s readiness and uniqueness to adapt to new economic and financial requirements.</span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Hon. Bruno Nabagné Kone,</strong> Ministre de la Communication, de l'Economie Numérique et de la Poste,Côte d'Ivoire </span>
                                                            <span><strong>Hon. Clare Akamanzi,</strong> CEO, Rwanda Development Board</span>
                                                            <span><strong>Dr. Hamadoun Touré,</strong> Executive Director, Smart Africa
                                                            Ashish Thakkar, Founder, Mara Group</span>
                                                            <span><strong>Samba Bathily,</strong> CEO, Solektra International & co-founder of Akon Lighting Africa</span>
                                                            <span><strong>Stephen Spengler,</strong> CEO, Intelsat</span>

                                                            <h4>Special interventions</h4>
                                                            <span><strong>Brandon Freeman,</strong> Head of Smart Cities, Inmarsat </span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Eric White,</strong> Project Lead, Internet for All, World Economic Forum</span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: rgb(131, 23, 208); display: block;" data-track="54" data-day="Tuesday, 27 Feb" data-theme="385" href="#" class="session-item entity" data-fid="1657" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed5" aria-expanded="false" aria-controls="collapseOne"><h2>Blockchain Hub</h2></a>
                                            <h3 class="presented">A single crypto currency for Africa?</h3>
                                            <span class="list-time">Session Partners: HealID</span>
                                            <span class="list-category" style="color:#8317D0;">Panel | MH1</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/content-media.png" scale="0">Prospect & future outlook</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed5" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">The idea of an African currency was first proposed at the same time as the idea of a United Africa. A century later, as Africa&#39;s continental free trade area finally sees the day, and the free movement of people meet with blockchain technology, the time for a single African crypto-currency is at the same time revisited. Should it be opened up? What are the obstacles in the way, and how to surmount them?<br/>
                                                            15 min presentation by Charles Hoskinson</span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Dr. Monique Nsanzabaganwa,</strong> Deputy Governor, National Bank of Rwanda </span>
                                                            <span><strong>Jimmy Nguyen,</strong> CEO, nChain Group </span>
                                                            <span><strong>Tunde Ladipo,</strong> VP partnerships, Stellar </span>
                                                            <span><strong>Charles Hoskinson,</strong> CEO, IOHK</span>
                                                            <span><strong>Jean christophe Ramos Galver,</strong> Founding Partner, Founders Ventures </span>

                                                            <h4>Special Intervention by</h4>
                                                            <span><strong>Hon. Minette Libom Li Likeng,</strong> Minister of Telecommunications and Postal services, Cameroun</span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Georgie Ndirangu,</strong> Presenter, CNBC</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: #fecf33; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1674" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed6" aria-expanded="false" aria-controls="collapseOne"><h2>Digital Health Hub:</h2></a>
                                            <h3 class="presented">Innovation for Digital Health – Biotech, Drones, IoT, Mobile, Big data, AI</h3>
                                            <span class="list-time">Session Partners: ITU, WHO</span>
                                            <span class="list-category" style="color:#fecf33;">Panel | MH2A</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0"></span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed6" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">Owing to the rapid growth of the mobile and ICT field, the African region has experienced unprecedented innovations in the health sector. These aim to improve service delivery and health outcomes. These innovations provide tangible results of the implementation of eHealth strategies. The  WHO publishes a compendium of eHealth innovations and eHealth  medical devices to share best practices and south to south collaboration. In the era of universal health coverage, these innovations not only contribute towards the improvement in health outcomes, but also ensure that no one is left behind as far as health care coverage is concerned. A key result of these innovations  is acceleration of the attainment of universal health coverage.<br/>
 
                                                            This session will discuss the current state of innovations and pragmatic digital health implementations. It will discuss among other things, the use of digital health to improve health outcomes and expand increase in access to health services. </span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Hiroshi Kato,</strong> Vice President, Japan International Cooperation Agency</span>
                                                            <span><strong>Prof. Vijayakumar Bhagavatula,</strong> Director, CMU-Africa
                                                            Francis Akanbiemu, Executive Secretary and Head, Ondo State Primary Health Care Management Board, Ondo State-Nigeria</span>
                                                            <span><strong>Anuradha Gupta,</strong> Deputy Chief Executive Officer, GAVI</span>
                                                            <span><strong>Shivon Byamukama,</strong> Deputy CEO Babyl, Rwanda</span>
                                                            <span><strong>Brahim Ghribi,</strong> Head of Government Relations & Public Affairs, Middle East and Africa, Nokia</span>
                                                            <span><strong>Nao Sipula,</strong> Chief Executive Officer, Watif Health</span>
                                                            <span><strong>Diba Babacar,</strong> ITRON Rwanda</span>
                                                            <span><strong>Walter Kerr,</strong> Chief of Staff , Zenysis Technologies</span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Israel Bimpe,</strong> National Implementation Lead, Zipline International</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: #3fad49; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1674" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed7" aria-expanded="false" aria-controls="collapseOne"><h2>Digital Transformation Hub</h2></a>
                                            <h3 class="presented">Digital Dividends from e-Governance: e-Estonia approach</h3>
                                            <span class="list-time">Sponsored by Estonian ICT Cluster</span>
                                            <span class="list-category" style="color:#3fad49;">Custom Session | MH2B</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0"></span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed7" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">The session will be opened by presenting World Bank World Development Report 2016: Digital Dividends. Participants will share their digitalization experiences from their projects by providing insight as to how these developments have increased efficiency, improved transparency and raised the integrity of their countries. The discussions will also look at how digital solutions of different sectors have increased efficiency, improved education, enhanced economic development and increased foreign investments; thus reducing inequality and increasing the sustainability of overall socio-economic development. The session will be concluded by looking at how Estonian e-solutions can be adapted, re-engineered and co-innovated with African countries.</span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Priit Kongo,</strong> Net Group</span>
                                                            <span><strong>Rait Raal,</strong> Reach-U</span>
                                                            <span><strong>Riho Kurg,</strong> Cybernetica</span>
                                                            <span><strong>Girts Laudaks,</strong> e-School</span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Kadri Humal-Ayal,</strong> Representative, Estonian Smart City Cluster companies</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <!-- <div class="agenda-item">
                                    <a style="border-left-color: #3fad49; display: block;" data-track="55" data-day="Monday, 26 Feb" data-theme="750" href="#" class="session-item entity" data-fid="1556" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Partner Spotlight</h2>
                                            <h3 class="presented">Japan – Rwanda Innovation Proof of Concept Center Launch</h3>
                                            <span class="list-category" style="color:#3fad49;">AD12</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            
                                        </div>
                                    </a>
                                </div> -->
                            </div>
                        </div>

                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">11.30am</span>
                                <span class="fixed-hour">11.30am</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: #f78e20; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="749" href="#" class="session-item session-item-mc entity" data-fid="1649" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2></h2>
                                            <h2 style="color:#f78e20;">Networking Break</h2>
                                            <!-- <h3 class="presented">IBM</h3> -->
                                            <span class="list-category" style="color:#f78e20;"></span>
                                          
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">12.00pm</span>
                                <span class="fixed-hour">12.00pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: #21376b; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="747" href="#" class="session-item entity" data-fid="1571" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed8" aria-expanded="false" aria-controls="collapseOne"><h2>Plenary</h2></a>
                                            <h3 class="presented">Digital Skills & Jobs: Building a digital workforce for a digital society</h3>
                                            <span class="list-time">Session Partners: eLearning</span>
                                            <span class="list-category" style="color:#21376b;"> Panel | AUDITORIUM</span>
                                            <!-- <span class="list-time">Silver, Gold & Platinum delegates</span> -->
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">Innovation</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed8" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">The ongoing digitisation efforts are enabling new ways of living, producing and consuming. Nascent technological advancements are ushering us into a new era where digital skills won't be an asset but a must-have. The African market offer an unlimited wealth of opportunities that are yet to be untapped. Digital technologies are expected to outstand this gap as the economic gain is enormous.<br/>
                                                            Drawing from the principle that "talent is equally distributed but opportunity is not, this session will address the brain drain syndrome and discuss the re-brain strategy as well as opportunities that need to be created to attract the talent and incentivize the local ingenuity.</span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Hon. Hadja Fatimata Ouattara,</strong> Minister of Digital Economy and Postal Development, Burkina Faso (TBC) </span>
                                                            <span><strong>Hon. Joseph Mucheru,</strong> Cabinet Secretary, Ministry of Information, Communications and Technology, Kenya</span>
                                                            <span><strong>Prof. Vijayakumar Bhagavatula,</strong> Director, Carnegie Mellon University Africa</span>
                                                            <span><strong>Janet Longmore,</strong> Founder and CEO, Digital Opportunity Trust 
                                                            Wambui Kinya, Chief Strategy Officer, Andela </span>
                                                            <span><strong>Alain Kajangwe,</strong> Re Brain Africa </span>

                                                            <h4>Special Interventions</h4>
                                                            <span><strong>Paul Mitchel,</strong> Senior Director, Tech Policy, Microsoft</span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Regis Rugemanshuro</strong>, CEO, BK TecHouse</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: rgb(131, 23, 208); display: block;" data-track="54" data-day="Tuesday, 27 Feb" data-theme="747" href="#" class="session-item entity" data-fid="1667" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed9" aria-expanded="false" aria-controls="collapseOne"><h2>Blockchain Hub:</h2></a>
                                            <h3 class="presented">Blockchain technologies for Africa</h3>
                                            <span class="list-time">Session Partners: HeadID</span>
                                            <span class="list-category" style="color:#8317D0;">Panel | MH1</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">Private sector driving Africa&#39;s digital economy</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed9" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">Blockchain solutions have already been deployed to trace coffee in Ethiopia, Cobalt in Congo and are being adopted in more Africans countries. In order to maximise the benefits of this new technology, Africa will need to plan ahead, and build R&D in the most promising sectors, while scaling the proven technologies. What are the most promising blockchain technologies? How can they be best adapted to Africa, and how can they be scaled? </span>

                                                            <h4>Keynote speaker</h4>
                                                            <span><strong>Laurent Lamothe,</strong> Co-Founder, Global Voice Group</span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Stephen Roux,</strong> CEO, Dosatsu.io</span> 
                                                            <span><strong>Makoto Takemiya,</strong> Co-CEO, Soramitsu </span>
                                                            <span><strong>Loudon McLean,</strong> CEO, DLTLabs</span>
                                                            <span><strong>Laurent Lamothe,</strong> Co-Founder, Global Voice Group</span>
                                                            <span><strong>Clement Uwajeneza,</strong> CEO, Rwanda Online </span>
                                                            <span><strong>Tim X. Brown,</strong> Associate Director, CMU Africa</span>
                                                            <h4>Special Intervention: </h4>
                                                            <span><strong>Hon. Siyabonga Cyprian Cwele,</strong> Minister of Teleommunications and Postal Services, South Africa (TBC)</span>

                                                            <h4>Moderated by: </h4>
                                                            <span><strong>Ephraim Rwamwenge,</strong> CEO, RWA Business Group</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: rgb(119, 120, 123); display: block;" data-track="58" data-day="Tuesday, 27 Feb" data-theme="0" href="#" class="session-item entity" data-fid="1622" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed10" aria-expanded="false" aria-controls="collapseOne"><h2>Digital Health Hub:</h2></a>
                                            <h3 class="presented">Universal Health Coverage and NCDs – Challenges and Digital Health Solution</h3>
                                            <span class="list-time"></span>
                                            <span class="list-category" style="color:#77787B;">Roundtable | MH2A</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme">Unleashing the African Innovation Potential</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed10" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">Digital health is gaining momentum in Africa with its ability to increase access to health.  Tackling Non-communicable Diseases (NCDs) is essential to accelerating progress towards Universal Health Coverage (UHC) as more than 75% of NCD deaths - 31 million - occur in low-and middle-income countries.  This situation is coupled with an aging population worldwide and shortages of health workers.  Integrated Primary Health Care (PHC) is fundamental to address the needs of patients with NCDs but is currently ill-equipped to face the rising NCD burden in Africa.  Digital health can become a game changer to revolutionize the way healthcare is delivered, strengthen PHC and expand Universal Health Coverage, if (and only if) it helps to tackle the growing NCD epidemic.<br/>
 
                                                            This session will discuss the opportunities that digital health can offer to leapfrog efforts to tackle NCDs, as well as challenges to implementation. </span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Harald Nusser,</strong> Head of Novartis Social Business</span>
                                                            <span><strong>Frasia Karua,</strong> General Manager, AMREF Health Africa</span>
                                                            <span><strong>Prebo Barango, Medical Officer,</strong> Intercountry Support Team for Eastern and Southern Africa, World Health Organization</span>
                                                            <span><strong>Florence Gaudry-Perkins,</strong> Founder, Digital Health Partnerships</span>
                                                            <span><strong>Ibrahima Dia, e-health Coordinator,</strong> Ministry of Health, Republic of Senegal</span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Hani Eskandar,</strong> ICT Applications Coordinator, ITU </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: rgb(131, 23, 208); display: block;" data-track="54" data-day="Tuesday, 27 Feb" data-theme="746" href="" class="session-item entity" data-fid="1666" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed11" aria-expanded="false" aria-controls="collapseOne"><h2>Digital Transformation Hub</h2></a>
                                            <h3 class="presented">Youth: Empowering Africa&#39;s Digital Disruptors</h3>
                                            <span class="list-time">Sponsored by Carnegie Mellon University-Africa</span>
                                            <span class="list-category" style="color:#8317D0;">Panel | MH2B</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/tech-in-society.png" scale="0">Rethinking Transportation</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed11" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">In today&#39;s Africa, more youth are developing solutions to the challenges they face in society. More information is flowing between countries and the promise of free movement and trade is slowly being realized. At the forefront of Africa&#39;s economic revolution, youth are harnessing technology to drive research and innovation.This ALL-YOUTH panel will highlight some of Africa&#39;s youngest and brightest game-changers in technology.</span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Davy Uwizera,</strong> Head of Business Intelligence Analytics, Research and Development, Data Integrated; PhD Student, African Center of Excellence in Data Science</span>
                                                            <span><strong>Andrew Kinai</strong>, Software Engineer, IBM Research</span>
                                                            <span><strong>Joan Nkiriki,</strong> Smart Africa Scholar & PhD Student in Engineering & Public Policy, Carnegie Mellon University</span>
                                                            <span><strong>Yvonne Wambui,</strong> Co-founder & Data Scientist, Hepta Analytics</span>
                                                            <span><strong>Victor Akinwande,</strong> Master&#39;s Student in Electrical & Computer Engineering, Carnegie Mellon University Africa</span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Viola Nuwaha,</strong> Smart Africa Scholar & Master&#39;s Student in Information Technology, Carnegie Mellon University Africa</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">12.00pm</span>
                                <span class="fixed-hour">12.00pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: rgb(248, 239, 48); display: block;" data-track="55" data-day="Tuesday, 27 Feb" data-theme="750" href="#" class="session-item entity" data-fid="1673" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed12" aria-expanded="false" aria-controls="collapseOne"><h2>ICT Ministerial & Regulatory Roundtable</h2></a>
                                            <h3 class="presented">Common digital free trade area: How do we realize a single digital market for 1 billion Africans? A policy and regulatory mapping report</h3>
                                            <span class="list-time">Session Partners: Microsoft</span>
                                            <span class="list-category" style="color:#F8EF30;">Roundtable | MH1</span>
                                            <!-- <span class="list-time">Silver, Gold & Platinum delegates</span> -->
                                            <span class="list-location">By invitation</span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">How ready is Africa?</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed12" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">In today&#39;s Africa, more youth are developing solutions to the challenges they face in society. More information is flowing between countries and the promise of free movement and trade is slowly being realized. At the forefront of Africa&#39;s economic revolution, youth are harnessing technology to drive research and innovation.This ALL-YOUTH panel will highlight some of Africa&#39;s youngest and brightest game-changers in technology.</span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Attending ICT Ministers,</strong> Telecom Regulators, and special guests </span>

                                                            <h4>Facilitated by</h4>
                                                            <span><strong>Innocent Muhizi,</strong> CEO, Rwanda Information Society Agency </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">1.00pm</span>
                                <span class="fixed-hour">1.00pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #f78e20; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="749" href="#" class="session-item session-item-mc entity" data-fid="1649" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2></h2>
                                            <h2 style="color:#f78e20;">Lunch Break</h2>
                                            <!-- <h3 class="presented">IBM</h3> -->
                                            <span class="list-category" style="color:#f78e20;"></span>
                                          
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">2.00pm</span>
                                <span class="fixed-hour">2.00pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: #f78e20; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="749" href="#" class="session-item entity" data-fid="1649" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2></h2>
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed13" aria-expanded="false" aria-controls="collapseOne"><h2 style="color:#f78e20;">Blockchain Hub</h2></a>
                                            <h3 class="presented">Future use of Blockchain technologies in Africa: IOT micro-transactions, thin-layer data storage, more resilient energy grid solutions and others</h3>
                                            <span class="list-time">Session Partners: HealID</span>
                                            <span class="list-category" style="color:#f78e20;">Presentation | MH1</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/applied-ai.png" scale="0">Forging a community of Smart Africa Leaders & Movers</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed13" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">IoT, smart grids, and data storage are the backbone of the 21st century African industrial revolution. What will it take for the world and Africa to leapfrog into efficient manufacturing, agriculture and and other economic activities, while preserving precious natural resources?</span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Dr. Craig Wright,</strong> CTO, nChain </span>
                                                            <span><strong>Sandra Ro,</strong> CEO, Global Blockchain Business Council </span>
                                                            <span><strong>Dr. Riad Hartani,</strong> Co-Founder Xona Partners</span>
                                                            <span><strong>Michael Kimani,</strong> Chairman, Kenya Blockchain Association </span>

                                                            <h4>Special Intervention </h4>
                                                            <span><strong>Hon. Anouar Maarouf,</strong> Minister of ICT, Tunisia (TBC)</span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Clement Ndegeya,</strong> CEO, EC Property Management</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: #3fad49; display: block;" data-track="55" data-day="Monday, 26 Feb" data-theme="750" href="#" class="session-item entity" data-fid="1556" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed14" aria-expanded="false" aria-controls="collapseOne"><h2>Digital Health Hub</h2></a>
                                            <h3 class="presented">Investing in Digital Health – Business models, PPPs</h3>
                                            <span class="list-time">Session Partners: ITU, WHO</span>
                                            <span class="list-category" style="color:#3fad49;">Roundtable | MH2A</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed14" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">In order for digital health to scale and realize the needed health system strengthening for better health outcomes, sustained investments are needed. These include infrastructure, human resources and financial. According to the WHO global survey on eHealth, the spread of financial investment for eHealh in the Africa region is as follows:  59 % Public funding, 72 % Donor/non-public, 41% Public-private partnerships, 31% Private/commercial.<br/>
 
                                                            This session will bring together key thought leaders on digital health investments business models for PPPs, that are needed to take digital health to scale. </span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Ibrahima Guimba-Saidou,</strong> CEO, National Information Society Agency (ANSI), Office of the President, Niger (TBC)</span>
                                                            <span><strong>Haitham El-Noush,</strong> Senior Adviser - Innovation in Health and Development, NORAD</span>
                                                            <span><strong>Norman Schraepel,</strong> Senior Expert, Digital Development and Project Manager - ICT, GIZ</span>
                                                            <span><strong>Theresa Pattery,</strong> Disease Management Program Leader, Janssen Global Public Health </span>
                                                            <span><strong>Merrick Schaefer,</strong> Global Health Bureau, Strategy, Analysis, Evaluation and Outreach; USAID</span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Dr. Juliet Bataringaya,</strong> Health Systems Team Leader, WHO</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="agenda-item">
                                    <span style="border-left-color: rgb(131, 23, 208); display: block;" data-track="54" data-day="Tuesday, 27 Feb" data-theme="749" href="" class="session-item entity" data-fid="1610" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed15" aria-expanded="false" aria-controls="collapseOne"><h2>Digital Transformation Hub</h2>
                                            <h3 class="presented">Space Inclusion: Leveraging new lean space technology for SDGs</h3>
                                            <span class="list-time"></span></a>
                                            <span class="list-category" style="color:#8317D0;">Custom Session | MH2B</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/applied-ai.png" scale="0">Rethinking Transportation</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed15" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Prof. Shinichi Nakasuka,</strong> Professor Department of Aeronautics & Astronautics, School of Engineering, University of Tokyo</span>
                                                            <span><strong>Mr. Yasuhiro Yukimatsu,</strong> Director General Japan National Space Policy Secretariat </span>
                                                            <span><strong>Prof. Shibasaki Ryosuke,</strong> Center for Spatial Information Science, Tokyo </span>
                                                            <span><strong>Ms. Naomi Kurahara,</strong> CEO & Founder Infostellar</span>
                                                            <span><strong>Dr. Ignace Gatare,</strong> Principal, UR CST,</span>

                                                            <h4>Special Interventions</h4>
                                                            <span><strong>Piotr Dmochowski-Lipsk,</strong></span>

                                                            <h4>Moderated by</h4>
                                                            <span><strong>Alex Ntale,</strong> CEO, ICT Chamber</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <!-- <div class="agenda-item">
                                    <a style="border-left-color: rgb(248, 239, 48); display: block;" data-track="55" data-day="Tuesday, 27 Feb" data-theme="750" href="" class="session-item entity" data-fid="1561" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Partner Spotlight:</h2>
                                            <h3 class="presented">Space inclusion: leveraging new lean space technology for SDGs</h3>
                                            <span class="list-category" style="color:#F8EF30;">AD12</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            
                                        </div>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                        
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">3.00pm</span>
                                <span class="fixed-hour">3.00pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: block;" data-track="62" data-day="Tuesday, 27 Feb" data-theme="748" href="#" class="session-item session-item-mc entity" data-fid="1581" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Networking Break</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#0067EA;"></span>
                                    
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/future-services-provider.png" scale="0"></span> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">3:30pm</span>
                                <span class="fixed-hour">3:30pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <span style="border-left-color: #3fad49; display: block;" data-track="55" data-day="Monday, 26 Feb" data-theme="750" href="#" class="session-item entity" data-fid="1556" data-type="session">
                                        <div class="agenda-item-contents">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed16" aria-expanded="false" aria-controls="collapseOne"><h2>Smart Africa Women Summit: "Women and Digital Inclusion"</h2></a>
                                            <h3 class="presented">
                                                - Smart Africa Women&#39;s Summit<br />
                                                - Ms Geek Africa Winner presentation<br />
                                                - Closing remarks
                                            </h3>
                                            <span class="list-category" style="color:#3fad49;">Panel | Auditorium</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span> -->
                                            <!-- <a class="btn pa_italic collapsed btn-program-mc btn-program-mc-prog" role="button" data-toggle="collapse" data-parent="#accordion" href="#wed16" aria-expanded="false" aria-controls="collapseOne"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Read more</a> -->

                                            <div class="panel-group panel-mc panel-mc-prog" id="accordion" role="tablist" aria-multiselectable="true" style="margin: 0;">
                                                <div class="panel panel-default" style="background: #fff;">
                                                    <div id="wed16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-body-mc" style="padding: 0; background: #fff; margin-top: 10px;">
                                                            <span class="list-location" style="font-size: 15px; padding-bottom: 15px;">Women in low and middle-income countries are on average 10% less likely to own a phone than men. Additionally, even when women own mobile phones they underutilize it especially for services such as internet and smart applications 2. The GSMA Mobile Gender Gap Reports 2018, shows that 1.2 billion women in low and middle-income countries do not use mobile internet. There is on average 26% gap between men and women use of mobile internet. High cost for access is the main barrier general. Though, for women lack of awareness, low literacy, and lack of digital illiteracy are additional factors. It was shown that closing the gender digital divide in Africa could unlock and estimated $20 Billion market opportunity over from 2015 to 2020. 
                                                            As a follow up to last year&#39;s edition where the  Africa Smart Women and Girls Initiative declaration was launched and in light of the recently concluded African Union summit on CFTA,  this session will serve as a retrospective and a renewed call to action for digital inclusion. </span>

                                                            <h4>Master of Ceremony</h4>
                                                            <span><strong>Winnie Wambugu,</strong> Head of Communications,Smart Africa Secretariat</span>

                                                            <h4>Opening Remarks</h4>
                                                            <span><strong>Hon. Esperance Nyirasafari,</strong> Minister, Gender and Family Promotion, Republic of Rwanda </span>

                                                            <h4>Keynote speaker</h4>
                                                            <span><strong>H.E. Dr. Amani Abou-Zeid,</strong> Commissioner for Infrastructure and Energy, African Union Commission </span>

                                                            <h4>Conversation Leaders</h4>
                                                            <span><strong>Hon. Ursula Owusu-Ekufui,</strong> Minister for Communications, Republic of Ghana</span>
                                                            <span><strong>Dr. Hamadoun Touré,</strong> Executive Director, Smart Africa Secretariat</span>
                                                            <span><strong>Adedoyin Odunfa,</strong> CEO, Digital Jewels </span>
                                                            <span><strong>Fode Ndiaye,</strong> Resident Coordinator, OneUN Rwanda
                                                            Sandrine Umutoni, Director General, Imbuto Foundation</span>

                                                            <h4>Moderated by,</h4>
                                                            <span><strong>Novella Nikwigize,</strong> TV Personality, RBA</span>

                                                            <h4>Ms Geek Africa Winner presentation </h4>

                                                            <h4>Closing Remarks</h4>
                                                            <span><strong>Dr. Hamadoun Touré,</strong> Executive Director, Smart Africa Secretariat</span>

                                                            <h4>Vote of Thanks,?</h4>
                                                            <span><strong>Hon. Jean De Dieu Rurangirwa,</strong> Minister of Information Technology & Communications, Republic of Rwanda</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">5:30pm</span>
                                <span class="fixed-hour">5:30pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #f78e20; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="749" href="#" class="session-item entity" data-fid="1649" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2></h2>
                                            <h2 style="color:#f78e20;">Travel to gala dinner</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#f78e20;"></span>
                                            <span class="list-time"></span>
                                            <span class="list-location"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">7:00pm</span>
                                <span class="fixed-hour">7:00pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: block;" data-track="62" data-day="Tuesday, 27 Feb" data-theme="746" href="" class="session-item entity" data-fid="1596" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Gala Dinner</h2>
                                    
                                            <span class="list-category" style="color:#0067EA;"></span>
                                            <span class="list-time">Platinum delegates</span>
                                            <span class="list-location"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    
                    <div id="four" class="daycontent">
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="program-h4-mc">
                                <h4>Transform Africa Summit</h4>
                                <p>Gold and Platinum tournament participants</p>
                            </div>
                            <div class="agenda-hour">
                                <span class="abs-hour">Full Day</span>
                                <span class="fixed-hour">Full Day</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #3fad49; display: block;" data-track="55" data-day="Monday, 26 Feb" data-theme="750" href="#" class="session-item entity" data-fid="1556" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Transform Africa Golf Tournament</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#3fad49;"></span>
                                            <span class="list-time">Platinum delegates</span>
                                            <!-- <span class="list-location">Golf, the world over, is known as the business sport. This is where captains of industry and leading entrepreneurs make business deals. Network & relax in a friendly environment whilst playing your favourite sport. The Transform Africa Summit Golf Tournament will take place at the new Kigali Golf Club in the leafy Nyarutarama neighbourhood, approximately 5 mins away from the Kigali Convention Center. The golf tournament is open Platinum delegates.</span> -->
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="agenda-hour-wrap" style="display: none;">
                        <div class="agenda-hour">
                            <span class="abs-hour">09:00</span>
                            <span class="fixed-hour">09:00</span>
                        </div>
                        <div class="agenda-items">
                            <div class="agenda-item">
                                <a style="border-left-color: rgb(131, 23, 208); display: none;" data-track="54" data-day="Wednesday, 28 Feb" data-theme="747" href="https://www.mobileworldcongress.com/session/transforming-mobile-network-economics-of-4g5g/" class="session-item entity" data-fid="1634" data-type="session">
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
            </div>
            <div class="text-center">
                 <a class="btn btn-program-mc" href="<?=DN?>/download.php?url=sponsor-docs/tas18program.pdf"><i class="fa fa-file-pdf-o"></i> Download Program</a>
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
    </section>

    <section class="container-fluid btn-links-mc">
        <div class="container">
            <div class="row">
                <ul class="portfolio-filter portfolio-filter-links">
                    <li class="col-md-3 col-xs-6"><a class="btn btn-default" href="<?=DN?>/register-corporate">Register for a Corporate package</a></li>
                    <li class="col-md-3 col-xs-6"><a class="btn btn-default" href="<?=DN?>/register-pass">Register as an Individual</a></li>
                    <li class="col-md-3 col-xs-6"><a class="btn btn-default" href="<?=DN?>/platinum">Register as a Platinum delegate</a></li>
                    <li class="col-md-3 col-xs-6"><a class="btn btn-default" href="<?=DN?>/sponsor">Sponsor or Exhibit</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="wrapper-portfolio text-center style3 container-fluid special" style="background-color: #ffffff;">
        <div class="container">
            <div class="w3_tittle second two"><h3 class="agile-tittle two gal reg">Partner Organisations</h3> 
                    <div class="line-style second"><span class="second"></span></div>
                </div>
        </div>
        <div class="container">
            <ul class="list-inline row"> 
                <li class="col-sm-4 col-xs-12">
                    <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/U.A.jpg" class="img-responsive"></div>
                    <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/ITU.jpg" class="img-responsive"></div>
                    <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/ADB.jpg" class="img-responsive"></div>
                </li>
                <li class="col-sm-4 col-xs-12">
                    <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/ATU.jpg" class="img-responsive"></div>
                    <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/UNECA.jpg" class="img-responsive"></div>
                    <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/NEPAD.jpg" class="img-responsive"></div>
                </li>
                <li class="col-sm-4 col-xs-12">
                    <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/ICANN.jpg" class="img-responsive"></div>
                    <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/WORLD-BANK.jpg" class="img-responsive"></div>
                    <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/gsm.jpg" class="img-responsive"></div>
                </li>
            </ul>  
        </div>
    </section>

    <div class="swiper-container swiper-container-horizontal" >
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/gallery/720x480/1M0O1681-2.jpg"></div>

            <div class="swiper-slide"><img src="img/gallery/720x480/1M0O1693-2.jpg"></div>
            <div class="swiper-slide"><img src="img/gallery/720x480/tas17-03.jpg"></div>
            <div class="swiper-slide"><img src="img/gallery/720x480/tas17-04-2.jpg"></div>
            <div class="swiper-slide"><img src="img/gallery/720x480/1M0O1792-2.jpg"></div>
            <div class="swiper-slide"><img src="img/gallery/720x480/tas17-06.jpg"></div>
            <div class="swiper-slide"><img src="img/gallery/720x480/tas17-07.jpg"></div>
            <div class="swiper-slide"><img src="img/gallery/720x480/tas17-08.jpg"></div>

            <div class="swiper-slide"><img src="img/gallery/720x480/tas17-09.jpg"></div>
            <div class="swiper-slide"><img src="img/gallery/720x480/tas17-10.jpg"></div>
            <div class="swiper-slide"><img src="img/gallery/720x480/tas17-11.jpg"></div>
            <div class="swiper-slide"><img src="img/gallery/720x480/tas17-12.jpg"></div>
            <div class="swiper-slide"><img src="img/gallery/720x480/tas17-13.jpg"></div>
        </div>
        <!-- <div class="swiper-button-prev swiper-button-disabled"><i class="material-icons">&#xE408;</i></div> -->
        <!-- <div class="swiper-button-next"><i class="material-icons">&#xE409;</i></div> -->
    </div>

      <!-- footer -->
      <?php include 'views/footer-colombe.php';?>
      <!-- //footer -->
    </div>

    <?php //include 'views/footer-common.php';?>

    <!-- Bootstrap core JavaScript -->
    <!-- <script src="<?=DN;?>/vendor/jquery/jquery.min.js"></script> -->
    <script src="<?=DN;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?=DN;?>/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=DN;?>/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?=DN;?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- <script src="<?=DN;?>/js/lightslider.min.js"></script> -->

    <!-- Custom scripts for this template -->
    <script src="<?=DN;?>/js/creative.min.js"></script>
    <script type = "text/javascript" >
        // $(document).ready(function() {
        //     $("#slide").lightSlider({
        //         item: 6,
        //         auto: true,
        //         loop: true,
        //         speed: 1000, //ms'
        //     });
        // });
        // $(document).ready(function() {
        //     $("#lightSlider, #lightSlider1, #lightSlider2, #lightSlider3, #lightSlider4, #lightSlider5").lightSlider({
        //         item: 1,
        //         auto: true,
        //         loop: true,
        //     });
        // }); 
    </script>
    <!-- FlexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
    $(window).load(function () {
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: false,
        itemWidth: 102,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: true,
        sync: "#carousel",
        start: function (slider) {
          $('body').removeClass('loading');
        }
      });
    });

    </script>
  <!-- //FlexSlider -->
  <!-- Owl-Carousel-JavaScript -->
        <script src="js/owl.carousel.js"></script>
        <script>
      $(document).ready(function () {
        $("#owl-demo, #owl-demo1, #owl-demo2, #owl-demo3, #owl-demo4").owlCarousel({
          autoPlay: 3000,
          items: 1,
          itemsDesktop: [1024, 1],
          itemsDesktopSmall: [414, 1]
        });
      });
    </script>


    <!-- Bootstrap core JavaScript -->
    <!-- <script src="<?=DN;?>/vendor/jquery/jquery.min.js"></script> -->
    <script type='text/javascript' src="<?=DN?>/js/jquery.js"></script>
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
                item: 7,
                auto: true,
                loop: true,
                speed: 1000, //ms'
                responsive : [
                    {
                        breakpoint:800,
                        settings: {
                            item:3,
                            slideMove:1,
                            slideMargin:6,
                          }
                    },
                    {
                        breakpoint:480,
                        settings: {
                            item:1,
                            slideMove:1
                          }
                    }
                ]
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

    <script type = "text/javascript" >
        $(document).ready(function() {
            $("#minister").lightSlider({
                item: 7,
                auto: true,
                loop: true,
                speed: 1000, //ms'
                responsive : [
                    {
                        breakpoint:800,
                        settings: {
                            item:3,
                            slideMove:1,
                            slideMargin:6,
                          }
                    },
                    {
                        breakpoint:480,
                        settings: {
                            item:1,
                            slideMove:1
                          }
                    }
                ]
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


<script type='text/javascript'>
/* <![CDATA[ */
var screenReaderText = {"expand":"expand child menu","collapse":"collapse child menu"};
/* ]]> */
</script>
<script type="text/javascript" src="<?=DN?>/gs-content/themes/js/swiper7032.js?725371"></script>
<script type="text/javascript" src="<?=DN?>/gs-content/themes/js/main7032.js?725371"></script>

 <!-- END CORE PLUGINS Custom NAV-->
  <script src="js/back-to-top.js" type="text/javascript"></script>
  <script src="js/jquery.slimscroll.min.js" type="text/javascript"></script>
  <script src="js/layout.js" type="text/javascript"></script>
  <script type="text/javascript">
      jQuery(document).ready(function() {
          Layout.init();    
          Layout.initOWL();
          Layout.initImageZoom();
          Layout.initTouchspin();
          Layout.initTwitter();
      });
  </script>
  <!-- END CORE PLUGINS Custom NAV-->

</body>

</html>