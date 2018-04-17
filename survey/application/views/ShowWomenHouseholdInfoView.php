
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
		    <div class="banner" style = "background: #ecad86">
		   
				<h2>
				<a href="<?php echo site_url('DisplayController/showIndexFile')?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<a href="<?php echo site_url('SearchController'); ?>">
                    <span>Search</span> 
                </a>
                <i class="fa fa-angle-right"></i>

                    <span>Woman Details (<bold style="color: blue">Household Data </bold>)</span>
				</h2>
		    </div>
		<!--//banner-->
        <br/>
		<!--content-->
		<div class="container-fluid" >

               <div class="table-responsive" style="background-color: white;border-radius: 3px">
                   <table id="women_data" class="table table-striped table-bordered table-display">

                       <tbody>
                               <?php foreach ($fetch_data as $row){?>
                                   <tr>
                                       <td>Serial Number</td>
                                       <td><?php echo $row->SNO?></td>
                                   </tr>
                                   <tr>
                                       <td>Api Code</td>
                                       <td><?php echo $row->API?></td>
                                   </tr>
                                   <tr>
                                       <td>Api Name</td>
                                       <td><?php echo $row->APIName?></td>
                                   </tr>
                                   <tr>
                                       <td>Social Mobilizer</td>
                                       <td><?php echo $row->SM?></td>
                                   </tr>
                                   <tr>
                                       <td>Muhalah</td>
                                       <td><?php echo $row->MUHALA?></td>
                                   </tr>
                                   <tr>
                                       <td>Woman's Name</td>
                                       <td><?php echo $row->Name?></td>
                                   </tr>
                                   <tr>
                                       <td>Age</td>
                                       <td><?php echo $row->Age?></td>
                                   </tr>

                                   <tr>
                                       <td>Husband Name</td>
                                       <td><?php echo $row->Husband?></td>
                                   </tr>
                                   <tr>
                                       <td>Address</td>
                                       <td><?php echo $row->HouseAddress?></td>
                                   </tr>
                                   <tr>
                                       <td>Phone Number</td>
                                       <td><?php echo $row->PhNo?></td>
                                   </tr>
                                   <tr>
                                       <td>Number of Childs</td>
                                       <td><?php echo $row->ChildNumber?></td>
                                   </tr>
                                   <tr>
                                       <td>Age of Youngest child</td>
                                       <td><?php echo $row->AgeYoungestChild?></td>
                                   </tr>
                                   <tr>
                                       <td>CNIC</td>
                                       <td><?php echo $row->CNIC?></td>
                                   </tr>
                                   <tr>
                                       <td>Are you pregnant?</td>
                                       <td><?php echo $row->areYouPregnant?></td>
                                   </tr>
                                   <tr>
                                       <td>Visit anywhere for pregnancy checkup</td>
                                       <td><?php echo $row->pregnancyCheckUp?></td>
                                   </tr>
                                   <tr>
                                       <td>If Yes name health provider</td>
                                       <td><?php echo $row->HealthProviderName?></td>
                                   </tr>
                                   <tr>
                                       <td>Currently using FP method</td>
                                       <td><?php echo $row->CurrentlyUsingFPMethod?></td>
                                   </tr>
                                   <tr>
                                       <td>If yes which method using</td>
                                       <td><?php echo $row->currentFPMethodName?></td>
                                   </tr>
                                   <tr>
                                       <td>Reason for not using FP</td>
                                       <td>
                                           <table class="table table-bordered">
                                               <tr>
                                                   <td>Fear</td>
                                                   <td>No Permission From Husband</td>
                                                   <td>Family Not Complete</td>
                                                   <td>No Permission From MotherInLaw</td>
                                                   <td>Other</td>
                                               </tr>
                                               <tr>
                                                   <td><?php echo $row->Fear?></td>
                                                   <td><?php echo $row->NoPermissionFromHusband?></td>
                                                   <td><?php echo $row->FamilyNotComplete?></td>
                                                   <td><?php echo $row->NoPermissionFromMotherInLaw?></td>
                                                   <td><?php echo $row->OtherReasonForNotUsing?></td>
                                               </tr>
                                           </table>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Want to use FP</td>
                                       <td><?php echo $row->WantToUseAnyFPMethod?></td>
                                   </tr>
                                   <tr>
                                       <td>Every use FP method</td>
                                       <td><?php echo $row->EveryUseFPMethod?></td>
                                   </tr>
                                   <tr>
                                       <td>If yes which one</td>
                                       <td><?php echo $row->everFPMethod?></td>
                                   </tr>
                                   <tr>
                                       <td>Face side effects</td>
                                       <td><?php echo $row->FaceSideEffects?></td>
                                   </tr>
                                   <tr>
                                       <td>Visit any doctor for FP</td>
                                       <td><?php echo $row->VisitAnyFPProvider?></td>
                                   </tr>
                                   <tr>
                                       <td>Reason for visit</td>
                                       <td>
                                           <table class="table table-bordered">
                                               <tr>
                                                   <td>FPConsulatation</td>
                                                   <td>ForIUD</td>
                                                   <td>Implant</td>
                                                   <td>TubalLigation</td>
                                                   <td>Operation</td>
                                                   <td>SideEffects</td>
                                                   <td>other</td>
                                               </tr>
                                               <tr>
                                                   <td><?php echo $row->FPConsulatation?></td>
                                                   <td><?php echo $row->ForIUD?></td>
                                                   <td><?php echo $row->Implant?></td>
                                                   <td><?php echo $row->TubalLigation?></td>
                                                   <td><?php echo $row->Operation?></td>
                                                   <td><?php echo $row->SideEffects?></td>
                                                   <td><?php echo $row->OtherReasonForVisit?></td>
                                               </tr>
                                           </table>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Visit Result</td>
                                       <td><?php echo $row->VisitResult?>. &nbsp; <?php echo $row->VisitResultOther?> </td>
                                   </tr>
                                   <tr>
                                       <td>Sale any thing during visit</td>
                                       <td><?php echo $row->SaleAnythingDuringVisit?></td>
                                   </tr>
                                   <tr>
                                       <td>Next date</td>
                                       <td><?php echo $row->NextDate?></td>
                                   </tr>

                               <?php }?>
                       </tbody>
                   </table>


                   
               </div>



			<div class="clearfix"> </div>
		</div>
   <br/>
   <br/>
   <br/>
		<!----->

        <?php include "ShowWomenFollowupInfoView.php"?>

			<div class="clearfix"> </div>
		</div>
		<!----->

		<!--//content-->


	 
		<!---->
          <?php include "footer.php"?>
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

