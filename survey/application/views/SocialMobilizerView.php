
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
				<span>SM Data</span>
				</h2>
                            <p class="header_logo">
                                <a href ="https://www.ppif.org.pk/"><img src="<?php echo base_url(); ?>images\logo\ppif_logo.png"></a>
                                    &nbsp;&nbsp;
                                <a href ="#"><img src="<?php echo base_url(); ?>images\logo\ahkrc_logo.png"></a>
                            </p>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="container-fluid" >

               <div class="table-responsive" style="background-color: white;border-radius: 3">
                   <table data-page-length='25' id="women_data" class="table table-striped dt-responsive nowrap">
                       <thead>
                       <tr>
                            <th>S.No.</th>
                            <th>SM Code</th>
                            <th>SM Name</th>
                            <th>Aapi Code</th>
                            <th>Aapi Name</th>
                            <th>Mohalla</th>    
                            <th>Date</th>               
                            <th>Aapi Visited?</th>
                            <th>View</th>
                       </tr>
                       </thead>

                       <tbody>
                             <?php 
                             foreach ($fetch_data as $row){ ?>
                                <tr class = "text-capitalize">
                                    <td><?php echo $row['sno']; ?> </td>
                                    <td><?php echo $row['smCode']; ?> </td>
                                    <td><?php echo $row['smName']; ?> </td>
                                    <td><?php echo $row['aapiCode']; ?> </td>
                                    <td><?php echo $row['aapiName']; ?> </td>
                                    <td><?php echo $row['mohallaName']; ?> </td>
                                    <td><?php echo $row['date']; ?> </td>
                                    <td><?php echo $row['aapiVisited']; ?> </td>
                                    <td><a href="<?php echo site_url('SocialMobilizerController/getDetailsOfSMBySNo/'.$row['sno'])?>">View More.. <!--<button type="button" class="btn btn-info">View</button> --> </a></td>
                            <?php
                             }
                             /* for($i = 0; $i < count($fetch_data); $i+=28){ //echo $fetch_data[$i]['ID'];?>
                            <tr class = "text-capitalize">
                                <td><?php echo $fetch_data[$i]['Response'];?></td>
                                <td><?php echo $fetch_data[$i+1]['Response'];?></td>
                                <td><?php echo $fetch_data[$i+2]['Response'];?></td>
                                <td><?php echo $fetch_data[$i+3]['Response'];?></td>
                                <td><?php echo $fetch_data[$i+4]['Response'];?></td>
                                <td><?php echo $fetch_data[$i+7]['Response'];?></td>
                                <td><?php echo $fetch_data[$i+5]['Response'];?></td>
                                <td><?php echo $fetch_data[$i+10]['Response'];?></td>
                                <td><a href="<?php echo site_url('SocialMobilizerController/getDetailsOfSMBySNo/'.$fetch_data[$i]['ID'])?>">View More.. <!--<button type="button" class="btn btn-info">View</button> --> </a></td>
                            </tr>
                             <?php }*/ ?>
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
            $('#women_data').DataTable({
               
                
            });
    });
</script>
</body>
</html>

