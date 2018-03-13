
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
				<a href="<?php echo site_url('DisplayController/showIndexFile')?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Social Mobilizer</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="container">
           <div class="col-md-12 col-sm-12 col-xs-12">

               <table class="table table-striped">
                   <tr>
                       <td><div class="top-content">Questions</div></td>
                   </tr>
                   <?php
                   foreach($fetch_data as $index => $row)
                   {
                       if($index<5){
                          continue;
                       }
                        else if ($row->surveyquestionQuestion == "Date of Counselling (ddmmyyyy)")
                          continue;
                       ?>
                       <tr>
                           <td>
                               <a href="<?php echo site_url('DisplayController/getQuestionData/'.$row->surveyquestionId) ?>">
                                   <?php echo $row->surveyquestionQuestion;
                                   ?>
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

