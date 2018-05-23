<?php
# Informa qual o conjunto de caracteres será usado.
header('Content-Type: text/html; charset=utf-8');
//definindo a conexao do sistema
$servidor = '127.0.0.1';
$usuarios = 'root';
$senha = '';
$db = 'cadefoodtruck';
//conecta com mysql
$connection = mysqli_connect($servidor, $usuarios, $senha, $db);
if (!$connection) {
  die('Não conectou ao banco : ' . mysql_error());
}

//if ($resultados) {
	//while ($row = mysqli_fetch_array($resultados)) {
//		echo '<p> name ' . $row['name'] . '</p>';		
//	}
//}
?>