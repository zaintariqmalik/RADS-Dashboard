
<?php

class ExportModel extends CI_Model{
    public function index($fromDate, $toDate, $tableToExport){
        $otherdb = $this->load->database('otherdb', TRUE);

        $query = $otherdb->query("select * from " .$tableToExport." where date between '".$fromDate."' and '".$toDate."'");
       //$query = $otherdb->query("select * from followup where followUpNumber <> 0 ");
        return $query;
        //print_r($query->result());
        //exit();
            /*
            Here you should note i am returning 
            the query object instead of 
            $query->result() or $query->result_array()
            */
        }   
}