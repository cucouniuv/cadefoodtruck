<?php
header('Content-Type: text/html; charset=utf-8');

$servidor = '127.0.0.1';
$usuarios = 'root';
$senha = '';
$db = 'cadefoodtruck';

$connection = mysqli_connect($servidor, $usuarios, $senha, $db);
if (!$connection) {
  die('Não conectou ao banco : ' . mysql_error());
}
?>