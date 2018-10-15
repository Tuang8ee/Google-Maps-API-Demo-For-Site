<?php
/**
 * Created by PhpStorm.
 * User: Hoc_Anms
 * Date: 10/15/2018
 * Time: 9:23 AM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link type="text/css"  href="css/style.css">
    <title>Google Maps API</title>
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
        }
    </style>
</head>
<body>
<div class="container">
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>
</div>
<script>
    // Initialize and add the map
    function loadMap() {
        // The location of Hanoi
        var hanoi = {lat: 21.0548735, lng: 105.8153779};
        // The map, centered at Hanoi
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 12, center: hanoi});
        // The marker, positioned at

        var transpotBridge={lat:21.0299493,lng:105.801766}
        var maidichBridge={lat:21.0366393,lng:105.7805641}
        var nhattanBridge={lat:21.0912986,lng:105.8199697}
        var thanglongBridge={lat:21.0939462,lng:105.786388}
        var markerTranspot = new google.maps.Marker({position: transpotBridge, map: map,label:"1", title:"Location set sensor 1"});
        var markerMaidich = new google.maps.Marker({position: maidichBridge, map: map,label:"2",title:"Location set sensor 2"});
        var markerNhattan = new google.maps.Marker({position: nhattanBridge, map: map,label:"3",title:"Location set sensor 3"});
        var markerThanglong = new google.maps.Marker({position: thanglongBridge, map: map,label:"4",title:"Location set sensor 4"});

    }
</script>
<!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->
<script async defer src="https://maps.googleapis.com/maps/api/js?version=3.27&client=gme-ttesinc&region=VN&callback=loadMap"></script>

</body>
</html>
