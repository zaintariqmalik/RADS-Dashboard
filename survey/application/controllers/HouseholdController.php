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
        $data["question_title"] = "Ever use FP method";

        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getFPMethodCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getFPMethodCount();
        $data["question_title"] = "Which FP method used";
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getCurrentFPMethodUsageCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getCurrentFPMethodUsageCount();
        $data["question_title"] = "Currently using FP method";
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	public function getCurrentFPMethodCount()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getCurrentFPMethodCount();
        $data["question_title"] = "Which FP method currently using";
		
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
        $data["question_title"] = "Visit any FP provider";
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}

	/* Old function
	public function getFPProviderVisitReason()
	{
		$this->load->model('HouseholdModel');
		$data["fetch_data"] = $this->HouseholdModel->getFPProviderVisitReason();
        $data["question_title"] = "Reason for visiting FP Provider";
		
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);
	}
	*/


    /*
     * The function will give us reasons and their counts for Visiting Doctor.
     * we have 5 columns in the database and we have to get data from each column and merge them in a single array.
     * @see HouseholdModel::getFPProviderVisitReasonFPConsulatation()
     * @see HouseholdModel::getFPProviderVisitReasonForIUD()
     * @see HouseholdModel::getFPProviderVisitReasonImplant()
     * @see HouseholdModel::getFPProviderVisitReasonTubalLigation()
     * @see HouseholdModel::getFPProviderVisitReasonOperation()
     * @see HouseholdModel::getFPProviderVisitReasonSideEffects()
     * @see HouseholdModel::getFPProviderVisitReasonOtherReasonForVisit()
     * @return array of objects
    */
    public function getFPProviderVisitReason()
    {
        $this->load->model('HouseholdModel');
        $ArrayWithResult = array();

        // Storing array in $res variable
        // Getting Data form FPConsultation column
        $res=$this->HouseholdModel->getFPProviderVisitReasonFPConsulatation();
        $FPConsulatationObj = new stdClass(); // Creating std object since our HousholdView is working on std object for other questions
        $FPConsulatationObj->value = 'FP Consultation';
        $FPConsulatationObj->total = $res[0]->result;
        $ArrayWithResult[0] = $FPConsulatationObj; // saving object in array

        // Storing array in $res variable
        // Getting Data form ForIUCD column
        $res=$this->HouseholdModel->getFPProviderVisitReasonForIUD();
        $ForIUDObj = new stdClass(); // Creating std object since our HousholdView is working on std object for other questions
        $ForIUDObj->value = 'IUCD';
        $ForIUDObj->total = $res[0]->result;
        $ArrayWithResult[1] = $ForIUDObj; // saving object in array


        // Storing array in $res variable
        // Getting Data form Implant column
        $res=$this->HouseholdModel->getFPProviderVisitReasonImplant();
        $ImplantObj = new stdClass(); // Creating std object since our HousholdView is working on std object for other questions
        $ImplantObj->value = 'Implant';
        $ImplantObj->total = $res[0]->result;
        $ArrayWithResult[2] = $ImplantObj; // saving object in array

        // Storing array in $res variable
        // Getting Data form TubalLigation column
        $res=$this->HouseholdModel->getFPProviderVisitReasonTubalLigation();
        $TubalLigationObj = new stdClass(); // Creating std object since our HousholdView is working on std object for other questions
        $TubalLigationObj->value = 'TL';
        $TubalLigationObj->total = $res[0]->result;
        $ArrayWithResult[3] = $TubalLigationObj; // saving object in array

        // Storing array in $res variable
        // Getting Data form Operation column
        $res=$this->HouseholdModel->getFPProviderVisitReasonOperation();
        $OperationObj = new stdClass(); // Creating std object since our HousholdView is working on std object for other questions
        $OperationObj->value = 'Operation';
        $OperationObj->total = $res[0]->result;
        $ArrayWithResult[4] = $OperationObj; // saving object in array

        // Storing array in $res variable
        // Getting Data form SideEffects column
        $res=$this->HouseholdModel->getFPProviderVisitReasonSideEffects();
        $SideEffectsObj = new stdClass(); // Creating std object since our HousholdView is working on std object for other questions
        $SideEffectsObj->value = 'SE';
        $SideEffectsObj->total = $res[0]->result;
        $ArrayWithResult[5] = $SideEffectsObj; // saving object in array

        // Storing array in $res variable
        // Getting Data form OtherReasonForVisit column
        $res=$this->HouseholdModel->getFPProviderVisitReasonOtherReasonForVisit();
        $OtherReasonForVisitObj = new stdClass(); // Creating std object since our HousholdView is working on std object for other questions
        $OtherReasonForVisitObj->value = 'Other';
        $OtherReasonForVisitObj->total = $res[0]->result;
        $ArrayWithResult[6] = $OtherReasonForVisitObj; // saving object in array

        $data["fetch_data"] = $ArrayWithResult;
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



	/*
	 * The function will give us reasons and their counts for not using any Fp method.
	 * we have 5 columns in the database and we have to get data from each column and merge them in a single array.
	 * @see HouseholdModel::getReasonNotInterestedFear()
	 * @see HouseholdModel::getReasonNotInterestedNoPermissionFromHusband()
	 * @see HouseholdModel::getReasonNotInterestedFamilyNotComplete()
	 * @see HouseholdModel::getReasonNotInterestedNoPermissionFromMotherInLaw()
	 * @see HouseholdModel::getReasonNotInterestedOtherReasonForNotUsing()
	 * @return array of objects
	*/
    public function getReasonNotInterestedCount()
    {
        $this->load->model('HouseholdModel');
        $ArrayWithResult = array();

        // Storing array in $res variable
		// Getting Data form Fear column
        $res=$this->HouseholdModel->getReasonNotInterestedFear();
        $FearObj = new stdClass(); // Creating std object since our HousholdView is working on std object for other questions
        $FearObj->value = 'Fear';
        $FearObj->total = $res[0]->result;
        $ArrayWithResult[0] = $FearObj; // saving object in array

        // Storing array in $res variable
        $res = $this->HouseholdModel->getReasonNotInterestedNoPermissionFromHusband();
        $NoPermissionFromHusbandObj = new stdClass(); // Creating std object since our HousholdView is working on std object for other questions
        $NoPermissionFromHusbandObj->value = 'No Permission From Husband';
        $NoPermissionFromHusbandObj->total = $res[0]->result;
        $ArrayWithResult[1] = $NoPermissionFromHusbandObj;

        // Storing array in $res variable
        $res = $this->HouseholdModel->getReasonNotInterestedFamilyNotComplete();
        $FamilyIncompleteObj = new stdClass(); // Creating std object since our HousholdView is working on std object for other questions
        $FamilyIncompleteObj->value = 'Family Incomplete';
        $FamilyIncompleteObj->total = $res[0]->result;
        $ArrayWithResult[2] = $FamilyIncompleteObj;

        // Storing array in $res variable
        $res = $this->HouseholdModel->getReasonNotInterestedNoPermissionFromMotherInLaw();
        $NoPermissionFromMotherInLawObj = new stdClass(); // Creating std object since our HousholdView is working on std object for other questions
        $NoPermissionFromMotherInLawObj->value = 'No Permission From MotherInLaw';
        $NoPermissionFromMotherInLawObj->total = $res[0]->result;
        $ArrayWithResult[3] = $NoPermissionFromMotherInLawObj;

        // Storing array in $res variable
        $res = $this->HouseholdModel->getReasonNotInterestedOtherReasonForNotUsing();
        $OtherObj = new stdClass(); // Creating std object since our HousholdView is working on std object for other questions
        $OtherObj->value = 'Other';
        $OtherObj->total = $res[0]->result;
        $ArrayWithResult[4] = $OtherObj;


        $data["fetch_data"] = $ArrayWithResult;
        $data["question_title"] = "Reason for not using FP Method";
        //pass the fetched data to view
        $this->load->view('HouseholdView', $data);

    }

}

?>
