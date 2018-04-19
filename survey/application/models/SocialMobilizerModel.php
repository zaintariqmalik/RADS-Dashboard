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
        $this->load->database(true);
        /*$query = $this->db->query("select a.surveyresultsId as ID, q.surveyquestionQuestion as Question,a.surveyanswerAnswer as Response
                                    from surveyquestion as q
                                    left join surveyanswer as a
                                    on a.surveyquestionId = q.surveyquestionId
                                    where q.surveyquestionQuestion in ('Serial number') and 
                                    a.surveylistId = '103'");

                                     q.surveyquestionQuestion in ('Serial number')  and
        */
       $query = $this->db->query("select a.surveyresultsId as ID, q.surveyquestionQuestion as Question, a.surveyanswerAnswer as Response
                                    from surveyquestion as q
                                    left join surveyanswer as a
                                    on a.surveyquestionId = q.surveyquestionId
                                    where q.surveyquestionQuestion in ('Serial number') and 
                                    a.surveylistId = '103'");

        /*$this->db->select('surveyanswer.surveyresultsId, surveyquestion.surveyquestionQuestion, surveyanswer.surveyanswerAnswer');
        $this->db->from('surveyquestion');
        $this->db->join('surveyanswer','surveyquestion.surveyquestionId=surveyanswer.surveyquestionId','Left'); 
        $this->db->where('surveyquestion.surveyquestionQuestion','Serial number');
        $this->db->where('surveyanswer.surveylistId','103');
        $query=$this->db->get();*/
        //print_r($query->result_array());
        //exit();
        return $query->result() ;
    }

    public  function getSMSpecificInfo($SNO){
        $this->load->database(true);
        //$query = $otherdb->query("SELECT * FROM `household` where `SNO` ='$SNO'");
        $query = $this->db->query("select q.surveyquestionId,a.surveyresultsId, q.surveyquestionQuestion, a.surveyanswerAnswer
                                    from surveyquestion as q
                                    left join surveyanswer as a
                                    on q.surveyquestionId = a.surveyquestionId
                                    where q.surveylistId = '103' 
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