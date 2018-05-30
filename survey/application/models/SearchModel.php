<?php
/**
 * Created by PhpStorm.
 * User: Waqas Ahmad
 * Date: 3/1/2018
 * Time: 12:15 PM
 */
class SearchModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    public  function  getWomenGeneralInfo(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query('SELECT `SNO`,`MUHALA`, `APIName`, `API`, `SM`, `Name`,`Age`, `Date`  FROM `household`');
        $result1 =$query->result();
        return $result1;
    }

    public  function getWomenSpecificInfo($SNO){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT * FROM `household` where `SNO` ='$SNO'");

        $result1 =$query->result();
        return $result1;
    }

    public  function getWomenSpecificInfo_FollowUp($SNO){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT * FROM `followup` where `SNO` ='$SNO'");

        $result2 =$query->result();
        return $result2;
    }

    public function getNewUsersInfo(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT * FROM `household` WHERE SNO IN 
                                    ( SELECT SNO FROM followup WHERE conclusion like 'New User' or conclusion like 'New User Case Closed')");

        return $query->result();
       
    }

    public function getPWDNewUsersInfo(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT * FROM `pwdHealthCamp` WHERE 1");
         //SNO IN ( SELECT SNO FROM followup WHERE conclusion like 'New User' or conclusion like 'New User Case Closed')");

        return $query->result();
       
    }
}
?>