
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
				<a href="<?php echo site_url('DisplayController/showIndexFile')?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<a href="<?php echo site_url('SocialMobilizerController/index')?>"><span style="color: maroon">Social Mobilizer Data</span> </a>
        <i class="fa fa-angle-right"></i>
        <span>View</span>
				</h2>
		    </div>
		<!--//banner-->
        <br/>
		<!--content-->
		<div class="container-fluid" >

               <div class="table-responsive" style="background-color: white;border-radius: 3px">
                   <table id="women_data" class="table table-striped table-bordered">

                       <tbody>
                               <?php foreach ($fetch_data as $row){?>
                                   <tr>
                                       <td><?php echo $row->surveyquestionQuestion?></td>
                                       <td><?php echo $row->surveyanswerAnswer?></td>
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

</body>
</html>

