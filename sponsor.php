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
              <img class="img img-responsive" src="<?=DN?>/img/sponsor-banner.jpg" style="width:100%"/>
          </div>
      </div>
  <section class="popular-deals section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <div class="w3_tittle second two"><h3 class="agile-tittle two gal">Sponsorship Opportunities</h3> 
              <div class="line-style second"><span class="second"></span></div>
            </div>
            <p class="text-default text-introduction">With over 4,000 delegates expected in the prestigious Kigali Convention Center, Transform Africa Summit 2018 will feature the widest & most exclusive range of sponsorship opportunities ever.
            <!-- <br /> -->
            <p class="text-default text-introduction">As a sponsor, we will ensure you interact with targeted participants who will include government officials, policy influencers & makers, senior executives of global and African ICT companies, heads of international and regional organizations, leading innovators and business influencers from around the world.</p>
            <!-- <br /> -->
            <p class="text-default text-introduction">The summit will offer your brand the right platform to showcase its innovation, culture and most importantly, its relevance in the digital transformation of Africa.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- offer 01 -->
        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="product-item-mc bg-light">
            <div class="card border-green">
              <div class="card-body">
                  <h4 class="card-title border-green-color">Transform Africa Summit Lead Sponsor</h4>
                  <div class="border-green-bottom"></div>
                  <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                       <a target="_blank" href="<?=DN?>/sponsor-docs/TAS2018_Sponsorship_Pack(LeadSponsor).pdf" target="_blank" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Info Pack</a>
                    </li>
                    <!-- <li class="list-inline-item">
                      <a href="tel:+250732301104"><i class="fa fa-phone"></i> Call: +250 (0) 732301104</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="tel:+250734016850"><i class="fa fa-phone"></i>+250 (0) 734016850</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="mailto:sponsor@smartafrica.org"><i class="fa fa-envelope"></i> Email: sponsor@smartafrica.org</a>
                    </li> -->
                  </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="product-item-mc bg-light">
            <div class="card border-orange">
              <div class="card-body">
                  <h4 class="card-title border-orange-color">Transform Africa Economic Forum</h4>
                  <div class="border-orange-bottom"></div>
                  <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                       <a href="#sponser2" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Info Pack</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div> -->

        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="product-item-mc bg-light">
            <div class="card border-blue">
              <div class="card-body">
                  <h4 class="card-title border-blue-color">Smart Africa Women’s Summit</h4>
                  <div class="border-blue-bottom"></div>
                  <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                       <a target="_blank" href="<?=DN?>/sponsor-docs/TAS2018_Sponsorship_Pack(SmartAfricaWomensSummitSponsor).pdf" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Info Pack</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="product-item-mc bg-light">
            <div class="card border-yellow">
              <div class="card-body">
                  <h4 class="card-title border-yellow-color">Blockchain Hub</h4>
                  <div class="border-yellow-bottom"></div>
                  <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                       <a target="_blank" href="<?=DN?>/sponsor-docs/TAS2018_Sponsorship_Pack(BlockChainHubSponsor).pdf" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Info Pack</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="product-item-mc bg-light">
            <div class="card border-red-orange">
              <div class="card-body">
                  <h4 class="card-title border-red-orange-color">Digital Health Hub</h4>
                  <div class="border-red-orange-bottom"></div>
                  <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                       <a target="_blank" href="<?=DN?>/sponsor-docs/TAS2018_Sponsorship_Pack(DigitalHealthHubSponsor).pdf" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Info Pack</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="product-item-mc bg-light">
            <div class="card border-light-blue">
              <div class="card-body">
                  <h4 class="card-title border-light-blue-color">The 4th Industrial Revolution Hub</h4>
                  <div class="border-light-blue-bottom"></div>
                  <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                       <a target="_blank" href="<?=DN?>/sponsor-docs/TAS2018_Sponsorship_Pack(4thIndustrialRevolutionHubSponsor).pdf" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Info Pack</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="product-item-mc bg-light">
            <div class="card border-green">
              <div class="card-body">
                  <h4 class="card-title border-green-color">Partners Spotlight Sessions</h4>
                  <div class="border-green-bottom"></div>
                  <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                       <a target="_blank" href="<?=DN?>/sponsor-docs/TAS2018_Sponsorship_Pack(PartnerSpotlightSessionSponsor).pdf" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Info Pack</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="product-item-mc bg-light">
            <div class="card border-yellow">
              <div class="card-body">
                  <h4 class="card-title border-yellow-color">The Pavilion</h4>
                  <div class="border-yellow-bottom"></div>
                  <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                       <a href="#sponser8" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Info Pack</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div> -->

        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="product-item-mc bg-light">
            <div class="card border-orange">
              <div class="card-body">
                  <h4 class="card-title border-orange-color">Ms Geek Africa</h4>
                  <div class="border-orange-bottom"></div>
                  <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                       <a target="_blank" href="<?=DN?>/sponsor-docs/TAS2018_Sponsorship_Pack(MSGeekAfricaSponsor).pdf" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Info Pack</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="product-item-mc bg-light">
            <div class="card border-blue">
              <div class="card-body">
                  <h4 class="card-title border-blue-color">Face the Gorillas</h4>
                  <div class="border-blue-bottom"></div>
                  <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                       <a target="_blank" href="<?=DN?>/sponsor-docs/TAS2018_Sponsorship_Pack(FaceTheGorillasSponsor).pdf" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Info Pack</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="product-item-mc bg-light">
            <div class="card border-yellow">
              <div class="card-body">
                  <h4 class="card-title border-yellow-color">The Cultural Soiree</h4>
                  <div class="border-yellow-bottom"></div>
                  <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                       <a target="_blank" href="<?=DN?>/sponsor-docs/TAS2018_Sponsorship_Pack(CulturalSoireeSponsor).pdf" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Info Pack</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="product-item-mc bg-light">
            <div class="card border-red-orange">
              <div class="card-body">
                  <h4 class="card-title border-red-orange-color">Courtyard Food Café</h4>
                  <div class="border-red-orange-bottom"></div>
                  <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                       <a target="_blank" href="<?=DN?>/sponsor-docs/TAS2018_Sponsorship_Pack(CourtyardFoodCaféSponsor).pdf" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Info Pack</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="product-item-mc bg-light">
            <div class="card border-light-blue">
              <div class="card-body">
                  <h4 class="card-title border-light-blue-color">Transport Partners</h4>
                  <div class="border-light-blue-bottom"></div>
                  <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                       <a target="_blank" href="<?=DN?>/sponsor-docs/TAS2018_Sponsorship_Pack(TransportPartnerSponsor).pdf" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Info Pack</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="product-item-mc bg-light">
            <div class="card border-green">
              <div class="card-body">
                  <h4 class="card-title border-green-color">Media Partnership</h4>
                  <div class="border-green-bottom"></div>
                  <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                       <a target="_blank" href="<?=DN?>/sponsor-docs/TAS2018_Sponsorship_Pack(MediaPartnerSponsor).pdf" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Info Pack</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="product-item-mc bg-light">
            <div class="card border-orange">
              <div class="card-body">
                  <h4 class="card-title border-red-orange-color">Transform Africa Summit Golf Tournament </h4>
                  <div class="border-orange-bottom"></div>
                  <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                       <a target="_blank" href="<?=DN?>/sponsor-docs/TAS2018_Sponsorship_Pack(GolfTournamentSponsor).pdf" class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Info Pack</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="wrapper-portfolio text-center style3 container-fluid special bg-gray" style="padding: 0 0 2em 0;">
    <div class="container">
        <div class="w3_tittle second two"><h3 class="agile-tittle two gal">Contact the sponsorship team</h3> 
                <div class="line-style second"><span class="second"></span></div>
            </div>
    </div>
    <div class="container">
      <!-- <div class="col-md-1"></div> -->
      <div class="col-md-12">
        <ul class="contact_info">
          <li class="col-md-4"><span class="fa fa-phone" aria-hidden="true"></span></span><a href="tel:+250732301104">+250 (0) 732301104</a></li>
          <li class="col-md-4"><span class="fa fa-phone" aria-hidden="true"></span></span><a href="tel:+250734016850">+250 (0) 734016850</a></li>
          <li class="col-md-4"><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:sponsor@smartafrica.org">sponsor@smartafrica.org</a></li>
        </ul>
      </div>
      <!-- <div class="col-md-1"></div> -->
    </div>
  </section>

  <!-- Sponsors Exhibition -->
  <div class="modal about-modal w3-agileits fade" id="sponser1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Transform Africa Summit Lead Sponsor</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>As a lead sponsor, your brand will be aligned with the digital transformation of Africa. Your company will have an unrivalled opportunity to position its services and products as solutions to the ICT needs for government institutions & private sector businesses.
          <p>The lead sponsor will be able to directly address thousands of Africa digital transformation champions from the main plenary at the opening session.</p>
          <p>Your company will be the first to position its services and products as solutions to the ICT needs for government institutions & private sector business.</p>
          <p>With a speaker slot included, you will have the opportunity to set the narrative that your brand has taken on digital transformation. </p>
          <p>For the first time ever, the Lead Sponsor will have the privilege of hosting the Gala Dinner at no additional cost! The Gala dinner will take place on the second day of the Summit hosting Government Leaders, policy makers, business leaders and influencers. 
          Several other branding, promotional & networking opportunities will allow your company to network and showcase its company culture & ambition.</p>
        </div> 
      </div>
    </div>
  </div>

   <div class="modal about-modal w3-agileits fade" id="sponser2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Transform Africa Economic Forum</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>The Transform Africa Economic Forum is a one day high level platform for discussing the disruptive but also the enabling and strategic role of ICT for the rapid transformation of Africa by Smart Africa, the Government of Rwanda, Econet Wireless, Afro Champions and UNDP.</p>
          <p>Ministers of Finance, ICT and Central Bank governors as well as Telecom Regulators will share their experiences, investment priorities and regulatory strategies while banks, telecom operators and international tech companies will present and rally support for their innovations in this space.</p>
          <p>Becoming a sponsor for the Transform Africa Economic Forum will present your organization with a unique opportunity to engage & create impactful relationships with Africa’s top ICT influencers, policy makers & regulators.</p>
          <p>The forum is also part of the platinum delegate program.</p>
