<?php 
include_once('conexao.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobreN'];
$email = $_POST['email'];
$telefone = $_POST['telf'];

$tipoLogin = $_POST['tipoUs'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sqlLogin = "INSERT INTO logins (tipoLogin, cdUsuario, senha) VALUES ('$tipoLogin', '$usuario', '$senha')";
$sqlPessoa = "INSERT INTO pessoas (cdUsuario, nome, sobrenome, telefone, email) VALUES ('$usuario', '$nome', '$sobrenome', '$telefone', '$email')";
mysqli_query($conexao, $sqlLogin);
mysqli_query($conexao, $sqlPessoa);
mysqli_commit($conexao);
echo mysqli_error();
header("Location: ../views/");
?>