
<!DOCTYPE HTML>
<html>
<head>
    <title>Household Forms</title>
    <?php $this->load->view('head'); ?>

      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="author" content="SemiColonWeb" />

      <!-- Stylesheets
      ============================================= -->
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
      <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
       <meta name="viewport" content="width=device-width, initial-scale=1" />
      
     <!-- <script  type="text/javascript" src="<?php echo base_url('js/loader.js'); ?>"></script>-->
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <style>
       @media (min-width: 1200px){
            .col-lg-5 {
                width:45.49% !important;
            }.col-lg-4 {
                width: 39.6666667%;
            }.col-lg-3{
                width: 24%;
            }

        }
        @media (min-width: 768px){
            .col-sm-11 {
                width: 92.7%;
            }
        }
    </style>
    
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

                    <section>
                        <div class="overlay">
                            <div class="container">
                                <div class="row">
                                    <div class = "col-sm-11" style = "padding: 0;margin:0 0 15px 15px;    position: relative;">
                                        <div id = "areYouPregnant" class = "col-lg-3 col-md-3 col-sm-12 " style=" border-radius: 5px; padding: 1px; background: #fff;margin: 12px 12px 0 0;"></div>
                                        <div id = "pregnancyCheckup" class = "col-lg-3 col-md-3 col-sm-12" style=" border-radius: 5px; padding: 1px; background: #fff;margin:12px 12px 0 0;"></div>
                                        <div id = "currentlyUsingFPMethod" class = "col-lg-3 col-md-3 col-sm-12 " style=" border-radius: 5px; padding:1px; background: #fff;margin: 12px 12px 0 0;"></div>
                                        <div id = "everFPMethodUsed" class = "col-lg-3 col-md-3 col-sm-12 " style=" border-radius: 5px; padding: 1px; background: #fff;margin:12px 0px 0 0;"></div>
                                    </div>
                                    <!-- <div class="col-sm-11" style = "background: #ffffff; padding: 10px;margin:0 0 15px 15px; border-radius: 5px; "> 
                                        <div><p style="font-weight: bold">What are the reasons for not using FP Methods?</p></div>
                                        <div class="col-md-2"><p>Fear</p><div class = "counter"><?php echo $reasonForNotUsingFPMethod->Fear."";?></div></div>
                                        <div class="col-md-2"><p>No Permission From Husband  </p><div class = "counter"><?php echo $reasonForNotUsingFPMethod->HusbandPermission."";?></div></div>
                                        <div class="col-md-2"><p>No Permission From Mother in Law</p><div class = "counter"><?php echo $reasonForNotUsingFPMethod->MotherPermission."";?></div></div>
                                        <div class="col-md-2"><p>Family Not Complete</p><div class = "counter"><?php echo $reasonForNotUsingFPMethod->FamilyNotComplete."";?></div></div>
                                        <div class="col-md-2"><p>Others</p><div class = "counter"><?php echo $reasonForNotUsingFPMethod->Other."";?></div></div>
                                    </div> -->
                                    <!-- <div id = "currentFPMethodName" class = "col-lg-4 col-md-4 col-sm-12 " style="padding: 20px; background: #fff;margin:0 0 15px 15px"></div> -->
                                    <div id = "everFPMethodName" class = "col-lg-5 col-md-5 col-sm-12 " style="200px; border-radius: 5px; padding: 10px; background: #fff;margin:0 0 15px 15px"></div>
                                  
                                  <?php // include("test.php");?>
                                    <div class = "col-lg-5 col-md-5 col-sm-12 " style=" border-radius: 5px; padding: 20px; background: #fff;margin: 0 0 15px 15px">
                                        <p><strong>What are the reasons for not using FP Methods?</strong></p>
                                        <table class="table table-striped">
                                            
                                                <tr><td>Fear</td><td><?php echo $reasonForNotUsingFPMethod->Fear."";?> </td></tr>
                                                <tr><td>No Permission From Husband</td><td><?php echo $reasonForNotUsingFPMethod->HusbandPermission." "; ?></td></tr>                                        
                                                <tr><td>No Permission From Mother in Law</td><td> <?php echo $reasonForNotUsingFPMethod->MotherPermission." "; ?></td></tr>                                        
                                                <tr><td>Family Not Complete</td><td> <?php echo $reasonForNotUsingFPMethod->FamilyNotComplete." "; ?></td></tr>                                        
                                                <tr><td>Others</td><td> <?php echo $reasonForNotUsingFPMethod->Other." "; ?></td></tr>                                        
                                            
                                        </table>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>                    
                    </section>

                </div>
              </div>
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

       
        <script type="text/javascript">
            $(document).ready(function(){
                $('.counter').counterUp({
                    delay: 10,
                    time: 2000
                });
            });