</p>
        </div> 
      </div>
    </div>
  </div>

   <div class="modal about-modal w3-agileits fade" id="sponser3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Smart Africa Women’s Summit</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>The Smart Africa Women’s Summit will bring to the forefront the strategic interventions that are being pursued to empower women and girls to participate in the digital economy. Reaching beyond those active within ICT, the summit will look to highlight programs that women & girls can participate in to hardness opportunities that are possible within a digitized economy whilst encouraging learning to improve their skill set.</p>
          <p>Becoming a sponsor for the Smart Africa Women’s Summit will place your organisation at the forefront of championing Women & Girls in ICT. You will have the opportunity to showcase your programs, your capabilities, your experience and more importantly, your relevance to advancing the empowerment of women & girls in ICT.</p> 
          <p>There are two levels of sponsorship – Champion Sponsor & Advocate Sponsor.</p>
        </div> 
      </div>
    </div>
  </div>

   <div class="modal about-modal w3-agileits fade" id="sponser4" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Blockchain Hub</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>Within blockchain is a disruptive technology with a wide range of applications that is set to impact every industry across the globe and form the building blocks for a new society. </p>
          <p>The Blockchain Hub will form the basis to which we will create the roadmap to adopting Blockchain technology in Africa through the Smart Africa Secretariat.</p>
          <p>Becoming a sponsor for the this Hub will place your company at the forefront of a technology that is predicted to disrupt every industry in the near future. You will have the opportunity to showcase your services, your capabilities, your experience and more importantly, your relevance to Africa’s adoption of blockchain technology.</p> 
          <p>There are two levels of sponsorship – Lead Sponsor & Associate Sponsor.</p>
        </div> 
      </div>
    </div>
  </div>

   <div class="modal about-modal w3-agileits fade" id="sponser5" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Digital Health Hub</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>Digital Health is at the forefront of the healthcare industry. Technology driven innovation is already disrupting healthcare in a number of sectors across the globe.</p>
          <p>The Digital Health Hub will form the basis to which we will create the roadmap to digital healthcare in Africa through the Smart Africa Secretariat.</p>  
          <p>Place your company at the forefront of digital healthcare in Africa’s most influential, action oriented & largest ICT summit. You will have the opportunity to showcase your services, your capabilities, your experience and more importantly, your relevance to Africa’s digital health revolution.</p>
          <p>There are two levels of sponsorship – Lead Sponsor & Associate Sponsor.</p>
        </div> 
      </div>
    </div>
  </div>

   <div class="modal about-modal w3-agileits fade" id="sponser6" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>The 4th Industrial Revolution Hub</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>The 4<sup>th</sup> Industrial Revolution Hub activities will continue to build on the Smart Africa Secretariat initiatives that are underway as well as introduce new strategies for debate & adoption that Africa needs to adopt to achieve inclusive growth in Africa is to pursue industrialization strategies that can harness the opportunities and minimize the threats of the fourth industrial revolution.</p>
          <p>Sponsoring the 4th Industrial Revolution Hub will place your company at the forefront of championing Africa’s digital transformation. You will have the opportunity to showcase your services, your capabilities, your experience and more importantly, your relevance to Africa’s digital transformation.</p>
          <p>There are two levels of sponsorship – Lead Sponsor & Associate Sponsor.</p>
        </div> 
      </div>
    </div>
  </div>

   <div class="modal about-modal w3-agileits fade" id="sponser7" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Partners Spotlight Sessions</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>Partner spotlight sessions provide a platform to deliver custom thought sessions and demonstrations of your company’s products & services open to delegates or your invited guests. Firmly associate your brand with Africa’s digital transformation journey and work with the creative team at Smart Africa to craft & execute memorable & impactful sessions.</p>
          <p>With the theme ‘Accelerating Africa’s Single Digital Market’, a customized session with give your company the opportunity to define is playing space within this topic and allow you </p> 
          <p>The session hall is equipped with a sound system, stage lighting & translation booths in English & French. Your session will also be streamed live on Smart Africa online assets. </p>
        </div> 
      </div>
    </div>
  </div>

  <div class="modal about-modal w3-agileits fade" id="sponser8" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>The Pavilion</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>The Pavilion is an unmatched premium exhibition and innovation space that allows countries, economic groupings, sponsors and collective organisations to showcase their innovations and technologies in a customized environment. </p>
          <p>The Pavilion offers large 7m x 7m stands situated at the entrance (and exit) of the conference center. These have enough space for the exhibitors to house a large exhibition pods, seating / meeting areas and even small meeting rooms. This means that the spaces offer multiple uses and enhanced interaction with the delegates.</p> 
        </div> 
      </div>
    </div>
  </div>

   <div class="modal about-modal w3-agileits fade" id="sponser9" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Ms Geek Africa</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>Ms. Geek is a competition is designed to inspire African girls from Africa to be part of solving the continent’s challenges using technology, and to encourage them to choose a career in the STEM (Science, Technology, Engineering and Math) fields. The competition will run for a week with the final stages taking place during the women’s Summit.</p>
          <p>Being a sponsor of Ms Geek Africa will allow your company to set the narrative that its brand have taken in promoting women & girls in ICT to a selected audience attending the Summit.</p>
        </div> 
      </div>
    </div>
  </div>

   <div class="modal about-modal w3-agileits fade" id="sponser10" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Face the Gorillas &amp; Start up Lane</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>Face the Gorillas is a competition that provides a unique opportunity to young aspiring African entrepreneurs and young innovators to make a 5 minute pitch to a panel of renowned business moguls in hope of accessing capital up to USD200, 000 partnerships or mentorship in front of a live audience.</p>
          <p>Known for its success in last year’s Summit, Face the Gorillas returns to the summit i with focus on budding entrepreneurs within the Smart Africa Members States. Each will have 20 minutes to make a deal with one or more panelist.</p>
          <p>Start up lane is a dedicated central exhibition space exclusive to start-up companies within the ICT Ecosystems, the summit aims to bring a spotlight to the innovative minds working to have their impact in Africa’s digital transformation. It will feature no less than 15-vetted start-up companies with equal balance between the genders.</p>
          <p>Your company will have an unparalleled opportunity to position itself as a committed supporter in developing Africa’s burgeoning ICT industry from the grassroots. Through branding, presentations & speaking opportunities, your organization will align itself firmly as not only a thought leader in the advancement of the ICT industry, but also as a committed contributor through your own initiative that you will communicate throughout the conference.</p>
        </div> 
      </div>
    </div>
  </div>

   <div class="modal about-modal w3-agileits fade" id="sponser11" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>The Cultural Soiree</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>Be a part of the first and the largest social event in the summit program. Align your brand with the digital transformation of Africa from the start to allow for increased networking & meeting opportunities.</p>
          <p>The Sponsor of Cultural soiree will also be able to layout a detailed guide & blueprint for delegates to interact with your brand throughout the summit.<br />
          Several other branding, promotional & networking opportunities will allow your company to network and showcase its company culture &ambition including exhibition space, venue branding and more.</p>

        </div> 
      </div>
    </div>
  </div>

   <div class="modal about-modal w3-agileits fade" id="sponser12" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Courtyard Food Café</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>This partially tented area is certain to be busy as delegates go out to relax and soak in the tropical weather enjoyed in Kigali. Charging zones & information points will be distributed throughout.<br />
          Several other branding, promotional & networking opportunities will allow your company to network and showcase its company culture & ambition through exhibition space, venue branding and more.</p>
        </div> 
      </div>
    </div>
  </div>

   <div class="modal about-modal w3-agileits fade" id="sponser13" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Transport Partners</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>The summit will be supported with a network of VIP vehicles for government dignitaries, business leaders & influencers who are guest of Smart Africa and over 50 buses exclusively available to summit delegates equipped with 4G WIFI, refreshments and snacks. Promote your brand directly to policy makers & industry influencers</p>
          <p>Several other branding, promotional & networking opportunities will allow your company to position its product and services for delegates through exhibition space, venue branding and more.</p>
        </div> 
      </div>
    </div>
  </div>

  <div class="modal about-modal w3-agileits fade" id="sponser14" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Media Partnership</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>Transform Africa Summit is usually the most high profile Africa ICT focused event in Africa. It brings together Heads of State, Ministers, CEOs, Entrepreneurs and talented youth in the ICT space. This is a great opportunity to expose your media organization to African leaders and other influencers from all corners of the world.</p>
        </div> 
      </div>
    </div>
  </div>

  <div class="modal about-modal w3-agileits fade" id="sponser15" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Transform Africa Summit Golf Tournament</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>Golf, the world over, is known as the business sport. This is where captains’ of industry and leading entrepreneurs make business deals.</p>
          <p>For the first time ever, Transform Africa Summit 2018 provides the opportunity to one luck sponsor to host a golf tournament and provide friendly an environment to relax and conduct business.</p>
        </div> 
      </div>
    </div>
  </div>
  <!-- //modal1 -->  

  <section class="contact-w3ls">
    <div class="container">
      <div class="w3_tittle second two"><h3 class="agile-tittle two gal">Exhibit</h3> 
        <div class="line-style second"><span class="second"></span></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
            <div class="latest-post waves-effect">
                <!-- <img src="img/booth1.jpg" class="img-responsive" alt=""> -->
                <h4 style="padding: 0; color: #ed552b;">Single 9m<sup>2</sup> Booth</h4>
                <span>$6,500 | Rwf 5,690,000 | Plus 18% VAT</span>
                <p class="text-default">This 3m x 3m shell scheme is ideal for demos and product displays.
                <br /><br />
                As an exhibitor of the standard booth, you will benefit from complimentary passes as follows:
                <br />- 2 x Silver passes
                <br />- 2 x Gold passes
                <br /><br />
                Each booth has a complimentary shell scheme equipped with one round table, one counter, two foldable chairs, one brochure stand, one electric socker, two spotlights & a trash bin.</p>
                <!-- <a href="#myModal1" class="btn btn-primary" data-toggle="modal">Read More</a> -->
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="latest-post waves-effect">
                <!-- <img src="img/booth2.jpg" class="img-responsive" alt=""> -->
                <h4 style="padding: 0; color: #ed552b;">Double 18m<sup>2</sup> Booth</h4>
                <span>$12,000 | Rwf 10,500,000 | Plus 18% VAT</span>
                <p class="text-default">A larger space a more immersive experience for your visitors.
                  <br /><br />
                  As an exhibitor of the double booth, you benefit from complimentary passes as follows:
                  <br />- 4 x Silver passes
                  <br />- 2 x Gold passes
                  <br /><br />
                  Each booth has a complimentary shell scheme equipped with two round tables, two counters, four foldable chairs, two brochure stands, two electric socker, four spotlights & two trash bins.</p>
                <!-- <a href="#myModal2" class="btn btn-primary" data-toggle="modal">Read More</a> -->
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="latest-post waves-effect">
                <!-- <img src="img/booth3.jpg" class="img-responsive" alt=""> -->
                <h4 style="padding: 0; color: #ed552b;">Custom built stand</h4>
                <span>Pricing available on request</span>
                <p class="text-default">Exhibitors are welcome to bring their own custom built stands for the purchased space. Custom designs should follow the construction guide provided by the exhibition team. Designs need to be submitted for approval by the exhibition team by 10 April 2018.</p>
                <h5 style="padding: 0; color: #ed552b; margin-bottom: 0;">KEY DATES</h5>
                <p class="text-default" style="font-size: 13px; margin: 0;"><i class="fa fa-long-arrow-right"></i> Custom built stand design approvals deadline: <span>10 Apr 2018</span><br />
                <i class="fa fa-long-arrow-right"></i> Build up start date: <span>3 May 2018</span><br />
                <i class="fa fa-long-arrow-right"></i> Deadline to complete stand & move in materials: <span>6 May 2018</span></p>
                <!-- <a href="#myModal3" class="btn btn-primary" data-toggle="modal">Read More</a> -->
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-default text-introduction">To book a stand, please call +250 (0) 7323106106 or email sponsor@smartafrica.org</p>
        </div>
      </div>
    </div>
  </section>

    
  <!-- modal1 -->
  <div class="modal about-modal w3-agileits fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Single 9m<sup>2</sup> Booth</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <span>$6,500 | Rwf 5,690,000 | Plus 18% VAT</span>
          <p>This 3m x 3m shell scheme is ideal for demos and product displays for your company.
          <br /><br />
          As an exhibitor of the standard booth, you will benefit from complimentary passes as follows:
          <br />- 2 x Silver passes
          <br />- 2 x Gold passes
          <br /><br />
          Each booth has a complimentary shell scheme equipped with one round table, one counter, two foldable chairs, one brochure stand, one electric socker, two spotlights & a trash bin.</p>
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
          <h4>Double 18m<sup>2</sup> Booth</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <span>$12,000 | Rwf 10,500,000 | Plus 18% VAT</span>
          <p>Display your company’s ambition & culture with a customisable space. This space is ideal for demos, meetings rooms, informal social spaces and more.
          <br /><br />
          As an exhibitor of the double booth, you benefit from complimentary passes as follows:
          <br />- 4 x Silver passes
          <br />- 2 x Gold passes
          <br /><br />
          Each booth has a complimentary shell scheme equipped with two round tables, two counters, four foldable chairs, two brochure stands, two electric socker, four spotlights & two trash bins.</p>
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
          <h4>Custom built stand</h4>
          <div class="border-blue-bottom"></div>
        </div> 
        <div class="modal-body">
          <p>Exhibitors are welcome to bring their own custom built stands for the purchased space. Custom designs should follow the construction guide provided by the exhibition team. Designs need to be submitted for approval by the exhibition team by 10 April 2018.</p>
          <h4>KEY DATES</h4>
          <p><i class="fa fa-long-arrow-right"></i> Custom built stand design approvals deadline: <span>10 Apr 2018</span></p>
          <p><i class="fa fa-long-arrow-right"></i> Build up start date: <span>3 May 2018</span></p>
          <p><i class="fa fa-long-arrow-right"></i> Deadline to complete stand & move in materials: <span>6 May 2018</span></p>
        </div> 
      </div>
    </div>
  </div>
  <!-- //modal3 -->  

  <section class="wrapper-portfolio text-center style3 container-fluid special" style="background-color: #ffffff;">
    <div class="container">
        <div class="w3_tittle second two"><h3 class="agile-tittle two gal">Previous sponsors 2017</h3> 
                <div class="line-style second"><span class="second"></span></div>
            </div>
    </div>
    <div class="container">
      <ul class="list-inline row"> 
          <li class="col-sm-4 col-xs-12">
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/inmarsat.jpg" class="img-responsive"></div>
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/carnegie.jpg" class="img-responsive"></div>
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/mitec.jpg" class="img-responsive"></div>
          </li>
          <li class="col-sm-4 col-xs-12">
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/intel.jpg" class="img-responsive"></div>
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/ADB.jpg" class="img-responsive"></div>
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/rura.jpg" class="img-responsive"></div>
          </li>
          <li class="col-sm-4 col-xs-12">
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/imbuto.jpg" class="img-responsive"></div>
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/hancom.jpg" class="img-responsive"></div>
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/jica.jpg" class="img-responsive"></div>
          </li>
      </ul> 
      <ul class="list-inline row"> 
          <li class="col-sm-4 col-xs-12">
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/gsm.jpg" class="img-responsive"></div>
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/global.jpg" class="img-responsive"></div>
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/kg-city.jpg" class="img-responsive"></div>
          </li>
          <li class="col-sm-4 col-xs-12">
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/broadband.jpg" class="img-responsive"></div>
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/yahsat.jpg" class="img-responsive"></div>
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/nokia.jpg" class="img-responsive"></div>
          </li>
          <li class="col-sm-4 col-xs-12">
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/microsoft.jpg" class="img-responsive"></div>
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/kommlabs.jpg" class="img-responsive"></div>
              <div class="col-sm-4 col-xs-4"><img src="<?=DN?>/img/federal.jpg" class="img-responsive"></div>
          </li>
      </ul> 
    </div>
  </section>

  <!-- footer -->
      <?php include 'views/footer-colombe.php';?>
      <!-- //footer -->
</div>
  <!--wrapper--> 
          
</body>
</html>