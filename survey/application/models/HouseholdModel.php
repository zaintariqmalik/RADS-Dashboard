<?php

/**
* Filename: HouseholdModel.php
* Created By: Zain Tariq
* Date: 29-01-2018
* Change history:
* 29-01-2018 / Called by HouseholdController, getData() fetch the data from otherdb / Zain Tariq
*/
class HouseholdModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * [getPregnantWomenCount retrieve pregnant count from DB]
	 * @return [query result] [return data to HouseholdController.php]
	 */
	public function getPregnantWomenCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		/*$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->get('household');
		foreach ($query->result() as $data) {
			echo $data->serial;
			echo '<br>';
		}*/

		//another method
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select areYouPregnant, count(areYouPregnant) as total,
									CASE
									    WHEN areYouPregnant = 1 THEN "Yes"
									    WHEN areYouPregnant = 2 THEN "No"
									    ELSE "Missing"
									END as value
									from household 
									group by areYouPregnant');
		$data = $query->result();
		return $data;
	}

	public function getPregnancyCheckupVisitCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select pregnancyCheckUp, count(pregnancyCheckUp) as total,
									CASE
									    WHEN pregnancyCheckUp = 1 THEN "Yes"
									    WHEN pregnancyCheckUp = 2 THEN "No"
									    ELSE "Missing"
									END as value
									from household 
									where pregnancyCheckUp <> 3
									group by pregnancyCheckUp;');
		$data = $query->result();
		return $data;
	}

	public function getFPMethodUsageCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select useFPMethod, count(useFPMethod) as total,
									CASE
									    WHEN useFPMethod = 1 THEN "Yes"
									    WHEN useFPMethod = 2 THEN "No"
									    ELSE "Missing"
									END as value
									from household 
									group by useFPMethod;');
		$data = $query->result();
		return $data;
	}

	public function getFPMethodCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select fpMethodName, count(fpMethodName) as total,
									CASE
									    WHEN fpMethodName = 1 THEN "Condom"
									    WHEN fpMethodName = 2 THEN "Traditional Method"
									    WHEN fpMethodName = 3 THEN "Pills"
									    WHEN fpMethodName = 4 THEN "Injections"
									    WHEN fpMethodName = 5 THEN "Tubal Ligation"
									    WHEN fpMethodName = 6 THEN "IUCD"
									    WHEN fpMethodName = 7 THEN "Implant"
									    WHEN fpMethodName = 8 THEN "Missing"
									    ELSE "Not using any FP Method"
									END as value
									from household 
									where useFPMethod = 1
									group by fpMethodName');
		$data = $query->result();
		return $data;
	}

	public function getCurrentFPMethodUsageCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select currentUseFPMethod, count(currentUseFPMethod) as total,
									CASE
									    WHEN currentUseFPMethod = 1 THEN "Yes"
									    WHEN currentUseFPMethod = 2 THEN "No"
									    WHEN currentUseFPMethod = "" THEN "Not using any FP Method"
									    ELSE "Missing"
									END as value
									from household 
									where useFPMethod = 1
									group by currentUseFPMethod;');
		$data = $query->result();
		return $data;
	}

	public function getCurrentFPMethodCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select currentFPMethod, count(currentFPMethod) as total,
									CASE
									    WHEN currentFPMethod = 1 THEN "Condom"
									    WHEN currentFPMethod = 2 THEN "Traditional Method"
									    WHEN currentFPMethod = 3 THEN "Pills"
									    WHEN currentFPMethod = 4 THEN "Injections"
									    WHEN currentFPMethod = 5 THEN "Tubal Ligation"
									    WHEN currentFPMethod = 6 THEN "IUCD"
									    WHEN currentFPMethod = 7 THEN "Implant"
									    WHEN currentFPMethod = 8 THEN "Missing"
									    ELSE "Not using any FP Method"
									END as value
									from household 
									where currentUseFPMethod = 1
									group by currentFPMethod;');
		$data = $query->result();
		return $data;
	}

	public function getSideEffectsCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select sideEffects, count(sideEffects) as total,
									CASE
									    WHEN sideEffects = 1 THEN "Yes"
									    WHEN sideEffects = 2 THEN "No"
									    WHEN sideEffects = "" THEN "Not using any FP Method"
									    ELSE "Missing"
									END as value
									from household 
									where useFPMethod = 1
									group by sideEffects;');
		$data = $query->result();
		return $data;
	}

	public function getFPProviderVisitCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select fpProviderVisit, count(fpProviderVisit) as total,
									CASE
									    WHEN fpProviderVisit = 1 THEN "Yes"
									    WHEN fpProviderVisit = 2 THEN "No"
									    WHEN fpProviderVisit = "" THEN "Not using any FP Method"
									    ELSE "Missing"
									END as value
									from household 
									where useFPMethod = 1
									group by fpProviderVisit;');
		$data = $query->result();
		return $data;
	}

	public function getFPProviderVisitReason()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select visitReason, count(visitReason) as total,
									CASE
									    WHEN visitReason = 1 THEN "FP Consultation"
									    WHEN visitReason = 2 THEN "For IUCD"
									    WHEN visitReason = 3 THEN "For Implant"
									    WHEN visitReason = 4 THEN "Remove IUCD"
									    WHEN visitReason = 5 THEN "Condom or Pills"
									    WHEN visitReason = 6 THEN "Injection"
									    WHEN visitReason = 7 THEN "Remove Implant"
									    WHEN visitReason = 8 THEN "Missing"
									    ELSE "Not using any FP Method"
									END as value
									from household 
									where useFPMethod = 1 and fpProviderVisit = 1
									group by visitReason;');
		$data = $query->result();
		return $data;
	}

	public function getInterestedFPMethodCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select fpMethodInterest, count(fpMethodInterest) as total,
									CASE
									    WHEN fpMethodInterest = 1 THEN "Yes"
									    WHEN fpMethodInterest = 2 THEN "No"
									    ELSE "Missing"
									END as value
									from household 
									group by fpMethodInterest;');
		$data = $query->result();
		return $data;
	}

	public function getReasonNotInterestedCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select reasonNoFP, count(reasonNoFP) as total,
									CASE
									    WHEN reasonNoFP = 1 THEN "Side Effects"
									    WHEN reasonNoFP = 2 THEN "Family not complete"
									    WHEN reasonNoFP = 3 THEN "No permission from husband"
									    WHEN reasonNoFP = 4 THEN "No permission from mother in law"
									    WHEN reasonNoFP = 5 THEN "Missing"
									    ELSE "Missing"
									END as value
									from household 
									where fpMethodInterest = 2 and useFPMethod = 2
									group by reasonNoFP;');
		$data = $query->result();
		return $data;
	}
}


?>