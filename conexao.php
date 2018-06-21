<?php
header('Content-Type: text/html; charset=utf-8');

$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$db = 'cadefoodtruck';

try {
	$conexao = new \PDO("mysql:host=$servidor;dbname=$db", $usuario, $senha);
} catch (PDOException $e) {
	die('Não conectou ao banco:'.$e->getMessage()."<br>");
}

?>