<?php 

    class Export extends CI_Controller{
        
      
        public function csv(){
            $this->load->helper('url');

            if($_POST['submit'] != NULL){
              
                //print_r($_POST);
                $fromDate = $_POST['fromDate'];
                $toDate = $_POST['toDate'];
                $tableToExport = $_POST['tableToExport'];
                $fileNamePrefix = $_POST['fileNamePrefix'];
            }
            else echo "failed to pass form data to controller";
                        

            $this->load->model('exportModel');
            //$this->exportModel->index();
           $this->load->dbutil();
           
            $this->load->helper('download'); // call download helper
            
            $fileToDownload = $this->exportModel->index($fromDate, $toDate, $tableToExport);
           
            $filename = $tableToExport."_data.csv"; // name of csv file to download with data
            force_download($filename, $this->dbutil->csv_from_result($fileToDownload)); // download file
            
        }
    }        
?>