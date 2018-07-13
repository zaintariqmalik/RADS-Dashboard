
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        // Load CBT Bar_chart
        google.charts.setOnLoadCallback(cbt_chart);
        // Load Household and FollowUp Column chart using google charts
        google.charts.setOnLoadCallback(hh_chart);
        // Load Community Session Column chart using google charts
        google.charts.setOnLoadCallback(cs_chart);
        // Load New User Column stackchart using google charts
        google.charts.setOnLoadCallback(stackchartFunction);

        // Load Mohalla Wise Household and FollowUp Column chart using google charts
        //google.charts.setOnLoadCallback(mohallaWiseHH);
        //Mohalla Wise Charts functions

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
                    format: '000',
                    //minValue: 0,
                    ticks: [0, 1000, 2000, 3000],
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
                title: 'CBT Sessions',
                //subtitle: 'CBT Sessions: 2018',
            },
                legend: {position: 'none'},
                //bar: { groupWidth: '80%' },
                bar: { groupWidth: '80%' },
                vAxis: {  
                    //gridlines: { count: 5 },
                    viewWindow: { max: 1000 },
                    format: '000',
                    //minValue: 0,
                    //ticks: [0, 500, 1000, 1500, 2000, 2500, 3000,3500],
                } 
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
                subtitle: 'Community Meetings: 2018',
                //colors: ['#e0440e', '#e6693e', '#ec8f6e', '#f3b49f', '#f6c7b6']
            },
            legend: {position: 'none'},
            vAxis: {format: ''}
            };

            var chart_cs = new google.charts.Bar(document.getElementById('CS_Chart'));

            chart_cs.draw(data, google.charts.Bar.convertOptions(options_cs));
        }
        // New User Column stack_chart Function
        function stackchartFunction() {
            var data = google.visualization.arrayToDataTable([
                ['', 'Short Term', 'LARCs', 'Permanent', { role: 'annotation' } ],
                ['Current Users', <?php echo $count_cu_shortTerm->cu_shortTerm; ?>, <?php echo $count_cu_larcs->cu_larcs; ?>, <?php echo $count_cu_permanent->cu_permanent; ?>, ''],
                ['New Users',  <?php echo $count_shortTerm->shortTerm; ?>,  <?php echo $count_larcs->larcs; ?>,  <?php echo $count_permanent->permanent; ?>, '']
                
            ]);

            var options_stack = {
            chart: {
                title: 'New Users and Current Users: 2018',
            // subtitle: 'New Users: 2018',
                //colors: ['#e0440e', '#e6693e', '#ec8f6e']
            },
            /* series: {
                0:{color:'blue'},
                1:{color:'green'},
                2:{color:'red'}
            },*/
            //colors: ['#3c82f5','red', 'green'],
            legend: { position: 'top', maxLines: 3 },
            bar: { groupWidth: '80%' },
            vAxis: {
                    format: '',
                    //gridlines: { count: 5 },
                    minValue: 0,
                    ticks: [0, .3, .6, .9, 1],
                    //viewWindow: { max: 100 },
                    format: '00',},
            isStacked : 'true'
            };

            var chart_newuser = new google.charts.Bar(document.getElementById('stackchartId'));

            chart_newuser.draw(data, google.charts.Bar.convertOptions(options_stack));
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