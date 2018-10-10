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
           
            $query =  $otherdb->query("SELECT h.*, f.conclusion, f.methodName FROM household h JOIN followup f ON h.SNO = f.SNO WHERE h.date between '".$fromDate."' and '".$toDate."' AND h.areYouPregnant LIKE 'no' AND h.everFPMethod <> 'TL' AND h.everFPMethod <> 'operation' AND (h.currentFPMethodName = '' OR h.currentFPMethodName LIKE 'TM') AND f.conclusion LIKE 'new user case closed'");
        }
        else if($tableToExport == 'conversions'){   
            
            $query =  $otherdb->query("SELECT h.*, f.conclusion, f.methodName FROM household h JOIN followup f ON h.SNO = f.SNO 
                                            WHERE h.date between '".$fromDate."' and '".$toDate."'
                                            AND (h.currentFPMethodName LIKE 'condom' AND f.methodName IN ('injection','pills','iucd','implant','tl') 
                                            OR h.currentFPMethodName LIKE 'pills' AND f.methodName IN ('injection', 'iucd', 'implant', 'tl') 
                                            OR h.currentFPMethodName LIKE 'injection' AND f.methodName IN ('iucd', 'implant', 'tl') 
                                            OR h.currentFPMethodName LIKE 'iucd' AND f.methodName IN ('tl') 
                                            OR h.currentFPMethodName LIKE 'implant' AND f.methodName IN ('tl'))");
        
        }
        else if($tableToExport == 'household'){
            $query = $otherdb->query("select * from " .$tableToExport." where date between '".$fromDate."' and '".$toDate."'");
        }
        else if($tableToExport == 'notFollowedUp'){
            $query = $otherdb->query("SELECT * FROM household 
                                        WHERE SNO not in (SELECT SNO FROM followup ) 
                                        AND CurrentlyUsingFPMethod LIKE 'no' 
                                        AND WantToUseAnyFPMethod LIKE 'yes'
                                        AND date between '".$fromDate."' and '".$toDate."'");
        }
        else if($tableToExport == 'notNewUser'){
            $query = $otherdb->query("SELECT * FROM household 
                                        WHERE areYouPregnant LIKE 'no' 
                                        AND currentFPMethodName in ('','tm','traditional method') 
                                        AND WantToUseAnyFPMethod like 'yes' 
                                        AND SNO NOT IN 
                                            ( SELECT SNO FROM followup WHERE conclusion LIKE 'new user case closed')
                                        AND date between '".$fromDate."' and '".$toDate."'");
        }        
        else if($tableToExport == ''){
            $query = $otherdb->query("");
        }
        else if($tableToExport == ''){
            $query = $otherdb->query("");
        }
        return $query;
       
    }   

}

// FollowUp 17 : Query for New User
// $query =  $otherdb->query("SELECT h.*, f.conclusion, f.methodName FROM household h JOIN followup f ON h.SNO = f.SNO 
// WHERE f.conclusion LIKE 'New User Case Closed' AND h.Date BETWEEN '2018-01-01' AND '2018-04-30'");
/* $query =  $otherdb->query("SELECT h.SM, 
    count( CASE WHEN f.SMCounselingprovided LIKE 'yes' THEN '' END) as SM_Count,
    count( CASE WHEN f.conclusion LIKE 'new user case closed' THEN '' END) as NU_Count
    FROM household h JOIN followup f ON h.SNO = f.SNO GROUP BY h.SM");*/

//$query =  $otherdb->query("SELECT h.SM, count(f.SMCounselingprovided) FROM household h JOIN followup f ON h.SNO = f.SNO WHERE f.SMCounselingprovided LIKE 'yes' GROUP BY h.SM");
// $query =  $otherdb->query("SELECT h.*, f.conclusion, f.methodname FROM household h JOIN followup f on h.SNO = f.SNO WHERE h.CurrentlyUsingFPMethod LIKE 'no' AND h.WantToUseAnyFPMethod LIKE 'yes' AND f.conclusion <> 'new user case closed'");