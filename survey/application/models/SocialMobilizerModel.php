<?php
/**
* Filename: SocialMobilizerModel.php
* Created By: Zain Tariq
* Date: 12-04-2018
* Change history:
* ---
*/

class SocialMobilizerModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    public  function  getSMGeneralInfo(){
        $otherdb = $this->load->database('otherdb',true);
       
        $query = $otherdb->query("select * from social_mobilizer");

        /*
        $query = $this->db->query("SELECT surveyanswerAnswer as Response,surveyresultsId as ID 
                        FROM surveyanswer 
                        WHERE surveyresultsId in 
                        (SELECT surveyresultsId FROM surveyresults WHERE surveylistId = 103)");*/

        //print_r($query->result_array()); exit();

        return $query->result_array() ;
    }

    public  function getSMSpecificInfo($SNO){
        $otherdb = $this->load->database('otherdb',true);
        //$query = $otherdb->query("SELECT * FROM `household` where `SNO` ='$SNO'");
        $query = $otherdb->query("select * from social_mobilizer where sno = '$SNO'");
        /*
        $query = $this->db->query("select q.surveyquestionId,a.surveyresultsId, q.surveyquestionQuestion, a.surveyanswerAnswer
                                    from surveyquestion as q
                                    left join surveyanswer as a
                                    on q.surveyquestionId = a.surveyquestionId
                                    where q.surveylistId = '103' 
                                    and a.surveyresultsId = '$SNO'
                                    group by a.surveyanswerId
                                    ");
        */
        $result1 =$query->result_array();
        //print_r($query->result_array());
        //exit();
        return $result1;
    }
}
?>