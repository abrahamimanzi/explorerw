<?php include 'admin/core/init.php';?>
<?php

$form["ERRORS"] = false;
$form = (object)$form;
if(Input::checkInput('webToken','post','1') && Input::checkInput('request','post','1')){
    
  $task = Input::get('request','post');
  switch($task){

    // API NEW PARTICIPANT
    case 'register-new':
      $form = MemberController::add('API');
      break;
  }
}

$success = false;
$error = false;
$nosubNav = true;
$_invitation_source = null;
$categ = '';
?> 
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js">
<head>  
<?php include 'includes/head-register.php';?>
    <title>Register - Transform Africa Summit 2018</title>
    <link rel="stylesheet" href="<?=DN?>/intlTelInput/build/css/intlTelInput.css">
    <script src="<?=DN?>/intlTelInput/build/js/intlTelInput.js"></script>
    <script type='text/javascript' src="<?=DN?>/js/jquery.js"></script>
    <script type='text/javascript' src="<?=DN?>/bootstrap/js/bootstrap.min.js"></script> 
    <style>

.modal-backdrop {
  z-index: 99999;
  width: 100%;
  height: 100%;
  display: none;
  position: absolute;
  top: 0%;
  left: 0%;
  background-color: #000;
  opacity: 0.8;
  filter: alpha(opacity=100);
  top: 25%;
}
    </style>
    <style>
        .daycontent {
            display: none;
            padding: 6px 12px;
            -webkit-animation: fadeEffect 1s;
            animation: fadeEffect 1s;
        }
    </style>
    <link href="<?=DN;?>/css/style.css" rel="stylesheet">
