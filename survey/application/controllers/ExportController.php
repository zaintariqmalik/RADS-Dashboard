<?php
/**
* Filename: ExportController.php
* Created By: Zeeshan
* Date: 12-07-2018
* Change history:
* ---
*/ 

    class ExportController extends CI_Controller{
        
        public function csv(){
            $this->load->helper('url'); // call url helper
            $this->load->helper('download'); // call download helper

            $this->load->model('ExportModel');
            $this->load->dbutil();

            if($_POST['submit'] != NULL){
                
                //print_r($_POST);
                $fromDate = $_POST['fromDate'];
                $toDate = $_POST['toDate'];
                $tableToExport = $_POST['tableToExport'];
                //$fileNamePrefix = $_POST['fileNamePrefix'];
            }
            else echo "failed to pass form data to controller";
            
            $fileToDownload = $this->ExportModel->index($fromDate, $toDate, $tableToExport);
            
            $filename = $tableToExport."_data.csv"; // name of csv file to download with data
            force_download($filename, $this->dbutil->csv_from_result($fileToDownload)); // download file
            
        }
    }   