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

    public function hhcountJan(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT count(*) as jan_count FROM household where Date BETWEEN '2018/01/01' AND '2018/01/31'");
        return $query->row();
    }
    public function hhcountFeb(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT count(*) as feb_count FROM household where Date BETWEEN '2018/02/01' AND '2018/02/29'");
        return $query->row();
    }
    public function hhcountMar(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT count(*) as mar_count FROM household where Date BETWEEN '2018/03/01' AND '2018/03/31'");
        return $query->row();
    }
    public function hhcountApr(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT count(*) as apr_count FROM household where Date BETWEEN '2018/04/01' AND '2018/04/30'");
        return $query->row();
    }
   /* public function hhcountMay(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT count(*) as may_count FROM household where Date BETWEEN '2018/05/01' AND '2018/05/31'");
         return $query->row();
        //print_r($query->row()->may_count);exit();
    }*/
    public  function  getHouseholdCount(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query("select count(*) as householdCount from household");
        //print_r($query->row());
        //exit();
        return $query->row() ;
    }

    public  function  getFollowUpCount(){
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query("select count(*) as followUpCount from followup where followUpNumber <> '0'");
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