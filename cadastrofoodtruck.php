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
				<legend>Conte-nos sobre seu Truck</legend>

				<label for="name">Nome</label>
				<input type="text" name="name" class="form-control"/>

				<label for="address">Endereço</label>
				<input type="text" id="address" name="address" class="form-control"/>

		        <div id="map" style="height: 200px"></div>

				<input type="hidden" id="txtLatitude" name="lat" class="form-control"/>	
				<input type="hidden" id="txtLongitude" name="lng" class="form-control"/>

				<label for="type">Tipo</label>
				<div class="radio">
					<label><input type="radio" name="type" value="B">Bar</label>
					<label><input type="radio" name="type" value="R">Restaurante</label>
				</div>

				<input type="submit" name="Cadastrar" class="btn btn-primary btn-block">
			</form>
		</div>
	</body>
	<footer>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="jquery/jquery-ui.min.js"></script>
	   	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzKJmQkpzAYMLTVEiJzXjmxyKjE5sZWhw"></script>
	    <script type="text/javascript" src="mapa.js"></script>
	</footer>
</html>