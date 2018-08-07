<?php
/**
* Filename: ExportModel.php
* Created By: Zeeshan
* Date: 12-07-2018
* Change history:
* ---
*/ 
class ExportModel extends CI_Model{
    public function index($fromDate, $toDate, $tableToExport){
        $otherdb = $this->load->database('otherdb', TRUE);

        if($tableToExport == 'followup'){            
        // FollowUp 19 : Query for fetching fake New Users
            // $query =  $otherdb->query("SELECT h.*, f.methodName FROM household h JOIN followup f ON h.SNO = f.SNO WHERE h.currentFPMethodName = f.methodName AND f.methodName <> '' AND h.currentFPMethodName <> ''");
        // FollowUp 18 : Query for Conversions
           // $query =  $otherdb->query("SELECT h.*, f.methodName FROM household h JOIN followup f ON h.SNO = f.SNO WHERE h.currentFPMethodName <> 'tm' AND h.currentFPMethodName <> f.methodName AND f.methodName <> '' AND h.currentFPMethodName <> ''");
        
            // FollowUp 17 : Query for New User
             $query =  $otherdb->query("SELECT h.*, f.conclusion, f.methodName FROM household h JOIN followup f ON h.SNO = f.SNO WHERE h.date between '".$fromDate."' and '".$toDate."' AND h.areYouPregnant LIKE 'no' AND h.everFPMethod <> 'TL' AND h.everFPMethod <> 'operation' AND (h.currentFPMethodName = '' OR h.currentFPMethodName LIKE 'TM') AND f.conclusion LIKE 'new user case closed'");
        // Actual Query
            //$query =  $otherdb->query("SELECT h.*,f.conclusion, f.methodName FROM household h LEFT JOIN followup f ON h.SNO = f.SNO where  h.date between '".$fromDate."' and '".$toDate."' and f.methodName <> ''");
            
        }
        else{
            $query = $otherdb->query("select * from " .$tableToExport." where date between '".$fromDate."' and '".$toDate."'");
        }
        return $query;
       
    }   
}