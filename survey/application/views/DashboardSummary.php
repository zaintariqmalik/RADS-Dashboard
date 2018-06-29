
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
    <style>
       @media (min-width: 1200px){
            .col-lg-5 {
                width:45.49% !important;
            }
        }
        @media (min-width: 768px){
            .col-sm-11 {
                width: 92.7%;
            }
        }
    </style>
    <script type="text/javascript">
    
      google.charts.load('current', {'packages':['bar']});
    // Load CBT Bar_chart
      google.charts.setOnLoadCallback(cbt_chart);
    // Load Household and FollowUp Column chart using google charts
      google.charts.setOnLoadCallback(hh_chart);
    // Load Community Session Column chart using google charts
      google.charts.setOnLoadCallback(cs_chart);
    // Household Column chart Function using google charts 
      function hh_chart() {
        var data = google.visualization.arrayToDataTable([
            ['', 'Household', 'Followup'],
            ['Jan', <?php echo $jan_data->jan_count; ?>, 0],
            ['Feb', <?php echo $feb_data->feb_count; ?>, 87],
            ['Mar', <?php echo $mar_data->mar_count; ?>, 580],
            ['Apr', <?php echo $apr_data->apr_count; ?>, 490],
            ['May', <?php echo $may_data->may_count; ?>, 244+287],
            ['Jun', <?php echo $jun_data->jun_count; ?>, 0],
            ['Jul', 0, 0],
            ['Aug', 0, 0],
            ['Sep', 0, 0]
        ]);

        var options_hh = {
            //hAxis: {title: 'Months', titleTextStyle: {color: 'red'}},
          is3D:true,
          colors: ['#3c82f5','red'],
          /*animation:{
                startup: true,
                duration: 1000,
                easing: 'out',
            },*/
          chart: {            
            title: 'Household & Followup: 2018',
            subtitle: '',
          },
          legend: {position: 'right'},
          //vAxis: {format: ''}
          axes: {
            x: { 0: { side: 'bottom', label: '' }  /* x-axis on bottom */  }
            },
            bar: { groupWidth: '80%' },
            vAxis: {  
                gridlines: { count: 5 },
                viewWindow: { max: 4000 },
                format: '000'
            }    
        };

        var chart_hh = new google.charts.Bar(document.getElementById('firstChart'));

        chart_hh.draw(data, google.charts.Bar.convertOptions(options_hh));
      }
    // CBT Column chart Function
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
            subtitle: 'CBT Sessions: Jan-2018 to June-2018',
          },
          legend: {position: 'right'},
          vAxis: {format: ''}
        };

        var chart_cbt = new google.charts.Bar(document.getElementById('CBT_Chart'));

        chart_cbt.draw(data, google.charts.Bar.convertOptions(options_cbt));
      }
    // Community Session Column chart Function
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
            title: 'Community Meetings',
            subtitle: 'Community Meetings: Jan-2018 to June-2018',
            colors: ['#e0440e', '#e6693e', '#ec8f6e', '#f3b49f', '#f6c7b6']
          },
          legend: {position: 'right'},
          vAxis: {format: ''}
        };

        var chart_cs = new google.charts.Bar(document.getElementById('CS_Chart'));

        chart_cs.draw(data, google.charts.Bar.convertOptions(options_cs));
      }

      google.charts.load("current", {packages:["corechart"]});
     // Load PieChart for New Users
      google.charts.setOnLoadCallback(drawChart);
    // New Users Piechart Function
      function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Language', 'Speakers (in millions)'],
                ['LARCs', <?php echo $count_larcs->larcs; ?>],
                ['Short Term Method',   <?php echo $count_shortTerm->shortTerm; ?>],
                ['Permanent Methods',   <?php echo $count_permanent->permanent; ?>]
            ]);

        var options = {
            is3D : false,
            legend: '',
            pieSliceText: '',
            slices: {
                0: { color: 'red' },
                1: { color: 'green' },
                2: { color: 'blue' }
            },
            title: 'Catagories of FP users Total:'+ <?php print $fetchNewUser->newUserCount + 371; ?> ,
            
            //pieStartAngle: 90,
        };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
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
                                                <div class="col-sm-2 col-xs-12" style="width:19.9%">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-home nav_icon" style="color: #f75e00; font-size: 30px;"></i>
                                                        <h3 class="statistic-counter_two" style="color: #f75e00"> 
                                                        <span><?php print $fetchHousehold->householdCount; ?></span>
                                                        </h3>
                                                        <p>Household Interviews</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-2 col-xs-12" style="width:19.9%">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-undo nav_icon" style="color: #f75e00; font-size: 30px;"></i>
                                                        <h3 class="statistic-counter_two" style="color: #f75e00">
                                                        <span><?php print $fetchFollowUp->followUpCount; ?></span>
                                                        </h3>
                                                        <p>Follow-ups</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-2 col-xs-12" style="width:19.9%">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-users nav_icon" style="color: #f75e00; font-size: 30px;"></i>
                                                        <h3 class="statistic-counter_two" style="color: #f75e00">
                                                        <span><?php print $fetchSM->smVisitsCount; ?></span>
                                                        </h3>
                                                        <p>Social Mobilizers Visits</p>
                                                    </div>
                                                </div><!-- End off col-sm-3 -->
                                                <div class="col-sm-2 col-xs-12" style="width:19.9%">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-check-circle-o nav_icon" style="color: #f75e00; font-size: 30px;"></i>
                                                        <h3 class="statistic-counter_two" style="color: #f75e00">
                                                        <span><?php print $fetchMonitoring->monitoringCount; ?></span>
                                                        </h3>
                                                        <p>M &amp; E Visits</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-xs-12" style="width:19.9%">
                                                    <div class="single_counter_two_right">
                                                        <i class="fa fa-street-view nav_icon" style="color: #f75e00; font-size: 30px;"></i>
                                                        <h3 class="statistic-counter_two" style="color: #f75e00">
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
                                    <div id="firstChart" class = "col-lg-5 col-sm-12 " style=" height: 350px;padding: 20px; background: #fff;margin: 15px 0 15px 15px"></div>
                                    <div id="CBT_Chart" class = "col-lg-5 col-sm-12 " style=" height: 350px;  padding: 20px; background: #fff;margin: 15px 0 15px 20px"></div>
                                    <div id="CS_Chart" class = "col-lg-5 col-sm-12 " style=" height: 350px;  padding: 20px; background: #fff;margin:0 0 50px 15px"></div>
                                    <div id="piechart" class = "col-lg-5 col-sm-12 " style=" height: 350px;  padding: 20px; background: #fff;margin: 0 0 50px 20px"></div>
                                <!--    
                                    <div id="piechart_3d" class = "col-lg-5 col-sm-12 " style="width: 45%; height: 350px;  padding: 20px; background: #fff;margin: 0 0 50px 20px"></div>
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