//--------------------------------------------------------------------------------------------------------
   
         google.charts.load('current', {'packages':['corechart','bar']});
                // Load PieChart
                google.charts.setOnLoadCallback(pieCharts);
                // Piechart Function
                function pieCharts() {

                    //............................................
                    //............................................
                    //............................................
                    //        PieChart's DATA VARIABLES
                    //............................................
                    //............................................
                    //............................................

                    /*   
                        Data for PieChart for the Question:
                        Are You Pregnant?
                    */
                    var dataAreYouPregnant = google.visualization.arrayToDataTable([
                        ['Language', 'Speakers (in millions)'],
                        <?php foreach($currentlyPregnant as $row){ ?>
                            ['<?php echo $row->question;?>', <?php echo $row->count; ?>],
                        <?php } ?>
                    ]);
                    /*   
                        Data for PieChart for the Question:
                        Did you visited any anywhere for pregnancy checkup?
                    */
                    var dataPregnancyCheckup = google.visualization.arrayToDataTable([
                        ['Language', 'Speakers (in millions)'],
                        <?php foreach($pregnancyCheckup as $row){ ?>
                            ['<?php echo $row->question;?>', <?php echo $row->count; ?>],
                        <?php } ?>
                    ]);
                    /*   
                        Data for PieChart for the Question:
                        Are you currently using FP Method?
                    */
                    var dataCurrentlyUsingFPMethod = google.visualization.arrayToDataTable([
                        ['Language', 'Speakers (in millions)'],
                        <?php foreach($currentlyUsingFPMethod as $row){ ?>
                            ['<?php echo $row->question;?>', <?php echo $row->count; ?>],
                        <?php } ?>
                    ]);
                    
                    /*   
                        Data for PieChart for the Question:
                        Did you ever use FP Method?
                    */
                    var dataEverFPMethodUsed = google.visualization.arrayToDataTable([
                        ['Language', 'Speakers (in millions)'],
                        <?php foreach($everFPMethodUsed as $row){ ?>
                            ['<?php echo $row->question;?>', <?php echo $row->count; ?>],
                        <?php } ?>
                    ]);

                    //............................................
                    //............................................
                    //............................................
                    //       PieChart's OPTION VARIABLES
                    //............................................
                    //............................................
                    //............................................
                    /*   
                        Options for PieChart for the Question:
                        Are You Pregnant?
                    */
                    var optionsAreYouPregnant = {
                        titleTextStyle: {
                            fontSize: 12,
                        },
                        is3D : false,
                        legend: '',
                        pieSliceText: '',
                        slices: {
                            0:{color:'#5ebb5e'},
                            1:{color:'#d95459'}
                        },
                        title: 'Are you currently pregnant ?' <?php //print $fetchNewUser->newUserCount + 371; ?> ,
                        
                        //pieStartAngle: 90,
                    };
                    /*   
                        Options for PieChart for the Question:
                        Did you visited any anywhere for pregnancy checkup?
                    */
                    var optionsPregnancyCheckup = {
                        titleTextStyle: {
                            fontSize: 12,
                        },
                        is3D : false,
                        legend: '',
                        pieSliceText: '',
                        slices: {
                            0:{color:'#5ebb5e'},
                            1:{color:'#d95459'}
                        },
                        title: 'Did you visit anywhere for pregnancy checkup?' ,
                        
                        //pieStartAngle: 90,
                    };
                    /*   
                        Options for PieChart for the Question:
                        Did you ever use FP Method?
                    */
                    var optionsCurrentlyUsingFPMethod = {
                        titleTextStyle: {
                            fontSize: 12,
                        },
                        is3D : false,
                        legend: '',
                        pieSliceText: '',
                        slices: {
                            0:{color:'#5ebb5e'},
                            1:{color:'#d95459'}
                        },
                        title: 'Are you currently using FP Method?' ,
                        
                        //pieStartAngle: 90,
                    };
                    /*   
                        Options for PieChart for the Question:
                        Are you currently using FP Method?
                    */
                    var optionsEverFPMethodUsed = {
                        titleTextStyle: {
                            fontSize: 12,
                        },
                        is3D : false,
                        legend: '',
                        pieSliceText: '',
                        slices: {
                            0:{color:'#5ebb5e'},
                            1:{color:'#d95459'}
                        },
                        title: 'Did you ever used FP Method?' ,
                        
                        //pieStartAngle: 90,
                    };

                    var areYouPregnant = new google.visualization.PieChart(document.getElementById('areYouPregnant'));
                    areYouPregnant.draw(dataAreYouPregnant, optionsAreYouPregnant);
                    
                    var pregnancyCheckup = new google.visualization.PieChart(document.getElementById('pregnancyCheckup'));
                    pregnancyCheckup.draw(dataPregnancyCheckup, optionsPregnancyCheckup);
                    
                    var currentlyUsingFPMethod = new google.visualization.PieChart(document.getElementById('currentlyUsingFPMethod'));
                    currentlyUsingFPMethod.draw(dataCurrentlyUsingFPMethod, optionsCurrentlyUsingFPMethod);
                    
                    var everFPMethodUsed = new google.visualization.PieChart(document.getElementById('everFPMethodUsed'));
                    everFPMethodUsed.draw(dataEverFPMethodUsed, optionsEverFPMethodUsed);
                    
                    // var chartWrapper = Chartkick.charts["areYouPregnant"];
                    // var chart = chartWrapper.chart;
                    // var data = chartWrapper.data;
                    // google.visualization.events.addListener(chart, 'select', function() {
                    //     selection = chart.getSelection();
                    //     if(selection && selection[0]) {
                    //         window.open(window.location.href + '?filter=' + data[selection[0].row][0], '_blank');
                    //     }
                    // });




                   /*
                    google.visualization.events.addListener(areYouPregnant, 'select', function(){
                        alert(dataAreYouPregnant.getValue(areYouPregnant.getSelection()[0].row,1));
                    });
                    */

                    // function selectHandler(e) {
                    //     // window.location.replace("https://www.tutorialrepublic.com/");
                    //     //window.open("<?php echo site_url("SearchController/getNewUsers"); ?>");
                    //     alert(dataAreYouPregnant.getValue(areYouPregnant.getSelection()[0].row,1));                    
                    // }
                }
                
