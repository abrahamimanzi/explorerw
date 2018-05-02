<?php include 'admin/core/init.php';?>
<?php
$success = false;
$error = false;
$nosubNav = true;
?> 
<!DOCTYPE html>
<html>
    <style>
        .fa-star{
            color: #f78e20!important;
            /*background:  #f78e20!important;*/
            font-size: 17px!important;
            padding: 1px;
        }
    </style>
<head>
  <script type='text/javascript' src="<?=DN?>/js/jquery.js"></script>
    <?php include 'includes/head-common.php';?>
    <title>Sponsor &amp; Exhibit - Transform Africa Summit 2018</title>   
    
    <link rel="stylesheet" href="intlTelInput/build/css/intlTelInput.css">
    <script src="intlTelInput/build/js/intlTelInput.js"></script>

    <link href="css/style.css" rel="stylesheet">
</head>
<body class="home page page-id-2">
    <?php include 'views/header-mc.php';?> 

  <!--===========================================
=            Popular deals section            =
============================================-->
  <div class="container-fluid nav-top-mc">
          <div class="row">
              <img class="img img-responsive" src="<?=DN?>/img/platinum-banner.jpg" style="width:100%"/>
          </div>
      </div>

      <section class="contact-w3ls">
        <div class="container">
          <div class="w3_tittle second two"><h3 class="agile-tittle two gal reg">The Platinum Experience</h3> 
            <div class="line-style second"><span class="second"></span></div>
          </div>

          <p class="text-default text-introduction">Platinum delegates at the 2018 Transform Africa Summit have an exclusive and tailored experience to ensure that the summit delivers results and exceeds their expectations. We have created premium networking areas and dedicated services and events that ensure that your presence at the summit is fruitful.</p>

          <div class="w3_tittle second two"><h3 class="agile-tittle two gal reg">Highlights of the Platinum Experience</h3> 
            <div class="line-style second"><span class="second"></span></div>
          </div>
        </div>
        <div class="container">
          <div class="col-md-3 col-sm-6 col-lg-3">
              <div class="latest-post latest-post-plat waves-effect">
                  <img src="img/economic.jpg" class="img-responsive" alt="">
                  <h4>Transform Africa Economic Forum</h4>
                  <p>Platinum delegates are invited to attend the exclusive Transform Africa Economic Forum to engage with the continent’s governments and policy makers.</p>
                  <a href="#myModal1" class="btn btn-primary" data-toggle="modal">Read More</a>
              </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
              <div class="latest-post latest-post-plat waves-effect">
                  <img src="img/summit.jpg" class="img-responsive" alt="">
                  <h4>2018 Transform Africa Summit</h4>
                  <p>Platinum delegates enjoy a first class experience at the Summit. You will enjoy unlimited access to all sessions get and priority seating.<br/ ><span style="visibility: hidden;">Transform Africa</span></p>
                  <a href="#myModal2" class="btn btn-primary" data-toggle="modal">Read More</a>
              </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
              <div class="latest-post latest-post-plat waves-effect">
                  <img src="img/golf-tournment.jpg" class="img-responsive" alt="">
                  <h4>Transform Africa Golf Tournament</h4>
                  <p>Platinum delegates get the first opportunity to share the golf course with Africa’s pre-eminent influencers and digital champions.<br/ ><span style="visibility: hidden;">Transform Africa</span></p>
                  <a href="#myModal3" class="btn btn-primary" data-toggle="modal">Read More</a>
              </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
              <div class="latest-post latest-post-plat waves-effect">
                  <img src="img/louange.jpg" class="img-responsive" alt="">
                  <h4>Platinum Auditorium Lounge</h4>
                  <p>The Platinum lounge is an exclusive catered networking lounge venue offering a meeting space away from the hustle and bustle of the summit.<br/ ><span style="visibility: hidden;">The Platinum Auditorium Lounge is an exclusive</span></p>
                  <a href="#myModal4" class="btn btn-primary" data-toggle="modal">Read More</a>
              </div>
          </div>

          <!-- <p class="text-default text-introduction" style="color: #19a581!important;">Who are the Platinum Delegates?</p>
          <p class="text-default text-introduction">Platinum Delegates at this year’s summit comprise:<br />
          <span style="color: #f05f40; margin-left: 10px;"><i class="fa fa-angle-double-right"></i></span> Ministers of Trade, ICT, Finance and Health<br />
          <span style="color: #f05f40; margin-left: 10px;"><i class="fa fa-angle-double-right"></i></span>Africa’s business influencers, <br />
          <span style="color: #f05f40; margin-left: 10px;"><i class="fa fa-angle-double-right"></i></span> Chief Executive Officers, <br />
          <span style="color: #f05f40; margin-left: 10px;"><i class="fa fa-angle-double-right"></i></span> Chief Technology Officers and <br />
          <span style="color: #f05f40; margin-left: 10px;"><i class="fa fa-angle-double-right"></i></span> Executives of multinationals and Africa’s largest firms.</p>
          <p class="text-default text-introduction">These delegates are the people who will determine the pace and progress of Africa towards attaining a single digital market.</p> -->
        </div>
      </section>

      <section class="accreditation" style="padding: 0 0 3rem 0;">
        <div class="container">
          <div class="w3_tittle second two"><h3 class="agile-tittle two gal reg">Register as a Platinum Delegate</h3> 
            <div class="line-style second"><span class="second"></span></div>
          </div>
          <div class="col-md-6 col-sm-6 man-grid">
              <ul>
                  <li>
                      <i class="fa fa-square" aria-hidden="true" style="color: #ff8f12;"></i><span style="color: #ff8f12;">Corporate Package (5 or more delegates)</span>
                      <p class="plat"><a href="<?=DN?>/register-corporate" class="btn btn-primary">Click Here</a></p>
                  </li>
              </ul>
          </div>

          <div class="col-md-6 col-sm-6 man-grid">
              <ul>
                  <li>
                      <i class="fa fa-square" aria-hidden="true" style="color: #ff8f12;"></i><span style="color: #ff8f12;">Individual Pass</span>
                      <p class="plat"><a href="<?=DN?>/register-pass" class="btn btn-primary">Click Here</a></p>
                  </li>
              </ul>
          </div>
        </div>
      </section>

      <!-- modal1 -->
      <div class="modal about-modal w3-agileits fade" id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4>Transform Africa Economic Forum</h4>
              <div class="border-blue-bottom"></div>
            </div> 
            <div class="modal-body">
              <p>Platinum delegates are invited to attend the Transform Africa Economic Forum to be held on 7 May 2018. The forum is a unique platform for Africa’s Business Leaders to engage with the continent’s governments and policy makers. This is an opportunity to engage with government officials on key developments in African markets and to be the first to tap into those opportunities.</p>
            </div> 
          </div>
        </div>
      </div>
      <!-- //modal1 -->  
      <!-- modal2 -->
      <div class="modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4>2018 Transform Africa Summit</h4>
              <div class="border-blue-bottom"></div>
            </div> 
            <div class="modal-body">
              <p>Platinum delegates enjoy a first class experience at the Summit. You will enjoy unlimited access to all sessions get and priority seating. This means that you will sit together with the continent’s infuencers and key executives. Get to the front row of Africa’s digital transformation. </p>
            </div> 
          </div>
        </div>
      </div>
      <!-- //modal2 -->  
      <!-- modal3 -->
      <div class="modal about-modal w3-agileits fade" id="myModal3" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4>Transform Africa Golf Tournament</h4>
              <div class="border-blue-bottom"></div>
            </div> 
            <div class="modal-body">
              <p>It is said, there is no place other than the boardroom, where more deals are signed than the golf course. Platinum delegates get the first opportunity to take part in the Transform Africa Golf Tournament and share the golf course with Africa’s pre-eminent influencers and digital champions.</p>
            </div> 
          </div>
        </div>
      </div>
      <!-- //modal3 -->  
      <!-- modal4 -->
      <div class="modal about-modal w3-agileits fade" id="myModal4" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4>Platinum Auditorium Lounge</h4>
              <div class="border-blue-bottom"></div>
            </div> 
            <div class="modal-body">
              <p>The Platinum Auditorium Lounge is an exclusive networking and hospitality venue which offers platinum delegates a brief escape from the hustle and bustle of the summit. It offers them a quieter networking environment where they can hold meetings, have meals and tap into a like-minded network of delegates.</p>
            </div> 
          </div>
        </div>
      </div>
      <!-- //modal4 -->  

  <!-- footer -->
      <?php include 'views/footer-colombe.php';?>
      <!-- //footer -->
</div>
  <!--wrapper--> 
</body>
</html>