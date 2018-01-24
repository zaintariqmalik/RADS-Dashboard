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

        $this->load->database(true);

        $this->db->select('lat');
        $this->db->select('lng');
        $this->db->from('locations');
        $query =$this->db->get();

        $result1 =$query->result();
        //die(print_r($result1));
        return $result1;
    }


}
?>