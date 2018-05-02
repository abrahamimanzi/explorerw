<?php
include 'admin/core/init.php';
$discount = 0;

if(Input::checkInput('id','get','1')){
    $participant_ID = Input::get('id','get');
    $type = explode('-',$participant_ID);
    if ($type[0] == 'TAS') {
        // echo "TAS";
        $participantTable = new \Participant();
        $participantTable->selectQuery("SELECT `code`,`payment_rn`,`firstname`,`lastname`,`othername`,`email`,`amount`,`payment_state`,`category`,`pass_type`,`status`,`receipt_string`,`state` FROM `events_participant` WHERE `code`=? ORDER BY `ID` DESC LIMIT 1",array($participant_ID));
        
        if($participantTable->count()){
            $participant_data = $participantTable->first(); 
            $ref_number = $participant_data->payment_rn;
        }else{
            // Redirect::to(DN); 
        }
    }elseif ($type[0] == 'GRP') {
        // echo "GRP";
        $participantTable = new \Subscriber();
        $participantTable->selectQuery("SELECT * FROM `subscriber` WHERE `group_ID`=? ORDER BY `ID` DESC LIMIT 1",array($participant_ID));
        
        if($participantTable->count()){
            $participant_data = $participantTable->first(); 
            // $ref_number = $participant_data->payment_rn;
        }else{
           Redirect::to(DN); 
        }
                    // echo $participant_ID;
                    $net_total = 0;
                    $seconds = \Config::get('time/seconds');
                    // $participantTable = new \Participant();
                    // $participantTable->selectQuery("SELECT `ID`,`code`,`payment_rn`,`payment_method`,`residence_country`,`firstname`,`lastname`,`othername`,`email`,`amount`,`payment_state`,`category`,`pass_type`,`state`,`host_account_ID`,`invite_ID` FROM `events_participant` WHERE `host_ID`=? AND `payment_state`='Pending' ORDER BY `ID` DESC",array($participant_ID));
                    // $memberIDs = array();
                    // foreach($participantTable->data() as $participant_data){
                        
                    //     $memberIDs[] = $participant_data->ID;
                    //     $memberDatas[$participant_data->ID] = $participant_data;
                    // }


        $participantTablee = new \Participant();
        $participantTablee->selectQuery("SELECT `ID`,`code`,`payment_rn`,`firstname`,`lastname`,`othername`,`email`,`amount`,`payment_state`,`category`,`pass_type`,`status`,`receipt_string`,`state`,`invite_ID` FROM `events_participant` WHERE `host_ID`=? ORDER BY `ID` DESC LIMIT 1",array($participant_ID));
        $memberIDs = array();

        foreach($participantTablee->data() as $participant_dataa){
                        $memberIDs[] = $participant_dataa->ID;
                        // print_r($memberDatas[$participant_dataa->ID] = $participant_dataa);
                        $currency = Payment::getInput('vpc_Currency');

                        $gross = Functions::passPrice($participant_dataa->pass_type,$currency);
                        $net = $gross;
                        
                        //* START COMPUTE INVITATION //
                        if($participant_dataa->invite_ID){
                            $subscategInviteTable = new \SubscriberCategoryInvite();
                            $subscategInviteTable->selectQuery("SELECT* FROM `subscriber_category_invite` WHERE `ID`=?",array($participant_dataa->invite_ID));

                            if($subscategInviteTable->count()){
                                $invite_ID = $participant_dataa->invite_ID;
                                $subscateginvite_data = $subscategInviteTable->first(); 

                                $subscategory_ID = $subscateginvite_data->subscateg_ID;
                                $subscategTable = new \SubscriberCategory();
                                $subscategTable->selectQuery("SELECT* FROM `subscriber_category` WHERE `ID`='{$subscategory_ID}'");
                                $subscateg_data = $subscategTable->first();
                            }
                        }
                        if($subscateg_data->discount){
                            $discount = $subscateg_data->discount;
                            $net = Functions::discount($gross,$discount);
                        }
                        $net_total += $net; 
                        
                        $memberOtherDatas[$participant_dataa->ID] = (object)array('unit_price'=>$gross,'amount'=>$net,'discount'=>$discount);
        // if($participantTablee->count()){
        //     $participant_dataa = $participantTablee->first(); 
        //     $ref_number = $participant_dataa->payment_rn;
        //     echo $ref_number;
        }
        if($net_total){
            $amount = $net_total;
        }
    }else{
        Redirect::to(DN); 
    }
    
}

