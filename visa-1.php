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
    <link href="css/style.css" rel="stylesheet">
    <!-- flexslider -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <!-- //flexslider -->
    <!-- Owl-Carousel-CSS --> <link rel="stylesheet" href="css/owl.carousel.css"   type="text/css" media="all">
    <!-- //stylesheet -->
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <?php include 'views/header-mc.php';?>
    <div id="wrapper" class="home nav-top-mc">
      <div class="container-fluid">
          <div class="row">
              <img class="img img-responsive" src="<?=DN?>/img/visa-banner.jpg" style="width:100%"/>
          </div>
      </div>

      <section class="bg-f0" style="background-color: #fff;">
        <div class="container">
          <div id="other" >
            <div class="w3_tittle second two"><h3 class="agile-tittle two gal reg">Rwanda is open to the world!</h3> 
              <div class="line-style second"><span class="second"></span></div>
            </div>
            <div class="col-sm-12">
              <p class="text-center text-default" style="color: #11A0DB!important; font-size: 20px;">Get your visa upon arrival at the airport.</p>

              <h4 style="padding: 0; color: #f78e20; text-shadow: none; font-size: 20px;">Passport / Travel Document validity</h4>
              <p class="text-default" style="font-size: 1.1em;">A valid passport or another acceptable travel document is required for all delegates attending from outside of Rwanda. The document must have a validity of at least 6 months on the day of entry in Rwanda</p>

              <h4 style="padding: 0; color: #f78e20; text-shadow: none; font-size: 20px;">Yellow Fever vaccination requirements</h4>
              <p class="text-default" style="font-size: 1.1em;">To enter Rwanda, a valid Yellow Fever vaccination certificate is mandatory for travelers (Residents/ Non-Residents). The certificate must be issued at least 10 days before arrival to Rwanda for people coming from the following countries:<br />

              Angola, Argentina, Benin, Bolivia Plurinational, Brazil, Burkina Faso, Burundi, Cameroon, Central African Republic, Chad, Colombia, Congo, C&ocirc;te d’Ivoire, Democratic Republic of the Congo, Ecuador, Equatorial Guinea, Ethiopia, French Guiana, Gabon, Gambia, Ghana, Guinea, Guinea-Bissau, Kenya, Liberia, Mali, Mauritania, Niger, Nigeria, Panama, Paraguay, Peru, Senegal, Sierra Leone, South Sudan, Sudan, Suriname, Togo, Trinidad and Tobago, Uganda and Venezuela.<br />

              Vaccinations are available at the airport on arrival for USD 40 if you are not from one of the countries listed above and do not have a yellow fever vaccination certificate.</p>

              <h4 style="padding: 0; color: #f78e20; text-shadow: none; font-size: 20px;">Diplomatic Passport Holders</h4>
              <p class="text-default" style="font-size: 1.1em;">Delegates with a Diplomatic Passport, Service/Offcial Passport or AU/UN Laissez-passer traveling for official duty are exempted from visa fees.</p>

              <h4 style="padding: 0; color: #f78e20; text-shadow: none; font-size: 20px;">Ordinary Passport Holders</h4>

              <table class="table table-bordered text-default">
                <thead>
                  <tr style="background-color: #2a51a3;">
                    <th style=" color: #ffffff; font-weight: normal; font-size: 16px;">Visiting Delegate Country</th>
                    <th style=" color: #ffffff; font-weight: normal; font-size: 16px;">Visa Type</th>
                    <th style=" color: #ffffff; font-weight: normal; font-size: 16px;">Prior Application required(Yes or No)</th>
                    <th style=" color: #ffffff; font-weight: normal; font-size: 16px;">Fee</th>
                    <th style=" color: #ffffff; font-weight: normal; font-size: 16px;">Validity</th>
                    <th style=" color: #ffffff; font-weight: normal; font-size: 16px;">Visa</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Hong Kong, Philippines, Mauritius, Singapore and the Democratic Republic of Congo</td>
                    <td>Tourist (T1) visa <br>Multiple entry</td>
                    <td>No</td>
                    <td>None</td>
                    <td>90 days</td>
                    <td>Upon arrival</td>
                  </tr>
                  <tr>
                    <td>Citizens of the East African Community <br>(Burundi, Kenya, Tanzania and Uganda)</td>
                    <td>Visitor's pass <br>Multiple entry</td>
                    <td>No</td>
                    <td>None</td>
                    <td>6 months</td>
                    <td>Upon arrival</td>
                  </tr>
                  <tr>
                    <td>Nationals of Australia, Germany, Israel, New Zealand, Republic of South Africa, Sweden, United Kingdom and the United States of America</td>
                    <td>Single entry visa</td>
                    <td>No</td>
                    <td>$30</td>
                    <td>30 days</td>
                    <td>Upon arrival</td>
                  </tr>
                  <tr>
                    <td rowspan="4">Nationals of all countries not listed above</td>
                    <td>Single entry visa</td>
                    <td>No</td>
                    <td>$30</td>
                    <td>30 days</td>
                    <td>Upon arrival</td>
                  </tr>
                  <tr>
                    <td>Tourist visa (T2) <br>Multiple entry</td>
                    <td>No</td>
                    <td>$50</td>
                    <td>90 days</td>
                    <td>Upon arrival</td>
                  </tr>
                  <tr>
                    <td>Conference pass (T6-1) <br>Single entry</td>
                    <td>No</td>
                    <td>$30</td>
                    <td>30 days</td>
                    <td>Upon arrival</td>
                  </tr>
                  <tr>
                    <td>Conference pass (T6-2) <br>Multiple entry</td>
                    <td>No</td>
                    <td>$50</td>
                    <td>6 days</td>
                    <td>Upon arrival</td>
                  </tr>
                </tbody>
              </table>

              <p class="notes">Those wishing to stay for longer than 30 days and/or enter more than once should contact the Directorate General of Immigration and Emigration or a Rwandan Embassy or Diplomatic Mission. <span class="lnr lnr-chevron-right"></span><span class="lnr lnr-chevron-right"></span> For further information on visas for Rwanda,  
              <a class="btn btn-primary" href="https://www.migration.gov.rw" target="_blank">Click here</a>
              <!-- <a class="btn btn-platinum" href="https://irembo.gov.rw/rolportal/web/rol/conference-visa-single-entry#_48_INSTANCE_I0QYdGCQWtDM_%25253Dhttps%2525253A%2525252F%2525252Firembo.gov.rw%2525252FrolDGIE%2525252Fvisa_v1%2525252FVisa_v1.xhtml%2525253Fvspte%2525253DT6-1%25252526%25252526lang%2525253Den%253D%2526_48_INSTANCE_I0QYdGCQWtDM_%253Dhttps%25253A%25252F%25252Firembo.gov.rw%25252FrolDGIE%25252Fvisa_v1%25252FVisa_v1.xhtml%25253Fvspte%25253DT6-1%252526%252526lang%25253Den%3D%26_48_INSTANCE_I0QYdGCQWtDM_%3Dhttps%253A%252F%252Firembo.gov.rw%252FrolDGIE%252Fvisa_v1%252FVisa_v1.xhtml%253Fvspte%253DT6-1%2526%2526lang%253Den" target="_blank">Conference Visa</a> -->
              </p><br>

            </div>
          </div>
        </div>
      </section>

      <!-- footer -->
      <?php include 'views/footer-colombe.php';?>
      <!-- //footer -->
    </div>

</body>

</html>