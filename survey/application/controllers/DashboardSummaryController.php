<?php
/**
* Filename: DashboardSummaryController.php
* Created By: Zain Tariq
* Date: 02-05-2018
* Change history: Modified by Zeeshan
* ---
*/

class DashboardSummaryController extends CI_Controller{

	public function index()
	{
		
		// IF session is set then call the model::getSurveyQuestions() to get data and pass to success
		if($this->session->userdata('User_Logged_In')) {

			$this->load->model('DashboardSummaryModel');
			$this->data["fetchHousehold"] = $this->DashboardSummaryModel->getHouseholdCount();
			$this->data["fetchFollowUp_HH"] = $this->DashboardSummaryModel->getFollowUpHHCount();
			$this->data["fetchFollowUp"] = $this->DashboardSummaryModel->getFollowUpCount();
			$this->data["fetchMonitoring"] = $this->DashboardSummaryModel->getMonitoringVisitsCount();
			$this->data["fetchSM"] = $this->DashboardSummaryModel->getSMVisitsCount();
			$this->data["fetchNewUser"] = $this->DashboardSummaryModel->getNewUserCount();
		// Get Household Count Month Wise
			$household = $this->DashboardSummaryModel->monthWiseHouseholdCount();
				
				$this->data['hh_jan_data'] = $household['jan_data'];
				$this->data['hh_feb_data'] = $household['feb_data'];
				$this->data['hh_mar_data'] = $household['mar_data'];
				$this->data['hh_apr_data'] = $household['apr_data'];
				$this->data['hh_may_data'] = $household['may_data'];
				$this->data['hh_jun_data'] = $household['jun_data'];
				$this->data['hh_jul_data'] = $household['jul_data'];
				$this->data['hh_aug_data'] = $household['aug_data'];
				$this->data['hh_sept_data'] = $household['sept_data'];
				$this->data['hh_oct_data'] = $household['oct_data'];
		
		// Get Follow Up Count Month Wise
			$followup = $this->DashboardSummaryModel->monthWiseFollowupCount();

				$this->data['fu_jan_data'] = $followup['jan_data'];
				$this->data['fu_feb_data'] = $followup['feb_data'];
				$this->data['fu_mar_data'] = $followup['mar_data'];
				$this->data['fu_apr_data'] = $followup['apr_data'];
				$this->data['fu_may_data'] = $followup['may_data'];
				$this->data['fu_jun_data'] = $followup['jun_data'];
				$this->data['fu_jul_data'] = $followup['jul_data'];
				$this->data['fu_aug_data'] = $followup['aug_data'];
				$this->data['fu_sept_data'] = $followup['sept_data'];
				$this->data['fu_oct_data'] = $followup['oct_data'];

		// Get CBT Count Month Wise
			$cbt = $this->DashboardSummaryModel->monthWiseCBT();

				$this->data['cbt_jan_data'] = $cbt['jan_data'];
				$this->data['cbt_feb_data'] = $cbt['feb_data'];
				$this->data['cbt_mar_data'] = $cbt['mar_data'];
				$this->data['cbt_apr_data'] = $cbt['apr_data'];
				$this->data['cbt_may_data'] = $cbt['may_data'];
				$this->data['cbt_jun_data'] = $cbt['jun_data'];
				$this->data['cbt_jul_data'] = $cbt['jul_data'];
				$this->data['cbt_aug_data'] = $cbt['aug_data'];
				$this->data['cbt_sept_data'] = $cbt['sept_data'];
				$this->data['cbt_oct_data'] = $cbt['oct_data'];

			$this->data['count_larcs'] = $this->DashboardSummaryModel->count_larcs();
			$this->data['count_permanent'] = $this->DashboardSummaryModel->count_permanent();
			$this->data['count_shortTerm'] = $this->DashboardSummaryModel->count_shortTerm();

			$this->data['count_cu_larcs'] = $this->DashboardSummaryModel->count_cu_larcs();
			$this->data['count_cu_shortTerm'] = $this->DashboardSummaryModel->count_cu_shortTerm();
			$this->data['count_cu_permanent'] = $this->DashboardSummaryModel->count_cu_permanent();

			$this->data['mohallaNames'] = $this->DashboardSummaryModel->mohallaNames();
			$this->data['mohallaWiseHH'] = $this->DashboardSummaryModel->mohallaWiseHHVisits();

			
            $this->data["larcs_conversions"] = $this->DashboardSummaryModel->getConversionsToLarcsCount();
            $this->data["conversions"] = $this->DashboardSummaryModel->getConversionsCount();

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