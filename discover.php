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
    <?php include 'includes/head-common.php';?>
    <?php include 'includes/head-common-h.php';?>
    <title>Sponsor &amp; Exhibit - Transform Africa Summit 2018</title>   
    
    <link rel="stylesheet" href="intlTelInput/build/css/intlTelInput.css">
    <script src="intlTelInput/build/js/intlTelInput.js"></script>

    <link href="css/style.css" rel="stylesheet">
<style type="text/css">
  /*footer*/
/*-- footer --*/

.footer_top_agileits {
    background: #21376b;;
    padding: 4em 0;
}

.footer_bottom1 a {
    display: inline-block;
}
.footer_w3ls {
    background: #001d45;
    padding: 1em 0;
}
ul.tag2:last-child {
    margin: 0;
}

.footer_bottom_grid:nth-child(2) {
    float: right;
    text-align: right;
}

.footer_bottom {
    padding: 2em 0;
}

.index-copy-right {
    background: transparent;
}

.footer_bottom h6 {
    color: #ffffff;
    font-size: 1.4em;
    letter-spacing: 1px;
    margin-bottom: 1em;
    text-transform: uppercase;
    font-weight: 700;
}

.footer_bottom1 p {
    color: #fff;
    font-size: 14px;
    letter-spacing: 2px;
    margin-top: .6em;
}

.footer_bottom1 p a {
    color: #f05f40;
    transition: .5s ease-in;
    -webkit-transition: .5s ease-in;
    -moz-transition: .5s ease-in;
    -o-transition: .5s ease-in;
    -ms-transition: .5s ease-in;
}

.footer_bottom1 p a:hover {
    color: #fff;
    transition: .5s ease-in;
    -webkit-transition: .5s ease-in;
    -moz-transition: .5s ease-in;
    -o-transition: .5s ease-in;
    -ms-transition: .5s ease-in;
}

.social ul {
    padding: 0;
    margin: 0;
}

.social ul li {
    display: inline-block;
}

.social ul li a {
    color: #333;
    text-align: center;
}

.social ul li a i.fa.fa-facebook {
    height: 32px;
    width: 32px;
    line-height: 32px;
    background: #FFFFFF;
    color: #3b5998;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.social ul li a i.fa.fa-facebook:hover {
    height: 32px;
    width: 32px;
    line-height: 32px;
    background: #3b5998;
    color: #FFFFFF;
}

.social ul li a i.fa.fa-twitter {
    height: 32px;
    width: 32px;
    line-height: 32px;
    background: #FFFFFF;
    color: #1da1f2;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.social ul li a i.fa.fa-twitter:hover {
    height: 32px;
    width: 32px;
    line-height: 32px;
    background: #1da1f2;
    color: #FFFFFF;
}

.social ul li a i.fa.fa-instagram {
    height: 32px;
    width: 32px;
    line-height: 32px;
    background: #FFFFFF;
    color: #f26522;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.social ul li a i.fa.fa-instagram:hover {
    height: 32px;
    width: 32px;
    line-height: 32px;
    background: #f26522;
    color: #FFFFFF;
}

.footer_bottom1 label {
    color: #ff4f81;
    display: block;
    font-size: 0.3em;
    letter-spacing: 3px;
}

.footer_bottom1 h2 {
    font-size: 2.2em;
    text-transform: uppercase;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.29);
    color: #fff;
    font-weight: 700;
}

.footer_grid h3, .footer_grid_left h3 {
    font-size: 1.5em;
    color: #fff;
    position: relative;
    margin-bottom: 1.5em;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: none;
    text-align: left;
}

.footer_grid_left h3 {
    margin: 0;
}

.footer_grid p {
    color: #8b8b96;
    line-height: 2em;
    margin-bottom: 2em;
}

.footer_grid_list li,
.address li {
    display: block;
    margin-bottom: 1em;
}

.footer_grid_list li i {
    color: #f05f40;
    padding-right: 1em;
}