$form["ERRORS"] = false;
$form = (object)$form;

?> 
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js">
<head>  
    <?php include 'includes/head-common.php';?>
    <title>Success - Transform Africa Summit 2018</title>
    <link href="<?=DN;?>/css/style.css" rel="stylesheet">
</head>
<body class="home page page-id-2" style="overflow: hidden">
    <?php // include 'views/header-common1.php';?>
    <?php include 'views/header-mc.php';?>
	<div id="wrapper" class="home"> 
        <section class="section-main " style="border-bottom: 1px solid #ddd; padding-bottom: 30px; background: rgba(180, 193, 224, 0.04"> 
        <?php

            $transaction['status'] = Payment::getInput('vpc_TxnResponseCode');
            $transaction['key']    = Payment::getInput('vpc_TransactionNo');
            $transaction['message'] = Payment::getInput('vpc_Message');

            // $reference = getInput('vpc_MerchTxnRef');
            // Get order from the database by the `$reference` generated random number in the request process

//&vpc_Version=1
            $vpc_3DSXID = Payment::getInput('vpc_3DSXID');
            $vpc_3DSenrolled = Payment::getInput('vpc_3DSenrolled');
            $vpc_AVSResultCode = Payment::getInput('vpc_AVSResultCode');
            $vpc_AcqAVSRespCode = Payment::getInput('vpc_AcqAVSRespCode');
            $vpc_AcqCSCRespCode = Payment::getInput('vpc_AcqCSCRespCode');
            $vpc_AcqResponseCode = Payment::getInput('vpc_AcqResponseCode');
            $vpc_Amount = Payment::getInput('vpc_Amount');
            $vpc_AuthorizeId = Payment::getInput('vpc_AuthorizeId');
            $vpc_BatchNo = Payment::getInput('vpc_BatchNo');
            $vpc_CSCResultCode = Payment::getInput('vpc_CSCResultCode');
            $vpc_Card = Payment::getInput('vpc_Card');
            $vpc_Command = Payment::getInput('vpc_Command');
            $vpc_Currency = Payment::getInput('vpc_Currency');
            $vpc_MerchTxnRef = Payment::getInput('vpc_MerchTxnRef');
            $vpc_Merchant = Payment::getInput('vpc_Merchant');
            $vpc_Message = Payment::getInput('vpc_Message');
            $vpc_OrderInfo = Payment::getInput('vpc_OrderInfo');
            $vpc_ReceiptNo = Payment::getInput('vpc_ReceiptNo');
            $vpc_RiskOverallResult = Payment::getInput('vpc_RiskOverallResult');
            $vpc_SecureHash = Payment::getInput('vpc_SecureHash');
            $vpc_SecureHashType = Payment::getInput('vpc_SecureHashType');
            $vpc_TransactionNo = Payment::getInput('vpc_TransactionNo');
            $vpc_TxnResponseCode = Payment::getInput('vpc_TxnResponseCode');
            $vpc_VerSecurityLevel = Payment::getInput('vpc_VerSecurityLevel');
            $vpc_VerStatus = Payment::getInput('vpc_VerStatus');
            $vpc_VerType = Payment::getInput('vpc_VerType');
            $vpc_Version = Payment::getInput('vpc_Version');
            $vpc_CardNum = Payment::getInput('vpc_CardNum');

            // echo $vpc_3DSXID.'<br>';
            // echo $vpc_3DSXID.'<br>';
            // echo $vpc_3DSenrolled;
            // echo $vpc_AVSResultCode;
            // echo $vpc_AcqAVSRespCode;
            // echo $vpc_AcqCSCRespCode;
            // echo $vpc_AcqResponseCode;
            // echo $vpc_Amount;
            // echo $vpc_AuthorizeId;
            // echo $vpc_BatchNo;
            // echo $vpc_CSCResultCode;
            // echo $vpc_Card;
            // echo $vpc_Command;
            // echo $vpc_Currency;
            // echo $vpc_MerchTxnRef;
            // echo $vpc_Merchant;
            // echo $vpc_Message;
            // echo $vpc_OrderInfo;
            // echo $vpc_ReceiptNo;
            // echo $vpc_RiskOverallResult;
            // echo $vpc_SecureHash;
            // echo $vpc_SecureHashType;
            // echo $vpc_TransactionNo;
            // echo $vpc_TxnResponseCode;
            // echo $vpc_VerSecurityLevel;
            // echo $vpc_VerStatus;
            // echo $vpc_VerType;
            // echo $vpc_Version;

            $participant_code = Input::get('id');
            $process = Input::get('process');

            if($process != 'accommondation'){
                $category = explode('-', $participant_code);
                $category = $category[1];
                $categories = array("FTG", "MSGSC", "VIS","GSILC","ISILC","IGOL","IPLAC","DMSIL","DMGOL","DMPLA","PSFSC","PSFGC",
                    "PSFPC","DPSC","DPGC","DPPC","MSILC","MGOLC","MPLAC","PSILC","PGOLC","PPLAC","SSILC","SGOLC","SPLAC","GSILC",
                    "GGOLC","GPLAC","ESILC","EGOLC","EPLAC","SPSC","SPGC","SPPC","FTGSC","FTGGC","FTGPC","MSGSC","MSGGC","MSGPC",
                    "GSC","GGC","GPC","MDA","NOC","ORG","LIA","ASC","SEC","PTL","MED","CTR","TEC","CON","SPE","GOV","DEL","REQ",
                    "EXH","ISILC","IGOL","IPLAC","GSILC","GGOLC","GPLAC","SAGSC","SAGGC","SAGPC","SMAO","EVM","USH","CLI","MSG",
                    "ENT","BSC","BGC","BPC");


                if($transaction['status'] == "0" && $transaction['message'] == "Approved") {

                    $participant_code = Input::get('id','get');
                    if ($type[0] == 'TAS') {
                        $discount = 0;
                        $participantTable = new \Participant();
                        $participantTable->selectQuery("SELECT `ID`,`code`,`payment_rn`,`payment_method`,`firstname`,`lastname`,`othername`,`email`,`package_type`,`category`,`pass_type`,`state`,`residence_country`,`token` FROM `events_participant` WHERE `code`=? AND `payment_state`='Pending' OR `payment_state`='Cancelled' ORDER BY `ID` DESC LIMIT 1",array($participant_code));

                        if(!$participantTable->count()){
                            Redirect::to(DN.'/404');
                        }else{
                            $participant_data = $participantTable->first(); 
                        }
                        
                        $payment_host_data = $participant_data;

                        // Save transaction information in the database
                        // Display transaction details
                        //https://migs.mastercard.com.au/ssl?paymentId=9080421090351159358&currentTimeStamp=1487579404418
                            $member_reg_data = $participant_data;
                            $member_other_data = $memberOtherDatas;
                            // $member_payment_data = $paymentResult['payment_data'];
                            $member_payment_data = Input::get('vpc_AcqResponseCode',
                                'vpc_Amount','vpc_AuthorizeId','vpc_BatchNo','vpc_Currency',
                                'vpc_Locale','vpc_MerchTxnRef','vpc_Merchant','vpc_Message',
                                'vpc_ReceiptNo','vpc_SecureHash','vpc_SecureHashType',
                                'vpc_TransactionNo','vpc_TxnResponseCode','vpc_3DSXID',
                                'vpc_Command','vpc_OrderInfo');
                            $seconds = \Config::get('time/seconds');  
                            
                            $participantTable = new \Participant();
                            $participantTable->update(array(
                                'payment_state'=>'Confirmed',
                                'payment_date'=>$seconds,
                                'payment_rn'=>$payment_host_data->code,
                                // 'status'=>$member_payment_data->txnResponseCode,
                                'receipt_number'=>$vpc_ReceiptNo,
                                'card_issue'=>$vpc_Card,
                                'card_number'=>$vpc_CardNum,
                                'transaction_number'=>$vpc_TransactionNo
                                // 'receipt_string'=>$member_payment_data->receipt_string,
                            ),$participant_data->ID);

                            //&vpc_AcqAVSRespCode=Unsupported&vpc_AcqCSCRespCode=Unsupported&vpc_AcqResponseCode=00&vpc_Amount=635000&vpc_AuthorizeId=515010&vpc_BatchNo=20170220&vpc_CSCResultCode=Unsupported&vpc_Card=VC&vpc_Command=pay&vpc_Currency=RWF&vpc_Locale=en&vpc_MerchTxnRef=5899070691348419&vpc_Merchant=TESTBOK000003&vpc_Message=Approved&vpc_OrderInfo=TAS-PLA-000018&vpc_ReceiptNo=705120515010&vpc_RiskOverallResult=ACC&vpc_SecureHash=9004458FA1A92DD73EF225836C687BE9BC32A00BD59687C3A863C17DA5A7DCAC&vpc_SecureHashType=SHA256&vpc_TransactionNo=1100000034&vpc_TxnResponseCode=0&vpc_VerSecurityLevel=06&vpc_VerStatus=E&vpc_VerType=3DS&vpc_Version=1

                            $payment_log_token = md5($payment_host_data->code.$seconds);
                            
                            $participantItemTable = new ParticipantItem();
                            $participantItemTable->insert(array( 
                                'host_ID'=>$payment_host_data->code, 
                                'command'=>$vpc_Command,
                                'amount'=>$vpc_Amount,
                                'currency'=>$vpc_Currency,
                                // 'order_info'=>$member_payment_data->vpc_OrderInfo,
                                // 'receipt_string'=>$member_payment_data->receipt_string,
                                'receipt_number'=>$vpc_ReceiptNo,
                                'transaction_number'=>$vpc_TransactionNo,
                                'payment_rn'=>$payment_host_data->code,
                                'payment_date'=>$seconds,
                                'payment_state'=>$vpc_Message,
                                'type'=>'Single',
                                'card_issue'=>$vpc_Card,
                                'card_number'=>$vpc_CardNum,
                                'token'=>$payment_log_token
                            ));
                    }elseif ($type[0] == 'GRP') {
                        // echo "GRP";
                        $_id = $type[1];
                        $payment_host_ID = Input::get('id','get');
                        $participantTable = new \Participant();
                        /* comfrim participant in group */

                            $net_total = 0;
                                
                            $participantTable = new \Participant();
                            $participantTable->selectQuery("SELECT `ID`,`code`,`payment_rn`,`payment_method`,`residence_country`,`firstname`,`lastname`,`othername`,`email`,`amount`,`payment_state`,`category`,`pass_type`,`state`,`host_account_ID`,`invite_ID` FROM `events_participant` WHERE `host_account_ID`=? AND `payment_state`='Pending' ORDER BY `ID` DESC",array($_id));
                            $i = 0;
                            foreach($participantTable->data() as $participant_data){
                                $i++;
                                $discount = false;
                                if(Input::checkInput('currency','get',1)){
                                    $get_currency = Input::get('currency','get');
                                    $currency = $get_currency == "rwf" ? "Local" : "Other";
                                }
                                
                                $currency_str = $currency == "Local" ? "RWF" : "USD";
                                $gross = Functions::passPrice($participant_data->pass_type,$currency);
                                $net = $gross;
                                
                                //* START COMPUTE INVITATION //
                                if($participant_data->invite_ID){
                                    $subscategInviteTable = new \SubscriberCategoryInvite();
                                    $subscategInviteTable->selectQuery("SELECT* FROM `subscriber_category_invite` WHERE `ID`=?",array($participant_data->invite_ID));

                                    if($subscategInviteTable->count()){
                                        $invite_ID = $participant_data->invite_ID;
                                        $subscateginvite_data = $subscategInviteTable->first(); 

                                        $subscategory_ID = $subscateginvite_data->subscateg_ID;
                                        $subscategTable = new \SubscriberCategory();
                                        $subscategTable->selectQuery("SELECT* FROM `subscriber_category` WHERE `ID`='{$subscategory_ID}'");
                                        $subscateg_data = $subscategTable->first();
                                    }
                                }
                                if($subscateg_data->discount){
                                    $discount = $subscateg_data->discount;
                                    $net = Functions::discount($gross,$discount);
                                }
                                $net_total += $net; 

                                // print_r($participant_data->ID.'<br>');
                                $seconds = \Config::get('time/seconds');  
                                
                                $participantTable = new \Participant();
                                $participantTable->update(array(
                                    'payment_state'=>'Confirmed',
                                    'registration_type'=>'Group',
                                    'payment_date'=>$seconds,
                                    'payment_rn'=>$payment_host_data->code,
                                    // 'status'=>$member_payment_data->txnResponseCode,
                                    'receipt_number'=>$vpc_ReceiptNo,
                                    'card_issue'=>$vpc_Card,
                                    'card_number'=>$vpc_CardNum,
                                    'transaction_number'=>$vpc_TransactionNo
                                    // 'receipt_string'=>$member_payment_data->receipt_string,
                                ),$participant_data->ID);
                            }

                        /* end comfrim participant in group */
                        /*
                        foreach($memberIDs as $member_reg_ID){
                            $member_reg_data = $memberDatas[$member_reg_ID];
                            $member_other_data = $memberOtherDatas[$member_reg_ID];
                            // $member_payment_data = $paymentResult['payment_data'];
                            $participantTable->update(array(
                                // 'host_ID'=>$payment_host_ID, 
                                // 'unit_price'=>$member_other_data->unit_price,
                                // 'amount'=>$member_other_data->amount,
                                // 'discount'=>$member_other_data->discount,
                                // 'currency'=>$member_payment_data->currency,
                                // 'payment_state'=>'Confirmed',
                                'payment_date'=>$seconds,
                                // 'payment_rn'=>$payment_Ref,
                                // 'status'=>$member_payment_data->txnResponseCode,
                                // 'receipt_string'=>$member_payment_data->receipt_string,
                                // 'receipt_number'=>$member_payment_data->receiptNo,
                                // 'transaction_number'=>$member_payment_data->transactionNo


                                'payment_state'=>'Confirmed',
                                'payment_date'=>$seconds,
                                'payment_rn'=>$participant_ID,
                                'receipt_number'=>$vpc_ReceiptNo,
                                'card_issue'=>$vpc_Card,
                                'card_number'=>$vpc_CardNum,
                                'transaction_number'=>$vpc_TransactionNo
                                // 'receipt_string'=>$member_payment_data->receipt_string,
                            ),$member_reg_ID);
                        }
                        */
                        $payment_log_token = md5($participant_ID.$seconds);
                        
                        $participantItemTable = new ParticipantItem();
                        $participantItemTable->insert(array(
                            // 'host_ID'=>$payment_host_ID, 
                            // 'command'=>$member_payment_data->command,
                            // 'amount'=>$net_total,
                            // 'currency'=>$member_payment_data->currency,
                            // 'order_info'=>$member_payment_data->orderInfo,
                            // 'receipt_string'=>$member_payment_data->receipt_string,
                            // 'receipt_number'=>$member_payment_data->receiptNo,
                            // 'transaction_number'=>$member_payment_data->transactionNo,
                            // 'payment_rn'=>$payment_Ref,
                            // 'payment_date'=>$seconds,
                            // 'payment_state'=>'Confirmed',
                            // 'type'=>'Group',
                            // 'token'=>$payment_log_token

                                'host_ID'=>$participant_ID, 
                                'command'=>$vpc_Command,
                                'amount'=>$vpc_Amount,
                                'currency'=>$vpc_Currency,
                                // 'order_info'=>$member_payment_data->vpc_OrderInfo,
                                // 'receipt_string'=>$member_payment_data->receipt_string,
                                'receipt_number'=>$vpc_ReceiptNo,
                                'transaction_number'=>$vpc_TransactionNo,
                                'payment_rn'=>$participant_ID,
                                'payment_date'=>$seconds,
                                'payment_state'=>$vpc_Message,
                                'type'=>'Group',
                                'card_issue'=>$vpc_Card,
                                'card_number'=>$vpc_CardNum,
                                'token'=>$payment_log_token
                        ));
                    }else{
                        Redirect::to(DN); 
                    }
                    $email_status = Payment::paymentConfirmedEmail(array($participant_data->ID));
                    include 'views/register/success.php';
                } elseif (in_array($category, $categories)) {
                    include 'views/register/registration-success.php';
                } elseif ($process == "accommondation") {
                    include 'views/register/registration-success.php';
                } elseif ($process == "group") {
                    include 'views/register/group-success.php';
                } elseif ($process == "corporate") {
                    include 'views/register/corporate-success.php';
                }  elseif ($process == "invitation") {
                    include 'views/register/invitation-success.php';
                } elseif ($process == "member") {
                    include 'views/register/member-success.php';
                }else {

                    // Display error
                    // echo $transaction['status'] = getInput('vpc_TxnResponseCode') .'<br>';
                    // echo $transaction['key']    = getInput('vpc_TransactionNo') .'<br>';
                    // echo $transaction['message'] = getInput('vpc_Message');

                    $participant_code = Input::get('id','get');
                    $discount = 0;
                    $participantTable = new \Participant();
                    $participantTable->selectQuery("SELECT `ID`,`code`,`payment_rn`,`payment_method`,`firstname`,`lastname`,`othername`,`email`,`package_type`,`category`,`pass_type`,`state`,`residence_country`,`token` FROM `events_participant` WHERE `code`=? AND `payment_state`='Pending' OR `payment_state`='Cancelled' ORDER BY `ID` DESC LIMIT 1",array($participant_code));

                    if(!$participantTable->count()){
                        Redirect::to(DN.'/404');
                    }else{
                        $participant_data = $participantTable->first(); 
                    }
                    
                    $payment_host_data = $participant_data;

                    $member_reg_data = $participant_data;
                    // $member_other_data = $memberOtherDatas;
                    // $member_payment_data = $paymentResult['payment_data'];
                    $member_payment_data = Input::get('vpc_AcqResponseCode',
                        'vpc_Amount','vpc_AuthorizeId','vpc_BatchNo','vpc_Currency',
                        'vpc_Locale','vpc_MerchTxnRef','vpc_Merchant','vpc_Message',
                        'vpc_ReceiptNo','vpc_SecureHash','vpc_SecureHashType',
                        'vpc_TransactionNo','vpc_TxnResponseCode','vpc_3DSXID',
                        'vpc_Command','vpc_OrderInfo');
                    $seconds = \Config::get('time/seconds');  
                    
                    $participantTable = new \Participant();
                    $participantTable->update(array(
                        'payment_state'=>'Cancelled',
                        'payment_date'=>$seconds,
                        'payment_rn'=>$payment_host_data->code,
                        // 'status'=>$member_payment_data->txnResponseCode,
                        'receipt_number'=>$vpc_ReceiptNo,
                        'transaction_number'=>$vpc_TransactionNo
                        // 'receipt_string'=>$member_payment_data->receipt_string,
                    ),$participant_data->ID);

                    $payment_log_token = md5($payment_host_data->code.$seconds);
                    
                    $participantItemTable = new ParticipantItem();
                    $participantItemTable->insert(array( 
                        'host_ID'=>$payment_host_data->code, 
                        'command'=>$vpc_Command,
                        'amount'=>$vpc_Amount,
                        'currency'=>$vpc_Currency,
                        // 'order_info'=>$member_payment_data->vpc_OrderInfo,
                        // 'receipt_string'=>$member_payment_data->receipt_string,
                        'receipt_number'=>$vpc_ReceiptNo,
                        'transaction_number'=>$vpc_TransactionNo,
                        'payment_rn'=>$payment_host_data->code,
                        'payment_date'=>$seconds,
                        'payment_state'=>'Cancelled',
                        'type'=>'Single',
                        'token'=>$payment_log_token
                    ));

                    $email_status = Payment::paymentCancelledEmail(array($participant_data->ID));

                    include 'views/register/decline.php';
                }
            }else{
                include 'views/register/registration-success.php';
            }
        ?>
        
        </section>
        
        <?php include 'views/social.php';?>            
    </div><!--wrapper--> 
    <?php include 'views/footer-common.php';?>
</body>
</html>