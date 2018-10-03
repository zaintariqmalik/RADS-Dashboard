<!DOCTYPE HTML>
<html>
<head>
<title>Household Followup</title>
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
				<span>Household Follow Up</span>
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
                        <input type ="hidden" name ="tableToExport" value="conversions">
                    
                        <input class = "btn btn-success" type = "submit" name="submit" value = "Download CSV"/> 
                    </form>

                   <table data-page-length='25' id="women_data" class="search table table-striped text-capitalize dt-responsive nowrap ">
                       <thead>
                       <tr>
                           <th>S.No.</th>
                           <th>Date</th>    
                           <th>Provided_IEC</th>
                           <th>Provided_FP_counseling</th>
                           <th>Provided_FP_Product</th>
                           <th>FP Product Type</th>                        
                           <th>FP Product Quantity</th>
                           <th>Conclusion</th>
                           <th>MethodName</th>
                       </tr>
                       </thead>
                       <tfoot>
                        <tr>
                           <th>S.No.</th>
                           <th>Date</th>    
                           <th>Provided_IEC</th>
                           <th>Provided_FP_counseling</th>
                           <th>Provided_FP_Product</th>
                           <th>FP Product Type</th>                        
                           <th>FP Product Quantity</th>
                           <th>Conclusion</th>
                           <th>MethodName</th>
                            </tr>
                        </tfoot>
                       <tbody>
                            <?php foreach ($HH_followup as $row){?>
                                <tr class = "text-capitalize">
                                    <td><?php echo $row->SNO?></td>
                                    <td><?php echo $row->Date?></td>                        
                                    <td><?php echo $row->provided_IEC_material?></td>  
                                    <td><?php echo $row->ProvideFPcounseling?></td>
                                    <td><?php echo $row->ProvidedFPproducts?></td>
                                    <td><?php echo $row->FPproductType?></td>
                                    <td><?php echo $row->FPproductQuantity?></td>   
                                    <td><?php echo $row->conclusion?></td>
                                    <td><?php echo $row->methodName?></td>
                                    <td><a href="<?php echo site_url('SearchController/getDetailsOfWomenBySNo/'.$row->SNO)?>" class="under"> View More..<!--<button type="button" class="btn btn-info">View</button>--> </a></td>
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

