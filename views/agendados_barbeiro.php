<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Agendados</title>
        <link rel="stylesheet" href="../css/table_style.css">
        <link rel="stylesheet" href="../css/agendados_barbeiro_style.css">
        <link rel="stylesheet" href="../css/titulo_style.css">
    </head>
    <body>
        <?php include_once('header.php') ?>
        <main>
            <section>
                <h3 class="titulo">Horários Agendados</h3>
                <table border="1">
                    <thead>
                        <th>Cliente</th>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Tipo</th>
                        <th>Estado</th>
                        <th>Cancelar</th>
                    </thead>
                    <tbody>
                        <?php 
                            include_once('../scripts/conexao.php');

                            $query = "SELECT cdUsuario, dataAgenda, horaAgenda, tipoServico, idAgenda, estado FROM agendas";
                            $result = mysqli_query($conexao, $query);
                            while($row = mysqli_fetch_row($result)) {
                                $cdUsuario = $row[0];
                                $dataAgenda = $row[1];
                                $horaAgenda = $row[2];
                                $tipoServico = $row[3];
                                $idAgenda = $row[4];
                                $estado = $row[5];
                                
                                echo 
                                "<tr>".
                                "<td>".$cdUsuario."</td>".
                                "<td>".$dataAgenda."</td>".
                                "<td>".$horaAgenda."</td>".
                                "<td>".$tipoServico."</td>".
                                "<td>".$estado."</td>";
                                
                                if($estado == "AGENDADO") {
                                    echo
                                "<td>"."<a class='cancelar' href='../scripts/cancelar_agenda.php?idAgenda=$idAgenda'>Cancelar</a>"."</td>".
                                "</tr>";
                                } else if ($estado == "FINALIZADO") {
                                    echo "</tr>";
                                }
                                
                            }
                        ?>
                    </tbody>
                </table>
            </section>
        </main>
        <?php include_once('footer.html') ?>
    </body>
</html>