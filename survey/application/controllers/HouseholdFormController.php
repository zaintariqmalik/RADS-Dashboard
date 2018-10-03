<?php
/**
* Filename: HouseholdFormController.php
* Created By: Muhammad Zeeshan Shahzad
* Date: 24-08-2018
* Change history:
*/

class HouseholdFormController extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
    }
    
    public function index(){
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('HouseholdFormModel');
            $household_form_data = $this->HouseholdFormModel->index();

            $this->data['currentlyPregnant'] = $household_form_data['currentlyPregnant'];
            $this->data['pregnancyCheckup'] = $household_form_data['pregnancyCheckup'];
            $this->data['currentlyUsingFPMethod'] = $household_form_data['currentlyUsingFPMethod'];
            $this->data['currentFPMethodName'] = $household_form_data['currentFPMethodName'];
            $this->data['reasonForNotUsingFPMethod'] = $household_form_data['reasonForNotUsingFPMethod'];
            $this->data['everFPMethodUsed'] = $household_form_data['everFPMethodUsed'];
            $this->data['everFPMethodName'] = $household_form_data['everFPMethodName'];

            $this->load->view('householdFormView', $this->data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    }

    public function getdata(){

    }
}