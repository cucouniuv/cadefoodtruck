<!DOCTYPE html>
<html>
<head>
	<title>Conte-nos sobre seu Truck</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form method="post" action="cadastrar_truck.php" class="form-group">
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
</body>
<footer>
	<script 
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>	
</footer>
</html>