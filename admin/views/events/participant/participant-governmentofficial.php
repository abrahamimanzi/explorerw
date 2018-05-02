<style>
    th button{
        border: 0;
        background: transparent;
    }
</style>
<?php include 'participant-content_header'.PL;?>
<?php include 'participant-content_navbar'.PL;?>


<!-- Main content -->
<section class="content">
        
 <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12 col-md-12">
                 <!--RECENT REGISTER -->
              <div>
                
                <?php 
                    if(@empty($_SESSION['participant_sort'])){
                        $_SESSION['participant_sort'] = "`ID` DESC";  
                         Redirect::to("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                    }
                    if(Input::checkInput('sort-id','post','0')){
                        $_SESSION['participant_sort'] = $_SESSION['participant_sort'] == "`ID` ASC" ? "`ID` DESC" : "`ID` ASC";
                         Redirect::to("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                    }
                    if(Input::checkInput('sort-name','post','0')){
                        $_SESSION['participant_sort'] = $_SESSION['participant_sort'] == "`firstname` ASC" ? "`firstname` DESC" : "`firstname` ASC";
                         Redirect::to("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                    }
                    if(Input::checkInput('sort-company_name','post','0')){
                        $_SESSION['participant_sort'] = $_SESSION['participant_sort'] == "`company_name` ASC" ? "`company_name` DESC" : "`company_name` ASC";
                         Redirect::to("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                    }
                    if(Input::checkInput('sort-added_date','post','0')){
                        $_SESSION['participant_sort'] = $_SESSION['participant_sort'] == "`added_temp` ASC" ? "`added_temp` DESC" : "`added_temp` ASC";
                         Redirect::to("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                    }
                    if(Input::checkInput('sort-state','post','0')){
                        $_SESSION['participant_sort'] = $_SESSION['participant_sort'] == "`state` ASC" ? "`state` DESC" : "`state` ASC";
                         Redirect::to("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                    }

                    $search_sql = "";
                    $search_form = false;
                    $sql_val_array = array('Deleted',$event_ID);
                   
                    if(Input::checkInput('search','get','1')){
                        $search_form = true;
                        $fullname = urldecode(Input::get('name','get'));
                        $keyword = urldecode(Input::get('keyword','get'));
                        $state = urldecode(Input::get('state','get'));

                        if(Input::checkInput('keyword','get','1')){
                            $search_sql .= " 
                                AND (`firstname` LIKE '%{$keyword}%' || 
                                    `lastname` LIKE '%{$keyword}%' || 
                                    `email` LIKE '%{$keyword}%' ||
                                    `telephone` LIKE '%{$keyword}%' ||
                                    `status` LIKE '%{$keyword}%' ||
                                    `company_name` LIKE '%{$keyword}%' ||
                                    `country` LIKE '%{$keyword}%' ||
                                    `jobtitle` LIKE '%{$keyword}%' ||
                                    `ID` = '{$keyword}')";
                        }
                        if(Input::checkInput('name','get','1')){
                            $search_sql .= " 
                                AND (`firstname` LIKE '%{$fullname}%' || 
                                    `lastname` LIKE '%{$fullname}%')";
                        }
                        if(Input::checkInput('state','get','1')){
                            if(Input::get('status','get')=='Activated'){
                                $search_sql .= " AND `status` = ?";
                                $sql_val_array[] = $state;
                            }elseif(Input::get('status','get')=='Deactivated'){
                                $search_sql .= " AND `status` = ?";
                                $sql_val_array[] = $state;
                            }
                        }
                    }
                    ?>
                    
                        
                    
                </div>
              
              
                <div class="box">
                    <div class="box-header with-border">
                    <?php

                        $participantTable = new Member();
                        // $participantTable->selectQuery("SELECT * FROM `events_corporate` WHERE $search_sql ",$sql_val_array);
                        $participantTable->selectQuery("SELECT * FROM `events_member` WHERE `type`='Government' ",$sql_val_array);
                        $participantApprovalNumber = $participantTable ->count();
                    ?>
                      <h3 class="box-title">Government official <span style='color:#01aef0'><?=$participantApprovalNumber?></span></h3>

                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- <form method="post" class="form-control">
                        <label class=" col-sm-2 bordered">Between date</label>
                        <input type="text" name="from_date" 
                        <?php if(Input::get('from_date','post')){?> value="<?php echo Input::get('from_date','post');?>" <?php }?> class=" col-sm-4 bordered">
                        <input type="text" name="to_date" 
                        <?php if(Input::get('to_date','post')){?> value="<?php echo Input::get('to_date','post');?>" <?php }?> class="col-sm-4 bordered">
                        
                            <input type="hidden" name="request" value="1">
                            <input type="hidden" name="webToken" value="56">
                            <button type="submit" name="search" class="btn btn-sm btn-success btn-flat pull-right">Search</button>
                    </form> -->
                    <br>
                    <div class="box-body">
                        
                      <div class="table-responsive">
                        <table class="table no-margin">
                          <thead>
                            <form method="post">
                              <tr>
                                <th><button type="submit" name="sort-id">ID</button></th>
                                <th><button type="submit" name="sort-name">Names</button></th>
                                <th><button type="submit" name="sort-email">email</button></th>
                                <th><button type="submit" name="sort-telephone">Telephone</button></th>
                                <th><button type="submit" name="sort-company_name">Company name</button></th>
                                <!-- <th><button type="submit" name="sort-gold">Gold</button></th> -->
                                <!-- <th><button type="submit" name="sort-platinum">Platinum</button></th> -->
                                <th style="width: 95px" title="Registration Date">
                                    <button type="submit" name="sort-added_date">Reg Date</button>
                                </th>
                                <!-- <th title="Time Lapsed" style="width: 85px;">
                                    <button type="submit" name="sort-added_date">Days left</button>
                                </th> -->
                                <th style="width: 90px"><button type="submit" name="sort-country">Country</button></th>
                                <!-- <th style="width: 90px"><button type="submit" name="sort-state">Status</button></th>
                                <th style="width: 90px"><button type="submit" name="sort-state">Updated by</button></th>
                                <th style="width: 60px">Menu</th> -->
                              </tr>
                            </form>
                          </thead>
                          <tbody>
                            <?php
                              
                            $seconds = \Config::get('time/seconds');
                              $participantTable = new Corporate();
                                // $participantTable->selectQuery("SELECT* FROM `events_participant` WHERE `pass_type`!='No pass' AND `state`!=? AND `event_ID`=? $search_sql ORDER BY {$_SESSION['participant_sort']}",$sql_val_array);
                                $participantTable->selectQuery("SELECT* FROM `events_corporate` WHERE `type`='Government' AND `pass_type`!='No pass' AND `state`!=? AND `event_ID`=? $search_sql ORDER BY {$_SESSION['participant_sort']}",$sql_val_array);
                                // $events_select = $participantDb->get('all','events_participant',array('company_ID','=',$company_data->ID));
                                
                                /*Start Pagination Setting*/
                                    $rowsLimit = 50;
                                    $pageNumber = 0;
                                    if(Input::checkInput('page','get','1')){
                                        $pageNumber = (int)sanAsID(Input::get('page','get'));
                                    }
                                    $requesturl = "?check";
                                    
                                    $totalStore=$participantTable->count();
                                    $totalPages = upfloat($totalStore/$rowsLimit);
                                    $offsetNumber = $pageNumber*$rowsLimit;
                                    if($offsetNumber >= $totalStore){
                                        $pageNumber=0;
                                        $offsetNumber = $pageNumber*$rowsLimit;
                                    }
                                /*End Pagination Setting*/
                                
                                $dataArr = array();
                              
                                
                              
                            if(Input::checkInput('request','post',1)){
                                $from_date = Input::get('from_date','post');
                                $to_date = Input::get('to_date','post');
                                echo $from_date;
                                echo $to_date;
                                $participantTable = new Corporate();
                                // $participantTable->selectQuery("SELECT * FROM `events_participant` WHERE `payment_state`='Confirmed' AND `state`!='Confirmed' AND `state`!=? AND `event_ID`=? $search_sql ORDER BY {$_SESSION['participant_sort']} LIMIT {$offsetNumber},{$rowsLimit}",$sql_val_array);
                                // $participantTable->selectQuery("SELECT * FROM `events_participant` WHERE `state`!=? AND `event_ID`=? $search_sql ORDER BY {$_SESSION['participant_sort']} LIMIT {$offsetNumber},{$rowsLimit}",$sql_val_array);
                                // $participantTable->selectQuery("SELECT * FROM `events_participant` WHERE `added_date` >= '25-03-2017' AND `added_date` <= '29-03-2017'");
                                // $participantTable->selectQuery("SELECT * FROM `events_participant` WHERE `added_date` >= '$from_date' AND `added_date` <= '$to_date'");
                                // $participantTable->selectQuery("SELECT * FROM `events_corporate` WHERE `form` == 'API' ORDER BY {$_SESSION['participant_sort']}");
                                // $participantTable->selectQuery("SELECT * FROM `events_participant` WHERE From_date between '$from_date' AND '$to_date'");
                            }elseif(Input::checkInput('keyword','get','0') || strlen(Input::get('keyword','get'))<3){
                                
                                $participantTable = new Corporate();
                                // $participantTable->selectQuery("SELECT * FROM `events_participant` WHERE `pass_type`!='No pass' AND `state`!=? AND `event_ID`=? $search_sql ORDER BY {$_SESSION['participant_sort']} LIMIT {$offsetNumber},{$rowsLimit}",$sql_val_array);
                                $participantTable->selectQuery("SELECT * FROM `events_corporate` WHERE `type`='Government' $search_sql ORDER BY {$_SESSION['participant_sort']} LIMIT {$offsetNumber},{$rowsLimit}",$sql_val_array);
                                
                            }
                              
                                if($participantTable->count()){
                                    $i = 0;
                                    foreach($participantTable->data() as $participant_data){
                                        $i++;
                                        $participant_ID = $participant_data->ID;
                                        $reg_time_ago = Dates::get_timeago($participant_data->added_temp);
                                        $reg_time_ago_array = explode(' ',$reg_time_ago);
                                        $reg_time_ago_n = $reg_time_ago_array[0];
                                        $reg_time_ago_u = $reg_time_ago_array[1];
                                        
                                        // $stateColor =  Functions::getStateCol($participant_data->state);
                                        
                                        // if($participant_data->pass_type == 'Visitor'){
                                        //     $deadline = 14;
                                        // }elseif($participant_data->pass_type == 'Media'){
                                        //     $deadline = 5;
                                        // }else{
                                        //     $deadline = 7;
                                        // }
                                        
                                        // $lapsed_time = Dates::get_daylapsed($participant_data->added_temp,$deadline,'day');
                                        // $lapsed_time_n = (int)$lapsed_time;
                                        // if($participant_data->state == 'Pending'){
                                        //     if($lapsed_time_n < 0){
                                        //         $stateColor = "red";
                                        //     }
                                        // }
                                        // if(($participant_data->payment_state == 'Confirmed' || 
                                        //     $participant_data->payment_state == 'Free'|| 
                                        //     $participant_data->category == 'Media'|| 
                                        //     $participant_data->category == 'Speaker'|| 
                                        //     $participant_data->pass_type == 'Visitor'|| 
                                        //     $participant_data->pass_type == 'Delegate') && $participant_data->state == 'Confirmed'){
                                        //     $stateColor = "#18ab86";                                    
                                        //     $lapsed_time = "--";
                                        // }
                                        // if(($participant_data->pass_type == 'Silver'|| 
                                        //     $participant_data->pass_type == 'Gold'|| 
                                        //     $participant_data->pass_type == 'Platinum'|| 
                                        //     $participant_data->pass_type == 'Exhibitor'|| 
                                        //     $participant_data->pass_type == 'Delegate') && 
                                        //    $participant_data->payment_state != 'Confirmed' &&
                                        //    $participant_data->state == 'Confirmed'){
                                        //     $stateColor = "#01aef0";                                    
                                        //     $lapsed_time = "--";
                                        // }
                                        // if($participant_data->payment_state == 'Confirmed' &&
                                        //    $participant_data->state == 'Denied'){
                                        //     $stateColor = "#fb00a1";                                            
                                        //     $lapsed_time = "--";
                                        // }
                                        
                                        // if($participant_data->payment_state != 'Confirmed' &&
                                        //    $participant_data->state == 'Denied'){
                                        //     $stateColor = "#777";                            
                                        //     $lapsed_time = "--";    
                                        // }
                                        
                                      ?>

                                      <?php
                                        $updated=false;
                                        // if($participant_data->user_ID){
                                        //     $updated=true;
                                        //     $userTable = new User();
                                        //     $userTable->selectQuery("SELECT `ID`,`firstname`,`lastname`,`phone` FROM `app_users` WHERE `ID`=?",array($participant_data->user_ID));
                                        //     if($userTable->count()){
                                        //         $user_data = $userTable->first();
                                        //     }
                                        // }
                                        
                                        // if($participant_data->host_ID){
                                        //     $hostTable = new Corporate();
                                        //     // $hostTable->selectQuery("SELECT * FROM `events_participant` WHERE `ID`=? LIMIT 1",array($participant_data->host_ID));
                                        //     $hostTable->selectQuery("SELECT * FROM `events_corporate` WHERE `ID`=? LIMIT 1",array($participant_data->host_ID));
                                        //     $host_data = $hostTable->first();
                                        // }

                                        
                                        ?>

                                      <tr class="row_layout">
                                        <td>
                                            <a style="border-color: <?=$stateColor?>" class="id popover-el participant-menu-popover-<?=$participant_data->ID?>"><?=$participant_data->ID;?> <i class="fa fa-angle-down pull-right menu_icon"></i></a>
                                        </td>
                                        <td>
                                            <span data-toggle="modal" data-target="#myModal_<?=$participant_data->ID?>" ><?=$participant_data->firstname?> <?=$participant_data->lastname?></span>
                                        </td>
                                        <td>
                                            <span data-toggle="modal" data-target="#myModal_<?=$participant_data->ID?>" ><?php echo $participant_data->email;?></span>
                                        </td>
                                        <td><?=$participant_data->telephone?></td>
                                        <td><?=$participant_data->company_name?></td>
                                        <!-- <td><?=$participant_data->gold?></td> -->
                                        <!-- <td><?=$participant_data->platinum?></td> -->
                                        <td><span><?=$participant_data->added_date?></span></td>
                                        <!-- <td class="text-center"><span><?php echo $lapsed_time;?></span></td> -->
                                        <td><?=$participant_data->country?></td>
                                        <?php /* ?>
                                        <td><span style="color: #fff; background: <?=$stateColor?>; display: block; padding: 2px 5px"><?=$participant_data->status?></span></td>
                                        <td><span><?php echo $updated == true ? $user_data->firstname : '';?></span></td>
                                        <td>
                                            <div>
                                              <a class="participant-menu-popover-<?=$participant_data->ID?> popover-el" tabindex="0" role="button" >More</a>
                                            </div>
                                            
                                            <div id="participant-menu-content-<?=$participant_data->ID?>" class="hidden">
                                                
                                                <form method="post">
                                                    <input type="hidden" name="webToken" value="56">
                                                    <input type="hidden" name="request" value="participant-state">
                                                    <input type="hidden" name="participant-event_id" value="<?=$event_ID?>">
                                                    <input type="hidden" name="participant-company_id" value="<?=$company_data->ID?>">
                                                    <input type="hidden" name="participant-id" value="<?=$participant_data->ID?>">
                                                    <ul class="popover-menu-list">
                                                        <li><a class="menu popover-close" data-popoverid=".participant-menu-popover-<?=$participant_data->ID?>" data-toggle="modal" data-target="#myModal_<?=$participant_data->ID?>"><i class="fa fa-eye icon"></i> View</a></li>

                                                        <?php  
                                                        if($session_user_data->groups == 'Admin' || $session_user_data->groups == 'RG-Admin' || $session_user_data->groups == 'RG-SUPER-Admin'){?>

                                                            <?php // if($participant_data->state!='Confirmed' AND $participant_data->category!='Government' || ($participant_data->state!='Confirmed' AND $participant_data->category=='Government' AND $participant_data->payment_state=='Confirmed')){?>
                                                            <li> 
                                                                <button class="menu" name="confirm" type="submit"><i class="fa fa-check-circle icon"></i> Confirm</button>
                                                            </li>
                                                            <?php // }?>
                                                            <?php //if($participant_data->state!='Denied'){?>
                                                            <li> 
                                                                <button class="menu" name="deny" type="submit"><i class="fa fa-times-circle icon"></i> Deny</button>
                                                            </li>
                                                            <?php //}?>

                                                            <?php //if($participant_data->state!='Pending'){?>
                                                            <li> 
                                                                <button class="menu" name="pending" type="submit"><i class="fa fa-times-circle icon"></i> Pending</button>
                                                            </li>
                                                            <?php //}?>

                                                        <?php }?>

                                                        


                                                        <?php  
                                                        if($session_user_data->groups == 'Admin' || $session_user_data->groups == 'RG-Admin' || $session_user_data->groups == 'RG-SUPER-Admin' || $session_user_data->groups == 'TAS-Admin' || $session_user_data->groups == 'TAS-SUPER-Admin' || $session_user_data->groups == 'OGS-User'){?>
                                                            <li><a class="menu popover-close" data-popoverid=".participant-menu-popover-<?=$participant_data->ID?>" data-toggle="modal" data-target="#myEditModal_<?=$participant_data->ID?>"><i class="fa fa-pencil icon"></i> Edit</a></li>
                                                        <?php }?>
                                                        <?php  
                                                        if($session_user_data->groups == 'Admin' || $session_user_data->groups == 'RG-Admin' || $session_user_data->groups == 'RG-SUPER-Admin' || $session_user_data->groups == 'TAS-Admin' || $session_user_data->groups == 'TAS-SUPER-Admin' || $session_user_data->groups == 'OGS-User' || $session_user_data->groups == 'Sessions-Admin'){?>
                                                            <li><a class="menu popover-close" data-popoverid=".participant-menu-popover-<?=$participant_data->ID?>" data-toggle="modal" data-target="#sessionsInvite_<?=$participant_data->ID?>"><i class="fa fa-pencil icon"></i> Sessions invite</a></li>
                                                        <?php }?>
                                                        <li><a class="menu popover-close" data-popoverid=".participant-menu-popover-<?=$participant_data->ID?>"><i class="fa fa-times icon"></i> Close</a></li>
                                                    </ul>
                                                </form>
                                            </div>
                                            
                                            <script>
                                                $(function(){
                                                    // Enables popover #1
                                                    $(".participant-menu-popover-<?=$participant_data->ID?>").popover({
                                                        html : true, 
                                                        placement : 'bottom', 
                                                        trigger: 'manual',
                                                        content: function() {
                                                          return $("#participant-menu-content-<?=$participant_data->ID?>").html();
                                                        },
                                                        title: function() {
                                                          return $("#participant-menu-title-<?=$participant_data->ID?>").html();
                                                        }
                                                    });
                                                });
                                            </script>
                                        </td>
                                        <?php */ ?>
                                      </tr> 
                                    <!-- Modal -->
                                            <div class="modal fade" id="myModal_<?=$participant_data->ID?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">More Details</h4>
                                                  </div>
                                                  <div class="modal-body">

                                                    <?php
                                                        $foredit = '';
                                                        include 'participant_data'.P;
                                                    ?>
                                                  </div>
                                                  <div class="modal-footer" style="text-align: left">
                                                         
                                                    <?php if($participant_data->category == "Speaker" || $participant_data->category == "Media"){
                                                        $participant_attach = @end(@explode("/",$participant_data->path));
                                                        if($participant_attach){
                                                          ?>
                                                          <div style="display: inline-block"> 
                                                          <a href="<?=DNADMIN._.$participant_data->path?>" class="pull-left btn-sm btn btn-default" download="<?=$participant_attach?>">
                                                             <span class="glyphicon glyphicon-download-alt"></span> Attachment 
                                                            </a>
                                                              <span style="display: inline-block; margin: 5px"><?php echo $participant_attach?></span>
                                                          </div>
                                                        <?php }?>
                                                    <?php }?>
                                                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- Edit modal -->
                                            <div class="modal fade" id="myEditModal_<?=$participant_data->ID?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="post" enctype="multipart/form-data">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Edit category</h4>
                                                        </div>
                                                        <div class="modal-body">

                                                            <?php
                                                                $foredit = 'edit';
                                                                include 'participant_edit'.P;
                                                            ?>
                                                        </div>
                                                        <div class="modal-footer" style="text-align: left">
                                                                 
                                                            <?php if($participant_data->category == "Speaker" || $participant_data->category == "Media"){
                                                                $participant_attach = @end(@explode("/",$participant_data->path));
                                                                if($participant_attach){
                                                                  ?>
                                                                  <div style="display: inline-block"> 
                                                                  <a href="<?=DNADMIN._.$participant_data->path?>" class="pull-left btn-sm btn btn-default" download="<?=$participant_attach?>">
                                                                     <span class="glyphicon glyphicon-download-alt"></span> Attachment 
                                                                    </a>
                                                                      <span style="display: inline-block; margin: 5px"><?php echo $participant_attach?></span>
                                                                  </div>
                                                                <?php }?>
                                                            <?php }?>
                                                            <button name="edit" type="submit" class="btn btn-primary">Submit</button>
                                                            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- Edit modal -->
                                            <div class="modal fade" id="sessionsInvite_<?=$participant_data->ID?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="post">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Invite <?=$participant_data->firstname?> <?=$participant_data->lastname?></h4>
                                                        </div>
                                                        <div class="modal-body">

                                                            <?php
                                                                $foredit = 'edit';
                                                                include 'participant_sessions'.P;
                                                            ?>
                                                        </div>
                                                        <div class="modal-footer" style="text-align: left">
                                                                 
                                                            <?php if($participant_data->category == "Speaker" || $participant_data->category == "Media"){
                                                                $participant_attach = @end(@explode("/",$participant_data->path));
                                                                if($participant_attach){
                                                                  ?>
                                                                  <div style="display: inline-block"> 
                                                                  <a href="<?=DNADMIN._.$participant_data->path?>" class="pull-left btn-sm btn btn-default" download="<?=$participant_attach?>">
                                                                     <span class="glyphicon glyphicon-download-alt"></span> Attachment 
                                                                    </a>
                                                                      <span style="display: inline-block; margin: 5px"><?php echo $participant_attach?></span>
                                                                  </div>
                                                                <?php }?>
                                                            <?php }?>
                                                            <button name="sessions" type="submit" class="btn btn-primary">Submit</button>
                                                            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- end of sessions  -->
                                    <!-- end of modal -->

                                  <?php }?>
                                <tr>
                                    <?php 
                                        if(Input::checkInput('keyword','get','0') || strlen(Input::get('keyword','get'))<3){?>
                                    <td colspan="9">
                                        <?php include 'views/pagination'.PL;?>
                                    </td>
                                    <?php }?>
                                </tr>
                            <?php }else{?>
                                <tr>
                                    <td colspan="7"><br/>No Participant recorded</td>
                                </tr>
                            <?php }?>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.table-responsive -->
                        
                        <script>
                            $(document).on("click", ".popover-close", function(e) {
                                $($(this).data('popoverid')).popover('hide');
                                $($(this).data('popoverid')).removeClass('open');
                            });
                            
                            $('.popover-el').click(function (e) {
                                if(!$(this).hasClass('open')){
                                    $(this).popover('show');
                                    $(this).addClass('open');
                                }else{
                                    $(this).popover('hide');
                                    $(this).removeClass('open');
                                }
                            });

                       
                            $(document).ready(function(){
                                $('body').on('click', function (e) {
                                    $('.popover-el.open').each(function () {
                                        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                                            $(this).popover('hide');
                                            $(this).removeClass('open');
                                        }
                                    });
                                });
                            });
                        </script>
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="<?=DNADMIN?>/app/EventApp/<?=$event_ID?>/participant-list" class="btn btn-sm btn-default btn-flat pull-right">View All Participants</a>
                        <?php  
                            if($session_user_data->groups == 'Admin' || $session_user_data->groups == 'RG-Admin' || $session_user_data->groups == 'RG-SUPER-Admin' || $session_user_data->groups == 'TAS-SUPER-Admin' || $session_user_data->groups == 'OGS-User'){?>
                            <a href="<?=DNADMIN?>/app/EventApp/<?=$event_ID?>/participant-list-exportgovernmentofficial" class="btn btn-sm btn-primary btn-flat pull-right">Export</a>
                        <?php } ?>
                    </div>
                    <!-- /.box-footer -->
                  </div>
              
              
                
                    <div class="box collapsed-box">
                        <div class="box-header with-border">
                          <h3 class="box-title">List color code</h3>

                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                          </div>
                        </div>
                        <div class="box-body" style="display: none;">

                            <div class="pull-left" >
                                <span type="button"style="background: orange; color: #fff; padding: 3px 5px">Pending</span>
                                <span type="button" style="background: red; color: #fff; padding: 3px 5px">Urgent</span>
                                <span type="button" style="background: #01aef0; color: #fff; padding: 3px 5px">Payment Delaying</span>
                                <span type="button" style="background: #18ab86; color: #fff; padding: 3px 5px">Pass Confirmed</span>
                                <span type="button" style="background: #fb00a1; color: #fff; padding: 3px 5px">Denied & Need refund</span>
                                <span type="button" style="background: #777; color: #fff; padding: 3px 5px">Denied</span>
                            </div>
                        </div>
                  </div>
                 <!--RECENT REGISTER -->
          </div>
      </div><!-- /.row -->
    
      <div class="row">
        <div class="col-md-8 col-xs-12">
           
        </div><!-- ./col -->
        <div class="col-md-4 col-xs-12">
           
        </div><!-- ./col -->
      </div><!-- /.row -->
    
</section>