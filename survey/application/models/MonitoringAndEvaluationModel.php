<?php
/**
* Filename: MonitoringAndEvaluationModel.php
* Created By: M Zeeshan Shahzad
* Date: 19-04-2018
* Change history:
* ---
*/

class MonitoringAndEvaluationModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    public  function  getMEGeneralInfo(){
        $this->load->database(true);
        /*$query = $this->db->query("select a.surveyresultsId as ID, q.surveyquestionQuestion as Question,a.surveyanswerAnswer as Response
                                    from surveyquestion as q
                                    left join surveyanswer as a
                                    on a.surveyquestionId = q.surveyquestionId
                                    where q.surveyquestionQuestion in ('Serial number') and 
                                    a.surveylistId = '103'");
                                     q.surveyquestionQuestion in ('Serial number')  and
        */
       $query = $this->db->query("select a.surveyresultsId as ID, q.surveyquestionQuestion as Question,a.surveyanswerAnswer as Response
                                    from surveyquestion as q
                                    left join surveyanswer as a
                                    on a.surveyquestionId = q.surveyquestionId
                                    where q.surveyquestionQuestion in ( 'Serial Number') and 
                                    a.surveylistId = '108'");
        return $query->result() ;
    }

    public  function getMESpecificInfo($SNO){
        $this->load->database(true);
        //$query = $otherdb->query("SELECT * FROM `household` where `SNO` ='$SNO'");
        $query = $this->db->query("select q.surveyquestionId,a.surveyresultsId, q.surveyquestionQuestion, a.surveyanswerAnswer
                                    from surveyquestion as q
                                    left join surveyanswer as a
                                    on q.surveyquestionId = a.surveyquestionId
                                    where q.surveylistId = '108' 
                                    and a.surveyresultsId = '$SNO'
                                    group by a.surveyanswerId
                                    ");
        $result1 =$query->result();
        //print_r($query->result_array());
        //exit();
        return $result1;
    }
}
?>