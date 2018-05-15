<?php

/**
 * Created by PhpStorm.
 * created by: waqas
 * Date: 1/24/2018
 * Time: 1:34 PM
 */

class DisplayMap extends CI_Model {

    /* Function get data from database table locations
     * @return  array results indicates latitude and longitude
    */
    public function getMapData(){

        $otherdb = $this->load->database('otherdb',TRUE);

        $query = $otherdb->query('select * from locations');
/*
        $this->db->select('lat');
        $this->db->select('lng');
        $this->db->from('locations');
        $query =$this->db->get();*/

        $result1 =$query->result();
        //die(print_r($result1));
        return $result1;
    }

    
    public function getSM_MapData(){

        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query('SELECT sm.title, sm.lat, sm.lng, sm.interviews_conducted AS SM_Interviews, mne.interviews_conducted AS MnE_Interviews
                                    FROM location_sm sm
                                    INNER JOIN location_mne mne ON sm.id = mne.id');
        
        //print_r($query->result());exit();
        //$query = $otherdb->query('select * from location_sm');
        return $query->result();
        /*
        $this->db->select('lat');
        $this->db->select('lng');
        $this->db->from('locations');
        $query =$this->db->get();*/ 
    }
    public function getMnE_MapData(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $this->query('SELECT * FROM location_mne');
        return $query->result();
    }



}
?>