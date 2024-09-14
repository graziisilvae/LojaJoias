<?php
$host = 'localhost';
$user = 'root';
$pass = 'cimatec';
$db = 'joias';

$conexao = mysqli_connect($host, $user, $pass, $db);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
