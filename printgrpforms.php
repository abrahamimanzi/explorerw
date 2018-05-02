<?php
include 'admin/core/init.php';

if(Input::checkInput('id','get','1')){
    $participant_ID = Input::get('id','get');






                                $_id = Input::get('id','get');
                                if(Input::checkInput('request','get','1')){
                                    $request = Input::get('request','get');
                                }
                                $net_total = 0;
                                    
                                $participantTable = new \Participant();
                                $participantTable->selectQuery("SELECT `ID`,`code`,`payment_rn`,`payment_method`,`residence_country`,`firstname`,`lastname`,`othername`,`email`,`amount`,`payment_state`,`category`,`pass_type`,`state`,`host_account_ID`,`invite_ID` FROM `events_participant` WHERE `host_account_ID`=? AND `payment_state`='Pending' ORDER BY `ID` DESC",array($_id));

                                if(!$participantTable->count()){
                                    Redirect::to(DN.'/404'); 
                                }
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
                                    
                                    // START COMPUTE INVITATION //
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


                                }


                    $cur_digit = strlen($_id);
                    $total_digit = 6;
                    $code_string = $_id;

                    if($cur_digit < $total_digit){
                        while(strlen($code_string) < $total_digit){
                            $code_string = '0'.$code_string;
                        }
                    }

                    $categ_code = "GRP";
                    $subscriber_code = $categ_code.'-'.$code_string;



    // $participantTable = new \Participant();
    // $participantTable->selectQuery("SELECT `code`,`payment_rn`,`payment_state`,`payment_date`,`firstname`,`lastname`,`othername`,`email`,`unit_price`,`amount`,`discount`,`currency`,`category`,`pass_type`,`state`,`receipt_number`,`transaction_number`,`card_issue`,`residence_country`,`residence_city`,`telephone` FROM `events_participant` WHERE `token`=?  ORDER BY `ID` DESC LIMIT 1",array($participant_ID));
    
    // if(!$participantTable->count()){
    //     Redirect::to(DN.'/404'); 
    // }
    
    // $participant_data = $participantTable->first(); 
   
    // $participantItemTable = new \ParticipantItem();
    // $participantItemTable->selectQuery("SELECT* FROM `events_participant_item` WHERE `payment_rn`=? ORDER BY `ID` DESC LIMIT 1",array($participant_data->payment_rn));
    
    // if(!$participantItemTable->count()){
    //     Redirect::to(DN.'/404'); 
    // }
        
    // $participant_item_data = $participantItemTable->first();
    
    // $amount_total = $participant_data->amount;
    // $currency = $participant_data->currency;
    // if ($participant_data->residence_country != "Rwanda") {
    //     $currency = "USD";
    // } else {
    //     $currency = "RWF";
    // }

    if(!Validate::paidPass($participant_data->category)){
         Redirect::to(DN.'/success/'.$participant_data->code.'/success'); 
    }
    // if($participant_data->payment_state == "Confirmed" || $participant_data->payment_state == "Pending"){
        
        class PDF extends FPDF{
            
            // Page header
            function Header()
            {
                $this->Image(DN.'/img/tas-logo.png',30,40,140);
                // Arial bold 15
                $this->SetFont('Arial','B',15);
                
                $this->SetFont('Arial','',10);
                $this->Cell(0,15,'Smart Africa Secretariant',0,0,'R');
                $this->Cell(0,40,'Makuza Peace Plaza 9th Floor, Block C',0,0,'R');
                $this->Cell(0,65,'10 KN4 Avenue, Kigali, Rwanda',0,0,'R');
                $this->Cell(0,95,' www.transformafricasummit.org',0,0,'R');
                $this->Cell(0,125,'Tel: (+250) 732-301-014',0,0,'R');
                $this->Cell(0,150,'Email: enquiries@smartafrica.org',0,0,'R');
                // Move to the right
                $this->Cell(80);
                // Line break
                $this->Ln(90);
                $this->SetDrawColor(244,120,34);
                $this->Cell(0,0,'',1,1,'L');
                $this->Ln(30);
            }

            // Page footer
            function Footer(){
                // Position at 1.5 cm from bottom
                // $this->Image(DN.'/img/holder_email.jpg',0,720,600);
                $this->Image(DN.'/img/banner-01-2.jpg',0,720,600);
                
                $this->SetY(-30);
                $this->SetFont('Arial','',10);
                // Page number
                $this->Cell(0,10,'Page '.$this->PageNo().' of {nb}',0,0,'C');
            }
        }

        // if ($participant_data->card_issue == 'VC') {
        //     $card_issue = 'Visa Card';
        // }else{
        //     $card_issue = 'MastrerCard';
        // }
        
        // Instanciation of inherited class
        $pdf = new PDF('P','pt','a4');
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(true,120);


        $pdf->SetY(160); 
        $pdf->SetFont('Arial','',20);
        // $pdf->Cell(0,0,'Dear'.$participant_data->firstname.' '.$participant_data->lastname.' '.$participant_data->othername,0,0,'C');

        $pdf->Cell(0,0,'Transform Africa Summit 2018 Delegate Payment',0,0,'C');
        
        $pdf->SetY(185); 
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,0,'Kindly use the bank trasnfer details below to make payment:',0,2,'C');


        
        $start_pte = 215;
        $pdf->SetY($start_pte); 
        $pdf->SetFont('Arial','B',10);
        
        $pdf->Cell(0,0,'',0,0,'L');
        $pdf->SetFont('Arial','B',10);
        
        $pdf->SetY($start_pte); 
        $pdf->Cell(50);
        $pdf->Cell(50,0,'',0,0,'C');
        
        $pdf->SetY($start_pte); 
        $pdf->Cell(150);
        $pdf->Cell(50,0,'',0,0,'C');
        
        $pdf->SetY($start_pte); 
        $pdf->Cell(245);
        $pdf->Cell(80,0,'',0,0,'C');
        
        $pdf->SetY($start_pte+10); 
        $pdf->SetDrawColor('200','200','200');
        $pdf->Cell(0,0,'',1,1,'L');


            $pdf->SetFont('Arial','',10);
            $pdf->Cell(0,25,'',0,1,'L');

            $pdf->Ln(-25);
            $pdf->SetX(66);
            $pdf->Cell(40,25,'',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(185);
            $pdf->Cell(40,25,'Reason / Payment Reference:',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(270);
            $pdf->Cell(90,25,$subscriber_code,0,1,'L');

            $pdf->Cell(0,0,'',1,1,'L');

        

            $pdf->SetFont('Arial','',10);
            $pdf->Cell(0,25,'',0,1,'L');

            $pdf->Ln(-25);
            $pdf->SetX(66);
            $pdf->Cell(40,25,'',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(185);
            $pdf->Cell(40,25,'Payment amount',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(270);
            $pdf->Cell(90,25,$net_total.' '.$currency_str,0,1,'L');

            $pdf->Cell(0,0,'',1,1,'L');

        
        

            $pdf->SetFont('Arial','',10);
            $pdf->Cell(0,25,'',0,1,'L');

            $pdf->Ln(-25);
            $pdf->SetX(66);
            $pdf->Cell(40,25,'',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(185);
            $pdf->Cell(40,25,'Account Name',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(270);
            $pdf->Cell(90,25,'Smart Africa Secretariat',0,1,'L');

            $pdf->Cell(0,0,'',1,1,'L');

        
        

            $pdf->SetFont('Arial','',10);
            $pdf->Cell(0,25,'',0,1,'L');

            $pdf->Ln(-25);
            $pdf->SetX(66);
            $pdf->Cell(40,25,'',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(185);
            $pdf->Cell(40,25,'Bank Name',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(270);
            $pdf->Cell(90,25,'Bank of Kigali',0,1,'L');

            $pdf->Cell(0,0,'',1,1,'L');

        
        

            $pdf->SetFont('Arial','',10);
            $pdf->Cell(0,25,'',0,1,'L');

            $pdf->Ln(-25);
            $pdf->SetX(66);
            $pdf->Cell(40,25,'',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(185);
            $pdf->Cell(40,25,'Branch name',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(270);
            $pdf->Cell(90,25,'Headquarters, Kigali - Rwanda',0,1,'L');

            $pdf->Cell(0,0,'',1,1,'L');

        
        

            $pdf->SetFont('Arial','',10);
            $pdf->Cell(0,25,'',0,1,'L');

            $pdf->Ln(-25);
            $pdf->SetX(66);
            $pdf->Cell(40,25,'',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(185);
            $pdf->Cell(40,25,'Swift Code',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(270);
            $pdf->Cell(90,25,'BKIGRWRW',0,1,'L');

            $pdf->Cell(0,0,'',1,1,'L');

        
        

            $pdf->SetFont('Arial','',10);
            $pdf->Cell(0,25,'',0,1,'L');

            $pdf->Ln(-25);
            $pdf->SetX(66);
            $pdf->Cell(40,25,'',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(185);
            $pdf->Cell(40,25,'USD Account No.',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(270);
            $pdf->Cell(90,25,'00040-0697067-39',0,1,'L');

            $pdf->Cell(0,0,'',1,1,'L');

        
        

            $pdf->SetFont('Arial','',10);
            $pdf->Cell(0,25,'',0,1,'L');

            $pdf->Ln(-25);
            $pdf->SetX(66);
            $pdf->Cell(40,25,'',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(185);
            $pdf->Cell(40,25,'RWF Account No.',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(270);
            $pdf->Cell(90,25,'00040-0697066-40',0,1,'L');

            $pdf->Cell(0,0,'',1,1,'L');

        
        

            $pdf->SetFont('Arial','',10);
            $pdf->Cell(0,25,'',0,1,'L');

            $pdf->Ln(-25);
            $pdf->SetX(66);
            $pdf->Cell(40,25,'',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(185);
            $pdf->Cell(40,25,'Bank Address',0,1,'R');

            $pdf->Ln(-25);
            $pdf->SetX(270);
            $pdf->Cell(90,25,'Bank of Kigali, Headquarters KN 4 Ave, Kigali - Rwanda',0,1,'L');

            $pdf->Cell(0,0,'',1,1,'L');

        
        $pdf->SetY(490); 
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,0,'Please do not forget to use your Registration ID as the payment',0,2,'C');

        $pdf->SetY(505); 
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,0,'reference as it is used to identify your payment. Payment should be processed',0,2,'C');

        $pdf->SetY(520); 
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,0,'within 5 working days of submitting the registration form. Please allow 3-4',0,2,'C');

        $pdf->SetY(535); 
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,0,'working days for bank transfer to be cleared. Registration is considered',0,2,'C');

        $pdf->SetY(550); 
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,0,'complete only once the payment has been received. For further information',0,2,'C');

        $pdf->SetY(565); 
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,0,'regarding the payment, contact us on enquiries@smartafrica.org',0,2,'C');
        // $pdf->SetY(215); 
        // $pdf->SetFont('Arial','',13);
        // $pdf->Cell(0,0,'Your Registration ID',0,0,'L');
        
        
        // $pdf->SetY(230);
        // $pdf->SetX(30);
        // $pdf->SetFillColor('255','255','255');
        // $pdf->SetDrawColor('200','200','200');
        // $pdf->Cell(155,30,'',1,1,'L',1);
        
        // $pdf->SetY(245); 
        // $pdf->SetX(35);
        // $pdf->SetFont('Arial','B',13);
        // $pdf->Cell(0,0,$participant_data->code,0,0,'L');
        
        // $pdf->SetY(225); 
        // $pdf->SetFont('Arial','',10);
        // $pdf->Cell(0,-30,'Payment method: '.$card_issue,0,0,'R');
        // $pdf->Cell(0,0,'Receipt #: '.$participant_data->receipt_number,0,0,'R');
        // $pdf->Cell(0,30,'Transaction #: '.$participant_data->transaction_number,0,0,'R');
        // $pdf->Cell(0,60,'Payment Reference #: '.$participant_item_data->payment_rn,0,0,'R');
        
        
        // $pdf->SetY(290);
        // $pdf->SetX(20);
        // $pdf->SetFillColor('240','240','240');
        // $pdf->SetDrawColor('200','200','200');
        // $pdf->Cell(555,105,'',1,1,'L',1);
        
        // $pdf->SetY(310); 
        // $pdf->SetFont('Arial','B',10);
        // $pdf->Cell(0,0,'Bill to:',0,0,'L');
        
        // $pdf->SetY(325);
        // $pdf->SetFont('Arial','',10);
        // $pdf->Cell(0,0,$participant_data->firstname.' '.$participant_data->lastname.' '.$participant_data->othername,0,0,'L');
        // $pdf->SetY(342);
        // $pdf->Cell(0,0,$participant_data->residence_country.' / '.$participant_data->residence_city,0,0,'L');
        // $pdf->SetY(358);
        // $pdf->Cell(0,0,$participant_data->telephone,0,0,'L');
        
        // $payment_info_name = trim($participant_data->firstname.' '.$participant_data->lastname.' '.$participant_data->othername);
        
        // $pdf->SetY(310); 
        // $pdf->SetFont('Arial','B',10);
        // $pdf->Cell(0,0,'Payment Information',0,0,'R');
        // $pdf->SetFont('Arial','',10);
        // $pdf->Cell(0,32,$payment_info_name,0,0,'R');
        // $pdf->Cell(0,64,'Paid: '.$currency.' '.number_format($amount_total),0,0,'R');
      
        
        // $start_pt = 420;
        // $pdf->SetY($start_pt); 
        // $pdf->SetFont('Arial','B',10);
        
        // $pdf->Cell(0,0,'#',0,0,'L');
        // $pdf->SetFont('Arial','B',10);
        
        // $pdf->SetY($start_pt); 
        // $pdf->Cell(50);
        // $pdf->Cell(50,0,'Registration ID',0,0,'C');
        
        // $pdf->SetY($start_pt); 
        // $pdf->Cell(150);
        // $pdf->Cell(50,0,'Item',0,0,'C');
        
        // $pdf->SetY($start_pt); 
        // $pdf->Cell(245);
        // $pdf->Cell(80,0,'Unit Price',0,0,'C');
        
        // $pdf->SetY($start_pt); 
        // $pdf->Cell(360);
        // $pdf->Cell(0,0,'Discount',0,0,'L');
        
        // $pdf->SetY($start_pt); 
        // $pdf->Cell(420);
        // $pdf->Cell(0,0,'Total',0,0,'R');
         
        
        // $pdf->SetY($start_pt+10); 
        // $pdf->SetDrawColor('200','200','200');
        // $pdf->Cell(0,0,'',1,1,'L');
        
        // $items_array = array();
        //  foreach($participantTable->data() as $participant_data){
        //      $items_array[] = array('item'=>$participant_data->category.' Pass',
        //                             'reg_code'=>$participant_data->code,
        //                             'unit_price'=>$currency.' '.number_format($participant_data->unit_price),
                                    // 'discount'=>$participant_data->discount,
        //                             'total'=>$currency.' '.number_format($participant_data->amount));
        // }
        
        // $item_number = 0;
        
        // for($i = 0;$i<count($items_array);$i++){
        //     $item_number++;
        //     $this_row_data = (object)$items_array[$i];

        //     $pdf->SetFont('Arial','',10);
        //     $pdf->Cell(0,25,$item_number,0,1,'L');

        //     $pdf->Ln(-25);
        //     $pdf->SetX(66);
        //     $pdf->Cell(40,25,$this_row_data->reg_code,0,1,'L');

        //     $pdf->Ln(-25);
        //     $pdf->SetX(185);
        //     $pdf->Cell(40,25,$this_row_data->item,0,1,'C');

        //     $pdf->Ln(-25);
        //     $pdf->SetX(270);
        //     $pdf->Cell(90,25,$this_row_data->unit_price,0,1,'C');

            // $pdf->Ln(-25);
            // $pdf->SetX(370);
            // $pdf->Cell(90,25,$this_row_data->discount.' %',0,1,'C');

        //     $pdf->Ln(-25);
        //     $pdf->SetX(480);
        //     $pdf->Cell(90,25,$this_row_data->total,0,1,'R');

        //     $pdf->Cell(0,0,'',1,1,'L');
        // }   
        
         // End Item
        
        // $pdf->SetFont('Arial','B',10);
        // $pdf->Cell(0,35,'Total: '.$currency.' '.number_format($amount_total),0,0,'R'); 
        // $pdf->SetFont('Arial','',10);
        // $pdf->Cell(0,67,'VAT (18%) Inclusive',0,0,'R');

        $pdf->Output('I','RECEIPT-'.$participant_data->code.'.pdf');
        
    // }
    
}



?>

<html>
    <head><title>Invoice</title></head>
    <body>
    </body>
</html>