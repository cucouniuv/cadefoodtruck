<?php 
	include_once("emitirxml.php");
?>
<!DOCTYPE html >
    <head>
        <title>Cadê o Food Truck?</title>

        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <style type="text/css">
            #map {
                width: 100%;
                height: 500px;
                background-color: grey;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <legend>Cadê o Food Truck?</legend>

            <label for="address">Endereço</label>
            <input type="text" id="address" name="address" class="form-control"/>

            <div id="map"></div>
        </div>   
    </body>
    <footer>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="mostrarmapa.js"></script> 
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzKJmQkpzAYMLTVEiJzXjmxyKjE5sZWhw&callback=initMap"></script>
    </footer>
</html>