<?php
	include_once('conexao.php');

	$doc = new DOMDocument('1.0');
	// gerar xml formatado
	$doc->formatOutput = true;
	$node = $doc->createElement('markers');
	$parnode = $doc->appendChild($node);

	foreach($conexao->query('select id, name, address, lat, lng, type from markers') as $row) {
		$node = $doc->createElement("marker");
		$newnode = $parnode->appendChild($node);

		$newnode->setAttribute("name", $row['name']);
		$newnode->setAttribute("address", $row['address']);
		$newnode->setAttribute("lat", $row['lat']);
		$newnode->setAttribute("lng", $row['lng']);
		$newnode->setAttribute("type", $row['type']);
	}

	$doc->save('foods.xml');
?>