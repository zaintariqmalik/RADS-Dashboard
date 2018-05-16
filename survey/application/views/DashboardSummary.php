
<!DOCTYPE HTML>
<html>
<head>
    <title>Overview</title>
    <?php $this->load->view('head'); ?>

      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="author" content="SemiColonWeb" />

      <!-- Stylesheets
      ============================================= -->
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

       <!------ Include the above in your HEAD tag ---------->

      <!-- Add this css in head tag -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

</head>
  <body>
        <div id="wrapper">
            <?php $this->load->view('nav_bar'); ?>
              <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="content-main">
            		<!--banner-->	
          		    <div class="banner">
            				<h2>
              				<a href="<?php echo site_url('DashboardSummaryController#')?>">Home</a>
              				<i class="fa fa-angle-right"></i>
              				<span>Overview</span>
            				</h2>
          		    </div>


                    <!--Counter Section-->
                    <section id="counter_two" class="counter_two" style="padding-top: 03%;" >
                        <div class="overlay">
                            <div class="container">
                                <div class="row">
                                    <div class="main_counter_two sections text-center">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="row">
                                                <div class="col-sm-3 col-xs-12">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-star" style="color: #920000"></i>
                                                        <h2 class="statistic-counter_two" style="color: #e46e25"> 
                                                          <?php print $fetchHousehold->householdCount; ?>
                                                        </h2>
                                                        <p>Household Interviews</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-3 col-xs-12">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-star" style="color: #920000"></i>
                                                        <h2 class="statistic-counter_two" style="color: #e46e25">
                                                          <?php print $fetchFollowUp->followUpCount; ?>
                                                        </h2>
                                                        <p>Follow-ups</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-3 col-xs-12">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-star" style="color: #920000"></i>
                                                        <h2 class="statistic-counter_two" style="color: #e46e25">
                                                          <?php print $fetchSM->smVisitsCount; ?>
                                                        </h2>
                                                        <p>Social Mobilizers Visits</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-3 col-xs-12">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-star" style="color: #920000"></i>
                                                        <h2 class="statistic-counter_two" style="color: #e46e25">
                                                          <?php print $fetchMonitoring->monitoringCount; ?>
                                                        </h2>
                                                        <p>M &amp; E Visits</p>
                                                    </div>
                                                </div>
                                            </div><!-- End off col-sm-3 -->
                                        </div>
                                    </div>
                                </div><!-- End off row -->
                            </div><!-- End off container -->
                        </div><!-- End off overlay -->
                    </section><!-- End off Counter section -->
  
                    <section>
                      
                    </section>





                </div>
              </div>
            <?php include "footer.php"?>
        </div>
        <div class="clearfix"> 
        </div>
<!---->
<!--scrolling js-->
        <script src="<?php echo base_url(); ?>js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>js/scripts.js"></script>
        <!--//scrolling js-->
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"> </script>

         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

        <!-- Delay in counter numbers -->
        <script type="text/javascript">
          $('.statistic-counter_two, .statistic-counter, .count-number').counterUp({
                delay: 10,
                time: 2000
            });
          </script>
  </body>
</html>

