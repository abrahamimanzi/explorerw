<form method="post" class="form-horizontal">
<section class="reg-body open  bg-img-orange">
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
              <?php
                $process = Input::get('process');
                if($process != 'corporate'){
                  ?>
                                      

                    <div class="panel panel-reg">
                        <div class="reg-header">
                            <h2 class="text-center reg-title" style="text-transform: uppercase;">
                            <?php

                                $process = Input::get('process');
                                if ($process == 'registered') {
                                  echo 'REGISTRATION SUCCESSFUL';
                                }elseif($process == 'corporate'){
                                  echo 'corporate REGISTRATION Request';
                                } else{
                                  echo 'REGISTERING AGAIN? ';
                                }

                                if ($category=='FTG') {
                                  $participate_in = "Face the gorillas,";
                                }elseif($category=='MSGSC'){
                                  $participate_in = "ms geek Africa,";
                                }else{
                                  $participate_in = "";
                                }

                                // if($transaction['message'] == 'Cancelled'){ 
                                //     echo 'PAYMENT CANCELLED';
                                // }elseif($transaction['message'] != 'Approved'){ 
                                //   echo 'PAYMENT DECLINE';
                                // } elseif(@$_GET['process'] != 'confirmed' && $participant_data->payment_state != "Confirmed"){ 
                                //   echo 'REGISTERING AGAIN? ';
                                // } else{ echo 'Decline';} ?>
                            </h2>
                        </div>
                        
                        <div class="panel-body" style="padding: 5px 30px 15px 30px;">
                            <div class="form-group">
                              <div class="col-sm-12">
                                  <br>
                                  <p class="fieldset-header text-center" style="line-height: 25px; font-size: 15px">
                                        
                                    <?php 
                                    if($transaction['message'] == 'Cancelled'){ ?>

                                          <span class="ro_bold" style="font-size: 15px"><?=$participant_data->firstname.' '.$participant_data->lastname?></span>, thank you for your interest in <span class="ro_bold">Transform Africa Summit 2018</span>. <br>You seem to have cancelled your payment.<br>
                                          <?php 
                                            switch($participant_data->category){
                                                case 'Government':
                                                    echo '';
                                                    break;
                                                default:
                                                    echo 'An email notification will be sent to you shortly.';
                                                break;
                                            }?>
                                          <?php
                                    }elseif($transaction['message'] != 'Approved'){ ?>

                                          <span class="ro_bold" style="font-size: 15px"><?=$participant_data->firstname.' '.$participant_data->lastname?></span>, thank you for your interest in <?=$participate_in?><span class="ro_bold"> Transform Africa Summit 2018</span>. 
                                          <br>
                                          <!-- We will review your application and get back to you within 7 working days. <br> -->
                                          <?php 
                                            switch($participant_data->category){
                                                case 'Government':
                                                    echo 'An email notification will be sent to you shortly.';
                                                    break;
                                                default:
                                                    echo 'An email notification will be sent to you shortly.';
                                                break;
                                            }?>
                                          <?php
                                    } else{?>
                                          <span class="ro_bold" style="font-size: 15px"><?=$participant_data->firstname.' '.$participant_data->lastname?></span>, thank you for your interest in <span class="ro_bold">Transform Africa Summit 2018</span>. <br>You seem to have cancelled your payment.<br>
                                          <!--<?=$transaction['message']?><?=$transaction['status']?>-->
                                          <?php 
                                            switch($participant_data->category){
                                                case 'Government':
                                                    echo '';
                                                    break;
                                                default:
                                                    echo 'An email notification will be sent to you shortly.';
                                                break;
                                            }?>
                                          
                                    <?php }?>


                                    

                                  </p><br>
                                 <hr class="halfLine">
                              </div>
                            </div>
                            <div class="form-group">
                                
                              <div class="col-sm-12 text-center">
                                  <span class=""><a href="<?=DN?>" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i> Done</a></span>
                              </div>
                            </div>
                        </div>
                    </div>

                    <?php
                  }else{ ?>

                    <div class="panel panel-reg">
                        <div class="reg-header">
                            <h2 class="text-center reg-title" style="text-transform: uppercase;">
                            <?php
                                  echo 'Corporate REGISTRATION Request';
                                ?>
                            </h2>
                        </div>
                        
                        <div class="panel-body" style="padding: 5px 30px 15px 30px;">
                            <div class="form-group">
                              <div class="col-sm-12">
                                  <br>
                                  <p class="fieldset-header text-center" style="line-height: 25px; font-size: 15px">
                                        

                                          <span class="ro_bold" style="font-size: 15px"> </span>Thank you for submitting your corporate registration request for Transform Africa Summit<br> (Kigali, Rwanda, 7 - 10 May 2018).<br>
                                          
                                          We will review your request and an email notification will be sent to you shortly.

                                               


                                    

                                  </p><br>
                                 <hr class="halfLine">
                              </div>
                            </div>
                            <div class="form-group">
                                
                              <div class="col-sm-12 text-center">
                                  <span class=""><a href="<?=DN?>" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i> Done</a></span>
                              </div>
                            </div>
                        </div>
                    </div>
                    <?php
                  }
                  ?>
                </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</section>
</form>
