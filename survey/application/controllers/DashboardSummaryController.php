<?php
/**
* Filename: DashboardSummaryController.php
* Created By: Zain Tariq
* Date: 02-05-2018
* Change history:
* ---
*/

class DashboardSummaryController extends CI_Controller{

	public function mohalla_wise_report($mohalla_name)
	{
		// IF session is set then call the model::getSurveyQuestions() to get data and pass to success
		if($this->session->userdata('User_Logged_In')) {
			
			$this->load->model('DashboardSummaryModel');
			$this->data['mohalla_hh_visit'] = $this->DashboardSummaryModel->mohallaHHvisit($mohalla_name);
			$this->data['mohalla_currentUser'] = $this->DashboardSummaryModel->mohallaCurrentUser($mohalla_name);
			$this->data['mohalla_newUsers'] = $this->DashboardSummaryModel->mohallaNewUser($mohalla_name);
			$this->data['mohalla_CBT'] = $this->DashboardSummaryModel->mohallaCBT($mohalla_name);
		}
		else    $this->load->view('Login');
	}
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
			$this->data['may_data'] = $this->DashboardSummaryModel->hhcountMay();
			$this->data['jun_data'] = $this->DashboardSummaryModel->hhcountJun();
			//$this->data['jul_data'] = $this->DashboardSummaryModel->hhcountJul();

			$this->data['count_larcs'] = $this->DashboardSummaryModel->count_larcs();
			$this->data['count_permanent'] = $this->DashboardSummaryModel->count_permanent();
			$this->data['count_shortTerm'] = $this->DashboardSummaryModel->count_shortTerm();

			$this->data['count_cu_larcs'] = $this->DashboardSummaryModel->count_cu_larcs();
			$this->data['count_cu_shortTerm'] = $this->DashboardSummaryModel->count_cu_shortTerm();
			$this->data['count_cu_permanent'] = $this->DashboardSummaryModel->count_cu_permanent();

			$this->data['mohallaNames'] = $this->DashboardSummaryModel->mohallaNames();
			$this->data['mohallaWiseHH'] = $this->DashboardSummaryModel->mohallaWiseHHVisits();

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