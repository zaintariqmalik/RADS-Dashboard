<?php
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

    public  function  getHouseholdCount(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query("select count(*) as householdCount from household");
        //print_r($query->row());
        //exit();
        return $query->row() ;
    }

    public  function  getFollowUpCount(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query("select count(*) as followUpCount from followup");
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
        $query = $otherdb->query("select count(*) as newUserCount from followup
                                    where conclusion like 'New User'
                                    or conclusion like 'New User Case Closed'
                                    ");
        //print_r($query->row());
        //exit();
        return $query->row() ;
    }

}
?>