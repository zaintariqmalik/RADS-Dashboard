
<!DOCTYPE HTML>
<html>
<head>
<title>Social Mobilizer</title>
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
				<span>Social Mobilizer</span>
				</h2>
                            <p class="header_logo">
                                <a href ="https://www.ppif.org.pk/"><img src="<?php echo base_url(); ?>images\logo\ppif_logo.png"></a>
                                    &nbsp;&nbsp;
                                <a href ="#"><img src="<?php echo base_url(); ?>images\logo\ahkrc_logo.png"></a>
                            </p>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="container">
           <div class="col-md-12 col-sm-12 col-xs-12">

               <table class="table table-striped">
                   <tr>
                       <th><div class="top-content">Questions</div></th>
                   </tr>
                   <?php
                   foreach($fetch_data as $index => $row)
                   {
                       if($index < 9 OR $row->surveyquestionId == 8619 OR $row->surveyquestionId == 8614 OR $row->surveyquestionId == 8621)
                          continue;
                       ?>
                       <tr>
                           <td>
                               <a href="<?php echo site_url('DisplayController/getQuestionData/'.$row->surveyquestionId) ?>">
                                   <?php echo $row->surveyquestionQuestion;?>
                               </a>
                           </td>
                       </tr>
                   <?php }?>
                   <table>
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

