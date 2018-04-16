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
        $query = $otherdb->query('SELECT `SNO`,`MUHALA`, `APIName`, `SM`, `Name`  FROM `household`');
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
}
?>