<!DOCTYPE html>
<html>
<head>
	<title>Conte-nos sobre seu Truck</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		#map {
		   width: 100%;
		   height: 400px;
		   background-color: grey;
		 }
	</style>
</head>
<body>
	<div class="container">
		<form method="post" action="inserirtruck.php" class="form-group">
			<h2>Conte-nos sobre seu Truck</h2>

			<label for="name">Nome</label>
			<input type="text" name="name" class="form-control"/>

			<label for="address">Endereço</label>
			<input type="text" name="address" class="form-control"/>

			<label for="lat">Latitude</label>
			<input type="text" name="lat" class="form-control"/>	

			<label for="lng">Longitude</label>
			<input type="text" name="lng" class="form-control"/>

			<label for="type">Tipo</label>
			<div class="radio">
				<label><input type="radio" name="type" value="B">Bar</label>
				<label><input type="radio" name="type" value="R">Restaurante</label>
			</div>

			<input type="submit" name="Cadastrar" class="btn btn-primary btn-block">
		</form>
	</div>
	<div id="map"></div>
</body>
<footer>
	<script 
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>

	<script type="text/javascript">
		function initMap() {
			var map = new google.maps.Map(document.getElementById('map'), {
			  center: new google.maps.LatLng(-33.863276, 151.207977),
			  zoom: 17
			});

	        var infoWindow = new google.maps.InfoWindow;
			
	        if (navigator.geolocation) {
	        	navigator.geolocation.getCurrentPosition(function(position) {
		            var pos = {
						lat: position.coords.latitude,
						lng: position.coords.longitude
		            };

		            infoWindow.setPosition(pos);
		            infoWindow.setContent('Localização encontrada.');
		            map.setCenter(pos);
	          }, function() {
					handleLocationError(true, infoWindow, map.getCenter());
	          });
	        } else {
	          	// Browser doesn't support Geolocation
	          	handleLocationError(false, infoWindow, map.getCenter());
	        }				
		}
	</script>

   	<script async defer
    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzKJmQkpzAYMLTVEiJzXjmxyKjE5sZWhw&callback=initMap">
    </script>
</footer>
</html>