<?php
require("conexao.php");

$query = 'select * from markers';
$result = mysqli_query($connection, $query);
if (!$result) {
  die('Consulta inválida: ' . mysql_error());
}

// Start XML file, create parent node
$doc = new DOMDocument('1.0');
$node = $doc->createElement('markers');
$parnode = $doc->appendChild($node);

//header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
while ($row = mysqli_fetch_array($result)){
  $node = $doc->createElement("marker");
  $newnode = $parnode->appendChild($node);
  
  $newnode->setAttribute("name", $row['name']);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
  $newnode->setAttribute("type", $row['type']);
}

$doc->save("foods.xml") ;

//printf ("<pre>%s</pre>", htmlentities ($doc->saveXML()));
?>