</head>
<body class="home page page-id-2">
    <?php include 'views/header-mc.php';?>
  <div id="wrapper" class="home nav-top-mc">
        <section class="bg-f0">
          <div class="container">
            <div class="row">
               <div class="w3_tittle second two" style="text-align: center;"><h3 class="agile-tittle two gal reg">Government Official </h3> 
                <div class="line-style second" style="bottom: -20px;"><span class="second"></span></div>
              </div>
              <p class="text-default text-introduction" style="margin-left: 15px; padding: 0">Government officials receive certain benefits to attend the Transform Africa Summit 2018 including a number of complimentary passes & discounts on purchased passes.</p>

              <p class="text-default text-introduction" style="margin-left: 15px; padding: 0;">The Smart Africa Team will be in touch with you and follow protocol to complete the process. </p>

               <!-- <p class="text-introduction" style="margin-left: 15px; padding: 0">If you are from a Smart Africa Member State, please <a href="#countries" class="btn corporate-btn" data-toggle="modal">Click Here</a></p> -->

                  <div class="modal about-modal w3-agileits fade" id="countries" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header countries-modal">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4>Smart Africa Member States</h4>
                          <div class="border-blue-bottom"></div>
                        </div> 
                        <div class="modal-body" style="height: auto; overflow-y: auto;">
                          <div class="col-md-6 countries-modal">
                            <p>Angola</p>
                            <p>Benin</p>
                            <p>Burkina Faso</p>
                            <p>Cameroon</p>
                            <p>Chad</p>
                            <p>Côte d'Ivoire</p>
                            <p>Democratic Republic of Congo</p>
                            <p></i>Djibouti</p>
                            <p>Egypt</p>
                            <p>Gabon</p>
                            <p>Guinea</p>
                          </div>

                          <div class="col-md-6 countries-modal">
                            <p>Kenya</p>
                            <p>Mali</p>
                            <p>Niger</p>
                            <p>Rwanda</p>
                            <p>São Tomè and Principe</p>
                            <p>Senegal</p>
                            <p>South Africa</p>
                            <p>South Sudan</p>
                            <p>Togo</p>
                            <p>Tunisia</p>
                            <p>Uganda</p>
                          </div>

                        </div> 
                      </div>
                    </div>
                  </div>

              <!-- BEGIN CONTENT -->
              <div class="col-md-12">
                <!-- <h1>Standart forms</h1> -->
                <div class="content-form-page" style="margin: 0px;">
                  <form role="form" method="post" id="reg-form" class="form-horizontal form-without-legend" enctype="multipart/form-data">

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="title">Title
                        <span  class="require">*</span> 
                     </label>
                      <div class="col-sm-8">
                        <select name="register-title" id="title" class="form-control bordered" required="required">
                            <option value="" <?php if($form->ERRORS && Input::get('register-title','post') == ''){ echo 'selected="selected"';}?>>[--Select--]</option>
                            <?php
                              $array = array("H.E.","Hon.","Prof.","Dr.","Mr.","Mrs.","Ms.")
                              ?> 
                            <?php 
                                for($i=0;$i<count($array);$i++){?>
                                    <option value="<?=$array[$i];?>" <?php if($form->ERRORS && Input::get('register-title','post') == $array[$i]){ echo 'selected="selected"'; }?>><?=$array[$i];?> </option>
                                <?php
                                } 
                              ?>

                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="firstname">First Name 
                            <span  class="require">*</span>  
                            <span class="details" style="color: #f68d29">As per your Passport/ID</span>
                            <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['firstname'][0];}?> </span>
                        </label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="register-firstname" id="firstname" placeholder="First Name" 
                               <?php if($form->ERRORS && Input::get('register-firstname','post')){?> value="<?php echo Input::get('register-firstname','post');?>" <?php }elseif($_invitation_source){?> value="<?=@$subscateginvite_data->firstname?>"<?php }?> required="required" maxlength="30">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="lastname">Last Name  
                          <span  class="require">*</span> 
                            <span class="details" style="color: #f68d29">As per your Passport/ID</span>
                            <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['lastname'][0];}?> </span>
                        </label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="register-lastname" id="lastname" placeholder="Last Name" 
                               <?php if($form->ERRORS && Input::get('register-lastname','post')){?> value="<?php echo Input::get('register-lastname','post');?>" <?php }elseif($_invitation_source){?> value="<?=@$subscateginvite_data->lastname?>"<?php }?> required="required" maxlength="30">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="country">Country
                        <span  class="require">*</span> 
                          <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['country'][0];}?> </span>
                        </label>
                      <div class="col-sm-8">
                          <select class="select2-country js-states form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="register-country" id="country" placeholder="Country" onchange="citizenshipDoc(this)" required="required">
                            <option value="" <?php if($form->ERRORS && Input::get('register-country','post') == ''){ echo 'selected="selected"';}?>>[--Select Country--]</option>
                            <?php 
                            $countryArray =Country::getArrays();
                            foreach($countryArray as $country_ID=>$country_data){
                                $country_data = (object)$country_data;?>
                                <option value="<?php echo $country_data->name; ?>" id="<?php echo $country_data->icon; ?>"
                                        
                                        <?php if($form->ERRORS && Input::get('register-country','post')==$country_data->name){ echo 'selected';}?>
                                        
                                        <?php if(!$form->ERRORS && $country_data->code == ""){ echo 'selected';}?>>
                                        <span></span>
                                    <?php echo $country_data->name; ?></option>
                                <?php
                            }?>
                          </select>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="company">Organization Name
                          <span  class="require">*</span> 
                          <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['company'][0];}?> </span>
                      </label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="register-company" id="company" placeholder="Enter <?php if($categ=="Media"){ echo 'Media House';}else{ echo 'Organization Name';}?> "
                               <?php if($form->ERRORS && Input::get('register-company','post')){?> value="<?php echo Input::get('register-company','post');?>" <?php }?>  required="required" maxlength="40">
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="orgcategory"><?php if($categ=="Media"){ echo 'Media Category ';}else{ echo 'Organization Category ';}?> 
                            <span  class="require">*</span> 
                            <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['orgcategory'][0];}?> </span>
                        </label>
                          <div class="col-sm-8">
                              <div class="row">
                                <div class="col-sm-6">
                                    <select name="register-orgcategory" id="orgcategory" class="form-control bordered" onchange="Checkother1(this,'#orgcategory1');" required="required">
                                       
                                        <option value="" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == ''){ echo 'selected="selected"';}?>> [--Select--] </option>
                                        
                                        <option value="Academia" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Academia'){ echo 'selected="selected"';}?>>Academia</option>

                                        <option value="Civil Society" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Civil Society'){ echo 'selected="selected"';}?>>Civil Society </option>


                                        <option value="International Organization" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'International Organization'){ echo 'selected="selected"';}?>>International Organization</option>

                                        <option value="Non-Governmental Organization" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Non-Governmental Organization'){ echo 'selected="selected"';}?>>Non-Governmental Organization</option>

                                        <option value="Non-Profit Organization" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Non-Profit Organization'){ echo 'selected="selected"';}?>>Non-Profit Organization</option>

                                        <option value="Private/Corporation" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Private/Corporation'){ echo 'selected="selected"';}?>>Private/Corporation</option>

                                        <option value="Regional Organization" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Regional Organization'){ echo 'selected="selected"';}?>>Regional Organization </option>
                                        
                                        
                                        <option value="Other" <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Other'){ echo 'selected="selected"';}?>>Other </option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                   <input type="text" class="form-control" name="register-orgcategory1" id="orgcategory1" placeholder="For other - please specify" 
                                          <?php if($form->ERRORS && Input::get('register-orgcategory','post') == 'Other'){?> 
                                          value="<?php echo Input::get('register-orgcategory1','post');?>" <?php }?>
                                          <?php if($form->ERRORS && Input::get('register-orgcategory','post') != 'Other'){?> disabled="disabled" <?php }?> 
                                          <?php if(!$form->ERRORS){?> disabled="disabled" <?php }?> maxlength="30" required="required">
                                </div>
                              </div>
                          </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="jobtitle"><?php if($categ=="Media"){ echo 'Position';}else{ echo 'Job Title';}?>
                        <span  class="require">*</span> 
                          <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['jobtitle'][0];}?> </span>
                     </label>
                      <div class="col-sm-8">
                          <div class="row">
                              <div class="col-sm-6">
                                <select name="register-jobtitle" id="jobtitle" class="form-control bordered" onchange="Checkother1(this,'#jobtitle1');" required="required">
                                    <?php  Functions::getJobTitles($form->ERRORS,Input::get('register-jobtitle','post'),$categ);?>
                                </select>
                              </div>
                              <div class="col-sm-6">
                                   <input type="text" class="form-control" name="register-jobtitle1" id="jobtitle1" placeholder="For other - please specify"
                                          <?php if($form->ERRORS && Input::get('register-jobtitle','post') == 'Other'){?> 
                                          value="<?php echo Input::get('register-jobtitle1','post');?>" 
                                          <?php }?>
                                          <?php if($form->ERRORS && Input::get('register-jobtitle','post') != 'Other'){?> disabled="disabled" <?php }?> 
                                          <?php if(!$form->ERRORS){?> disabled="disabled" <?php }?>  maxlength="30" required="required">
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="tel1">Mobile/ Cell phone
                        <span  class="require">*</span> 
                            <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['telephone'][0];}?> </span>
                        </label>
                      <div class="col-sm-8">
                          <div class="row">
                              <div class="col-sm-6">
                                  <input type="tel" class="form-control field-telephone" name="register-telephone" id="tel1"
                                    <?php if($form->ERRORS && Input::get('register-telephone','post')){?> value="<?php echo Input::get('register-telephone','post');?>" <?php }?> required="required" maxlength="20" placeholder="Mobile/ Cell phone">
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Email
                        <span  class="require">*</span> 
                            <?php if($form->ERRORS && @$form->ERRORS_SCRIPT['email'][0] == 'NOTUNIQUE'){?>
                                 <span id="errors_email" style="color: red; font-size: 12px; display: block">  <?php echo Input::get('register-email','post');?> is already used</span>  
                            <?php }else{?>
                            <span id="errors_email" style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS && @$form->ERRORS_SCRIPT['email'][0] != 'NOTUNIQUE'){ echo @$form->ERRORS_SCRIPT['email'][0];}?> </span>
                          <?php }?>
                        </label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control val_email" data-result="#errors_email" name="register-email" id="email" placeholder="Enter email"
                                <?php if($form->ERRORS && Input::get('register-email','post')){?> value="<?php echo Input::get('register-email','post');?>" <?php }elseif($_invitation_source){?> value="<?=@$subscateginvite_data->email?>"<?php }?> required="required" maxlength="100">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="confirm_email">Confirm Email
                        <span  class="require">*</span> 
                            <span id="errors_confirm_email" style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['confirm_email'][0];}?> </span>
                        </label>
                      <div class="col-sm-8">
                        <input data-field="#email" data-field1="#confirm_email" data-result="#errors_confirm_email" type="email" class="compare_onkeyup compare_onchange form-control" name="register-confirm_email" id="confirm_email" placeholder="Confirm email"
                            <?php if($form->ERRORS && Input::get('register-confirm_email','post')){?> value="<?php echo Input::get('register-confirm_email','post');?>" <?php }elseif($_invitation_source){?> value="<?=@$subscateginvite_data->email?>"<?php }?> required="required" maxlength="100">
                      </div>
                    </div>





                            
                    <div class="form-group" >
                      <!-- <hr class="halfLine"/> -->
                    </div>
                    <?php if(!$session_subscriber->isLoggedIn()){?>               
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Captcha">Captcha
                        <span  class="req">*</span> 
                          <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ if(@$form->ERRORS_SCRIPT['check_capcha'][0] == 'MISMATCH'){ echo "Captcha doesn't match" ;}else{ echo @$form->ERRORS_SCRIPT['check_capcha'][0];}}?> </span>
                        </label>
                          <div class="col-sm-8">
                              <div class="row">
                                  <div class="col-sm-5">
                                        <div style="margin-bottom: 5px"><?=Functions::makeCapcha('register-capcha');?></div>
                                      <input type="text" class="form-control" name="register-check_capcha" id="Captcha" placeholder="Type the above text" required="required" maxlength="4"><span style="color: red; font-size: 12px; display: block"> </span>
                                  </div>
                                  <div class="col-sm-4 col-sm-offset-1">
                                      <br>
                                        <a class="text-default" href="#" data-toggle="tooltip" title="For your security, please type the words above into the entry box">What is Captcha ?</a>
                                      <script>
                                        $(document).ready(function(){
                                            $('[data-toggle="tooltip"]').tooltip({
                                                tooltipClass: "info-tooltip"
                                            }); 
                                        });
                                      </script>
                                  </div>
                              </div>
                          </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12" style="color: #000; font-weight: 600; font-size: 13px; text-align: center;">Kindly check over the information you have provided above to ensure it is correct. 
                            By clicking submit, you hereby confirm that you agree to our 
                          
                        <span data-toggle="modal" data-target="#tcsModal_1" style="display: inline-block;color: #2a51a3; text-decoration: underline;cursor: pointer; font-size: 14px" >Terms and Conditions</span> and <br>&nbsp;&nbsp;&nbsp;
                        <span data-toggle="modal" data-target="#tcsModal_2" style="display: inline-block;color: #2a51a3; text-decoration: underline;cursor: pointer; font-size: 14px" > Privacy Policy</span>
                        <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['check'][0];}?> </span></label>
                     
                    </div>

                    <div class="row">
                      <input type="hidden" name="register-type" value="Government">
                      <input type="hidden" id="category-select" name="register-category" class="form-control bordered" value="Corporate" readonly="readonly" required>
                      <input type="hidden" name="request" value="register-new">
                      <input type="hidden" name="webToken" value="<?=Config::get('time/seconds');?>">
                      <input type="hidden" name="register_submited" value="1">
                      <input type="hidden" name="register-next_url" value="<?=DN?>/register">
                      <input type="hidden" name="register-event_token" value="de220168957bd2ccff08f88e9939b95f">

                      <div class="col-lg-9 col-md-offset-2 padding-right-0 padding-top-20">
                        <button class="btn btn-primary" type="submit">Submit</button>
                      </div>

                    </div>

                    <?php }?>
                  </form>
                </div>
              </div>
              <!-- END CONTENT -->
            </div>
          </div>
        </section>

        <section class="accreditation" style="padding: 0 0 3rem 0;">
        <div class="container">
          <div class="w3_tittle second two"><h3 class="agile-tittle two gal reg"> Registration &amp; Accreditation Deadlines</h3> 
            <div class="line-style second over-title" style="bottom: -10px;"><span class="second"></span></div>
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


        <div class="modal" id="tcsModal_1" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg container-fluid" role="document" style="margin-top: 0px;">
            <div class="modal-content" style="margin-top: 20px;">
                <div class="container" style="width: 100%;">
                  <div class="modal-body">
                     <?php include 'views/register/tcs.html';?>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="modal" id="tcsModal_2" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg container-fluid" role="document" style="margin-top: 0px;">
            <div class="modal-content" style="margin-top: 20px;">
                <div class="container" style="width: 100%;">
                  <div class="modal-body">
                     <?php include 'views/register/privacy.html';?>
                  </div>
                </div>
            </div>
          </div>
        </div>
        
      </section>

        <!-- footer -->
      <?php include 'views/footer-colombe.php';?>
      <!-- //footer -->


        <script>
          function Checkother1(field,field1){
              var value = $(field).val();
              var name = $(field).attr('name');
              var name1 = $(field1).attr('name');
            if(value=="Other"){
                if(!$(field).hasClass('swapped')){
                    $(field).addClass('swapped');
                    $(field1).prop('disabled', false);
                    var input =$(field1);
                    input[0].selectionStart = input[0].selectionEnd = input.val().length;
                }
            }else{
                if($(field).hasClass('swapped')){
                    $(field1).val("");
                    $(field).removeClass('swapped');
                    $(field1).prop('disabled', true);
                }else{
                    $(field1).val("");
                    $(field1).prop('disabled', true);
                }
            }
          }
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

        <?php include 'views/social.php';?>            
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