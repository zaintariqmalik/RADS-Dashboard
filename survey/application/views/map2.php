
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>Maps</title>
    <?php
    $this->load->view('head');
    ?>
    <style>

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
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
				<span>Map</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->



               <div id="map" style="width:inherit;height:600px"></div>

			<div class="clearfix"> </div>

		<!----->

		<!--//content-->


	 
		<!---->
          <div class="copy container-fluid">
            <p> &copy; 2018 AHKRC. All Rights Reserved  </p>
	    </div>
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
    <script>

        // function will automatically called when we will call google maps apr
        function initMap() {
            var myLatLng = {lat: 33.626952, lng: 73.031462};//Center Point to display Map

                //33.627546, 73.031022
            //33.626952, 73.031462
            /*   var locations = [
                   [33.626048, 73.030648,'Place name', 'Number of interviews'],
                   [33.626146, 73.032547,'Place name', 'Number of interviews'],
                   [33.624877, 73.036302,'Place name', 'Number of interviews'],
                   [33.626853, 73.036021,'Place name', 'Number of interviews'],
                   [33.627539, 73.035937,'Place name', 'Number of interviews']
               ];
       */
            /* The locations will be an array containing lat and lng.. The array will look like above variable
              The data is passed from controller as the variable named $fetch_data
              */
            var locations = [<?php foreach($fetch_data as $row){?>
                [
                    <?php echo $row->lat;?>,
                    <?php echo $row->lng;?>,
                    '<?php echo $row->title;?>',
                    <?php echo $row->interviews_conducted;?>
                ],
                <?php
                }
                ?>];


            // Displays map . with the zoom scale 15 and having a centeral point definec above
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: myLatLng
            });

            // Display markers in map.. locations variable have lat, lang for markers
            var i;
            for(i =0;i<locations.length;i++){
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][0], locations[i][1]),
                    map: map,

                    title:locations[i][2]
                });


                var content = '<b>'+locations[i][2]+'</b> <br/> Interviews Conducted : '+locations[i][3]+'';

                var infowindow = new google.maps.InfoWindow();
                google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){
                    return function() {
                        infowindow.setContent(content);
                        infowindow.open(map,marker);
                    };
                })(marker,content,infowindow));

            }
            }


    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbg1JQ1siGp0qA0EhvOf4KHUh6-YMIPUk&callback=initMap">
    </script>
</body>
</html>

