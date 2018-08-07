        <?php  if($this->session->userdata('userUserName') == 'zeeshan.shahzad') {?>
            <div class="form-group">
            
                <select class="col-sm-10 form-control input-select" id="chart" name='mohalla' onchange="change(this.value)">
                    <option selected disabled>Select Mohalla </option>
                    <?php  $i = 1;
                    foreach($mohallaNames as $row)
                    { ?>
                        <option value = "<?php echo $row->mohallaName?>"><?php echo trim($row->mohallaName); ?></option>
                    <?php $i++; 
                    } ?>
                </select>
            </div>
        
        
        <div id="chart_div" class = "col-lg-4 col-md-4  col-sm-10" style="padding: 5px; background: #fff; margin: 15px 0 15px 15px"></div>
        <?php  } ?>
        <script>
          
            function change(mohalla_name) {
                
                var value = mohalla_name;
                $.ajax({
                    type:"POST",
                    url: '<?php echo site_url() ?>/AjaxController',
                    dataType: 'json',
                    data: {value: value},
                    success: function(data){    
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data1 = google.visualization.arrayToDataTable([
                                ['', '', { role: "style" }],
                                ['Total Households', 0 , '#d4444a'],
                                ['Households Visited', data['hhVisits'], '#51b551'],
                                ['Current Users', data['currentUser'],'#7b7bf9'],
                                ['New Users', data["newUser"], 'orange']
                                ]);

                                var options = {
                                    title: 'Mohalla Wise Performance:   '+value,
                                    titleTextStyle: {
                                        color: 'green',
                                        fontName: 'Roboto', 
                                        fontSize: '14', 
                                        bold: true,    
                                        italic: false, 
                                    },
                                    chart: {          
                                        //colors: ['green', 'red', 'blue', 'yellow'],  
                                        // title: 'Mohalla Wise Performance',
                                        subtitle: value,
                                    },
                                    legend: {position: 'none'},
                                    //vAxis: {format: ''}
                                    axes: {
                                        //x: { 0: { side: 'bottom', label: '' }  /* x-axis on bottom */  }
                                        },
                                    bar: { groupWidth: '80%' },
                                    vAxis: {  
                                        gridlines: { count: 4 },
                                        //viewWindow: { max: 4000 },
                                        //format: '000',
                                        //minValue: 0,
                                        //ticks: [0, 1000, 2000, 3000],
                                    },/*
                                    hAxis: {title: 'Months', titleTextStyle: {color: 'red'}},
                                    is3D:true,
                                              
                                    animation:{
                                        startup: true,
                                        duration: 1000,
                                        easing: 'out',
                                    },*/
                                };


                            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
                           
                            chart.draw(data1, google.charts.Bar.convertOptions(options));
                        }

                        //alert('HH Visits: '+data['hhVisits'] + '. CU: '+ data['currentUser']+ '. NU:  ' + data['newUser']);
                    },
                    error: function(){
                        alert("There is some error while fetching data from server");
                    }

                });
                } 
        </script>