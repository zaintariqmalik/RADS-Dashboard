
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
      
     <!-- <script  type="text/javascript" src="<?php echo base_url('js/loader.js'); ?>"></script>-->
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <style>
       @media (min-width: 1200px){
            .col-lg-5 {
                width:45.49% !important;
            }.col-lg-4 {
                width: 39.6666667%;
            }
        }
        @media (min-width: 768px){
            .col-sm-11 {
                width: 92.7%;
            }
            .col-sm-2 {
                width: 14%;
            }
        }
    </style>
    <?php include("googleCharts.php"); ?>
     

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
                            <p class="header_logo">
                                <a href ="https://www.ppif.org.pk/" target="_blank"><img src="<?php echo base_url(); ?>images\logo\ppif_logo.png"></a>
                                    &nbsp;&nbsp;
                                <a href ="#"><img src="<?php echo base_url(); ?>images\logo\ahkrc_logo.png"></a>
                            </p>
          		    </div>

                    <!--Counter Section-->
                    <section id="counter_two" class="counter_two" style="padding-top: 1%;" >
                        <div class="overlay">
                            <div class="container">
                                <div class="row">
                                    <div class="main_counter_two sections text-center">
                                        <div class="col-sm-11" style = "background: #f7d6c4; padding: 40px 10px 40px 2px;margin: 0 0 0 15px;">
                                            <div class="row">
                                                <div class="col-sm-3 col-xs-6">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-home nav_icon" style="color: #f75e00; font-size: 30px;"></i>
                                                        <h3 class="statistic-counter_two" style="color: #f75e00"> 
                                                        <span><?php print $fetchHousehold->householdCount; ?></span>
                                                        </h3>
                                                        <p>Household Interviews</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-3 col-xs-6">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-undo nav_icon" style="color: #f75e00; font-size: 30px;"></i>
                                                        <h3 class="statistic-counter_two" style="color: #f75e00">
                                                            <span><?php print $fetchFollowUp_HH->fetchFollowUpHHCount; ?></span>
                                                        </h3>
                                                        <p>Follow Up Households</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-3 col-xs-6">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-undo nav_icon" style="color: #f75e00; font-size: 30px;"></i>
                                                        <h3 class="statistic-counter_two" style="color: #f75e00">
                                                        <span><?php print $fetchFollowUp->followUpCount; ?></span>
                                                        </h3>
                                                        <p>Total Follow Ups</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-3 col-xs-6">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-users nav_icon" style="color: #f75e00; font-size: 30px;"></i>
                                                        <h3 class="statistic-counter_two" style="color: #f75e00">
                                                        <span><?php print $fetchSM->smVisitsCount; ?></span>
                                                        </h3>
                                                        <p>Social Mobilizers Visits</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-3 col-xs-6">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-check-circle-o nav_icon" style="color: #f75e00; font-size: 30px;"></i>
                                                        <h3 class="statistic-counter_two" style="color: #f75e00">
                                                        <span><?php print $fetchMonitoring->monitoringCount; ?></span>
                                                        </h3>
                                                        <p>M &amp; E Visits</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-xs-6">
                                                    <div class="single_counter_two_right">
                                                        <!--<i class="fa fa-street-view nav_icon" style="color: green; font-size: 30px;"></i> -->
                                                        <i class="fas fa-sync-alt nav_icon" style="color: green; font-size: 30px;"></i>
                                                        <h3 class="statistic-counter_two" style="color: green">
                                                        <span><?php print $conversions->conversions_count; ?></span>
                                                        </h3>
                                                        <p>Conversions</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-xs-6">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-street-view nav_icon" style="color: green; font-size: 30px;"></i>
                                                        <h3 class="statistic-counter_two" style="color: green">
                                                        <span><?php print $larcs_conversions->larcs_conversions_count; ?></span>
                                                        </h3>
                                                        <p>LARCs</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-xs-6">
                                                    <div class="single_counter_two_right">
                                                        <i class="far fa-address-card nav_icon" style="color: green; font-size: 30px;"></i>
                                                        <h3 class="statistic-counter_two" style="color: green">
                                                        <span><?php print $fetchNewUser->newUserCount + 371; ?></span>
                                                        </h3>
                                                        <p>New Users</p>
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
                        <div class="overlay">
                            <div class="container">
                                <div class="row">
                                    <div id="firstChart" class = "col-lg-5 col-md-5 col-sm-12 " style=" padding: 20px; background: #fff;margin: 15px 0 15px 15px"></div>
                                    <div id="piechart" class = "col-lg-5 col-md-5 col-sm-12" style="  padding: 20px; background: #fff;margin:15px 0 15px 15px"></div>
                                    
                                    <!--<div id="ascrail2000" class = "nicescroll-rails col-lg-5 col-md-5 col-sm-12" style="height:240px; overflow-y: scroll; padding: 20px; background: #fff;margin:15px 0 15px 15px">
                                        <table data-page-length='25' id="women_data" class="search table table-striped text-capitalize dt-responsive nowrap ">
                                            <thead>
                                            <tr>
                                             
                                                <th>Mohalla Name</th>
                                                <th>Total Household</th>
                                                <th>Visited Household</th>
                                                <th>Current Users</th>
                                                <th>New Users</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                            
                                                <th>Mohalla Name</th>
                                                <th>Total Household</th>
                                                <th>Visited Household</th>
                                                <th>Current Users</th>
                                                <th>New Users</th>
                                            </tr>
                                                </tfoot>
                                            <tbody>
                                                      <?php
                                                        $i = 1; $total_HH = 0;
                                                        foreach ($mohallaWiseHH as $row){?>
                                                        <tr class = "text-capitalize">
                                                                    <td><?php echo $i?></td> 
                                                                    <td><?php echo $row->mohalla?></td>
                                                                    <td><?php echo $total_HH?></td>
                                                                    <td><?php echo $row->mohalla_visits?></td> 
                                                                    <td><?php echo $row->CurrentUser?></td>
                                                                    <td><?php echo $row->NewUser?></td>
                                                        </tr>
                                                    <?php $i++; } ?>
                                                   
                                            </tbody>
                                        </table>
                                    </div>-->
                                    <div id="CBT_Chart" class = "col-lg-3 col-md-3 col-sm-12 " style="   padding: 20px; background: #fff;margin: 0 0 15px 15px"></div>
                                    <div id="CS_Chart" class = "col-lg-3 col-md-3 col-sm-12 " style="  padding: 20px; background: #fff;margin:0 0 15px 15px"></div>
                                   
                                    <div id="stackchartId" class = "col-lg-4 col-md-4  col-sm-12 " style="  padding: 20px; background: #fff;margin: 0 0 15px 15px"></div>
                                    <?php //include('test_google_chart.php'); ?>
                                    <?php include('AjaxView.php'); ?>
                                  
                                   <!--
                                    <div id="piechart" class = "col-lg-5 col-sm-12 " style="  padding: 20px; background: #fff;margin: 0 0 50px 20px"></div>
                                    -->
                                </div>
                            </div>
                        </div>                    
                    </section>

                </div>
              </div>
            <?php // include "footer.php"?>
        </div>
        <div class="clearfix"> 
        </div>
<!-- -->
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

            $(function() {
                $('.jqueryOptions').hide();

                $('#choose').change(function () { 
                    $('.jqueryOptions').hide();
                    $('.jqueryOptions').removeClass('current-opt');
                    $("." + $(this).val()).show();
                    $("." + $(this).val()).addClass('current-opt');
                });

            });
         
        </script>
  </body>
</html>