.footer_grid_list li a {
    color: #8b8b96;
    text-decoration: none;
    line-height: 1.5em;
    letter-spacing: 1px;
    font-size: 15px;
}

.footer_grid_list li a:hover {
    color: #fff;
}

.footer_grid_list li:last-child,
.address li:last-child {
    margin-bottom: 0;
}

.address li {
    color: #8b8b96;
}

.address li i {
    margin-right: 1.5em;
    color: #fff;
    width: 32px;
    height: 32px;
    text-align: center;
    line-height: 30px;
    border: 1px solid #4b4b50;
}

.address li span {
    display: block;
    margin-left: 4em;
    letter-spacing: 1px;
    font-size: 0.9em;
}

.address li a {
    color: #a8aeb3;
    text-decoration: none;
}

.address li a:hover {
    color: #fff;
    text-decoration: none;
}

.footer_grids {
    margin: 3em 0 0 0;
}

.footer_grid_right input[type="email"] {
    outline: none;
    padding: 14px;
    background: #fff;
    font-size: 0.9em;
    color: #888;
    width: 70%;
    margin-right: 1em;
    border: none;
    letter-spacing: 2px;
}

.footer_grid_right input[type="email"]::-webkit-input-placeholder {
    color: #999!important;
}

.footer_grid_right input[type="submit"] {
    outline: none;
    padding: 12px 0;
    background: #f05f40;;
    font-size: 1em;
    color: #fff;
    width: 20%;
    border: none;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.footer_grid_right input[type="submit"]:hover {
    background: #f78e20;
}

ul.social-icons3.two li a {
    text-align: center;
}
.agileits-social ul{
    padding:0;
    margin:0;
}
.agileits-social ul li{
    display:inline-block;
}
.agileits-social ul li a {
    color: #333;
    text-align: center;
}
.agileits-social ul li a i.fa.fa-facebook{
    height: 40px;
    width: 40px;
    background: #ffffff;
    line-height: 40px;
    color: #000618;
    transition:0.5s all;
    -webkit-transition:0.5s all;
    -moz-transition:0.5s all;
    -o-transition:0.5s all;
    -ms-transition:0.5s all;
}
.agileits-social ul li a i.fa.fa-facebook:hover {
    height: 40px;
    width: 40px;
    line-height: 40px;
    background: #3b5998;
    color:#fff;
}
.agileits-social ul li a i.fa.fa-twitter{
    height: 40px;
    width: 40px;
     background: #ffffff;
    line-height: 40px;
    color: #000618;
    transition:0.5s all;
    -webkit-transition:0.5s all;
    -moz-transition:0.5s all;
    -o-transition:0.5s all;
    -ms-transition:0.5s all;
}
.agileits-social ul li a i.fa.fa-twitter:hover{
    height: 40px;
    width: 40px;
    line-height: 40px;
    background: #1da1f2;
    color:#fff;
}
.agileits-social ul li a i.fa.fa-instagram{
    height: 40px;
    width: 40px;
     background: #ffffff;
    line-height: 40px;
    color: #000618;
    transition:0.5s all;
    -webkit-transition:0.5s all;
    -moz-transition:0.5s all;
    -o-transition:0.5s all;
    -ms-transition:0.5s all;
}
.agileits-social ul li a i.fa.fa-instagram:hover{
    height: 40px;
    width: 40px;
    line-height: 40px;
    color:#fff;
    background: #f09433; 
    background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
    background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
    background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
}
.agileits-social ul li a i.fa.fa-youtube-play{
    height: 40px;
    width: 40px;
      background: #ffffff;
    line-height: 40px;
    color: #000618;
    transition:0.5s all;
    -webkit-transition:0.5s all;
    -moz-transition:0.5s all;
    -o-transition:0.5s all;
    -ms-transition:0.5s all;
}
.agileits-social ul li a i.fa.fa-youtube-play:hover{
    height: 40px;
    width: 40px;
    line-height: 40px;
    background: #ff0000;
    color:#fff;
}
.agileits-social ul li:nth-child(2){
    margin:0 .5em;
}
.agileits-social ul li:nth-child(3){
    margin:0 .5em 0 0;
}
.agile-copy {
    float: left;
}
.agileits-social {
    float: right;
}
/*-- //footer --*/

</style>
</head>
<body class="home page page-id-2">
    <?php include 'views/header-mc.php';?> 
  <!-- Wrapper -->
  <div id="wrapper" class="nav-top-mc">
    <section id="banner" class="style8" style="min-height: 35em, padding: 0;">
      <div class="inner">

          <header class="major" >
              <h2 style="text-shadow: none;">Discover Rwanda</h2>
          </header>
          <div class="content1">
              <p class="text-white">Rwanda is a green, mountainous landscape renowned for its Volcanoes National Park that encompasses the 4,507m-tall Mt. Karisimbi and 4 other forested volcanoes, as well as being home to mountain gorillas and golden monkeys. Adding to that the Nyungwe National Park, with ancient mountain rainforest that’s a habitat for chimpanzees and other primates, the vast Akagera National park and other iconic sites, your visit to the YouthConnekt Africa Summit will present unique opportunities to enrich your travel experience by exploring the Land of Thousand Hills.</p>
              <ul class="actions">
                  <li><a href="http://www.rwandatourism.com/" target="_blank" class="button" style="background-color: transparent;
border: 0;
border-radius: 0;
box-shadow: inset 0 0 0 2px #ffffff;
color: #ffffff;
cursor: pointer;
display: inline-block;
font-size: 0.8em;
font-weight: 600;
height: 3.5em;
letter-spacing: 0.25em;
line-height: 3.5em;
padding: 0 1.75em;
text-align: center;
text-decoration: none;
text-transform: uppercase;
white-space: nowrap;">Remarkable Rwanda</a></li>
              </ul>
          </div>
      </div>
    </section>

    <section id="two" class="spotlights" style="padding: 0;">
      <section style="padding: 0;">
          <a class="image">
              <img src="img/gorilla.jpg" alt="Gorilla Trekking" data-position="center center" />
          </a>
          <div class="content bg-green">
              <div class="inner">
                  <header class="major">
                      <h3>Gorilla Trekking</h3>
                  </header>
                  <p class="text-white">When visiting the ‘Land of a Thousand Hills’, one should not miss out on the magnificent opportunity to visit Rwanda’s Volcanoes National Park consisting of 125 sq km of mountain forest and home to the six Virunga Volcanoes and the world famous mountain gorillas. Protected within the park, the lushly forested slopes of the mountains form an appropriately dramatic natural setting for what is arguably the most poignant and memorable wildlife experience in the world: gorilla trekking.<br>
                  Nothing can prepare one for the impact of encountering a fully-grown silverback gorilla, up to three times the size of an average man, yet remarkably peaceable and tolerant of human visitors.</p>
                  <!--  <ul class="actions">
                      <li><a class="button">Learn more</a></li>
                  </ul>  -->
              </div>
          </div>
      </section>

      <section style="padding: 0;">
          <a class="image">
              <img src="img/kings.jpg" alt="King's Palace" data-position="top center" />
          </a>
          <div class="content bg-orange">
              <div class="inner">
                  <header class="major">
                      <h3>King's Palace</h3>
                  </header>
                  <p class="text-white">Based in Nyanza, 88 km south of Kigali City, this was the residence of King Mutara III Rudahigwa and the Royal Palace that was traditionally built. This Palace offers a detailed look into Rwandan traditional seat of their monarchy, it is an impressive museum, restored to its 19th century state and made entirely with traditional materials. <br>Recently the Long horned Traditional cows, known in Kinyarwanda as “Inyambo” were also introduced because of the fact that cows form an integral part of Rwandan Culture . On the neighboring hill of Mwima, one can also visit the burial grounds of King Mutara III and his wife Queen Rosalie Gicanda.</p>
              </div>
          </div>
      </section>

      <section style="padding: 0;">
          <a class="image">
              <img src="img/akagera.jpg" alt="Akagera National Park" data-position="25% 25%" />
          </a>
          <div class="content bg-yellow">
              <div class="inner">
                  <header class="major">
                      <h3>Akagera National Park</h3>
                  </header>
                  <p class="text-white">Akagera National Park has exceptional levels of biodiversity and forms the largest protected wetland in central Africa. It is home to a large variety of species restricted to the papyrus swamps such as the Sitatun sought-after Shoebill Stork.<br>Notable game includes elephant, buffalo, topi, zebra, waterbuck, roan antelope and eland. Other antelope are duiker, oribi, bohor reedbuck, klipspringer, bushbuck and impala. Of the primates, olive baboons, vervets and the secretive blue monkey are seen during the day, with bushbabies often seen on night drives.Larger predators including leopard, hyena, side- striped jackal and lion are also present in the park.</p>
              </div>
          </div>
      </section>
      <section style="padding: 0;">
        <a class="image">
            <img src="img/nyungwe.jpg" alt="Nyungwe National Park" data-position="25% 25%" />
        </a>
        <div class="content bg-blue">
            <div class="inner">
                <header class="major">
                    <h3>Nyungwe National Park</h3>
                </header>
                <p class="text-white">Nyungwe is one of the world’s most beautiful and pristine mountain rainforests. It’s believed to be one of Africa’s oldest forests, staying green even through the Ice Age, which explains its diversity. Home to habituated chimpanzees and 12 other primates species (including a 400-strong troop of habituated Ruwenzori Black &amp; White Colobus), it’s also a birder’s paradise with over 300 species, including 16 endemics, and is home to 75 different species of mammal.<br>Hiking or even biking the beautiful terrain, tracking the famous chimpanzees, experiencing the canopy walk, witnessing beautiful birds, relaxing by waterfalls are just a glimpse of activities that Nyungwe offers.</p>
            </div>
        </div>
      </section>
      <section style="padding: 0;">
        <a class="image">
            <img src="img/memorial.jpg" alt="Genocide Memorial" data-position="25% 25%" />
        </a>
        <div class="content bg-lightgreen">
            <div class="inner">
                <header class="major">
                    <h3>Genocide Memorial</h3>
                </header>
                <p class="text-white">In 2001, in collaboration with Rwanda’s National Commission for the Fight Against Genocide (CNLG), the Aegis Trust raised the $2 million required to build the Kigali Genocide Memorial. <br>The centre was officially opened on 7 April 2004 to mark the tenth commemoration of the 1994 genocide against the Tutsi in Rwanda. The memorial is the final resting place for up to 259,000 victims of the genocide and serves as a place where people can grieve for their lost loved ones and remember them. It also serves as a museum where both local and international visitors can learn about the history, implementation and consequences of the genocide.</p>
            </div>
        </div>
      </section>
    </section>

    <!-- <section id="three" class="bg-darkgreen-hover">
        <div class="inner">
            <div class="row">
                <div class="12u 12u$(medium)">
                    <h4 class=""><span class="light color-gray">CONTACT US</span></h4>
                    <ul class="inline-ul">
                        <li>YouthConnekt <br> Ministry of Youth &amp; ICT <br> <a href="terms">Terms &amp; Conditions</a></li>
                        <li>Pension Plaza, KN 3 Rd, <br>Kigali Rwanda <br> <a href="policy">Privacy Policy</a></li>
                        <li>Tel: +250 (0) 732 106106 <br>Email: info@youthconnektafrica.org </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Footer -->
    <footer id="footer">
      <?php include 'views/footer-colombe.php';?>
    </footer>
  </div>
  <!--wrapper-->           
</body>
</html>