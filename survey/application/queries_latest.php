<?php 
'UPDATE household SET everFPMethod = "injection" WHERE everFPMethod = "injections"';


'UPDATE household SET everFPMethod = "Traditional Method" WHERE everFPMethod = "tardinal method"';


//New User Updated Query 7th August 2018 (After Issue Identified by Imran PPIF)
"SELECT h.*, f.conclusion, f.methodName FROM household h JOIN followup f ON h.SNO = f.SNO WHERE h.areYouPregnant LIKE 'no' AND h.CurrentlyUsingFPMethod LIKE 'no' AND (h.everFPMethod <> 'TL' OR h.everFPMethod LIKE 'operation') AND (h.currentFPMethodName = '' OR h.currentFPMethodName LIKE 'TM') AND f.conclusion LIKE 'new user case closed'";

// Potential New Users Query
"SELECT h.*, f.conclusion FROM household h JOIN followup f ON h.SNO = f.SNO WHERE h.CurrentlyUsingFPMethod LIKE 'no' AND h.WantToUseAnyFPMethod LIKE 'yes' AND f.conclusion <> 'New User Case Closed' AND f.conclusion <> ''";

	// FollowUp 19 : Query for fetching fake New Users
            // $query =  $otherdb->query("SELECT h.*, f.methodName FROM household h JOIN followup f ON h.SNO = f.SNO WHERE h.currentFPMethodName = f.methodName AND f.methodName <> '' AND h.currentFPMethodName <> ''");
        // FollowUp 18 : Query for Conversions
           // $query =  $otherdb->query("SELECT h.*, f.methodName FROM household h JOIN followup f ON h.SNO = f.SNO WHERE h.currentFPMethodName <> 'tm' AND h.currentFPMethodName <> f.methodName AND f.methodName <> '' AND h.currentFPMethodName <> ''");
           

// Conversions Query to all other methods
  "SELECT h.*, f.conclusion, f.methodName FROM household h JOIN followup f ON h.SNO = f.SNO 
  	WHERE h.CurrentlyUsingFPMethod LIKE 'yes' 
  	AND h.currentFPMethodName LIKE 'condom' AND f.methodName IN ('injection','pills','iucd','implant','tl') 
  	OR h.currentFPMethodName LIKE 'pills' AND f.methodName IN ('injection', 'iucd', 'implant', 'tl') 
  	OR h.currentFPMethodName LIKE 'injection' AND f.methodName IN ('iucd', 'implant', 'tl') 
  	OR h.currentFPMethodName LIKE 'iucd' AND f.methodName IN ('tl') 
  	OR h.currentFPMethodName LIKE 'implant' AND f.methodName IN ('tl')";
                                    

// Query for Conversions to LARCs only
	"SELECT h.*, f.conclusion, f.methodName FROM household h JOIN followup f ON h.SNO = f.SNO 
	WHERE (h.currentFPMethodName LIKE 'condom' AND f.methodName IN ('injection','pills','iucd','implant','tl') 
	OR h.currentFPMethodName LIKE 'pills' AND f.methodName IN ('injection', 'iucd', 'implant', 'tl') 
	OR h.currentFPMethodName LIKE 'injection' AND f.methodName IN ('iucd', 'implant', 'tl') 
	OR h.currentFPMethodName LIKE 'iucd' AND f.methodName IN ('tl') 
	OR h.currentFPMethodName LIKE 'implant' AND f.methodName IN ('tl')) AND f.methodName IN ('iucd','implant','injection')";


// Query for those Households who want to use  any FP Method and who were not followed up.
"SELECT * FROM household WHERE SNO not in (SELECT SNO FROM followup ) AND CurrentlyUsingFPMethod LIKE 'no' AND WantToUseAnyFPMethod LIKE 'yes' ";


//Query for those households who want to use any FP Method and who are not new users yet.
"SELECT * FROM household WHERE areYouPregnant LIKE 'no' AND currentFPMethodName in ('','tm','traditional method') AND WantToUseAnyFPMethod like 'yes' AND SNO NOT IN ( SELECT SNO FROM followup WHERE conclusion LIKE 'new user case closed')";

