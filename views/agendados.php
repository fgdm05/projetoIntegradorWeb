<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Horários Agendados</title>
        <link rel="stylesheet" href="../css/resetmin.css">
        <link rel="stylesheet" href="../css/agendados_cliente.css">
        <link rel="stylesheet" href="../css/table_style.css">
        <link rel="stylesheet" href="../css/titulo_style.css">
        <?php session_start() ?>
    </head>
    <body>
        <?php include_once('header.php') ?>
        <?php include_once('login-janela.php')?>
        <main>
            <section id="agendados_cliente">
                <h3 class="titulo">Horários Agendados</h3>
                <table border="1">
                    <thead>
                        <th>Tipo Agendado</th>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Finalizar</th>
                    </thead>
                    <tbody>
                        <?php 
                            include('../scripts/conexao.php');

                            $usuario = $_SESSION['usuario'];               
                            $query = "SELECT * FROM agendas WHERE cdUsuario='$usuario' AND estado='AGENDADO'";
                            $mysqli_result = mysqli_query($conexao, $query);

                            while ($row = mysqli_fetch_row($mysqli_result)) {
                                $idAgenda = $row[0];
                                $tipoServico = $row[2];
                                $dataAgenda = $row[3];
                                $horaAgenda = $row[4];
                                
                                
                                echo "<tr>".
                                "<td>".$tipoServico."</td>".
                                "<td>".$dataAgenda."</td>".
                                "<td>".$horaAgenda."</td>".
                                "<td>"."<a href='form_feedback.php?idAgenda=$idAgenda'>Finalizar</a>"."</td>".
                                "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </section>
        </main>
        <?php include_once('footer.html') ?>
    </body>
</html>