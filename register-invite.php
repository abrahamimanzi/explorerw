<?php include 'admin/core/init.php';?>
<?php

$form["ERRORS"] = false;
$form = (object)$form;
if(Input::checkInput('webToken','post','1') && Input::checkInput('request','post','1')){
    
  $task = Input::get('request','post');
  switch($task){

    // API NEW PARTICIPANT
    case 'register-new':
      $form = RequestInvitationController::add('API');
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

<?php include 'includes/head-register.php';?>
    <title>Register - Transform Africa Summit 2018</title>
    <link rel="stylesheet" href="<?=DN?>/intlTelInput/build/css/intlTelInput.css">
    <script src="<?=DN?>/intlTelInput/build/js/intlTelInput.js"></script>
    <script type='text/javascript' src="<?=DN?>/js/jquery.js"></script>
    <script type='text/javascript' src="<?=DN?>/bootstrap/js/bootstrap.min.js"></script> 
    <style>
.cl-effect-2 a { 
  line-height: 44px;
  -webkit-perspective: 1000px;
  -moz-perspective: 1000px;
  perspective: 1000px;
}

.cl-effect-2 a span {
  position: relative; width: 100%;
  display: inline-block;
  padding: 0 14px;
  background: #5bc0de;
  -webkit-transition: -webkit-transform 0.3s;
  -moz-transition: -moz-transform 0.3s;
  transition: transform 0.3s;
  -webkit-transform-origin: 50% 0;
  -moz-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.csstransforms3d .cl-effect-2 a span::before {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  height: 100%;
  background: #ffffff;
  content: attr(data-hover); padding: 0;
  -webkit-transition: background 0.8s;
  -moz-transition: background 0.8s;
  transition: background 0.8s;
  -webkit-transform: rotateX(-90deg);
  -moz-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
  -webkit-transform-origin: 50% 0;
  -moz-transform-origin: 50% 0;
  transform-origin: 50% 0;
}

.cl-effect-2 a:hover span,
.cl-effect-2 a:focus span {
  -webkit-transform: rotateX(90deg) translateY(-22px);
  -moz-transform: rotateX(90deg) translateY(-22px);
  transform: rotateX(90deg) translateY(-22px);
}

.csstransforms3d .cl-effect-2 a:hover span::before,
.csstransforms3d .cl-effect-2 a:focus span::before {
  background: #39b3d7;  
}

/* Effect 10: reveal, push out */
.cl-effect-10  {
  position: relative;
  z-index: 1;
}

.cl-effect-10 a {
  position: relative;
  overflow: hidden;
  margin: 0;
  display: inline-block;
}

.cl-effect-10 a span {
  display: block;
  padding: 10px 20px;
  -webkit-transition: -webkit-transform 0.3s;
  -moz-transition: -moz-transform 0.3s;
  transition: transform 0.3s;
}

.cl-effect-10 a::before {
  font-size: 16px;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  padding: 11px 20px 0;
  width: 100%;
  height: 100%;
  background: #fff;
  content: attr(data-hover);
  -webkit-transition: -webkit-transform 0.3s;
  -moz-transition: -moz-transform 0.3s;
  transition: transform 0.3s;
  -webkit-transform: translateX(-25%);
}

.cl-effect-10 a:hover span,
.cl-effect-10 a:focus span {
  -webkit-transform: translateX(100%);
  -moz-transform: translateX(100%);
  transform: translateX(100%);
}

.cl-effect-10 a:hover::before,
.cl-effect-10 a:focus::before {
  -webkit-transform: translateX(0%);
  -moz-transform: translateX(0%);
  transform: translateX(0%);
}

.panel-default .cl-effect-10 a span { color: #333333; background-color: #f5f5f5; }
.panel-info .cl-effect-10 a span { color: #3a87ad; background-color: #d9edf7; }
.panel-primary .cl-effect-10 a span { color: #ffffff; background-color: #428bca; }
.panel-danger .cl-effect-10 a span { color: #b94a48; background-color: #f2dede;}
.panel-warning .cl-effect-10 a span { color: #c09853; background-color: #fcf8e3; }
.panel-success .cl-effect-10 a span { color: #468847; background-color: #dff0d8; }







/*!
* Pricely v1.0
*
* Copyright 2013 - Forever, Weborithm.com
*
* Designed and built by Weborithm
*/


.pricely-chart:after, .pricely-chart:after, .pricely-pro:after, .pricely-chart-three:after, .panel-heading li:after { content: " "; display: table; clear: both; }


/* Parent Pricely Holder */
.pricely-chart-one {  }
.pricely-chart-two {  }
.pricely-chart-three {  }
.pricely-chart-four {  }


/* Fonts */
.pricely-chart { font-family: 'Karla', sans-serif; }
.pricely-chart h1, h2, h3, h4, h5, h6 { font-family: 'Raleway', sans-serif; font-weight: 300; }
.pricely-chart .glyphicon { color: #9b9b9b; }


/* Vertical Alignment 
#pricely-vertical { display: table; width: 100%; }
#pricely-align { display: table-cell; vertical-align: middle; } */


/* Headings */
.pricely-chart .panel-heading { font-size: 22px; margin: 0; padding: 10px 20px; text-align: center; }
.pricely-chart-one h3 span { display: block; font-size: 13px; font-weight: 300; letter-spacing: 0.5px; padding: 5px 0 0; text-transform: uppercase; }


/* Headings Formatting */
.pricely-label { display: block; font-size: 30px; letter-spacing: 1px; margin: 0 auto 10px; }
.pricely-first-heading .pricely-label { font-weight: 600; }
.pricely-figure { padding: 20px 0 20px; position: relative; }
.pricely-currency { display: inline-block; font-size: 20px; font-weight: 400; position: absolute; top: 30px; }
.pricely-amount { display: inline-block; font-size: 20px; line-height: 40px; padding: 0 0 0 17px; }
.pricely-foreword { display: block; font-family: 'Karla', sans-serif; font-size: 14px; font-style: italic; padding: 0; }
.pricely-paragraph { font-size: 14px; line-height: 20px; margin: 20px; text-align: left; }
.pricely-paragraph span { font-size: 28px; }


/* Headings - Backgrounds */
.pricely-chart .with-diagonal { background-image: url(../img/diagonal-left.png); }
.pricely-chart .with-featured-diagonal { background-image: url(../img/diagonal-right.png); font-weight: 600; }
.pricely-chart .with-boxes { background-image: url(../img/boxes.png); }
.pricely-chart .with-checks-1 { background-image: url(../img/checks_1.png); }
.pricely-chart .with-checks-2 { background-image: url(../img/checks_2.png); }
.pricely-chart .with-checks-3 { background-image: url(../img/checks_3.png); }


/* Panel + Panel Header + Panel Footer */
.pricely-chart .panel { margin: 0; }
.pricely-chart-two .panel, .pricely-chart-two .panel-heading { border-radius: 0; }

.pricely-chart .panel-footer { padding: 10px; }
.pricely-chart-two .panel-footer { border-width: 0 1px 1px 1px; margin: 0px 0px 10px; padding: 0; border-radius: 0; }


/* Collapse */
.pricely-chart .panel-collapse p { margin: 10px 0; }


/* Images */
.pricely-chart .img-responsive { max-width: inherit; width: 100%; }


/* Call to Action Buttons */
.pricely-chart-one .pricely-call { }
.pricely-chart-one .pricely-call a { font-size: 18px; }
.col-md-2 .pricely-call a { font-size: 16px; /* Smaller font for narrow columsn */ }

.pricely-chart-two .pricely-call {  }
.pricely-chart-two .pricely-call a { font-size: 20px; }


/* Pricely Indicators */
ol.pricely-indicators { position: static; width: auto; margin: 0; padding: 0; text-align: right; }
ol.pricely-indicators li.active { background: #f7931f; border-color: #f7931f; margin: 1px 3px; }
ol.pricely-indicators li { background: #fff; border-color: #ebebeb; height: 12px; width: 12px; margin: 1px 3px; padding: 6px; }


/* Tooltip */
.tooltip { font-family: 'Karla', sans-serif; }
.pricely-tooltip:hover { cursor: pointer; }


/* Modal */
.pricely-chart .modal p { margin: 0; }
.pricely-chart .modal-body { padding: 0; }
.pricely-chart .modal-body .thumbnail { border: 0; border-radius: 0; padding: 0; }
/*.modal-backdrop.in { opacity: 0.5; filter: alpha(opacity=50); } */
.modal-backdrop.in {
   
}
.modal-backdrop.in {
    
}
.modal-backdrop.fade {
    
}
.fade.in {
    
}
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

.pricely-chart .modal p.modal-text { padding: 10px 15px; }

/* Buttons */
.panel-footer .btn { line-height: 44px; }
.btn-wide { border: 0; padding: 0; border-radius: 0; width: 100%; }


/* Icons */
.pricely-pro .glyphicon { display: block; text-align: center; }
.pricely-pro .glyphicon { color: #3A87AD; }
.pricely-pro .x { color: #B94A61; }


/*===== Price Chart Specific =====*/

  /* Classic */
  
  
  /* Business */


  /* Professional */
  .pricely-pro .panel-heading { border-radius: 0; min-height: 130px; }
  .pricely-pro li li.list-group-item { border-left-width: 1px; border-radius: 0; min-height: 45px; }
  .pricely-pro li.pricely-first-heading li.list-group-item { border-left-width: 1px; border-radius: 0; min-height: 45px; }

  .pricely-pro { list-style: none; margin: 0; padding: 0; }
  .pricely-pro li.pricely-first-heading, .pricely-pro li.pricely-inner {  padding: 0; }

  .pricely-pro .panel-heading { border-right: 1px solid #ddd; border-top: 1px solid #ddd; }
  .pricely-pro li:first-child .panel-heading { border-left: 1px solid #ddd; }
  
  .pricely-professional li.list-group-item  .feature-hide { display: none;}
  .pricely-professional li .glyphicon { display: inline-block; }
  .pricely-professional li  .pricely-paragraph .glyphicon { display: block; }
  .pricely-professional li.list-group-item { text-align: center; }
  

  /* Wizard */
  .pricely-wizard { text-align: center; }

  .pricely-wizard .dropdown-menu { -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; }
  .pricely-wizard .dropdown-menu span { display: block; padding: 5px 10px; }
  .pricely-wizard .pricely-inline { display: inline; }
  
  .pricely-wizard p.dropdown { background: #eee; border: 1px solid #fff; padding: 3px 9px; border-radius: 3px; text-align: left; }
  .pricely-wizard p.dropdown:hover { background: #f9f9f9; border-color: #eee; color: #fff; }
  .pricely-wizard p.dropdown  a:focus, .pricely-wizard p.dropdown  a:hover { text-decoration: none; }
  .pricely-wizard p.dropdown span a {
    -webkit-transition: 0.2s ease-in-out; /** Chrome & Safari **/
    -moz-transition: 0.2s ease-in-out; /** Firefox **/
    -o-transition: 0.2s ease-in-out; /** Opera **/ }
  .pricely-wizard p.dropdown span a:hover { padding-left: 3px;
    -webkit-transition: 0.2s ease-in-out; /** Chrome & Safari **/
    -moz-transition: 0.2s ease-in-out; /** Firefox **/
    -o-transition: 0.2s ease-in-out; /** Opera **/ text-decoration: none; }
  .pricely-wizard p.pricely-wizard-selection { background: #5BC0DE; color: #fff; display: inline-block; margin: -1px 0 10px 0; padding: 3px 9px; text-transform: uppercase; border-radius: 3px; }
  .pricely-wizard .tab-pane span.glyphicon { font-size: 24px; margin: 0 10px 0 0; position: relative; top: 7px; }
  
  .pricely-wizard .tab-inner { margin: 20px 0 0; padding: 0; }
  .pricely-wizard .tab-inner-child { margin: 1px 0 0; padding: 20px 0 0; }
  
  .pricely-wizard .panel { border: 0 !important; border-radius: 0; box-shadow: none; padding: 0; }
  .pricely-wizard .panel .panel-heading { border: 0; box-shadow: none; padding: 20px 0; }


@media screen and (min-width:0\0) { /* Specific to IE */

.pricely-currency { display: inline-block; font-size: 20px; font-weight: 400; position: relative; top: -30px; }
.pricely-amount { font-size: 65px; line-height: 65px; }
.pricely-chart .panel-footer { margin: 0 0 20px; padding: 0; }

}


@media screen and (max-width: 991px) {

.pricely-chart-one { margin-bottom: 20px; }

.tab-content { border-left: 0; }

.pricely-pro li li.list-group-item { border-left-width: 1px; text-align: center; }

.pricely-chart .panel-heading { padding: 15px 10px; }

.pricely-pro .panel-heading { border-left: 1px solid #ddd; min-height: inherit; }

.pricely-professional li.list-group-item .feature-hide { display: inline; padding: 0 0 0 10px; }

.pricely-pro li.pricely-first-heading { display: none; }

.pricely-pro .glyphicon { display: inline-block; text-align: center; }

.pricely-foreword, .pricely-label { display: inline-block; margin: 0; }
.pricely-foreword:before { content: " "; }

}
.pricely-foreword{ color: #ffff; }


@media screen and (max-width: 767px) {

#pricely-align { display: inherit; margin: 0 0 40px; vertical-align: none; }

}





.btn-success{
    color: #fff;
    /*background-color: #d9534f;*/
    /*border-color: #d43f3a;*/
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}

.list-group {
    padding-left: 0;
    margin-bottom: 0;
}

.visibility-hidden{
    visibility: hidden;
}
.bg-dack-blue {
    background: #21376b;
}
.bg-dack-orange {
    background: #ed552b;
}
.bg-yellow {
    background: #fecf33;
}
.bg-green {
    background: #3fad49;
}
.bg-orange {
    background: #f78e20;
}
.bg-blue {
    background: #068ec1!important;
} 
.bg-magenta {
    background: #ec008c;
}
.bg-purple {
    background: #802064;
}
.bg-gold {
    background: #997f52;
}
.bg-brown {
    background: #58331a;
}
.bg-grey {
    background: #a7a9ac;
}
.bg-red{
  background-color: #d9534f;
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

        <section class="bg-f0" style="padding: 0;">
          <div class="container">
            <div class="row">
              <!-- BEGIN CONTENT -->
              <div class="col-md-12">
                <!-- <h1>Standart forms</h1> -->
                <div class="content-form-page" style="margin-bottom: 30px;">
                  <div class="w3_tittle second two" style="text-align: center;"><h3 class="agile-tittle two gal reg">Request invitation for TAS2018</h3>
                    <div class="line-style second" style="bottom: -20px;"><span class="second"></span></div>
                  </div>
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
                                    <?php if($form->ERRORS && Input::get('register-telephone','post')){?> value="<?php echo Input::get('register-telephone','post');?>" <?php }?> required="required" maxlength="20" placeholder="Country code and number">
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
                                      <input type="text" class="form-control" name="register-check_capcha" id="Captcha" placeholder="Type the text above here" required="required" maxlength="4"><span style="color: red; font-size: 12px; display: block"> </span>
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
                        <!-- <hr class="halfLine"> -->
                        <label class="col-sm-12" style="color: #000; font-weight: 600; font-size: 13px; text-align: center;">Kindly check over the information you have provided above to ensure it is correct. 
                            By clicking submit, you hereby confirm that you agree to our 
                          
                        <span data-toggle="modal" data-target="#tcsModal_1" style="display: inline-block;color: #2a51a3; text-decoration: underline;cursor: pointer; font-size: 14px" >Terms and Conditions</span> and <br>&nbsp;&nbsp;&nbsp;
                        <span data-toggle="modal" data-target="#tcsModal_2" style="display: inline-block;color: #2a51a3; text-decoration: underline;cursor: pointer; font-size: 14px" > Privacy Policy</span>
                        <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['check'][0];}?> </span></label>
                     
                    </div>

                    <div class="row">
                      <input type="hidden" name="register-pass_type" value="Corporate">
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

        <?php //include 'views/social.php';?>            
    </div><!--wrapper--> 
    <?php //include 'views/footer-common.php';?>


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