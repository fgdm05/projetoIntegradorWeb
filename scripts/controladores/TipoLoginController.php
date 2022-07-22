<?php 

include_once('../conexao.php');

function error(Exception $e) {
    echo $e->getMessage();
    echo "<br><a href='../../views/'>Voltar</a>";
    exit;
}

$connection = new mysqli('localhost', 'root', '', 'barbeariapi');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$queryPessoa = "SELECT nome, sobrenome, telefone, email FROM pessoas WHERE cdUsuario = '$usuario'";
$result = $connection->query($queryPessoa);
$row = mysqli_fetch_row($result);
try {
    if($row == null) {
        throw new InvalidArgumentException("Usuário e senha inválidos.");
    }
} catch(InvalidArgumentException $e) {
    error($e);
}

$nome = $row[0];
$sobrenome = $row[1];
$telefone = $row[2];
$email = $row[3];

$queryTipoLogin = "SELECT tipoLogin FROM logins WHERE cdUsuario='$usuario' AND senha='$senha'";
$resultTipoLogin = $connection->query($queryTipoLogin);

$rowTipoLogin = $resultTipoLogin->fetch_row();
try {
    if($rowTipoLogin == null) {
        throw new InvalidArgumentException("Usuário e senha inválidos.");
    }
} catch(InvalidArgumentException $e) {
    error($e);
}
$tipoLogin = $rowTipoLogin[0];

session_start();
$_SESSION['usuario'] = $usuario;
$_SESSION['senha'] = $senha;
$_SESSION['tipoUs'] = $tipoLogin;
$_SESSION['nome'] = $nome;
$_SESSION['sobrenome'] = $sobrenome;
$_SESSION['telefone'] = $telefone;
$_SESSION['email'] = $email;



if($tipoLogin === "BARBEIRO") {
    header('Location: ../../views/hub_barbeiro.html');
} else if ($tipoLogin == "CLIENTE") {
    header('Location: ../../views/hub_cliente.php');
} else {
    throw new Exception("Tipo Inexistente.");
}
echo "Fim da execução";
?>