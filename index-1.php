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
      <header class="masthead masthead-mc text-center text-white">
        <div class="container">
            <div class="row">
                <h2 class="hd-wel header-title-mc"> Welcome to Transform Africa Summit 2018<br></h2>
                <h2 class="header-title-mc"> <span style="color: #f78e20;">7 - 10 May 2018</span> | Kigali Convention Center | Rwanda<br></h2>
                <h4 class="hd-desc header-what-mc">What would you like to do?</h4>
                
                    <div class="col-md-3 col-xs-6 col-sm-4 img-icon-mc">
                        <a class="js-scroll-trigger icon-attend" href="<?=DN?>/register">
                            <img src=" img/Register-to-attend.png" alt="icon-02" class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">Register<br> to attend</h4>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-4 img-icon-mc">
                        <a class="js-scroll-trigger icon-program" href="<?=DN?>/#program">
                            <img src=" img/View-the-program.png" alt="icon-05" class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">View<br> the program</h4>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-4 img-icon-mc">
                        <a class="js-scroll-trigger icon-exhibit" href="<?=DN?>/sponsor">
                            <img src=" img/Exhibit.png" alt="icon-04" class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">Sponsor<br> or Exhibit</h4>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-4 img-icon-mc">
                        <a class="js-scroll-trigger icon-speak" href="<?=DN?>/platinum">
                            <img src=" img/platimun-hm.png" alt="icon-06"  class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">Register for Platinum<br><span> program</span></h4>
                        </a>
                    </div>
                
                    <div class="col-md-3 col-xs-6 col-sm-4 img-icon-mc">
                        <a class="js-scroll-trigger icon-golf" id="myBtn" href="#">
                            <img src=" img/Register-for-the-golf-tournament.png" alt="icon-03" class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">Register for <!-- <span class="over-title-mc"> -->TAS2018<!-- </span> --> Golf<span class=""> tournament</span></h4>
                        </a>
                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                            <!-- Modal content -->
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

                        </div>
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
                    <div class="col-md-3 col-xs-6 col-sm-4 img-icon-mc">
                        <a class="js-scroll-trigger icon-media" href="<?=DN?>/register/media">
                            <img src=" img/Get-my-media-pass.png" alt="icon-07" class="img img-responsive hm-icon-mc">
                            <h4 class="hm-links hm-links-mc">Get my <br><span class="sm-hm-link hidden-xs">lo</span><span class="sm2-hm-link"> lor</span><span class="sm3-hm-link"> lore</span>media pass <span class="sm-hm-link-last hidden-xs">loream</span>
                                <span class="gap-fix-mc"> lorem ipsum</span></h4>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-4 img-icon-mc">
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
                    </div>
              
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
                    <li>
                        <img alt="Bob Kahn" src="img/kahn.jpg">
                        <div class="port-info">
                            <h5>Bob Khan</h5>
                            <p>Father of the Internet</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Strive Masiyiwa" src="img/masiyiwa.jpg">
                        <div class="port-info">
                            <h5>Strive Masiyiwa</h5>
                            <p>Founder and Chairman of Econet</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Jean de Dieu" src="img/rurangirwa.jpg">
                        <div class="port-info">
                            <h5>Jean de Dieu Rurangirwa</h5>
                            <p>Minister of Information Technology and Communications</p>
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
                            <p>Executive Chairman of OneWeb and Founder of 03b Networks</p>
                        </div>
                    </li>
                    <li>
                        <img alt="Grey Wyler" src="img/nsengimana.jpg">
                        <div class="port-info">
                            <h5>Jean Philbert Nsengimana</h5>
                            <p>Special Advisor, Smart Africa</p>
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
               <h4 class="sizecolor">Leaders Summit</h4>
               <p class="sze">
                This year&#39;s session will feature high level dialogue between Heads of States, private sector business leaders and executives of international organizations on creating a single digital market for Africa. 
                </p>
              </div>
             <div class="changecolors">
               <h4 class="sizecl"> Smart Africa Women&#39;s Summit </h4>
                <p class="sze">
                The Smart Africa Women&#39;s Summit will bring to the forefront the strategic interventions that are being pursued to empower women and girls to participate in the digital economy. The summit will look to highlight programs that women and girls can participate in.
                </p>
              </div>
             <div class="sizesbg">
               <h4 class="sizeclor">Smart Africa Exhibition</h4>
               <p class="sze">
                Exhibitors from across the globe will showcase their innovations & technologies that will transform governments & businesses in Africa into the digital economy & society. 
                </p>
              </div>
             <div class="changecolors">
             <h4 class="sizecl">Smart Africa Plenaries </h4>
             <p class="sze">A series of plenary and parallel sessions will focus on the road map to a single digital market for Africa tackling a wide range of topics including investments, infrastructure, skills gap and decentralized regulatory policies across the continent. </p>
             </div>
             <div class="sizes">
               <h4 class="sizecolor">Blockchain Hub </h4>
                <p class="sze">
                Up till recently, blockchain technology has been associated with cryptocurrencies such as Bitcoin and platforms like Ethereum. This hub&#39;s activities explore the wider applications of the technology and it&#39;s will form the basis to which we will create a roadmap to adopting Blockchain technology in Africa. 
                </p>
              </div>
             <div class="sizesbg">
               <h4 class="sizeclor">Digital Health Hub   </h4>
                <p class="sze">
                This hub will explore how Africa will adopt & harness the technology driven innovation that is already disrupting healthcare across the globe by increasing capabilities and improving experiences between medical professionals and patients. 
                </p>
              </div>
              <div class="sizes">
                   <h4 class="sizecolor">The 4th Industrial Revolution Hub  </h4>
                  <p class="sze">
                  The hub will host debates & discussions on strategies Africa needs to adopt to achieve inclusive growth in Africa and pursue industrialization strategies that can harness opportunities and minimize the threats of the fourth industrial revolution. 
                  </p>
             </div>
            </div>
          <div class="col-md-6 borders">
              <div class="sizes">
                 <h4 class="sizecolor">Partners Spotlight </h4>
                 <p class="sze">
                 The Partners Spotlight that will feature custom sessions
                from our partners working on the frontier of revolutionizing solutions towards a digital Africa. Workshops, presentations, expert panels and one-on-one interviews with influencers will form the hubs program. 
                  </p>
                </div>
                <div class="changecolors">
                   <h4 class="sizecl"> Digital Governance Program </h4>
                   <p class="sze">Centered around e-gov & its ecosystem, this program will delve
                    into the automation of government services, improving efficiency of governance processes and the use of ICT to complement existing efforts. This program is hosted by the African Union Commission. </p>
                 </div>
                <div class="sizesbg">
                  <h4 class="sizeclor">The Pavillion </h4>
                  <p class="sze">Located in the expansive foyer of the Kigali Convention Center, the Pavilion is an unmatched premium exhibition and innovation
                   space that will feature countries, economic groupings, sponsors
                    and collective organizations showcasing their innovations and technologies in a customized premium environment. </p>
                </div>
                <div class="changecolors">
                  <h4 class="sizecl"> Ms Geek Africa </h4>
                  <p class="sze">
                  Now in its 5th year, Ms. Geek is a competition designed to inspire African girls to be part of solving the continent&#39;s challenges using technology and encourage them to choose a career in Science, Technology, Engineering and Math. The competition will climax at the Smart Africa Women's Summit where the winner will be annouced</p>
                </div>
                <div class="sizes">
                  <h4 class="sizecolor">Face the Gorillas </h4>
                  <p class="sze">
                This year&#39;s Face the Gorillas session will feature a record number of entrepreneurs from Smart Africa member states who will present their products to a panel of international investors and other financiers, seeking investment partnership and mentorship in their ICT business. 
                  </p>
                </div>
                <div class="changecolors">
                   <h4 class="sizeclor">The Platinum Delegates Experience  </h4>
                  <p class="sze">
                  Platinum delegates will this year attend the exclusive the Transform Africa Economic
                   Forum, a government to business engagement platform on investment and collaboration opportunities. Platinum delegates will also enjoy private networking opportunities in premium networking spaces and dedicated services. 
                  </p>
                </div>
                <div class="size-btn">
                    <a href="<?=DN?>/register"><button class="button btn-inv" style="text-transform: none;">Click here to register to attend the summit</button></a>
                </div>
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
                            <div class="program-h4-mc">
                                <h4>Transform Africa Economic Forum</h4>
                                <p>Platinum delegates and Invited Government Officials</p>
                            </div>
                            <div class="agenda-hour">
                                <span class="abs-hour">Full Day</span>
                                <span class="fixed-hour">Full Day</span>
                            </div>
                            <div class="agenda-items">
                   <!--              <div class="agenda-item">
                                    <a style="border-left-color: #068ec1; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="745" href="#" class="session-item entity" data-fid="1652" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Morning</h2>
                                            <span class="list-time">Keynote Speech</span>
                                            <span class="list-time">Opening Remarks from the Guest of Honor</span>
                                            <span class="list-time">Discussion: Creating a Smart Continental Free Trade Area for Africa's Single Digital Market</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: #fecf33; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1594" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Lunch</h2>
                                            <span class="list-time"></span>
                                            <span class="list-time">Networking lunch hosted by Smart Africa</span>
                                            <span class="list-time"></span>
                                        </div>
                                    </a>
                                </div> -->
                                <div class="agenda-item">
                                    <a style="border-left-color: #ed552b; display: block;" data-track="58" data-day="Monday, 26 Feb" data-theme="0" href="#" class="session-item entity" data-fid="1633" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Transform Africa Economic Forum</h2>
                                            <span class="list-time">The Transform Africa Economic Forum is a one day high level platform for discussing the disruptive but also the enabling and strategic role of ICT for the rapid transformation of Africa</span>
                                            <!-- <span class="list-time">One-to-one private sector & government investment opportunities presentation sessions</span> -->
                                            <span class="list-time"></span>
                                            <span class="list-location" style="color: #f05f40;">Platinum and Gold Delegates | Auditorium</span>
                                            <span class="list-category" style="color:#21376b;"> </span>
                                        </div>
                                    </a>
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
                            <div class="program-h4-mc">
                                <h4>Transform Africa Summit</h4>
                                <p>All Delegates</p>
                            </div>
                            <div class="agenda-hour">
                                <span class="abs-hour">9.00am</span>
                                <span class="fixed-hour">9.00am</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #21376b; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="748" href="#" class="session-item entity" data-fid="1566" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Arrival of guests for Leaders Summit</h2>
                                            <h3 class="presented"></h3>
                                            <span class="list-category" style="color:#21376b;"> </span>
                                            <span class="list-time">Guests are requested to be seated by 9.30am</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/future-services-provider.png" scale="0"> </span> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">10.00am</span>
                                <span class="fixed-hour">10.00am</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #fecf33; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1674" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Opening Session</h2>
                                            <h3 class="presented"></h3>
                                             <h3 class="presented">Leaders Summit: The building blocks for a successful single digital market for Africa</h3>
                                            <span class="list-category" style="color:#fecf33;"> PANEL | AUDITORIUM</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0"></span> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">12.30pm</span>
                                <span class="fixed-hour">12.30pm</span>
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
                                <span class="abs-hour">2.00pm</span>
                                <span class="fixed-hour">2.00pm</span>
                            </div>
                            <div class="agenda-items">
                                
                                <div class="agenda-item">
                                    <a style="border-left-color: #21376b; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="747" href="#" class="session-item entity" data-fid="1571" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Plenary</h2>
                                            <h3 class="presented">Digital Identity, Connectivity & Regulation</h3>
                                            <span class="list-category" style="color:#21376b;"> PANEL | AUDITORIUM</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">Innovation</span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: #068ec1; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="745" href="#" class="session-item entity" data-fid="1652" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Smart Africa Board Meeting</h2>
                                            <h3 class="presented">Session Partners: Smart Africa Secretariat</h3>
                                            <span class="list-category" style="color:#068ec1;">MH1</span>
                                            <span class="list-time">By Invitation</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-digital-consumer.png" scale="0">Exclusive opportunity to tackle key issues with decision-makers</span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: #fecf33; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1594" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Digital Health Hub</h2>
                                            <h3 class="presented">State of Digital Health In Africa – Landscape and Countries Roadmaps</h3>
                                            <span class="list-time">Session Partners: ITU, WHO</span>
                                            <span class="list-category" style="color:#fecf33;">MH2A</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0">Innovation</span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: #ed552b; display: block;" data-track="58" data-day="Monday, 26 Feb" data-theme="0" href="#" class="session-item entity" data-fid="1633" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>4th Industrial Revolution Hub</h2>
                                            <h3 class="presented">A.I. - How & who will bridge the skills gap?</h3>
                                            <span class="list-time">Session Partners: ITU, WHO</span>
                                            <span class="list-category" style="color:#ed552b;">MH2B</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme">Building safe & secure cities</span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: #21376b; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="747" href="#" class="session-item entity" data-fid="1571" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Partner Spotlight</h2>
                                            <h3 class="presented">Transforming the automotive industry in Africa: A presentation by Thomas Schaefer, Chairman & Managing Director, Volkswagen Group, South Africa</h3>
                                            <span class="list-time">Session Partners: Volkswagen</span>
                                            <span class="list-category" style="color:#21376b;">AD12</span>
                                            <!-- <span class="list-time">By Invitation</span> -->
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">Innovation</span> -->
                                        </div>
                                    </a>
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
                                            <span class="list-category" style="color:#f78e20;"> </span
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
                                    <a style="border-left-color: #068ec1; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="745" href="#" class="session-item entity" data-fid="1652" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Spotlight Conversations with Business Leaders</h2>
                                            <!-- <h3 class="presented">Modern Marketing Summit</h3> -->
                                            <span class="list-category" style="color:#068ec1;">AUDITORIUM</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-digital-consumer.png" scale="0">Exclusive opportunity to tackle key issues with decision-makers</span> -->
                                        </div>
                                    </a>
                                </div>
                                <!-- <div class="agenda-item">
                                    <a style="border-left-color: #fecf33; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1594" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Council of African regulators meeting</h2>
                                         
                                            <span class="list-category" style="color:#fecf33;">MH1</span>
                                            <span class="list-time">By Invitation</span>
                                            <span class="list-location"></span>
                                            
                                        </div>
                                    </a>
                                </div> -->
                                <div class="agenda-item">
                                    <a style="border-left-color: #ed552b; display: block;" data-track="58" data-day="Monday, 26 Feb" data-theme="0" href="#" class="session-item entity" data-fid="1633" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Digital Health Hub</h2>
                                            <h3 class="presented">Government Leadership in Digital Health – Breaking Silos and Mitigating "pilotitis"</h3>
                                            <span class="list-time">Session Partners: ITU, WHO</span>
                                            <span class="list-category" style="color:#ed552b;"> MH2A</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme">Building safe & secure cities</span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: #068ec1; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="745" href="#" class="session-item entity" data-fid="1652" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>4th Industrial Revolution Hub</h2>
                                            <h3 class="presented">The future of robotics in your business</h3>
                                            <span class="list-time">Session Partners: Carnegie Mellon University</span>
                                            <span class="list-category" style="color:#068ec1;">MH2B</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-digital-consumer.png" scale="0">Exclusive opportunity to tackle key issues with decision-makers</span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: #fecf33; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1594" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Partner Spotlight</h2>
                                            <h3 class="presented">Digital Governance program: A conversation with the Africa Union Commission on benchmarking best ptactice e-government solutions.</h3>
                                            <span class="list-time">Session Partners: AU Commission</span>
                                            <span class="list-category" style="color:#fecf33;">AD12</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            
                                        </div>
                                    </a>
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
                                <span class="abs-hour">5.30pm</span>
                                <span class="fixed-hour">5.30pm</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #21376b; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="748" href="#" class="session-item entity" data-fid="1566" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Cultural Soiree</h2>
                                             <h3 class="presented">Session Partners: Institute of Electrical & Electronics Engineers (IEEE)</h3>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
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
                                <span class="abs-hour">8.00am</span>
                                <span class="fixed-hour">8.00am</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: #3fad49; display: block;" data-track="55" data-day="Monday, 26 Feb" data-theme="750" href="#" class="session-item entity" data-fid="1556" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Face the Gorillas</h2>
                                            <h3 class="presented">Session Partners: Private Sector ICT Chamber, KLab</h3>
                                            <span class="list-category" style="color:#3fad49;">MH1</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: #21376b; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="747" href="#" class="session-item entity" data-fid="1571" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Ms Geek Africa</h2>
                                            <h3 class="presented">Session Partners: Imbuto Foundation</h3>
                                            <span class="list-category" style="color:#21376b;">AD12</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">Innovation</span> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="agenda-hour-wrap" style="display: block;">
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
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0"></span> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="agenda-hour-wrap" style="display: block;">
                            <div class="agenda-hour">
                                <span class="abs-hour">10.00am</span>
                                <span class="fixed-hour">10.00am</span>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: block;" data-track="62" data-day="Tuesday, 27 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1576" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Plenary</h2>
                                            <h3 class="presented">The Roadmap to the $300 Billion Investment Goal</h3>
                                            <span class="list-category" style="color:#0067EA;">Panel | Auditorium</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0">Fast Tracking Africa&#39;s Digital Transformation</span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: block;" data-track="54" data-day="Tuesday, 27 Feb" data-theme="385" href="#" class="session-item entity" data-fid="1657" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Blockchain Hub</h2>
                                            <h3 class="presented">A single crypto currency for Africa?</h3>
                                            <span class="list-time">Session Partners: HealID</span>
                                            <span class="list-category" style="color:#8317D0;">MH1</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/content-media.png" scale="0">Prospect & future outlook</span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: #fecf33; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="383" href="#" class="session-item entity" data-fid="1674" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Digital Health Hub:</h2>
                                            <h3 class="presented">Innovation for Digital Health – Biotech, Drones, IoT, Mobile, Big data, AI</h3>
                                            <span class="list-time">Session Partners: ITU, WHO</span>
                                            <span class="list-category" style="color:#fecf33;"> MH2A</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-fourth-industrial-revolution.png" scale="0"></span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(0, 103, 234); display: block;" data-track="62" data-day="Tuesday, 27 Feb" data-theme="746" href="#" class="session-item entity" data-fid="1596" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>4th Industrial Revolution Hub:</h2>
                                            <h3 class="presented">The Internet of Things: Driving smart cities</h3>
                                             <span class="list-time">Session Partners: Carnegie Mellon University</span>
                                            <span class="list-category" style="color:#0067EA;">MH2B</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/tech-in-society.png" scale="0">Roundtable (Invitation only)</span> -->
                                        </div>
                                    </a>
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
                                    <a style="border-left-color: #f78e20; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="749" href="#" class="session-item session-item-mc entity" data-fid="1649" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2></h2>
                                            <h2 style="color:#f78e20;">Networking Break</h2>
                                            <!-- <h3 class="presented">IBM</h3> -->
                                            <span class="list-category" style="color:#f78e20;"></span>
                                          
                                        </div>
                                    </a>
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
                                    <a style="border-left-color: #21376b; display: block;" data-track="62" data-day="Monday, 26 Feb" data-theme="747" href="#" class="session-item entity" data-fid="1571" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Plenary</h2>
                                            <h3 class="presented">Digital Skills & Jobs: Building a digital workforce for a digital society</h3>
                                            <span class="list-time">Session Partners: eLearning</span>
                                            <span class="list-category" style="color:#21376b;"> PANEL | AUDITORIUM</span>
                                            <!-- <span class="list-time">Silver, Gold & Platinum delegates</span> -->
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">Innovation</span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: block;" data-track="54" data-day="Tuesday, 27 Feb" data-theme="747" href="#" class="session-item entity" data-fid="1667" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Blockchain Hub:</h2>
                                            <h3 class="presented">Blockchain technologies for Africa</h3>
                                            <span class="list-time">Session Partners: HeadID</span>
                                            <span class="list-category" style="color:#8317D0;">MH1</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/the-network.png" scale="0">Private sector driving Africa&#39;s digital economy</span> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="agenda-items">
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(119, 120, 123); display: block;" data-track="58" data-day="Tuesday, 27 Feb" data-theme="0" href="#" class="session-item entity" data-fid="1622" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Digital Health Hub:</h2>
                                            <h3 class="presented">Roundtable: Government & PPP in Digital Health</h3>
                                            <span class="list-time">Session Partners: ITU, WHO</span>
                                            <span class="list-category" style="color:#77787B;">MH2A</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme">Unleashing the African Innovation Potential</span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: block;" data-track="54" data-day="Tuesday, 27 Feb" data-theme="746" href="" class="session-item entity" data-fid="1666" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>4th Industrial Revolution Hub:</h2>
                                            <h3 class="presented">Drones for Agriculture in Africa</h3>
                                            <span class="list-time">Session Partners: Carnegie Mellon University</span>
                                            <span class="list-category" style="color:#8317D0;">MH2B</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/tech-in-society.png" scale="0">Rethinking Transportation</span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(248, 239, 48); display: block;" data-track="55" data-day="Tuesday, 27 Feb" data-theme="750" href="#" class="session-item entity" data-fid="1673" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>ICT Ministerial & Regulatory Roundtable</h2>
                                            <h3 class="presented">Common digital free trade area: How do we realize a single digital market for 1 billion Africans? A policy and regulatory mapping report</h3>
                                            <span class="list-time">Session Partners: Microsoft</span>
                                            <span class="list-category" style="color:#F8EF30;">MH1</span>
                                            <!-- <span class="list-time">Silver, Gold & Platinum delegates</span> -->
                                            <span class="list-location">By invitation</span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">How ready is Africa?</span> -->
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
                                    <a style="border-left-color: #f78e20; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="749" href="#" class="session-item session-item-mc entity" data-fid="1649" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2></h2>
                                            <h2 style="color:#f78e20;">Networking Break</h2>
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
                                    <a style="border-left-color: #f78e20; display: block;" data-track="54" data-day="Monday, 26 Feb" data-theme="749" href="#" class="session-item entity" data-fid="1649" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2></h2>
                                            <h2 style="color:#f78e20;">Blockchain Hub</h2>
                                            <h3 class="presented">Future use of Blockchain technologies in Africa: IOT micro-transactions, thin-layer data storage, more resilient energy grid solutions and others</h3>
                                            <span class="list-time">Session Partners: HealID</span>
                                            <span class="list-category" style="color:#f78e20;">MH1</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/applied-ai.png" scale="0">Forging a community of Smart Africa Leaders & Movers</span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: #3fad49; display: block;" data-track="55" data-day="Monday, 26 Feb" data-theme="750" href="#" class="session-item entity" data-fid="1556" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Digital Health Hub</h2>
                                            <h3 class="presented">Investing in Digital Health – Business models, PPPs</h3>
                                            <span class="list-time">Session Partners: ITU, WHO</span>
                                            <span class="list-category" style="color:#3fad49;">MH2A</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(131, 23, 208); display: block;" data-track="54" data-day="Tuesday, 27 Feb" data-theme="749" href="" class="session-item entity" data-fid="1610" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>4th Industrial Revolution Hub</h2>
                                            <h3 class="presented">A.I. - Who is doing it and how?</h3>
                                            <span class="list-time">Session Partners: Carnegie Mellon University</span>
                                            <span class="list-category" style="color:#8317D0;">MH2B</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/applied-ai.png" scale="0">Rethinking Transportation</span> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="agenda-item">
                                    <a style="border-left-color: rgb(248, 239, 48); display: block;" data-track="55" data-day="Tuesday, 27 Feb" data-theme="750" href="" class="session-item entity" data-fid="1561" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Partner Spotlight:</h2>
                                            <h3 class="presented">Space inclusion: leveraging new lean space technology for SDGs</h3>
                                            <span class="list-category" style="color:#F8EF30;">AD12</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">The Value proposition for Africa</span> -->
                                        </div>
                                    </a>
                                </div>
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
                                    <a style="border-left-color: #3fad49; display: block;" data-track="55" data-day="Monday, 26 Feb" data-theme="750" href="#" class="session-item entity" data-fid="1556" data-type="session">
                                        <div class="agenda-item-contents">
                                            <h2>Plenary</h2>
                                            <h3 class="presented">
                                                - Smart Africa Women&#39;s Summit<br />
                                                - Ms Geek Africa Winner presentation<br />
                                                - Closing remarks
                                            </h3>
                                            <span class="list-category" style="color:#3fad49;">Auditorium</span>
                                            <span class="list-time">Silver, Gold & Platinum delegates</span>
                                            <span class="list-location"></span>
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/innovation-2.png">Innovation</span> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="agenda-hour-wrap" style="display: block;">
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
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/applied-ai.png" scale="0">Forging a community of Smart Africa Leaders & Movers</span> -->
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
                                            <!-- <span class="list-theme"><img src="https://www.mobileworldcongress.com/wp-content/themes/theme_MWC/images/themes-images/tech-in-society.png" scale="0">Roundtable (Invitation only)</span> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
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
                            item:2,
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