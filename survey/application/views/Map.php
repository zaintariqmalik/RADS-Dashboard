<?php
/**
 * Created by PhpStorm.
 * User: waqas
 * Date: 1/24/2018
 * Time: 1:40 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Map based on database</title>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div id="map"></div>
<script>

    // function will automatically called when we will call google maps apr
    function initMap() {
        var myLatLng = {lat: 33.6239, lng: 73.0249};//Center Point to display Map

     /*   var locations = [
            [33.626048, 73.030648],
            [33.626146, 73.032547],
            [33.624877, 73.036302],
            [33.626853, 73.036021],
            [33.627539, 73.035937]
        ];
*/
     /* The locations will be an array containing lat and lng.. The array will look like above variable
       The data is passed from controller as the variable named $fetch_data
       */
     var locations = [<?php foreach($fetch_data as $row){?>
                        [<?php echo $row->lat;?>,<?php echo $row->lng;?>],
                      <?php
     }
     ?>];

        // Displays map . with the zoom scale 15 and having a centeral point definec above
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: myLatLng
        });

        // Display markers in map.. locations variable have lat, lang for markers
        var i;
        for(i =0;i<locations.length;i++){
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][0], locations[i][1]),
                map: map,
            });
        }
    }

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbg1JQ1siGp0qA0EhvOf4KHUh6-YMIPUk&callback=initMap">
</script>
</body>
</html>