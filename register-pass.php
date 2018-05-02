<?php include 'admin/core/init.php';?>
<?php
$success = false;
$error = false;
$nosubNav = true;
?> 
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js">
<head>  
<?php include 'includes/head-common.php';?>
    <title>Register - Transform Africa Summit 2018</title>
    <link rel="stylesheet" href="<?=DN?>/intlTelInput/build/css/intlTelInput.css">
    <script src="<?=DN?>/intlTelInput/build/js/intlTelInput.js"></script>
    <script type='text/javascript' src="<?=DN?>/js/jquery.js"></script>
    <script type='text/javascript' src="<?=DN?>/bootstrap/js/bootstrap.min.js"></script> 
    
    <link href="<?=DN;?>/css/style.css" rel="stylesheet">
</head>
<body class="home page page-id-2">
    <?php include 'views/header-mc.php';?>
  <div id="wrapper" class="home nav-top-mc">
    <section class="contact-w3ls">
      <div class="container">
        <div class="w3_tittle second two"><h3 class="agile-tittle two gal">Individual Pass Registration</h3> 
          <div class="line-style second"><span class="second"></span></div>
        </div>
      </div>
      <div class="container">
        <p class="text-center text-default text-introduction">Join over 4,000 visitors at the Transform Africa Summit and network with like minded industry players transforming the ICT sector in Africa. Engage with innovators, pioneers &amp; leaders from both the public &amp; private sector not only from Africa, but across the globe.</p><br/>
        <div class="col-md-12">
            <div class="register-pass">
                <div class="col-md-4 panel-heading-mc bg-purple">
                  <!-- <h3 class="text-white">Platinum Individual </h3>
                  <span class="pricely-foreword">$950 per delegate</span><br/>
                  <span><a href="<?=DN?>/register/platinum" class="btn corporate-btn">Register</a></span> -->
                  <img src="img/platinum-reg.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-md-8 pass-description">
                  <h4 class="color-purple">Platinum Pass <span class="pricely-foreword">($950 per delegate)</span></h4>
                  <p class="text-introduction" style="font-size: 15px; margin: 0;">
                  As a Platinum delegate, you will experience an elevated networking 
                experience through exclusive programs such as the Transform Africa Economic Forum, private 
                exclusive networking spaces & meeting rooms, priority seating as well the opportunity to 
                particiapte in the Transform Africa Golf Tournament. The platinum program aligns you with 
                opportunites to network with Africa's policy makers & leading ICT investors & influencers. 
                All platinum delegates access the Cultrual Soiree and Gala Dinner. </p>
                  <a class="pa_italic collapsed btn bg-light-purple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>See all benefits</a>
                  <a class="btn pass-reg bg-dark-purple" href="<?=DN?>/register/platinum"><i class="fa fa-long-arrow-right"></i> Get your Platinum pass</a>
                </div>
                <div class="col-md-12 panel-group panel-mc" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <!-- <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title asd">
                        <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>See all benefits
                        </a>
                      </h4>
                    </div> -->
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body panel_text">
                        <div class="col-md-6">
                          <h6>Affiliated events</h6>
                          <ul class="summary">
                            <li><i class="fa fa-long-arrow-right"></i>Transform Africa Economic Forum</li>
                            <li><i class="fa fa-long-arrow-right"></i>Transform Africa Golf Tournament</li>
                          </ul>

                          <h6>Summit Sessions</h6>
                          <ul class="summary">
                            <li><i class="fa fa-long-arrow-right"></i>Smart Africa Exhibition</li>
                            <li><i class="fa fa-long-arrow-right"></i>Plenary Sessions including the Opening</li>
                            <li><i class="fa fa-long-arrow-right"></i>Partner Spotlights Program</li>
                            <li><i class="fa fa-long-arrow-right"></i>Transform Africa Summit Hubs</li>
                            <li><i class="fa fa-long-arrow-right"></i>Ms Geek</li>
                            <li><i class="fa fa-long-arrow-right"></i>Face the Gorillas</li>
                          </ul>
                        </div>

                        <div class="col-md-6">
                          <h6>Official Social Events</h6>
                          <ul class="summary">
                            <li><i class="fa fa-long-arrow-right"></i>Cultural Soiree</li>
                            <li><i class="fa fa-long-arrow-right"></i>Gala Dinner</li>
                          </ul>

                          <h6>Networking</h6>
                          <ul class="summary">
                            <li><i class="fa fa-long-arrow-right"></i>Platinum Auditorium Lounge </li>
                          </ul>

                          <h6>Hospitality</h6>
                          <ul class="summary">
                            <li><i class="fa fa-long-arrow-right"></i>Shuttle service</li>
                            <li><i class="fa fa-long-arrow-right"></i>Priority seating in summit sessions</li>
                            <li><i class="fa fa-long-arrow-right"></i>Dedicated Concierge Service Desk</li>
                          </ul>
                        </div>
                        <div class="col-md-12 reg-pass-btn">
                          <a href="<?=DN?>/register/platinum" class="btn">Get your Platinum pass</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="register-pass">
                <div class="col-md-4 panel-heading-mc bg-purple">
                  <img src="img/gold.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-md-8 pass-description">
                  <h4>Gold Individual Pass <span class="pricely-foreword">($450 per delegate)</span></h4>
                  <p class="text-introduction" style="font-size: 15px; margin: 0;">
                  As a Gold delegate, you will have access to all summit sessions as well as 
                  networking social events including the cultrual soiree. Gold delegates will also attend 
                  the exclusive Gala Dinner joining other gold delegates representing ICT influencers and 
                  leading digital thought leaders.</p>
                  <a class="pa_italic collapsed btn bg-light-gold" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>See all benefits</a>
                  <a class="btn pass-reg bg-dark-gold" href="<?=DN?>/register/gold"><i class="fa fa-long-arrow-right"></i> Get your Gold pass</a>
                </div>
                <div class="col-md-12 panel-group panel-mc" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body panel_text">
                        <div class="col-md-6">
                          <h6>Affiliated events</h6>
                          <ul class="summary">
                            <li><i class="fa fa-long-arrow-right"></i>Transform Africa Economic Forum</li>
                          </ul>

                          <h6>Summit Sessions</h6>
                          <ul class="summary">
                            <li><i class="fa fa-long-arrow-right"></i>Smart Africa Exhibition</li>
                            <li><i class="fa fa-long-arrow-right"></i>Plenary Sessions including the Opening</li>
                            <li><i class="fa fa-long-arrow-right"></i>Partner Spotlights Program</li>
                            <li><i class="fa fa-long-arrow-right"></i>Transform Africa Summit Hubs</li>
                            <li><i class="fa fa-long-arrow-right"></i>Ms Geek</li>
                            <li><i class="fa fa-long-arrow-right"></i>Face the Gorillas</li>
                          </ul>
                        </div>

                        <div class="col-md-6">
                          <h6>Official Social Events</h6>
                          <ul class="summary">
                            <li><i class="fa fa-long-arrow-right"></i>Cultural Soiree</li>
                            <li><i class="fa fa-long-arrow-right"></i>Gala Dinner</li>
                          </ul>

                          <h6>Networking</h6>
                          <ul class="summary">
                            <li><i class="fa fa-long-arrow-right"></i>Gold Networking Lounge at the Filini</li>
                          </ul>

                          <h6>Hospitality</h6>
                          <ul class="summary">
                            <li><i class="fa fa-long-arrow-right"></i>Shuttle service</li>
                          </ul>
                        </div>
                        <div class="col-md-12 reg-pass-btn">
                          <a href="<?=DN?>/register/gold" class="btn">Get your Gold pass</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
          <div class="register-pass">
              <div class="col-md-4 panel-heading-mc bg-purple">
                <img src="img/silver.jpg" class="img-responsive" alt="">
              </div>
              <div class="col-md-8 pass-description">
                <h4>Silver Individual Pass <span class="pricely-foreword">($250 per delegate)</span></h4>
                <p class="text-introduction" style="font-size: 15px; margin: 0;">Attend the Transform Africa summit sessions on 8 and 9 May and keep abreast of Africa's digital roadmap whilst unlocking opportunites for you and your business. Join Africa's ICT champions and grow your network to influence your companies' path to success in this 4th Industrial Revolution.</p>
                <a class="pa_italic collapsed btn" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>See all benefits</a>
                <a class="btn pass-reg" href="<?=DN?>/register/silver"><i class="fa fa-long-arrow-right"></i> Get your Silver pass</a>
              </div>
              <div class="col-md-12 panel-group panel-mc" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body panel_text">
                      <div class="col-md-6">
                        <h6>Summit Sessions</h6>
                        <ul class="summary">
                          <li><i class="fa fa-long-arrow-right"></i>Smart Africa Exhibition</li>
                          <li><i class="fa fa-long-arrow-right"></i>Plenary Sessions including the Opening</li>
                          <li><i class="fa fa-long-arrow-right"></i>Partner Spotlights Program</li>
                          <li><i class="fa fa-long-arrow-right"></i>Transform Africa Summit Hubs</li>
                          <li><i class="fa fa-long-arrow-right"></i>Ms Geek</li>
                          <li><i class="fa fa-long-arrow-right"></i>Face the Gorillas</li>
                        </ul>
                      </div>

                      <div class="col-md-6">
                        <h6>Hospitality</h6>
                        <ul class="summary">
                          <li><i class="fa fa-long-arrow-right"></i>Shuttle service</li>
                        </ul>
                      </div>
                      <div class="col-md-12 reg-pass-btn">
                        <a href="<?=DN?>/register/silver" class="btn">Register for Silver pass</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="accreditation" style="padding: 0 0 3rem 0;">
      <div class="container">
        <div class="w3_tittle second two"><h3 class="agile-tittle two gal reg"> Registration &amp; Accreditation Deadlines</h3> 
          <div class="line-style second over-title" style=""><span class="second"></span></div>
        </div>
        <div class="col-md-6 col-sm-6 man-grid">
            <ul>
                <li>
                    <i class="fa fa-square" aria-hidden="true"></i>International Delegates
                    <p><i class="fa fa-long-arrow-right"></i> Registration closes: <span class="border-orange-color">3 May 2018</span></p>
                    <p><i class="fa fa-long-arrow-right"></i> Accreditation opens: <span class="border-light-blue-color">3 May 2018</span></p>
                    <p><i class="fa fa-long-arrow-right"></i> Accreditation closes: <span class="border-blue-color">9 May 2018</span></p>
                </li>
            </ul>
        </div>

        <div class="col-md-6 col-sm-6 man-grid">
            <ul>
                <li>
                    <i class="fa fa-square" aria-hidden="true"></i>Local Delegates (Rwanda Residents)
                    <p><i class="fa fa-long-arrow-right"></i> Registration closes: <span class="border-orange-color">3 May 2018</span></p>
                    <p><i class="fa fa-long-arrow-right"></i> Accreditation opens: <span class="border-light-blue-color">3 May 2018</span></p>
                    <p><i class="fa fa-long-arrow-right"></i> Accreditation closes: <span class="border-blue-color">5 May 2018</span></p>
                </li>
            </ul>
        </div>
      </div>
    </section>
        
        <?php //include 'views/social.php';?> 
        <?php include 'views/footer-colombe.php';?>           
    </div><!--wrapper--> 


    <script type="text/javascript">
      var sc_project=2972217; 
      var sc_invisible=0; 
      var sc_partition=32; 
      var sc_security="b5feb9f9"; 
    </script>
    <!-- <script type="text/javascript" src="http://www.statcounter.com/counter/counter_xhtml.js"></script> -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-2996441-4']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
</body>
</html>