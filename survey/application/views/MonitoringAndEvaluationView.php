<!--
    File Name: MonitoringAndEvaluationView.php
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
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

</head>
<body>
<div id="wrapper">

<!------>
    <?php
    $this->load->view('nav_bar');
    ?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="<?php echo site_url('DashboardSummaryController/')?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>M &amp; E Data</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="container-fluid" >

               <div class="table-responsive" style="background-color: white;border-radius: 3">
                   <table id="women_data" class="table table-striped dt-responsive nowrap">
                       <thead>
                            <tr style="font-weight: bold">
                                <td>Serial Number</td>
                                <td>Date</td>
                                <td>SM Name</td>
                                <td>Aapi Code</td>
                                <td>Respondent Name</td>
                                <td>Type of Service</td>
                                <td>Using Service</td>
                                <td>Mohalla</td>
                            </tr>
                       </thead>

                       <tbody>   
                        <?php for($i = 0; $i < count($fetch_data); $i+=9){ //echo $fetch_data[$i]['ID'];?>
                            <tr class = "text-capitalize">
                                <td><?php echo $fetch_data[$i]['Response']; ?></td>
                                <td><?php if($fetch_data[$i]['ID'] < 121928 ) echo $fetch_data[$i+7]['Response']; else  echo $fetch_data[$i+8]['Response'];  ?></td> 
                                <td><?php echo $fetch_data[$i+1]['Response']; ?></td>
                                <td><?php echo $fetch_data[$i+2]['Response']; ?></td>
                                <td><?php echo $fetch_data[$i+3]['Response']; ?></td>
                                <td><?php if($fetch_data[$i]['ID'] < 121928) echo $fetch_data[$i+5]['Response']; else  echo $fetch_data[$i+6]['Response'];  ?></td>
                                <td><?php if($fetch_data[$i]['ID'] < 121928) echo $fetch_data[$i+6]['Response']; else  echo $fetch_data[$i+7]['Response'];  ?></td>
                                <td><?php 
                                    if($fetch_data[$i]['ID'] < 121928) { 
                                        $i = $i - 1; echo "N/A"; 
                                        } else echo $fetch_data[$i+4]['Response'];?>
                                </td> 
              
                            </tr>
                        <?php } ?>
                       </tbody>
                   </table>
               </div>

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
<script>
    $(document).ready(function(){
            $('#women_data').DataTable();
    });
</script>
</body>
</html>

