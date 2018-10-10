<?php //define('Basepath') or die("No direct access Allowed");

/**
* Filename: DashboardSummaryModel.php
* Created By: Zain Tariq
* Date: 03-05-2018
* Change history:
* ---
*/

class DashboardSummaryModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

// Mohalla Wise Data Fetching Queries.... 
    
        // ...... Mohalla    ...... // 

    public function mohalla($mohalla){
        
        $otherdb = $this->load->database('otherdb',TRUE);
        
        $hh_query = $otherdb->query("SELECT count(*) as mohalla from household where muhala like '$mohalla'");
        $household_visits = $hh_query->row();

        $cu_query = $otherdb->query("SELECT count(*) as cu from household where muhala like '$mohalla' and CurrentlyUsingFPMethod LIKE 'yes'");
        $mohalla_cu = $cu_query->row();

        $nu_query = $otherdb->query("SELECT count(*) as nu 
                                     from household 
                                     where muhala like '$mohalla' and 
                                          SNO IN( select SNO from followup
                                            where conclusion like 'New User'
                                            or conclusion like 'New User Case Closed')
                                    ");
        $mohalla_nu = $nu_query->row();
        
        return array(
            'hhVisits' =>  $household_visits->mohalla,
            'currentUser' => $mohalla_cu->cu,
            'newUser' => $mohalla_nu->nu,
        );

    }
 // ...... Mohalla Wise Details Ends   ...... // 
 
        public function monthWiseCBT(){
            $otherdb = $this->load->database('otherdb',TRUE);
            
            $jan_data = $otherdb->query("SELECT count(*) as jan_count FROM household where Date BETWEEN '0000/00/00' AND '2018/01/31' AND visitResult Like 'CBT or PDI'");
            $cbt_jan_res = $jan_data->row();

            $feb_data = $otherdb->query("SELECT count(*) as feb_count FROM household where Date BETWEEN '2018/02/01' AND '2018/02/29' AND visitResult Like 'CBT or PDI'");
            $cbt_feb_res = $feb_data->row();

            $mar_data = $otherdb->query("SELECT count(*) as mar_count FROM household where Date BETWEEN '2018/03/01' AND '2018/03/31' AND visitResult Like 'CBT or PDI'");
            $cbt_mar_res = $mar_data->row();

            $apr_data = $otherdb->query("SELECT count(*) as apr_count FROM household where Date BETWEEN '2018/04/01' AND '2018/04/30' AND visitResult Like 'CBT or PDI'");
            $cbt_apr_res = $apr_data->row();

            $may_data = $otherdb->query("SELECT count(*) as may_count FROM household where Date BETWEEN '2018/05/01' AND '2018/05/31' AND visitResult Like 'CBT or PDI'");
            $cbt_may_res = $may_data->row();

            $jun_data = $otherdb->query("SELECT count(*) as jun_count FROM household where Date BETWEEN '2018/06/01' AND '2018/06/30' AND visitResult Like 'CBT or PDI'");
            $cbt_jun_res = $jun_data->row();

            $jul_data = $otherdb->query("SELECT count(*) as jul_count FROM household where Date BETWEEN '2018/07/01' AND '2018/07/31' AND visitResult Like 'CBT or PDI'");
            $cbt_jul_res = $jul_data->row();

            $aug_data = $otherdb->query("SELECT count(*) as aug_count FROM household where Date BETWEEN '2018/08/01' AND '2018/08/31' AND visitResult Like 'CBT or PDI'");
            $cbt_aug_res = $aug_data->row();

            $sept_data = $otherdb->query("SELECT count(*) as sept_count FROM household where Date BETWEEN '2018/09/01' AND '2018/09/30' AND visitResult Like 'CBT or PDI'");
            $cbt_sept_res = $sept_data->row();

            $oct_data = $otherdb->query("SELECT count(*) as oct_count FROM household where Date BETWEEN '2018/10/01' AND '2018/10/31' AND visitResult Like 'CBT or PDI'");
            $cbt_oct_res = $oct_data->row();

            return array(
                'jan_data' => $cbt_jan_res,
                'feb_data' => $cbt_feb_res,
                'mar_data' => $cbt_mar_res,
                'apr_data' => $cbt_apr_res,
                'may_data' => $cbt_may_res,
                'jun_data' => $cbt_jun_res,
                'jul_data' => $cbt_jul_res,
                'aug_data' => $cbt_aug_res,
                'sept_data' => $cbt_sept_res,
                'oct_data' => $cbt_oct_res,
            );
        }
 // ...... Month Wise Household Details   ...... // 

    public function monthWiseHouseholdCount(){
        $otherdb = $this->load->database('otherdb',TRUE);
        
        $jan_data = $otherdb->query("SELECT count(*) as jan_count FROM household where Date BETWEEN '0000/00/00' AND '2018/01/31'");
        $hh_jan_res = $jan_data->row();

        $feb_data = $otherdb->query("SELECT count(*) as feb_count FROM household where Date BETWEEN '2018/02/01' AND '2018/02/29'");
        $hh_feb_res = $feb_data->row();

        $mar_data = $otherdb->query("SELECT count(*) as mar_count FROM household where Date BETWEEN '2018/03/01' AND '2018/03/31'");
        $hh_mar_res = $mar_data->row();

        $apr_data = $otherdb->query("SELECT count(*) as apr_count FROM household where Date BETWEEN '2018/04/01' AND '2018/04/30'");
        $hh_apr_res = $apr_data->row();

        $may_data = $otherdb->query("SELECT count(*) as may_count FROM household where Date BETWEEN '2018/05/01' AND '2018/05/31'");
        $hh_may_res = $may_data->row();

        $jun_data = $otherdb->query("SELECT count(*) as jun_count FROM household where Date BETWEEN '2018/06/01' AND '2018/06/30'");
        $hh_jun_res = $jun_data->row();

        $jul_data = $otherdb->query("SELECT count(*) as jul_count FROM household where Date BETWEEN '2018/07/01' AND '2018/07/31'");
        $hh_jul_res = $jul_data->row();
        
        $aug_data = $otherdb->query("SELECT count(*) as aug_count FROM household where Date BETWEEN '2018/08/01' AND '2018/08/31'");
        $hh_aug_res = $aug_data->row();
        
        $sept_data = $otherdb->query("SELECT count(*) as sept_count FROM household where Date BETWEEN '2018/09/01' AND '2018/09/30'");
        $hh_sept_res = $sept_data->row();
        
        $oct_data = $otherdb->query("SELECT count(*) as oct_count FROM household where Date BETWEEN '2018/10/01' AND '2018/10/31'");
        $hh_oct_res = $oct_data->row();

        return array(
            'jan_data' => $hh_jan_res,
            'feb_data' => $hh_feb_res,
            'mar_data' => $hh_mar_res,
            'apr_data' => $hh_apr_res,
            'may_data' => $hh_may_res,
            'jun_data' => $hh_jun_res,
            'jul_data' => $hh_jul_res,
            'aug_data' => $hh_aug_res,
            'sept_data' => $hh_sept_res,
            'oct_data' => $hh_oct_res,
        );
    }
 // ...... Month Wise Household Details Ends   ...... // 

 // ...... Month Wise Followup Details   ...... // 
 public function monthWiseFollowupCount(){
        $otherdb = $this->load->database('otherdb',TRUE);
        
        $jan_data = $otherdb->query("SELECT count(*) as jan_count FROM followup where Date BETWEEN '2018/01/01' AND '2018/01/31'");
        $fu_jan_res = $jan_data->row();

        $feb_data = $otherdb->query("SELECT count(*) as feb_count FROM followup where Date BETWEEN '2018/02/01' AND '2018/02/29'");
        $fu_feb_res = $feb_data->row();

        $mar_data = $otherdb->query("SELECT count(*) as mar_count FROM followup where Date BETWEEN '2018/03/01' AND '2018/03/31'");
        $fu_mar_res = $mar_data->row();

        $apr_data = $otherdb->query("SELECT count(*) as apr_count FROM followup where Date BETWEEN '2018/04/01' AND '2018/04/30'");
        $fu_apr_res = $apr_data->row();

        $may_data = $otherdb->query("SELECT count(*) as may_count FROM followup where Date BETWEEN '2018/05/01' AND '2018/05/31'");
        $fu_may_res = $may_data->row();

        $jun_data = $otherdb->query("SELECT count(*) as jun_count FROM followup where Date BETWEEN '2018/06/01' AND '2018/06/30'");
        $fu_jun_res = $jun_data->row();

        $jul_data = $otherdb->query("SELECT count(*) as jul_count FROM followup where Date BETWEEN '2018/07/01' AND '2018/07/31'");
        $fu_jul_res = $jul_data->row();

        $aug_data = $otherdb->query("SELECT count(*) as aug_count FROM followup where Date BETWEEN '2018/08/01' AND '2018/08/31'");
        $fu_aug_res = $aug_data->row();

        $sept_data = $otherdb->query("SELECT count(*) as sept_count FROM followup where Date BETWEEN '2018/09/01' AND '2018/09/30'");
        $fu_sept_res = $sept_data->row();

        $oct_data = $otherdb->query("SELECT count(*) as oct_count FROM followup where Date BETWEEN '2018/10/01' AND '2018/10/31'");
        $fu_oct_res = $oct_data->row();

        //Return Array of query->row() as name-value pairs
        return array(
            'jan_data' => $fu_jan_res,
            'feb_data' => $fu_feb_res,
            'mar_data' => $fu_mar_res,
            'apr_data' => $fu_apr_res,
            'may_data' => $fu_may_res,
            'jun_data' => $fu_jun_res,
            'jul_data' => $fu_jul_res,
            'aug_data' => $fu_aug_res,
            'sept_data' => $fu_sept_res,
             'oct_data' => $fu_oct_res,
        );
    }
 // ...... Month Wise Followup Details Ends ...... // 

        
    public  function  getHouseholdCount(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query("select count(*) as householdCount from household");
        //print_r($query->row());
        //exit();
        return $query->row() ;
    }
    public  function  mohallaWiseHHVisits(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query("select h.MUHALA as mohalla,          
                            COUNT(CASE 
                                    WHEN h.CurrentlyUsingFPMethod LIKE 'yes' then ''
                                END) as CurrentUser, 				
                            COUNT(h.MUHALA) as mohalla_visits, 
                            COUNT(CASE
                                    WHEN (f.ProvidedFPproducts = 'yes' OR f.SMCounselingprovided = 'yes') then ''
                                END) as NewUser
                            FROM household h JOIN followup f ON h.SNO = f.SNO GROUP BY h.MUHALA");
        //print_r($query->result());
        //exit();
        return $query->result() ;
    }

    public  function  getFollowUpCount(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query("select count(*) as followUpCount from followup where followUpNumber <> '0'");
        //print_r($query->row());
        //exit();
        return $query->row() ;
    }
    public  function  getFollowUpHHCount(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query("select count(*) as fetchFollowUpHHCount from followup where followUpNumber = 1");
        //print_r($query->row());
        //exit();
        return $query->row() ;
    }

    public function getMonitoringVisitsCount()
    {
        $this->load->database(true);
        $query = $this->db->query("select count(*) as monitoringCount
                                    from surveyquestion as q
                                    left join surveyanswer as a
                                    on a.surveyquestionId = q.surveyquestionId
                                    where q.surveyquestionQuestion in ( 'Serial Number') and 
                                    a.surveylistId = '108'");
        return $query->row();
    }

    public function getSMVisitsCount()
    {
        $this->load->database(true);
        $query = $this->db->query("select count(*) as smVisitsCount
                                    from surveyquestion as q
                                    left join surveyanswer as a
                                    on a.surveyquestionId = q.surveyquestionId
                                    where q.surveyquestionQuestion in ( 'Serial Number') and 
                                    a.surveylistId = '103'");
        return $query->row();
    }

    public  function  getNewUserCount(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query("SELECT count(*) as newUserCount FROM household h JOIN followup f ON h.SNO = f.SNO WHERE h.areYouPregnant LIKE 'no' AND h.everFPMethod <> 'TL' AND h.everFPMethod <> 'operation' AND (h.currentFPMethodName = '' OR h.currentFPMethodName LIKE 'TM' OR h.currentFPMethodName LIKE 'traditional Method') AND f.conclusion LIKE 'new user case closed'");
        
        /*
        $query = $otherdb->query("  select count(*) as newUserCount from followup
                                    where conclusion like 'New User'
                                    or conclusion like 'New User Case Closed'
                                    ");
        */
        //print_r($query->row());
        //exit();
        return $query->row();
    }

    public function count_larcs(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('SELECT(SELECT count(*) 
                                            FROM household h join followup f on h.SNO = f.SNO  
                                            WHERE (f.methodName LIKE "injection" OR f.methodName LIKE "implant" OR f.methodName LIKE "IUCD") 
                                                AND h.areYouPregnant LIKE "no" AND h.everFPMethod <> "TL" AND h.everFPMethod <> "operation" 
                                                AND (h.currentFPMethodName = "" OR h.currentFPMethodName LIKE "TM"))
                                                +
                                        (SELECT count(*)  
                                            FROM pwdhealthcamp 
                                            WHERE methodName LIKE "injection" 
                                                OR methodName LIKE "implant" 
                                                OR methodName LIKE "IUCD"
                                                ) as larcs
                                 ');
        return $query->row();
    }

    public function count_shortTerm(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('SELECT
                                    (SELECT count(*) 
                                    FROM pwdhealthcamp 
                                    WHERE methodName LIKE "condom" OR methodName LIKE "pills" ) 
                                    + 
                                    (SELECT count(*) 
                                        FROM household h join followup f on h.SNO = f.SNO  
                                        WHERE (f.methodName LIKE "condom" OR f.methodName LIKE "pills") 
                                        AND h.areYouPregnant LIKE "no" AND h.everFPMethod <> "TL" AND h.everFPMethod <> "operation" 
                                        AND (h.currentFPMethodName = "" OR h.currentFPMethodName LIKE "TM")
                                    ) as shortTerm
                                ');
        return $query->row();
    }

    public function count_permanent(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('SELECT
                                    (SELECT count(*) 
                                        FROM household h join followup f on h.SNO = f.SNO 
                                        WHERE (methodName LIKE "Operation" or methodName LIKE "TL")
                                            AND h.areYouPregnant LIKE "no" AND h.everFPMethod <> "TL" AND h.everFPMethod <> "operation" 
                                            AND (h.currentFPMethodName = "" OR h.currentFPMethodName LIKE "TM")
                                    )+
                                    (SELECT count(*)
                                        FROM pwdhealthcamp 
                                        WHERE methodName LIKE "Tubal Ligation") 
                                    as permanent
                                 ');
        return $query->row();
    }


    public function count_cu_larcs(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('SELECT COUNT(*) as cu_larcs from household WHERE CurrentlyUsingFPMethod LIKE "yes"
        AND (currentFPMethodName LIKE "injection" or currentFPMethodName LIKE "iucd" or currentFPMethodName LIKE "implant")');
        return $query->row();
    }

    public function count_cu_shortTerm(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('SELECT COUNT(*) as cu_shortTerm from household WHERE CurrentlyUsingFPMethod LIKE "yes"
                    AND (currentFPMethodName LIKE "pills" or currentFPMethodName LIKE "condom" )');
        return $query->row();
    }

    public function count_cu_permanent(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('SELECT COUNT(*) as cu_permanent from household WHERE CurrentlyUsingFPMethod LIKE "yes"
        AND (currentFPMethodName LIKE "tl" or currentFPMethodName LIKE "operation" )');
        return $query->row();
    } 
    
    public function mohallaNames(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('SELECT DISTINCT MUHALA as mohallaName FROM household Where muhala <> "" ORDER BY muhala');
        return $query->result();
    }
    public function getConversionsCount(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query =  $otherdb->query("SELECT count(*) as conversions_count FROM household h JOIN followup f ON h.SNO = f.SNO 
                                    WHERE h.currentFPMethodName LIKE 'condom' AND f.methodName IN ('injection','pills','iucd','implant','tl') 
                                    OR h.currentFPMethodName LIKE 'pills' AND f.methodName IN ('injection', 'iucd', 'implant', 'tl') 
                                    OR h.currentFPMethodName LIKE 'injection' AND f.methodName IN ('iucd', 'implant', 'tl') 
                                    OR h.currentFPMethodName LIKE 'iucd' AND f.methodName IN ('tl') 
                                    OR h.currentFPMethodName LIKE 'implant' AND f.methodName IN ('tl')
                                "); 
                                //print_r($query->row());exit();
        return $query->row();
    }
    public function getConversionsToLarcsCount(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query =  $otherdb->query("SELECT(
                                    SELECT count(*) 
                                    FROM household h join followup f on h.SNO = f.SNO  
                                    WHERE f.methodName IN ('injection','implant','IUCD','tl','operation','tubal ligation') 
                                    AND h.areYouPregnant LIKE 'no' AND h.everFPMethod <> 'TL' AND h.everFPMethod <> 'operation' 
                                    AND (h.currentFPMethodName = '' OR h.currentFPMethodName LIKE 'TM')
                                    )
                                    +
                                    ( SELECT count(*)  
                                      FROM pwdhealthcamp 
                                      WHERE methodName IN ('injection','implant','IUCD','tl','tubal ligation','operation')
                                    )
                                    +
                                    ( SELECT count(*) 
                                      FROM household h JOIN followup f ON h.SNO = f.SNO 
                                      WHERE (
                                        h.currentFPMethodName LIKE 'condom' AND f.methodName IN ('injection','pills','iucd','implant','tl') 
                                        OR h.currentFPMethodName LIKE 'pills' AND f.methodName IN ('injection', 'iucd', 'implant', 'tl') 
                                        OR h.currentFPMethodName LIKE 'injection' AND f.methodName IN ('iucd', 'implant', 'tl') 
                                        OR h.currentFPMethodName LIKE 'iucd' AND f.methodName IN ('tl') 
                                        OR h.currentFPMethodName LIKE 'implant' AND f.methodName IN ('tl')
                                      ) 
                                      AND f.methodName IN ('injection','implant','iucd','tl','tubal ligation','operation')
                                ) as larcs_conversions_count");
                                
            //print_r($query->result());exit();
        return $query->row();
    }
}
?>