<?php

/**
* Filename: HouseholdController.php
* Created By: Zain Tariq
* Date: 29-01-2018
* Change history:
* 29-01-2018 / load HouseholdModel, get data through model (HouseholdModel), pass data to view(HouseholdView) / Zain Tariq
*/

class HouseholdController extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * [index call by default and load view "HouseholdQuestions.php"]
	 */
	public function index()
	{

        if($this->session->userdata('User_Logged_In'))
        {
        	$this->load->view('household');
            $this->load->model('HouseholdModel');
        }
        else // Display login page session is not set
            $this->load->view('login');
	}

	/**
	 * [getPregnantWomenCount Question: Are you pregnant?]
	 * pass data to view
	 */
	public function getPregnantWomenCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getPregnantWomenCount();
        $data["question_title"] = "Are You Pregnant";
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	/**
	 * [getPregnancyCheckupVisitCount description]
	 * 
	 */
	public function getPregnancyCheckupVisitCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getPregnancyCheckupVisitCount();
        $data["question_title"] = "Visit anywhere for pregnancy checkup";
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getFPMethodUsageCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getFPMethodUsageCount();
        $data["question_title"] = "Ever use FP Method";

        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getFPMethodCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getFPMethodCount();
        $data["question_title"] = "Which FP Method used";
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getCurrentFPMethodUsageCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getCurrentFPMethodUsageCount();
        $data["question_title"] = "Currently using FP Method";
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getCurrentFPMethodCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getCurrentFPMethodCount();
        $data["question_title"] = "Which FP Method currently using";
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getSideEffectsCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getSideEffectsCount();
        $data["question_title"] = "Side effects faced";
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getFPProviderVisitCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getFPProviderVisitCount();
        $data["question_title"] = "Visit any FP Provider";
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getFPProviderVisitReason()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getFPProviderVisitReason();
        $data["question_title"] = "Reason for visiting FP Provider";
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getInterestedFPMethodCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getInterestedFPMethodCount();
        $data["question_title"] = "Want to use any FP Method";
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getReasonNotInterestedCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getReasonNotInterestedCount();
        $data["question_title"] = "Reason for not using FP Method";
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

}

?>
