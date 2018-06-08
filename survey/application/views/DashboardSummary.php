
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

       <!-- Include the above in your HEAD tag -->

      <!-- Add this css in head tag -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
      
      <script  type="text/javascript" src="<?php echo base_url('js/loader.js'); ?>"></script>
    
    <script type="text/javascript">
     
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(cbt_chart);
      google.charts.setOnLoadCallback(hh_chart);
      google.charts.setOnLoadCallback(cs_chart);
      
      function hh_chart() {
        var data = google.visualization.arrayToDataTable([
            ['', 'Household', 'Followup',{ role: 'style'},],
            ['Jan', <?php echo $jan_data->jan_count; ?>, 0, '#b87333'],
            ['Feb', <?php echo $feb_data->feb_count; ?>, 87,'#b87333'],
            ['Mar', <?php echo $mar_data->mar_count; ?>, 580,'#b87333'],
            ['Apr', <?php echo $apr_data->apr_count; ?>, 490,'#b87333'],
            ['May', <?php echo $may_data->may_count; ?>, 244,'#b87333'],
            ['Jun', 0, 0,'#b87333'],
            ['Jul', 0, 0,'#b87333'],
            ['Aug', 0, 0,'#b87333'],
            ['Sep', 0, 0,'#b87333']
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
            ['Feb', 230,''],
            ['Mar', 987,''],
            ['Apr', 581,''],
            ['May', 767,''],
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

      function cs_chart() {
        var data = google.visualization.arrayToDataTable([
            ['', 'Community',{ role: 'style' }],
            ['Jan', 0,''],
            ['Feb', 200,'#e0440e'],
            ['Mar', 387,'#e6693e'],
            ['Apr', 362,''],
            ['May', 263,''],
            ['Jun', 0,''],
            ['Jul', 0,''],
            ['Aug', 0,''],
            ['Sept',0,'']
        
        ]);

        var options_cs = {
          chart: {
            title: 'Community Sessions',
            subtitle: 'Community Sessions: Jan-2018 to Apr-2018',
            colors: ['#e0440e', '#e6693e', '#ec8f6e', '#f3b49f', '#f6c7b6']
          },
          legend: {position: 'right'},
          vAxis: {format: ''}
        };

        var chart_cs = new google.charts.Bar(document.getElementById('CS_Chart'));

        chart_cs.draw(data, google.charts.Bar.convertOptions(options_cs));
      }

      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day',{ role: 'style' }],
          ['Short Term Methods', 11,'#e0440e'],
          ['LARCs',  12,'#e6693e'],
          ['Permanent Methods', 12,'#ec8f6e']
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
          slices: {
            0: { color: '#fd000a' },
            1: { color: '#ff4a38' },
            2: { color: 'orange' }
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
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
                            <p class="header_logo">
                                <a href ="https://www.ppif.org.pk/"><img src="<?php echo base_url(); ?>images\logo\ppif_logo.png"></a>
                                    &nbsp;&nbsp;
                                <a href ="#"><img src="<?php echo base_url(); ?>images\logo\ahkrc_logo.png"></a>
                            </p>
          		    </div>

                    <!--Counter Section-->
                    <section id="counter_two" class="counter_two" style="padding-top: 03%;" >
                        <div class="overlay">
                            <div class="container">
                                <div class="row">
                                    <div class="main_counter_two sections text-center">
                                        <div class="col-sm-11" style = "background: #f7d6c4; padding: 50px 10px 50px 10px;margin: 0 0 0 20px;">
                                            <div class="row">
                                                <div class="col-sm-2 col-xs-12" style="width:19.9%">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-home nav_icon" style="color: #f75e00; font-size: 30px;"></i>
                                                        <h2 class="statistic-counter_two" style="color: #f75e00"> 
                                                        <span><?php print $fetchHousehold->householdCount; ?></span>
                                                        </h2>
                                                        <p>Household Interviews</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-2 col-xs-12" style="width:19.9%">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-undo nav_icon" style="color: #f75e00; font-size: 30px;"></i>
                                                        <h2 class="statistic-counter_two" style="color: #f75e00">
                                                        <span><?php print $fetchFollowUp->followUpCount; ?></span>
                                                        </h2>
                                                        <p>Follow-ups</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-2 col-xs-12" style="width:19.9%">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-users nav_icon" style="color: #f75e00; font-size: 30px;"></i>
                                                        <h2 class="statistic-counter_two" style="color: #f75e00">
                                                        <span><?php print $fetchSM->smVisitsCount; ?></span>
                                                        </h2>
                                                        <p>Social Mobilizers Visits</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-2 col-xs-12" style="width:19.9%">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-check-circle-o nav_icon" style="color: #f75e00; font-size: 30px;"></i>
                                                        <h2 class="statistic-counter_two" style="color: #f75e00">
                                                        <span><?php print $fetchMonitoring->monitoringCount; ?></span>
                                                        </h2>
                                                        <p>M &amp; E Visits</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-xs-12" style="width:19.9%">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-street-view nav_icon" style="color: #f75e00; font-size: 30px;"></i>
                                                        <h2 class="statistic-counter_two" style="color: #f75e00">
                                                        <span><?php print $fetchNewUser->newUserCount + 371; ?></span>
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
                                    <div id="firstChart" class = "col-lg-5 col-sm-12 " style="width: 45%; height: 350px;padding: 20px; background: #fff;margin: 50px 0 25px 20px"></div>
                                    <div id="CBT_Chart" class = "col-lg-5 col-sm-12 " style="width: 45%; height: 350px;  padding: 20px; background: #fff;margin: 50px 0 25px 20px"></div>
                                    <div id="CS_Chart" class = "col-lg-5 col-sm-12 " style="width: 45%; height: 350px;  padding: 20px; background: #fff;margin: 0 0 50px 20px"></div>
                                    <div id="piechart_3d" class = "col-lg-5 col-sm-12 " style="width: 45%; height: 350px;  padding: 20px; background: #fff;margin: 0 0 50px 20px"></div>
                                    
                                    
                                </div>
                            </div>
                    </section>

                </div>
              </div>
            <?php // include "footer.php"?>
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