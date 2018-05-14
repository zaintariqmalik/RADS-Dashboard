
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
				<span>Search</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="container-fluid" >

               <div class="table table-striped table-responsive table-display" style="background-color: white;border-radius: 3">
                   <table data-page-length='25' id="women_data" class="search table table-striped text-capitalize dt-responsive nowrap ">
                       <thead>
                       <tr>
                           <th>S.No.</th>
                           <th>Name</th>
                           <th>Mohallah</th>
                           <th>Aapi Code</th>
                           <th>Aapi Name</th>
                           <th>SM Name</th>                           
                           <th id="datepicker">Date</th>                         
                           <th>Age</th>
                           <th>View</th>
                       </tr>
                       </thead>
                       <tfoot>
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Mohallah</th>
                                <th>Aapi Code</th>
                                <th>Aapi Name</th>
                                <th>SM Name</th>                           
                                <th id="datepicker">Date</th>                         
                                <th>Age</th>
                                <th>View</th>
                            </tr>
                        </tfoot>
                       <tbody>
                               <?php foreach ($fetch_data as $row){?>
                                   <tr>
                                            <td><?php echo $row->SNO?></td>
                                            <td><?php echo $row->Name?></td>
                                            <td><?php echo $row->MUHALA?></td>
                                            <td><?php echo $row->API?></td>
                                            <td><?php echo $row->APIName?></td>
                                            <td><?php echo $row->SM?></td>                          
                                            <td><?php echo $row->Date?></td>                                           
                                            <td><?php echo $row->Age?></td>
                                            <td><a href="<?php echo site_url('SearchController/getDetailsOfWomenBySNo/'.$row->SNO)?>" class="under"> View More..<!--<button type="button" class="btn btn-info">View</button>--> </a></td>
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

