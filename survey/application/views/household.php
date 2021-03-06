
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>Household</title>
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
				<a href="<?php echo site_url('DisplayController/showIndexFile')?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Household</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="container">
           <div class="col-md-12 col-sm-12 col-xs-12">

               <table class="table table-striped">
                   <tr>
                       <td><div class="top-content">Questions</div></td>
                   </tr>
                   <tr>
                       <td>
                           <a href="<?php echo site_url('HouseholdController/getPregnantWomenCount') ?>">
                               <?php echo "Currently Pregnant"?>
                           </a>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <a href="<?php echo site_url('HouseholdController/getPregnancyCheckupVisitCount') ?>">
                               <?php echo "Did you visit anywhere for pregnancy checkup"?>
                           </a>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <a href="<?php echo site_url('HouseholdController/getFPMethodUsageCount') ?>">
                               <?php echo "Did you ever use FP Method"?>
                           </a>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <a href="<?php echo site_url('HouseholdController/getFPMethodCount') ?>">
                               <?php echo "Which FP Method you used"?>
                           </a>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <a href="<?php echo site_url('HouseholdController/getCurrentFPMethodUsageCount') ?>">
                               <?php echo "Are you currently using FP Method"?>
                           </a>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <a href="<?php echo site_url('HouseholdController/getCurrentFPMethodCount') ?>">
                               <?php echo "Which FP Method you are currently using"?>
                           </a>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <a href="<?php echo site_url('HouseholdController/getSideEffectsCount') ?>">
                               <?php echo "Did you face side effects"?>
                           </a>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <a href="<?php echo site_url('HouseholdController/getFPProviderVisitCount') ?>">
                               <?php echo "Did you visit any FP Provider"?>
                           </a>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <a href="<?php echo site_url('HouseholdController/getFPProviderVisitReason') ?>">
                               <?php echo "Reasons for visiting FP Provider"?>
                           </a>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <a href="<?php echo site_url('HouseholdController/getInterestedFPMethodCount') ?>">
                               <?php echo "Do you want to use any FP Method"?>
                           </a>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <a href="<?php echo site_url('HouseholdController/getReasonNotInterestedCount') ?>">
                               <?php echo "Reasons for not using FP Method"?>
                           </a>
                       </td>
                   </tr>
                   <table>
           </div>

			<div class="clearfix"> </div>
		</div>
		<!----->

		<!--//content-->


	 
		<!---->
          <div class="copy container-fluid">
            <p> &copy; 2018 AHKRC. All Rights Reserved  </p>
	    </div>
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

