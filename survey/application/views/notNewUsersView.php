
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
				<span>Not New Users</span>
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
                <form method='post' action='<?php echo site_url("ExportController/csv");?>'> 
                        <input class = "btn btn-default" type ="date" name ="fromDate" id="fromDate">
                        <input class = "btn btn-default" type ="date" name ="toDate" id="toDate">
                        <input type ="hidden" name ="tableToExport" value="notNewUsers">

                        <input class = "btn btn-success" type = "submit" name="submit" value = "Download CSV"/> 
                    </form>
                   <table data-page-length='25' id="women_data" class="search table table-striped text-capitalize dt-responsive nowrap ">
                       <thead>
                       <tr>
                           <th>S.No.</th>
                           <th>Client Name</th>                           
                           <th id="datepicker">Date</th> 
                           <th>Mohallah</th>
                           <th>Aapi Code</th>
                           <th>Aapi Name</th>
                           <th>SM Name</th>                        
                           <th>Age</th>
                           <th>View</th>
                       </tr>
                       </thead>
                       <tfoot>
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>                         
                                <th id="datepicker">Date</th>
                                <th>Mohallah</th>
                                <th>Aapi Code</th>
                                <th>Aapi Name</th>
                                <th>SM Name</th>                           
                                <th>Age</th>
                                <th>View</th>
                            </tr>
                        </tfoot>
                       <tbody>
                               <?php foreach ($fetch_data as $row){?>
                                   <tr class = "text-capitalize">
                                        <td><?php echo $row->SNO?></td>
                                        <td><?php echo $row->Name?></td>                        
                                        <td><?php echo $row->Date?></td>  
                                        <td><?php echo $row->MUHALA?></td>
                                        <td><?php echo $row->API?></td>
                                        <td><?php echo $row->APIName?></td>
                                        <td><?php echo $row->SM?></td>                                           
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
            $('#women_data').DataTable(
                
            );
    });
</script>
</body>
</html>

