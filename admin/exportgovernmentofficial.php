<?php 
require_once 'core/init.php';
$db = DB::getInstance();

    $dataArr = array();
    $event_ID = Input::get('id','get');
    // $agentClass = new Participant();
    // $agentClass->select(" WHERE `event_ID`='{$event_ID}' AND `payment_state`='Confirmed' OR `payment_state`='Free' AND `payment_state`!='Pending' AND `pass_type`!='No pass' AND `state`!='Confirmed'");
    // $agentClass->select(" WHERE (`pass_type`='Platinum')");


    $agentClass = new Member();
    // $agentClass->selectQuery("SELECT * FROM `events_member` WHERE `type`='Government' ");
    $agentClass->select(" WHERE (`type`='Government')");
    
    if($agentClass->count()){
            $i = 0;
            foreach($agentClass->data() as $agent_data){
                $i++;
                $photo = @end(explode('/',@$agent_data->photo));
//                $photo = $agent_data->photo;
                $dataArr[] = array(
                    // "Pass TYPE"=>$agent_data->pass_type,
                    "FIRST NAME"=>$agent_data->firstname,
                    "LAST NAME"=>$agent_data->lastname,
                    "EMAIL"=>$agent_data->email,
                    "TELPHONE"=>$agent_data->telephone,
                    "COMPANY NAME"=>$agent_data->company_name,
                    "COMPANY CATEGORY"=>$agent_data->company_category,
                    "JOB TITLE"=>$agent_data->jobtitle,
                    "COUNTRY"=>$agent_data->country,
                    // "GOLD"=>$agent_data->gold,
                    // "PLATINUM"=>$agent_data->platinum,
                    // "RESIDENCE COUNTRY"=>$agent_data->residence_country,
                    // "ID"=>$agent_data->ID,
                    "STATE"=>$agent_data->status
                    // "STATUS PAYMENT"=>$agent_data->payment_state,
                    // "INVITATION"=>$agent_data->payment_state,
                    // "ID NUMBER / PASSPORT NUMBER"=>$agent_data->document_number,
                    // "REG ID"=>$agent_data->code,
                    // "COMPANY NAME"=>$agent_data->company_name
                    // "PHOTO"=>$photo
                    );
            }



          $data = $dataArr;
          function cleanData(&$str)
        {
            $str = preg_replace("/\t/", "\\t", $str);
            $str = preg_replace("/\r?\n/", "\\n", $str);
            if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
          }
    //
    //                                  // file name for download
          $filename = "TAS_Government_" . date('Ymd') . ".xls";
    //
          header("Content-Disposition: attachment; filename=\"$filename\"");
          header("Content-Type: application/vnd.ms-excel");
    //
          $flag = false;
          foreach($data as $row) {
            if(!$flag) {
              // display field/column names as first row
              echo implode("\t", array_keys($row)) . "\n";
              $flag = true;
            }
            array_walk($row, __NAMESPACE__ . '\cleanData');
            echo implode("\t", array_values($row)) . "\n";
          }
    }
?>