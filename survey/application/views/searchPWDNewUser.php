
<!DOCTYPE HTML>
<html>
<head>
<title>New Users</title>
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
				<span>Search New Users (PWD Health Camp)</span>
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

               <div class="table table-striped table-responsive table-display" style="background-color: white;border-radius: 3">
                   <table data-page-length='25' id="women_data" class="search table table-striped text-capitalize dt-responsive nowrap ">
                       <thead>
                       <tr>
                           <th>S.No.</th>
                           <th>Client Name</th>                           
                           <th id="datepicker">Date</th> 
                           <th>Address</th>
                           <th>Aapi Code</th>
                           <th>Aapi Name</th>                
                           <th>Age</th>
                           <th>Contact</th>     
                       </tr>
                       </thead>
                       <tfoot>
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>                         
                                <th id="datepicker">Date</th>
                                <th>Address</th>
                                <th>Aapi Code</th>
                                <th>Aapi Name</th>                       
                                <th>Age</th>
                                <th>Contact</th>    
                            </tr>
                        </tfoot>
                       <tbody>
                               <?php foreach ($fetchPWDNewUsers as $row){?>
                                   <tr class = "text-capitalize">
                                            <td><?php echo $row->sno?></td>
                                            <td><?php echo $row->clientName?></td>                        
                                            <td><?php echo $row->regDate?></td>  
                                            <td><?php echo $row->address?></td>
                                            <td><?php echo ''?></td>
                                            <td><?php echo $row->aapiName?></td>                                    
                                            <td><?php echo $row->age?></td>                                   
                                            <td><?php echo $row->contactNo?></td>
                                         <!--   <td><a href="<?php // echo site_url('SearchController/getDetailsOfWomenBySNo/'.$row->SNO)?>" class="under"> View More..<!--<button type="button" class="btn btn-info">View</button> </a></td> --> 
                                   </tr>
                               <?php }?>
                       </tbody>
                   </table>
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
<script>
    $(document).ready(function(){
            $('#women_data').DataTable();
    });
</script>
</body>
</html>

