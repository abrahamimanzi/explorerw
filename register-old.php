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
    <?php include 'views/header-common1.php';?>

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

    <div id="wrapper" class="home">

        <div class="container-fluid">
            <div class="row">
                <img class="img img-responsive" src="<?=DN?>/img/register.png" style="width:100%"/>
            </div>
        </div>
        <section class="section-main bg-f0">
            <div class="container-fluid">
            <div class="container">
              <?php 
                   if (!isset($_GET['categ']) || empty($_GET['categ'])) {
                 ?>
                <div class="register_layout" id="other" >
                    <div class="text-center">   
                        <h2 class="title text-center text-uppercase">Get the pass that suits you</h2>
                    </div>
                    <!--    RIGHT-->
                    <div class="col-sm-12">
                        <p class="text-center text-default">Join over 4,000 visitors at the Transform Africa Summit and network with like minded industry players transforming the ICT sector in Africa. Engage with innovators, pioneers &amp; leaders from both the public &amp; private sector not only from Africa, but across the globe.</p>
                        <hr class="hr-book-layout" />
                        <div class="row">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="container">
                                        <!-- <hr class="hr-clear" style="margin-right: 30px;" /> -->
                                        <!-- <h3 class="title text-left text-default">Other Participants</h3> -->
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="thumbnail tile tile-medium tile-teal pointer">
                                            <a href="<?=DN?>/register-pass" >
                                                <h4 class="text-left text-white h4-packs text-uppercase"> Delegate Pass Registration<br> 
                                                <small>Private sector, Consultants, Analysts, Academia, Civil Society, Non governmental organisations (NGO), Development partners</small></h4>
                                                <span class="pull-right"><span class="lnr lnr-arrow-right"></span></span>
                                            </a>
                                        </div>
                                        <div class="thumbnail tile tile-medium tile-teal pointer">
                                            <a href="<?=DN?>/register/government" >
                                                <h4 class="text-left text-white h4-packs text-uppercase"> Government &amp; Diplomatic Officials registration</h4>
                                                <span class="pull-right"><span class="lnr lnr-arrow-right"></span></span>
                                            </a>
                                        </div>
                                        <div class="thumbnail tile tile-medium tile-teal pointer">
                                            <a href="<?=DN?>/register/media" >
                                                <h4 class="text-left text-white h4-packs text-uppercase"> Media Registration </h4>
                                                <span class="pull-right"><span class="lnr lnr-arrow-right"></span></span>
                                            </a>
                                        </div>
                                        <div class="thumbnail tile tile-medium tile-teal pointer">
                                            <a href="<?=DN?>/register/visitor">
                                                <h4 class="text-left text-white h4-packs text-uppercase"> Students &amp; incubation hub tenant passes</h4>
                                                <span class="pull-right"><span class="lnr lnr-arrow-right"></span></span>
                                            </a>
                                        </div>
                                        <div class="thumbnail tile tile-medium tile-teal pointer">
                                            <a href="<?=DN?>/register/golf">
                                                <h4 class="text-left text-white h4-packs text-uppercase"> The golf tournament Registration</h4>
                                                <span class="pull-right"><span class="lnr lnr-arrow-right"></span></span>
                                            </a>
                                        </div>
                                        <div class="thumbnail tile tile-medium tile-teal pointer" style="background:#89b3ab;">
                                            <a href="<?=DN?>/register/group">
                                                <h4 class="text-left text-white h4-packs text-uppercase"> Group booking<br>
                                                    <small>Click here if you're booking for more than one person.</small>
                                                </h4>
                                                <span class="pull-right"><span class="lnr lnr-arrow-right"></span></span>
                                            </a>
                                        </div>
                                        <hr>
                                        <script>
                                            $(".tile-teal").click(function() {
                                              window.location = $(this).find("a").attr("href"); 
                                              return false;
                                            });
                                        </script>
                                        <style>
                                            .pointer {
                                              cursor: pointer!important;
                                            }
                                        </style>
                                    </div>
                                    <!-- <div class="col-md-4"> -->

                                    <!-- <div class="col-md-12">
                                    <div class="panel panel-default panel-platinum1">
                                      <div class="panel-body">
                                      <h4 class="text-left text-default1 h4-packs text-uppercase">Government Officials</h4>
                                      <hr class="hr-packs-gold">
                                      <p class="text-default">Government officials should use normal diplomatic channels to register </p>
                                          <a class="btn-gold pull-right" href="#" style="width: 0; background: transparent; border: 0 none;">&nbsp;</a>
                                      <div class="clearfix"></div><br>
                                      </div>
                                    </div>
                                    </div> -->


                                    <!-- <div class="col-md-12">
                                    <div class="panel panel-default panel-platinum1">
                                      <div class="panel-body">
                                      <h4 class="text-left text-default1 h4-packs text-uppercase">Media</h4>
                                      <hr class="hr-packs-gold">
                                      <p class="text-default">If you are a member of the media and would like to attend the summit</p><br>
                                      <div class="clearfix"></div>
                                      <a class="btn-gold pull-right" href="<?=DN?>/register/media"><span class="lnr lnr-chevron-right"></span>Register</a>
                                      </div>
                                    </div>
                                    </div> -->


                                    <!-- <div class="col-md-12">
                                    <div class="panel panel-platinum1">
                                      <div class="panel-body">
                                      <h4 class="text-left text-default1 h4-packs text-uppercase">Visitors Exhibition Pass</h4>
                                      <hr class="hr-packs-gold">
                                      <p class="text-default">This free pass allows you access to the Smart Africa Exhibition only</p><br>
                                      <div class="clearfix"></div>
                                      <a class="btn-gold pull-right" href="<?=DN?>/register/visitor"><span class="lnr lnr-chevron-right"></span>Register</a>
                                      </div>
                                    </div>
                                    </div> -->

                                    <!-- </div> -->
                                    <hr>
                                </div>

                                <!-- <hr>
                                <div class="col-sm-6">
                                  <p class="text-uppercase"><strong><span class="lnr lnr-arrow-right"></span> To apply as speaker</strong> <a href="<?=DN?>/register/speaker" class="btn-link"><span class="lnr lnr-chevron-right"></span> Click here</a></p>
                                </div> -->

                            </div>
                        </div>
                    </div>
                    <!--    LEFT-->
                    <div class="col-sm-12">
<!--
                    <hr class="hr-clear" />
                    <h3 class="title text-left text-default">Other Participants</h3>
                      <div class="clearfix"></div>
-->
<!--
                      <div class="row" style="padding: 0; margin: 0;">
                        <div class="col-sm-3 notes">
                          <span>Government Officials:</span>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-left text-default" style="padding: 10px 0;">Government officials should use normal diplomatic channels to register for the summit.</p>
                        </div>
                      </div>
                      <div class="row" style="padding: 0; margin: 0;">
                        <div class="col-sm-3 notes">
                          <span>Media:&nbsp;</span>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-left text-default" style="padding: 10px 0;">If you are a member of the media and would like to attend the summit, <strong><a href="<?=DN?>/register/media">Click here to apply</a></strong></p>
                        </div>
                      </div>
-->
                    <div class="row" style="padding: 0; margin: 0;">
<!--
                        <div class="col-sm-3 notes">
                          <span>Visitors Exhibition Pass:</span>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-left text-default" style="padding: 10px 0;"> This free pass allows you access to the Smart Africa Exhibition only. <strong><a href="<?=DN?>/register/visitor">Click here to apply</a></strong></p>
                        </div><div class="clearfix"></div><br>
-->
<!--                        <p class=""><span><strong>Free exhibition passes are available to specific segments</strong> including students, academics, ICT related incubation hub tenants amongst others. Passes are given at the organisers discretion and are dependent on availability.</span></p>-->
                    </div>
                    <br />
                    <div class="container">
                    <div class="row">
                    <h4 class="title text-left text-uppercase" style="font-family:'Gotham Medium', sans-serif; ">
                      Registration &amp; Accreditation Deadline
                    </h4>
                    </div>
                      <hr class="hr-book-layout" style="margin-left: -15px; margin-right: 45px;" />
                    <div class="col-sm-6">
                      <h3 class="title text-left text-default">Local Delegates</h3>
                      <div class="clearfix"></div>
                        <ul>
                          <li>Registration opens: &nbsp;&nbsp;&nbsp; 12th Feb 2018</li>
                          <li>Registration closes: &nbsp;&nbsp;&nbsp; 1st May 2018</li>
                          <li>Accreditation opens: &nbsp; 1st May 2018</li>
                          <li>Accreditation closes: &nbsp; 5th May 2018</li>
                        </ul>
                      <br />
                    </div>
                    <div class="col-sm-6">
                      <h3 class="title text-left text-default">International Delegates</h3>
                      <div class="clearfix"></div>
                        <ul>
                          <li>Registration opens: &nbsp;&nbsp;&nbsp; 12th Feb 2018</li>
                          <li>Registration closes: &nbsp;&nbsp;&nbsp; 1st May 2018</li>
                          <li>Accreditation opens: &nbsp; 1st May 2018</li>
                          <li>Accreditation closes: &nbsp; 9th May 2018</li>
                        </ul>
                      <br />
                    </div>
                    </div>
                  </div>
                <div class="container">
                  <h4 class="title text-left text-uppercase" style="font-family:'Gotham Medium', sans-serif; ">Gala Dinner Supplementary Tickets</h4>
                  <p>Gold or Platinum delegates, Exhibitors &amp; Sponsors can purchase supplementary gala dinner tickets at $200 | RWF 170,000 once registration is complete. Instructions on how to do so will be emailed once registration is complete and attendance is confirmed.</p>
                </div>
                </div>
                <p class="note" style="margin: 0 15px;"><span class="lnr lnr-paperclip"></span> You will be notified by <strong>email</strong> where to collect your badge when accreditation opens</p>
                <?php  }?>
                
                <!--  SILVER PACK-->
                <?php 
                   if (isset($_GET['categ']) && !empty($_GET['categ'])) {
                       
                               $categ = $_GET['categ'];
                       switch($_GET['categ']){
                           case 'silver':
                               $unit_price = '200';
                               break;
                           case 'gold':
                               $unit_price = '500';
                               break;
                           case 'platinum':
                               $unit_price = '750';
                               break;
                       }
                 ?>
                <div class="register_layout" id="<?=$categ?>">
                  <a class="a-link pull-right" href="./register"><span class="lnr lnr-chevron-left"></span> Go Back</a>
                  <div class="text-center">   
                      <h2 class="title text-center text-uppercase">Registration Process
                       <span class="lnr lnr-chevron-right"></span> 
                       <span class="light"><small>Your chosen pack</small></span>
                     </h2>
                   <hr class="hr-clear">
                  </div>
                  <div class="col-sm-12">
                    <h3 class="title text-left text-success">Your booking Details</h3>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Choosen Package</th>
                          <th>Cost</th>
                          <th>No. of Tickets</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="text-transform: uppercase"> <?=$categ?></td>
                          <td>$ <?=$unit_price?></td>
                          <td>
                                <select name='tickets' type="text" id='number2' >
                                  <?php
                                    for ($x=1; $x<=12; $x++) {
                                          if($x==$_POST['tickets']){
                                            $selected = "selected";
                                              }else{
                                              $selected = "";
                                            }
                                      echo '<option value="' . $x . '"'.$selected .'>' . $x . '</option>' . PHP_EOL;
                                      }
                                      $tickets = (int)$_POST['tickets'];
                                    ?>
                              </select>
                          </td>
                         <td style="width: 100px"><span id="number3">$ <?=$unit_price?></span></td>
                        </tr>
                      </tbody>
                    </table>
                      
                        <script>
                              $("#number2").change(function(){
                                  var number_1 = <?=$unit_price?>;
                                  var number_2 = $("#number2").val();
                                  $("#tickets").val(number_2);
                                  var number_3 = number_2 * number_1;
                                  $('#number3').text('$ '+number_3);
                              });
                          </script>
                  </div>
                </div>
                <div class="clearfix"></div>
                <br>
                <br>
                  <form action="registration" method="get">
                      <input type="hidden" name="categ" value="<?=$categ?>">
                      <input type="hidden" name="tickets" id="tickets"  value="1">
                      <button type="submit" class="btn-gold pull-right">Continue to Registeration</button>
                  </form>
                <?php }?>
            </div>
          </div>
          <?php if($error !== false){?>
            <br>
            <div class="text-center" style="color: red">
                <?php echo $error;?>
            </div>
            <br>
            <?php }?>
            <?php if($success !== false){?>
            <br>
            <div class="text-center" style="color: green">
                <?php echo $success;?><br>
            </div>
            <br>
            <?php }?>

        </section>
    </div>




















    <!-- <header class="masthead register text-center text-white ">
        <div class="container-fluid header-img-reg">
            <div class="row">
                <img class="img img-responsive" src="<?=DN?>/img/register.jpg" style="width:100%;height: 100%;"/>
            </div>
        </div>
    </header> -->





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






















