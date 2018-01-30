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
        	$this->load->view('HouseholdQuestions');
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

        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getFPMethodUsageCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getFPMethodUsageCount();

        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getFPMethodCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getFPMethodCount();
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getCurrentFPMethodUsageCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getCurrentFPMethodUsageCount();
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getCurrentFPMethodCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getCurrentFPMethodCount();
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getSideEffectsCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getSideEffectsCount();
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getFPProviderVisitCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getFPProviderVisitCount();
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getFPProviderVisitReason()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getFPProviderVisitReason();
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getInterestedFPMethodCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getInterestedFPMethodCount();
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getReasonNotInterestedCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getReasonNotInterestedCount();
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

}

?>
