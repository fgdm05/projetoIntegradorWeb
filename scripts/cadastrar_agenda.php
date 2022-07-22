<?php 
    session_start();
    $cdUsuario = $_SESSION['usuario'];
    $tipoServico = $_POST['opcao_selecionada'];
    $data = $_POST['data_agendada'];
    $hora = $_POST['hora_agendada'];

    echo $cdUsuario;
    echo $tipoServico;
    echo $data;
    echo $hora;
    include_once 'conexao.php';

    $query = "INSERT INTO agendas(cdUsuario, tipoServico, dataAgenda, horaAgenda) VALUES ('$cdUsuario', '$tipoServico', DATE '$data', TIME '$hora')";
    $result = mysqli_query($conexao, $query);
    mysqli_commit($conexao);
    header('Location: ../views/form-agendar.php');
?>