
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
				<a href="<?php echo site_url('DisplayController/showIndexFile')?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Search</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="container-fluid" >

               <div class="table table-striped table-responsive table-display" style="background-color: white;border-radius: 3">
                   <table id="women_data" class="table table-striped table-bordered text-center">
                       <thead>
                       <tr>
                           <td>Serial Number</td>
                           <td>Women Name</td>
                           <td>Muhalah</td>
                           <td>Api Name</td>
                           <td>Social Mobilizer Name</td>
                           <td>ViewMore</td>
                       </tr>
                       </thead>

                       <tbody>
                               <?php foreach ($fetch_data as $row){?>
                                   <tr>
                                            <td><?php echo $row->SNO?></td>
                                            <td><?php echo $row->Name?></td>
                                            <td><?php echo $row->MUHALA?></td>
                                            <td><?php echo $row->APIName?></td>
                                            <td><?php echo $row->SM?></td>
                                            <td><a href="<?php echo site_url('SearchController/getDetailsOfWomenBySNo/'.$row->SNO)?>"><button type="button" class="btn btn-info">View</button> </a></td>
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

