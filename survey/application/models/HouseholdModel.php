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
		$query = $otherdb->query('select areYouPregnant as value , count(areYouPregnant) as total
									from household 
									group by areYouPregnant
									order by total desc');
		$data = $query->result();
		return $data;
	}

	public function getPregnancyCheckupVisitCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select pregnancyCheckUp as value , count(pregnancyCheckUp) as total
									from household 
									where pregnancyCheckUp <> ""
									group by pregnancyCheckUp
									order by total desc;');
		$data = $query->result();
		return $data;
	}

	public function getFPMethodUsageCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select EveryUseFPMethod as value, count(EveryUseFPMethod) as total
									from household 
									where EveryUseFPMethod <> ""
									group by EveryUseFPMethod
									order by total desc;');
		$data = $query->result();
		return $data;
	}

	public function getFPMethodCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select DISTINCT (everFPMethod) as value, count(everFPMethod) as total
									from household 
									where EveryUseFPMethod Like "Yes"
									group by everFPMethod
									order by total desc');
		$data = $query->result();
		return $data;
	}



	public function getCurrentFPMethodUsageCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select CurrentlyUsingFPMethod as value, count(CurrentlyUsingFPMethod) as total
									from household 
									where CurrentlyUsingFPMethod <> ""
									group by CurrentlyUsingFPMethod
									order by total desc;');
		$data = $query->result();
		return $data;
	}

	public function getCurrentFPMethodCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select DISTINCT (currentFPMethodName) as value, count(currentFPMethodName) as total
									from household 
									where CurrentlyUsingFPMethod Like "Yes"
									group by currentFPMethodName
									order by total desc;');
		$data = $query->result();
		return $data;
	}

	public function getSideEffectsCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select FaceSideEffects as value, count(FaceSideEffects) as total
									from household 
									where FaceSideEffects <> ""
						     		group by FaceSideEffects
						     		order by total desc;');
		$data = $query->result();
		return $data;
	}

	public function getFPProviderVisitCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select VisitAnyFPProvider as value, count(VisitAnyFPProvider) as total
										from household 
									where CurrentlyUsingFPMethod = "Yes" and VisitAnyFPProvider <> ""
									group by VisitAnyFPProvider
									order by total desc;');
		$data = $query->result();
		return $data;
	}

	// TODO
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
									group by visitReason
									order by total desc;');
		$data = $query->result();
		return $data;
	}
	

	
    public function getFPProviderVisitReasonFPConsulatation()
    {
        //TRUE parameter tells CI to return otherdb database object
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('select count(`FPConsulatation`) as result from household
                                  where `FPConsulatation` LIKE \'Yes\' 
                                  and `EveryUseFPMethod` LIKE \'Yes\'
                                  and `VisitAnyFPProvider` LIKE \'Yes\'');

        $data = $query->result();
        return $data;
	}

    public function getFPProviderVisitReasonForIUD()
    {
        //TRUE parameter tells CI to return otherdb database object
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('select count(`ForIUD`) as result from household
                                  where `ForIUD` LIKE \'Yes\' 
                                  and `EveryUseFPMethod` LIKE \'Yes\'
                                  and `VisitAnyFPProvider` LIKE \'Yes\'');
        $data = $query->result();
        return $data;
    }
    public function getFPProviderVisitReasonImplant()
    {
        //TRUE parameter tells CI to return otherdb database object
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('select count(`Implant`) as result from household
                                  where `Implant` LIKE \'Yes\' 
                                  and `EveryUseFPMethod` LIKE \'Yes\'
                                  and `VisitAnyFPProvider` LIKE \'Yes\'');
        $data = $query->result();
        return $data;
    }

    public function getFPProviderVisitReasonTubalLigation()
    {
        //TRUE parameter tells CI to return otherdb database object
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('select count(`TubalLigation`) as result from household
                                  where `TubalLigation` LIKE \'Yes\' 
                                  and `EveryUseFPMethod` LIKE \'Yes\'
                                  and `VisitAnyFPProvider` LIKE \'Yes\'');
        $data = $query->result();
        return $data;
    }
    public function getFPProviderVisitReasonOperation()
    {
        //TRUE parameter tells CI to return otherdb database object
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('select count(`Operation`) as result from household
                                  where `Operation` LIKE \'Yes\' 
                                  and `EveryUseFPMethod` LIKE \'Yes\'
                                  and `VisitAnyFPProvider` LIKE \'Yes\'');
        $data = $query->result();
        return $data;
    }

    public function getFPProviderVisitReasonSideEffects()
    {
        //TRUE parameter tells CI to return otherdb database object
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('select count(`SideEffects`) as result from household
                                  where `SideEffects` LIKE \'Yes\' 
                                  and `EveryUseFPMethod` LIKE \'Yes\'
                                  and `VisitAnyFPProvider` LIKE \'Yes\'');
        $data = $query->result();
        return $data;
    }

    public function getFPProviderVisitReasonOtherReasonForVisit()
    {
        //TRUE parameter tells CI to return otherdb database object
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('select count(`OtherReasonForVisit`) as result from household
                                  where `OtherReasonForVisit` <> \'\' 
                                  and `EveryUseFPMethod` LIKE \'Yes\'
                                  and `VisitAnyFPProvider` LIKE \'Yes\'');
        $data = $query->result();
        return $data;
    }



    public function getInterestedFPMethodCount()
	{
		//TRUE parameter tells CI to return otherdb database object
		$otherdb = $this->load->database('otherdb', TRUE);
		$query = $otherdb->query('select WantToUseAnyFPMethod as value, count(WantToUseAnyFPMethod) as total
									  from household 
									  where WantToUseAnyFPMethod <> ""
									group by WantToUseAnyFPMethod
									order by total desc;');
		$data = $query->result();
		return $data;
	}

	/* This function gives us counts that how many people are not using Any FP with having reason  Fear
	 * Getting data from the 'Fear' column of table 'household'.
	 * @returns integer array indicates the figures
	 */
    public function getReasonNotInterestedFear()
    {
        //TRUE parameter tells CI to return otherdb database object
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('SELECT COUNT(`Fear`)  as result FROM `household` WHERE `Fear` LIKE \'Yes\'');
        $data = $query->result();
        return $data;
    }

    /*   This function gives us counts that how many people are not using Any FP with having reason  No Permission From Husband
     *   Getting data from the 'NoPermissionFromHusband' column of table 'household'.
     *   @returns integer array indicates the figures
     */
    public function getReasonNotInterestedNoPermissionFromHusband()
    {
        //TRUE parameter tells CI to return otherdb database object
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('SELECT COUNT(`NoPermissionFromHusband`) as result FROM `household` WHERE `NoPermissionFromHusband` LIKE \'Yes\'');
        $data = $query->result();
        return $data;
    }

    /* This function gives us counts that how many people are not using Any FP with having reason  "Family Not Complete"
	 * Getting data from the 'FamilyNotComplete' column of table 'household'.
	 * @returns integer array indicates the figures
	 * */
    public function getReasonNotInterestedFamilyNotComplete()
    {
        //TRUE parameter tells CI to return otherdb database object
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('SELECT COUNT(`FamilyNotComplete`) as result FROM `household` WHERE `FamilyNotComplete` LIKE \'Yes\'');
        $data = $query->result();
        return $data;
    }

    /*  This function gives us counts that how many people are not using Any FP with having reason "NoPermissionFromMotherInLaw"
	 *  Getting data from the 'NoPermissionFromMotherInLaw' column of table 'household'.
	 *  @returns integer array indicates the figures
	 */
    public function getReasonNotInterestedNoPermissionFromMotherInLaw()
    {
        //TRUE parameter tells CI to return otherdb database object
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('SELECT COUNT(`NoPermissionFromMotherInLaw`) as result FROM `household` WHERE `NoPermissionFromMotherInLaw` LIKE \'Yes\'');
        $data = $query->result();
        return $data;
    }

    /*  This function gives us counts that how many people are not using Any FP with having reason  "Other"
	 *  Getting data from the 'OtherReasonForNotUsing' column of table 'household'.
	 *  @returns integer array indicates the figures
	 */
    public function getReasonNotInterestedOtherReasonForNotUsing()
    {
        //TRUE parameter tells CI to return otherdb database object
        $otherdb = $this->load->database('otherdb', TRUE);
        $query = $otherdb->query('SELECT COUNT(`OtherReasonForNotUsing`) as result FROM `household` WHERE `OtherReasonForNotUsing` <> \'\'');
        $data = $query->result();
        return $data;
    }

}



?>