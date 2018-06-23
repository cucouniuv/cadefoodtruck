<?php 
include_once('conexao.php');

if (!isset($_POST)){
	die('Não foi possível obter os dados para inserir.');
}

$name = $_POST['name'];
$address = $_POST['address'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

$type = 'bar';
if ($_POST['type'] == 'R'){
	$type = 'restaurant';
}

$cmdinsert = $conexao->prepare("insert into markers (name, address, lat, lng, type) values (:name, :address, :lat, :lng, :type)");
// O id é auto increment no banco
$cmdinsert->bindParam(":name", $name);
$cmdinsert->bindParam(":address", $address);
$cmdinsert->bindParam(":lat", $lat);
$cmdinsert->bindParam(":lng", $lng);
$cmdinsert->bindParam(":type", $type);

$cmdinsert->execute();
$cmdinsert = null;

header("Location: cadastrofoodtruck.php");
?>