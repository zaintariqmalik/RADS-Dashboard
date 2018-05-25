
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
      
      <script  type="text/javascript" src="<?php echo base_url('js/loader.js'); ?>"></script>
    
    <script type="text/javascript">
     
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(cbt_chart);
      google.charts.setOnLoadCallback(hh_chart);
     
      function hh_chart() {
        var data = google.visualization.arrayToDataTable([
            ['', 'Household', 'Followup'],
            ['Jan', <?php echo $jan_data->jan_count; ?>, 0],
            ['Feb', <?php echo $feb_data->feb_count; ?>, 87],
            ['Mar', <?php echo $mar_data->mar_count; ?>, 580],
            ['Apr', <?php echo $apr_data->apr_count; ?>, 490],
            ['May', 0, 244],
            ['Jun', 0, 0],
            ['Jul', 0, 0],
            ['Aug', 0, 0],
            ['Sep', 0, 0]
        ]);

        var options_hh = {
          chart: {
            title: 'Household & Followup: 2018',
            subtitle: '',
          },
          legend: {position: 'right'},
          vAxis: {format: ''}
        };

        var chart_hh = new google.charts.Bar(document.getElementById('firstChart'));

        chart_hh.draw(data, google.charts.Bar.convertOptions(options_hh));
      }

      function cbt_chart() {
        var data = google.visualization.arrayToDataTable([
            ['', 'CBT ',{ role: 'style' }],
            ['Jan', 0,''],
            ['Feb', 259,''],
            ['Mar', 858,''],
            ['Apr', 808,''],
            ['May', 0,''],
            ['Jun', 0,''],
            ['Jul', 0,''],
            ['Aug', 0,''],
            ['Sept',0,'']
        
        ]);

        var options_cbt = {
          chart: {
            title: 'CBT',
            subtitle: 'CBT Sessions: Jan-2018 to Apr-2018',
          },
          legend: {position: 'right'},
          vAxis: {format: ''}
        };

        var chart_cbt = new google.charts.Bar(document.getElementById('CBT_Chart'));

        chart_cbt.draw(data, google.charts.Bar.convertOptions(options_cbt));
      }
    </script>
  </head>
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
                                                <div class="col-sm-2 col-xs-12">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-sticky-note-o nav_icon" style="color: #920000"></i>
                                                        <h2 class="statistic-counter_two" style="color: #e46e25"> 
                                                        <span><?php print $fetchHousehold->householdCount; ?></span>
                                                        </h2>
                                                        <p>Household Interviews</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-2 col-xs-12">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-undo nav_icon" style="color: #920000"></i>
                                                        <h2 class="statistic-counter_two" style="color: #e46e25">
                                                        <span><?php print $fetchFollowUp->followUpCount; ?></span>
                                                        </h2>
                                                        <p>Follow-ups</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-2 col-xs-12">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-users nav_icon" style="color: #920000"></i>
                                                        <h2 class="statistic-counter_two" style="color: #e46e25">
                                                        <span><?php print $fetchSM->smVisitsCount; ?></span>
                                                        </h2>
                                                        <p>Social Mobilizers Visits</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-2 col-xs-12">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-check-circle-o nav_icon" style="color: #920000"></i>
                                                        <h2 class="statistic-counter_two" style="color: #e46e25">
                                                        <span><?php print $fetchMonitoring->monitoringCount; ?></span>
                                                        </h2>
                                                        <p>M &amp; E Visits</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-xs-12">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-street-view nav_icon" style="color: #920000"></i>
                                                        <h2 class="statistic-counter_two" style="color: #e46e25">
                                                        <span><?php print $fetchNewUser->newUserCount; ?></span>
                                                        </h2>
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
                                    <div id="firstChart" class = "col-lg-5 col-sm-12 " style="height: 350px;padding: 20px; background: #fff;margin: 100px 0 100px 20px"></div>
                                    <div id="CBT_Chart" class = "col-lg-5 col-sm-12 " style="height: 350px;  padding: 20px; background: #fff;margin: 100px 0 100px 20px"></div>
                               
                                </div>
                            </div>
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