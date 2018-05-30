<!--
    File Name: ShowWomenMEInfoView.php
    Created By: M Zeeshan Shahzad
    Date: 19-04-2018

-->
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
				<a href="<?php echo site_url('MonitoringAndEvaluationController/index')?>"><span style="color: maroon">Monitiong and Evaluation Data</span> </a>
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

                       <tbody>
                               <?php foreach ($fetch_data as $row){?>
                                   <tr>
                                       <td><?php echo $row->surveyquestionQuestion?></td>
                                       <td><?php echo $row->surveyanswerAnswer?></td>
                                   </tr>
                               <?php }?>
                       </tbody>
                   </table>
                   <a href="<?php echo site_url('MonitoringAndEvaluationController/index')?>"><button type="button" class="btn btn-info" style="width: 100%">Back</button> </a>
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

