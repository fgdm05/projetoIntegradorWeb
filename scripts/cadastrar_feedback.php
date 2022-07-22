<?php
include_once('conexao.php');

session_start();

$tipoLogin = $_SESSION['tipoUs'];
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

$idAgenda = $_POST['idAgenda'];
$dsAvaliacao = $_POST['dsavaliacao'];

echo "$idAgenda<br>";
echo "$usuario<br>";
echo "$dsAvaliacao<br>";

$sqlenviofeedback = "INSERT INTO feedback (idAgenda, cdUsuario, dsAvaliacao) VALUES ($idAgenda, '$usuario', '$dsAvaliacao')";

$sqlupdateagenda = "UPDATE agendas SET estado='FINALIZADO' WHERE idAgenda = '$idAgenda'";
$r1 = mysqli_query($conexao, $sqlenviofeedback);
$r2 = mysqli_query($conexao, $sqlupdateagenda);

mysqli_commit($conexao);
header("Location: ../views/agendados.php");
?>