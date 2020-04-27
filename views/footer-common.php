<!-- Footer -->
<footer class="footer-row">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <ul>
                    <span class="element-header no-border">Ministries</span>
                    <li>
                        <a href="#">Office of the President</a>
                    </li>
                    <li>
                        <a href="#">Prime Minister's Office</a>
                    </li>
                    <li>
                        <a href="#">Ministry of Justice</a>
                    </li>
                    <li>
                        <a href="#">Ministry of Foreign Affairs</a>
                    </li>
                    <li>
                        <a href="#">Ministry of Justice</a>
                    </li>
                    <li>
                        <a href="#">Ministry of Defence</a>
                    </li>
                    <li>
                        <a href="#">Ministry of Education</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <ul>
                    <span class="element-header no-border">Digital Services</span>
                    <li><a href="#">Birth certificate</a></li>
                    <li><a href="#">Child Registration</a></li>
                    <li><a href="#">Apply for National ID</a></li>
                    <li><a href="#">Marriage Certificate</a></li>
                    <li><a href="#">Work in Rwanda</a></li>
                    <li><a href="#">Business in Rwanda</a></li>
                    <li><a href="#">Police Services</a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="d-flex">
                    <ul class="col-md-6">
                        <span class="element-header no-border">Discover</span>
                        <li>
                            <a href="#">Faq's</a>
                        </li>
                        <li>
                            <a href="#">Help</a>
                        </li>
                        <li>
                            <a href="#">All Services</a>
                        </li>
                        <li>
                            <a href="#">Become a Handy</a>
                        </li>
                    </ul>
                    <ul class="col-md-6">
                        <span class="element-header no-border">Press Room</span>
                        <li>Press Releases</li>
                        <li>Cabinet Resolutions</li>
                        <li>Government News</li>
                        <li>UX Challenge</li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="social-media-icon">
                        <span title="facebook">
                  <i class="fa fa-facebook"></i>
                </span>
                        <span title="twitter">
                  <i class="fa fa-twitter"></i>
                </span>
                        <span title="flickr">
                  <i class="fa fa-flickr"></i>
                </span>
                        <span title="instagram">
                  <i class="fa fa-instagram"></i>
                </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright text-center m-5">
            &copy; 2018 Government of the Republic of Rwanda
        </div>
    </div>
</footer>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">

                            <div class="signup_form_container">
                                <!-- multistep form -->
                                <form method="post" id="login_form" autocomplete="nope">
                                  <!-- fieldsets -->

                                    <fieldset id="login_personal_data">
                                    <div class="panel login_panel">
                                      
                                    <div class="panel-heading">
                                        <div class="app_logo">
                                            <!-- <img src="<?=DNADMIN?>/icon/logo-tas-01.png" class="app_icon img" style="width: 135px;"> -->

                                            <b>Login to your account</b>
                                        </div>
                                    </div>
                                       <div class="panel-body">
                                           <hr style="margin-top: 0px;">
                                           
                                            <?php if($form->ERRORS == true ){?>
                                                <h6 class="st-subtitle error bg-danger"><span class="">Username or Password don't match, Please retry.</span></h6>
                                            <?php }else{?>
                                                    <h6 id="error_message" style='display: none'><span id="error_lo"></span><span id="no_visible"> Username or Password don't match, Please retry.</span></h6>
                                            <?php }?>
                                            <div class="login_fieldset">
                                                <div class="field">
                                                    <div class="input-group ">
                                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user fa fa-user"></span></span>
                                                      <input id="login_username" class="data_in one required" name="login_username" type="text"  placeholder="Username" required aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="field">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock fa fa-lock"></span></span>
                                                      <input id="login_password" class="data_in two required" name="login_password" type="password" placeholder="Password" required  placeholder="Username" required aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" class="hidden" name="request" value="participant_login" />
                                            <input type="hidden" class="hidden" name="webToken" value="true" />
                                            
                                            <div class="row">
                                                <div class="col-sm-12 text-center submit_btn_div">
                                                    <p class="text-default" style="font-size: 13px; text-align: left; padding: 0 20px;color: #1e3f7c !important;">
                                                        By logging, you hereby confirm that you agree to our
                                                        <span data-toggle="modal" data-target="#tcsModal_1" style="display: inline-block;color: #2a51a3; text-decoration: underline;cursor: pointer; font-size: 14px" >Terms and Conditions</span> and 
                                                        <span data-toggle="modal" data-target="#tcsModal_2" style="display: inline-block;color: #2a51a3; text-decoration: underline;cursor: pointer; font-size: 14px" > Privacy Policy</span>
                                                     <span style="color: red; font-size: 12px; display: block"> <?php if($form->ERRORS){ echo @$form->ERRORS_SCRIPT['check'][0];}?> </span>
                                                    </p>
                                                    <button id="loginValidBtn" data-fieldset="#login_form"  class="btn validation_btn login_btn submit action-button btn btn-success" name="loginValidBtn" type="submit"><span class="btn_icon glyphicon glyphicon-log-in fa fa-check-circle"></span> <span class="btn_label">Login</span></button>
                                                    <?php if(isset($form->ERRORS_SCRIPT['username'])){?>
                                                        <script>
                                                            $(document).ready(function(){
                                                                $('#login_username').addClass('error');
                                                            });
                                                        </script>
                                                    <?php }?>
                                                    <?php if(isset($form->ERRORS_SCRIPT['password'])){?>
                                                        <script>
                                                            $(document).ready(function(){
                                                                $('#login_password').addClass('error');
                                                            });
                                                        </script>
                                                    <?php }?>
                                                </div>
                                                <div class="col-sm-6">
                <!--                                    <label class="remeber_label"><input type="checkbox" name="login_remember" value="on"> Remeber me</label>-->
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a class="login-links" href="<?=DN?>/login/forgotpassword">Forgot Your Password? </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a class="login-links" href="<?=DN?>/login/forgotpassword">Sign In Or Create an Account</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    </fieldset>
                                </form>
                            </div>
                            <!-- <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                                <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div> -->
                        </div>

                    </div>
                </div>