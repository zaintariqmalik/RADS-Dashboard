<?php
/**
* Filename: DashboardSummaryController.php
* Created By: Zain Tariq
* Date: 02-05-2018
* Change history:
* ---
*/

class DashboardSummaryController extends CI_Controller{

			public function index()
		    {
		        // IF session is set then call the model::getSurveyQuestions() to get data and pass to success
		        if($this->session->userdata('User_Logged_In')) {
		            
		    		$this->load->model('DashboardSummaryModel');
		    		$this->data["fetchHousehold"] = $this->DashboardSummaryModel->getHouseholdCount();
		    		$this->data["fetchFollowUp"] = $this->DashboardSummaryModel->getFollowUpCount();
		    		$this->data["fetchMonitoring"] = $this->DashboardSummaryModel->getMonitoringVisitsCount();
		    		$this->data["fetchSM"] = $this->DashboardSummaryModel->getSMVisitsCount();
					$this->data["fetchNewUser"] = $this->DashboardSummaryModel->getNewUserCount();
					
					$this->data['jan_data'] = $this->DashboardSummaryModel->hhcountJan();
					$this->data['feb_data'] = $this->DashboardSummaryModel->hhcountFeb();
					$this->data['mar_data'] = $this->DashboardSummaryModel->hhcountMar();
					$this->data['apr_data'] = $this->DashboardSummaryModel->hhcountApr();

					$this->load->view('DashboardSummary', $this->data);
		        }
		        else // Display login page session is not set
		            $this->load->view('Login');

		    }

		    //unused
		    public function getHouseholdCount()
		    {
		    	$this->load->model('DashboardSummaryModel');
		    	$this->data["fetch_data"] = $this->DashboardSummaryModel->getHouseholdCount();
		    	$this->load->view('DashboardSummary',$this->data);
		    }
		    //unused
		    public function getFollowUpCount()
		    {
		    	$this->load->model('DashboardSummaryModel');
		    	$this->data["fetch_data"] = $this->DashboardSummaryModel->getFollowUpCount();
		    	$this->load->view('DashboardSummary',$this->data);
		    }
}
?>