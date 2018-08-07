<?php //defined('Basepath') or die("No direct access Allowed");

    class AjaxController extends CI_Controller{
        public function index(){
            
            $data_received =  $_POST["value"];
            $this->load->model('DashboardSummaryModel');
            
            $data_returned = $this->DashboardSummaryModel->mohalla($data_received);
           
            echo json_encode($data_returned);
            //echo json_encode('Name: ' .$data_received. '   Total HH: '.$data_returned['hhVisits']. '   cu : '.$data_returned['currentUser']. '   nu : '.$data_returned['newUser']);
                
            exit();
            $this->load->view('AjaxView');
        }

    }
