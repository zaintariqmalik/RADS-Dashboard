
<!DOCTYPE HTML>
<html>
<head>
<title>Search</title>
    <?php
    $this->load->view('head');
    ?>


</head>
<body>
<div id="wrapper">

<!----->
    <?php
    $this->load->view('nav_bar');
    ?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="<?php echo site_url('DashboardSummaryController')?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<a href="<?php echo site_url('SocialMobilizerController/index')?>"><span style="color: maroon">Social Mobilizer Data</span> </a>
                <i class="fa fa-angle-right"></i>
                <span>View</span>
				</h2>
                            <p class="header_logo">
                                <a href ="https://www.ppif.org.pk/"><img src="<?php echo base_url(); ?>images\logo\ppif_logo.png"></a>
                                    &nbsp;&nbsp;
                                <a href ="#"><img src="<?php echo base_url(); ?>images\logo\ahkrc_logo.png"></a>
                            </p>
            </div>
		<!--//banner-->
        <br/>
		<!--content-->
		<div class="container-fluid" >

               <div class="table-responsive" style="background-color: white;border-radius: 3px">
                   <table id="women_data" class="table table-striped dt-responsive nowrap">
                       <thead>
                       

                       </thead>
                       <tbody>
                               <?php foreach ($fetch_data as $row){?>
                                   <tr>
                                       <tr><td>Serial number</td><td><?php echo $row['sno']?></td></tr>
                                       <tr><td>Mobilizer Code</td><td><?php echo $row['smCode']?></td></tr>
                                       <tr><td>Name of Mobilizer</td><td><?php echo $row['smName']?></td></tr>
                                       <tr><td>Aapi Code</td><td><?php echo $row['aapiCode']?></td></tr>
                                       <tr><td>Name of Aapi</td><td><?php echo $row['aapiName']?></td></tr>
                                       <tr><td>Name of Mohalla</td><td><?php echo $row['mohallaName']?></td></tr>
                                       <tr><td>Address</td><td><?php echo $row['address']?></td></tr>
                                       <tr><td>Date</td><td><?php echo $row['date']?></td></tr>
                                       <tr><td>Name of respondent</td><td><?php echo $row['respondentName']?></td></tr>
                                       <tr><td>Do you know about AHKRC?</td><td><?php echo $row['knowAhkrc']?></td></tr>
                                       <tr><td>Did our Aapi visit your home?</td><td><?php echo $row['aapiVisited']?></td></tr>
                                       <tr><td>When did she visit your home?</td><td><?php echo $row['whenVisited']?></td></tr>
                                       <tr><td>Counseling</td><td><?php echo $row['counseling']?></td></tr>
                                       <tr><td>Provided FP products</td><td><?php echo $row['FPproducts']?></td></tr>
                                       <tr><td>FP Referral </td><td><?php echo $row['FRreferral']?></td></tr>
                                       <tr><td>Referral for other health services</td><td><?php echo $row['referralForOtherHealthServices']?></td></tr>
                                       <tr><td>Introductory visit</td><td><?php echo $row['introductoryVisit']?></td></tr>
                                       <tr><td>None</td><td><?php echo $row['none']?></td></tr>
                                       <tr><td>Were you using any FP method before Aapis visit?</td><td><?php echo $row['usingFPmethodBeforeAapiVisit']?></td></tr>
                                       <tr><td>Which method?</td><td><?php echo $row['usedFPmethodNameBeforeAapiVisit']?></td></tr>
                                       <tr><td>Did she discuss about family planning?</td><td><?php echo $row['discussedAboutFP']?></td></tr>
                                       <tr><td>Did she shared information regarding FP services?</td><td><?php echo $row['sharedInfoAboutFP']?></td></tr>
                                       <tr><td>Which method you are currently using?</td><td><?php echo $row['methodCurrentlyUsing']?></td></tr>
                                       <tr><td>Did she refer you to any HCP?</td><td><?php echo $row['referToHCP']?></td></tr>
                                       <tr><td>Are you satisfied by the services provided by HCP?</td><td><?php echo $row['satisfiedByHCP']?></td></tr>
                                       <tr><td>Which HCP you visited?</td><td><?php echo $row['HCPname']?></td></tr>
                                       <tr><td>Are you satisfied by the services provided by Aapi?</td><td><?php echo $row['satisfiedByAapi']?></td></tr>
                                       <tr><td>Provided counseling </td><td><?php echo $row['providedCounseling']?></td></tr>
                                       <tr><td>Did you provide one on one counselling (CBT) ?</td><td><?php echo $row['provideCBTcounseling']?></td></tr>
                                       <tr><td>Have you Identify any Positive Deviant?</td><td><?php echo $row['identifyPositiveDeviant']?></td></tr>
                                       <tr><td>Date of Counselling</td><td><?php echo $row['counsellingDate']?></td></tr>
                                       <tr><td>Have you conducted the community session in this house?</td><td><?php echo $row['communitySessionConducted']?></td></tr>
                                       <tr><td>Next Meeting</td><td><?php echo $row['nextMeeting']?></td></tr>
                                   </tr>
                               <?php }?>
                       </tbody>
                   </table>
                   <a href="<?php echo site_url('SocialMobilizerController/index')?>"><button type="button" class="btn btn-info" style="width: 100%">Back</button> </a>
               </div>




			<div class="clearfix"> </div>
		</div>
		<!----->

		<!--//content-->


	 
		<!---->
           <?php // include "footer.php"?>
		</div>
		<div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
	<script src="<?php echo base_url(); ?>js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url(); ?>js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"> </script>

</body>
</html>

