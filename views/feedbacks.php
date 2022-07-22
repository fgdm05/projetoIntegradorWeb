<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Feedbacks</title>
        <link rel="stylesheet" href="../css/resetmin.css">
        <link rel="stylesheet" href="../css/feedbacks_style.css">
        <link rel="stylesheet" href="../css/titulo_style.css">
        <link rel="stylesheet" href="../css/table_style.css">
    </head>
    <body>
        <?php include_once('header.php') ?>
        <?php include_once('login-janela.php') ?>
        <main>
            <section>
                <h3 class="titulo">Feedbacks</h3>
                <table border="1">
                    <thead>
                        <th>Usuário</th>
                        <th>Descrição</th>
                    </thead>
                    <tbody>
                        <?php 
                            include_once('../scripts/conexao.php');

                            $query = "SELECT cdUsuario, dsAvaliacao FROM feedback";
                            $result = mysqli_query($conexao, $query);
                            
                            
                            while($row = mysqli_fetch_row($result)) {
                                $usuario = $row[0];
                                $dsavaliacao = $row[1];
                                echo 
                                "<tr>".
                                "<td>".$usuario."</td>".
                                "<td id='dsavaliacao'>".$dsavaliacao."</td>".
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