<?php 
include_once('conexao.php');

$idAgenda = $_GET['idAgenda'];

$query = "DELETE FROM agendas WHERE idAgenda=$idAgenda";
echo $query;
mysqli_query($conexao, $query); 
header('Location: ../views/agendados_barbeiro.php');
?>