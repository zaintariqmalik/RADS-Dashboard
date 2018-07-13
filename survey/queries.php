<?php
//Query for the selection of New Users...
$query = 'SELECT * 
    FROM followup 
    WHERE (ProvideFPcounseling LIKE "yes" OR SMCounselingprovided LIKE "yes" ) 
    AND SNO IN (
        SELECT SNO FROM household WHERE CurrentlyUsingFPMethod LIKE "no" 
        AND WantToUseAnyFPMethod LIKE "no" AND areYouPregnant LIKE "no")';



//Query for the selection of CBT sessions...
$query = 'SELECT * 
    FROM followup 
    WHERE (ProvideFPcounseling LIKE "yes" OR SMCounselingprovided LIKE "yes" ) 
    AND SNO IN (
        SELECT SNO FROM household WHERE muhala LIKE "fauji colony")';



$query = 'SELECT * 
    FROM followup 
    WHERE conclusion LIKE "new user case closed"
    AND SNO IN (
        SELECT SNO FROM household WHERE CurrentlyUsingFPMethod LIKE "no" 
        AND WantToUseAnyFPMethod LIKE "no" AND areYouPregnant LIKE "no"';

//select current users LARCs

$query = 'SELECT COUNT(*) from household WHERE CurrentlyUsingFPMethod LIKE "yes"
AND (currentFPMethodName LIKE "injection" or currentFPMethodName LIKE "iucd" or currentFPMethodName LIKE "implant")';

//select current users Permanent

$query = 'SELECT COUNT(*) from household WHERE CurrentlyUsingFPMethod LIKE "yes"
AND (currentFPMethodName LIKE "tl" or currentFPMethodName LIKE "operation" )';

//select current users Short Terms methods

$query = 'SELECT COUNT(*) from household WHERE CurrentlyUsingFPMethod LIKE "yes"
AND (currentFPMethodName LIKE "pills" or currentFPMethodName LIKE "condom" )';

//select different columns based on different conditions
$query = 'select MUHALA,            
            COUNT(CASE 
             		WHEN CurrentlyUsingFPMethod LIKE "yes" then "" 
                  END) as CurrentUser, 				
            COUNT(MUHALA)
            FROM household GROUP BY MUHALA';

            //ORRRRRRRRRRRRRRRRRR
$query ='select MUHALA, COUNT(MUHALA),CurrentlyUsingFPMethod, 
            (CASE WHEN (MUHALA LIKE "Allama Iqbal Colony") THEN COUNT(MUHALA) 
                WHEN MUHALA LIKE "Allama Iqbal Colony" THEN COUNT(MUHALA) 
                WHEN MUHALA LIKE "Boring Road" THEN COUNT(MUHALA) 
                WHEN MUHALA LIKE "darul islam" THEN COUNT(MUHALA) 
                WHEN MUHALA LIKE "Dhok Mangtal" THEN COUNT(MUHALA) 
                WHEN MUHALA LIKE "Fauji Colony" THEN COUNT(MUHALA) 
                WHEN MUHALA LIKE "gulshan data" THEN COUNT(MUHALA) 
                WHEN MUHALA LIKE "gulshan datta" THEN COUNT(MUHALA) 
                WHEN MUHALA LIKE "Gulistan e Fatima" THEN COUNT(MUHALA) 
            END) as HHCount, 
            (CASE 
                WHEN CurrentlyUsingFPMethod LIKE "yes" THEN COUNT(CurrentlyUsingFPMethod) 
            END) as NewUser 
            FROM household GROUP BY MUHALA';

            //JOIN followup and household on SNO

$query = 'select h.MUHALA,          
            COUNT(CASE 
             		WHEN h.CurrentlyUsingFPMethod LIKE "yes" then "" 
                  END) as CurrentUser, 				
            COUNT(h.MUHALA), 
            COUNT(CASE
                  	WHEN (f.ProvidedFPproducts = "yes" OR f.SMCounselingprovided = "yes") then ""
                  END) as NewUser
            FROM household h left JOIN followup f ON h.SNO = f.SNO GROUP BY h.MUHALA';