//--------------------------------------------------------------------------------------------------------
               
                google.charts.setOnLoadCallback(columnCharts);
                // Column Charts Function
                function columnCharts() {
                        //______________________________________________________________

                        //                  Column Charts Data

                        //______________________________________________________________
                    var everFPMethodName = google.visualization.arrayToDataTable([
                        ['', 'Ever Used FP Method','Currently Using FP Method',{ role: 'style' }], 
                        <?php for($i = 0; $i<count($everFPMethodName) ; $i++){ ?>
                            ['<?php echo $everFPMethodName[$i]->question;?>', <?php echo $everFPMethodName[$i]->count; ?>,<?php echo $currentFPMethodName[$i]->count; ?>,''],
                        <?php } ?>
                    ]); 
                    
                    var currentFPMethodName = google.visualization.arrayToDataTable([
                        ['', '',{ role: 'style' }], 
                        <?php foreach($currentFPMethodName as $row){ ?>
                            ['<?php echo $row->question;?>', <?php echo $row->count; ?>,''],
                        <?php } ?>
                    ]);

                        //______________________________________________________________

                        //                  Column Charts Options

                        //______________________________________________________________

                    var everFPMethodNameOptions = { 
                        chart: {
                        title: 'Which FP Method you used and which FP Method you are Currently Using?',
                        },
                        colors: ['#d95459','#5ebb5e'],
                        legend: {position: 'top', alignment: 'bottom'},
                        bar: { groupWidth: '70%' },
                        vAxis: {                             
                            format: '00',
                        } 
                    };

                    var currentFPMethodNameOptions = { 
                        chart: {
                        title: 'Which FP Method you are currently using?',
                        },
                        colors: ['#d95459'],
                        legend: {position: 'none'},
                        vAxis: {                             
                            format: '00',
                        } 
                    };

                    var everFPMethodNameChart = new google.visualization.ColumnChart(document.getElementById('everFPMethodName'));
                    everFPMethodNameChart.draw(everFPMethodName, everFPMethodNameOptions);
            
                    var currentFPMethodNameChart = new google.visualization.ColumnChart(document.getElementById('currentFPMethodName'));
                    currentFPMethodNameChart.draw(currentFPMethodName, google.charts.Bar.convertOptions(currentFPMethodNameOptions));
                   
                    /*google.visualization.events.addListener(areYouPregnant, 'select', selectHandler);

                   function selectHandler(e) {
                        alert("");
                        // window.location.replace("https://www.tutorialrepublic.com/");
                        //window.open("<?php echo site_url("SearchController/getNewUsers"); ?>");
                        //alert(dataAreYouPregnant.getValue(areYouPregnant.getSelection()[0].row,1));                    
                   }*/

                    // google.visualization.events.addListener(everFPMethodNameChart, 'select', function(){
                    //     alert();
                    // });
                    // google.visualization.events.addListener(currentFPMethodNameChart, 'select', selectHandler);

                    // function selectHandler(e) { 
                    //     alert(helloMoto);
                    //     // window.location.replace("https://www.tutorialrepublic.com/");
                    //     //window.open("<?php echo site_url("SearchController/getNewUsers"); ?>");
                    //     //alert(everFPMethodName.getValue(everFPMethodNameChart.getSelection()[0].row,0));                    
                    // }
                }

        </script>
  </body>
</html>