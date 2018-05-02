 <div class="footer_top_agileits">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer_grid">
          <!-- <h3 style="visibility: hidden;">Privacy Policy</h3> -->
          <ul class="footer_grid_list">
            <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              <a href="<?=DN?>/terms">Terms & Conditions </a>
            </li>
            <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              <a href="<?=DN?>/privacy">Privacy Policy </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 footer_grid">
          <!-- <h3 style="visibility: hidden;">Contact Info</h3> -->
          <ul class="address">
            <li><i class="fa fa-map-marker" aria-hidden="true"></i>09th Floor, Bloc C, Makuza <span>Peace Plaza, 10 KN4 Avenue, Kigali, Rwanda</span></li>
            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:enquiries@smartafrica.org">enquiries@smartafrica.org</a></li>
            <li><a href="tel:+250732301014" ><i class="fa fa-phone" aria-hidden="true"></i>(+250) 0732301014</a></li>
          </ul>
        </div>
        <div class="col-md-4 footer_grid">
          <!-- <h3 style="visibility: hidden;">Contact Info</h3> -->
          <ul class="address">
            <li><a href="tel:+250732301013" ><i class="fa fa-phone" aria-hidden="true"></i>(+250) 0732301013</a></li>
            <li><a href="tel:+250734016854" ><i class="fa fa-phone" aria-hidden="true"></i>(+250) 0734016854</a></li>
            <li><a href="tel:+250734016853" ><i class="fa fa-phone" aria-hidden="true"></i>(+250) 0734016853</a></li>
            <li><a href="tel:+250732106106" ><i class="fa fa-phone" aria-hidden="true"></i>(+250) 0732106106</a></li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <div class="footer_w3ls">
    <div class="container">
      <div class="row">
        <div class="footer_bottom1 pull-left col-md-6">
          <p>© <?=date('Y')?> <a href="https://www.smartafrica.org" target="_blank">Smart Africa</a>. All rights reserved</p>
        </div>
        <div class="agileits-social pull-right col-md-6">
          <ul>
            <li><a class="real-smartafrica" href="https://www.smartafrica.org" target="_blank">@RealSmartAfrica</a></li>
            <li><a href="https://web.facebook.com/RealSmartAfrica/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/RealSmartAfrica" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <!-- <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li> -->
            <li><a href="https://www.youtube.com/user/transformafrica2013" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>

       <!--  <div class="social-media pull-right">
          <ul>
            <li><a href="https://web.facebook.com/RealSmartAfrica/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
            <li><a href="https://twitter.com/RealSmartAfrica" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
            <li><a href="https://www.youtube.com/user/transformafrica2013" target="_blank"><i class="fa fa-youtube-play" target="_blank"></i> </a></li>
          </ul>
        </div> -->
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
    <!-- <script src="<?=DN;?>/vendor/jquery/jquery.min.js"></script> -->
    <!-- <script src="<?=DN;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

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

    <!-- END CORE PLUGINS Custom NAV-->
  <!-- <script src="<?=DN;?>/js/back-to-top.js" type="text/javascript"></script> -->
  <script src="<?=DN;?>/js/jquery.slimscroll.min.js" type="text/javascript"></script>
  <script src="<?=DN;?>/js/layout.js" type="text/javascript"></script>
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