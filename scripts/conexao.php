<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "barbeariaPI";
$conexao = mysqli_connect($server, $username, $password);
mysqli_select_db($conexao, $database);
?>