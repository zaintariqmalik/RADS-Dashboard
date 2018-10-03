<?php
/**
* Filename: ExportModel.php
* Created By: Muhammad Zeeshan Shahzad
* Date: 24-08-2018
* Change history:
* ---
*/ 
class HouseholdFormModel extends CI_Model{

    public function index(){
        $otherdb = $this->load->database('otherdb', TRUE);

        $currentlyPregnant =  $otherdb->query("SELECT areYouPregnant as question, COUNT(*) as count FROM household GROUP BY areYouPregnant desc Having (areYouPregnant IS NOT NULL and areYouPregnant <> 'No Response') ");
        
        
        $pregnancyCheckup =  $otherdb->query("SELECT pregnancyCheckUp as question,COUNT(*) as count FROM household GROUP BY pregnancyCheckUp desc Having (pregnancyCheckUp <> '' and pregnancyCheckUp <> 'No Respons')");
        
        $currentlyUsingFPMethod =  $otherdb->query("SELECT currentlyUsingFPMethod as question, COUNT(*) as count FROM household GROUP BY CurrentlyUsingFPMethod desc Having (CurrentlyUsingFPMethod <> '' and CurrentlyUsingFPMethod <> 'missing' )");
        

        $currentFPMethodName =  $otherdb->query("SELECT currentFPMethodName as question,COUNT(*) as count FROM household GROUP BY currentFPMethodName  Having currentFPMethodName <> '' ");
        

        $reasonForNotUsingFPMethod =  $otherdb->query("SELECT COUNT(CASE 
                                                                WHEN Fear LIKE 'yes' then '' 
                                                                END) as Fear,
                                                        COUNT(CASE 
                                                                WHEN NoPermissionFromHusband LIKE 'yes' then '' 
                                                                END) as HusbandPermission,
                                                        COUNT(CASE 
                                                                WHEN NoPermissionFromMotherInLaw LIKE 'yes' then '' 
                                                                END) as MotherPermission,
                                                        COUNT(CASE 
                                                                WHEN FamilyNotComplete LIKE 'yes' then '' 
                                                                END) as FamilyNotComplete,
                                                        COUNT(CASE 
                                                                WHEN OtherReasonForNotUsing <> '' then ''
                                                                END) as Other
                                                        FROM household");
        
        
        $everFPMethodUsed =  $otherdb->query("SELECT EveryUseFPMethod as question,COUNT(*) as count FROM household GROUP BY EveryUseFPMethod desc Having EveryUseFPMethod <> ''");
        
        $everFPMethodName =  $otherdb->query("SELECT everFPMethod as question,COUNT(*) as count FROM household GROUP BY everFPMethod Having (everFPMethod <> '' and everFPMethod <> 'Missing')");
        
        $facedSideEffects =  $otherdb->query("SELECT FaceSideEffects as question, COUNT(*) FROM household GROUP BY FaceSideEffects Having FaceSideEffects <> ''");
        // print_r($currentlyPregnant->result());
        // print_r($pregnancyCheckup->result());   
        // print_r($currentlyUsingFPMethod->result()); 
        // print_r($everFPMethodUsed->result());  

        // print_r($currentFPMethodName->result()); 
        // print_r($reasonForNotUsingFPMethod->row()); 
        // print_r($everFPMethodName->result()); 
        // exit();

        return array(
            'currentlyPregnant' => $currentlyPregnant->result(),
            'pregnancyCheckup' => $pregnancyCheckup->result(),
            'currentlyUsingFPMethod' => $currentlyUsingFPMethod->result(),
            'currentFPMethodName' => $currentFPMethodName->result(),
            'reasonForNotUsingFPMethod' => $reasonForNotUsingFPMethod->row(),
            'everFPMethodUsed' => $everFPMethodUsed->result(),
            'everFPMethodName' => $everFPMethodName->result(),
        );
    }
}

   