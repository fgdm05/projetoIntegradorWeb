<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Pessoas</title>
        <link rel="stylesheet" href="../css/resetmin.css">
        <link rel="stylesheet" href="../css/titulo_style.css">
        <link rel="stylesheet" href="../css/table_style.css">
        <link rel="stylesheet" href="../css/pessoas_barbeiro_style.css">
    </head>
    <body>
        <?php include_once('header.php') ?>
        <main>
            <section>
                <h3 class="titulo">Pessoas Cadastradas</h3>
                <table border="1">
                    <thead>
                        <th>Tipo</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Usuário</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                    </thead>
                    <tbody>
                        <?php 
                        include_once('../scripts/conexao.php');
                        $query = "SELECT * FROM pessoas";
                        $res = mysqli_query($conexao, $query);
                        while($row = mysqli_fetch_row($res)) {
                            $tipoLogin = $row[0];
                            $cdUsuario = $row[1];
                            $nome = $row[2];
                            $sobrenome = $row[3];
                            $telefone = $row[4];
                            $email = $row[5];

                            echo 
                            "<tr>".
                            "<td>".$tipoLogin."</td>".
                            "<td>".$nome."</td>".
                            "<td>".$sobrenome."</td>".
                            "<td>".$cdUsuario."</td>".
                            "<td>".$telefone."</td>".
                            "<td>".$email."</td>".
                            "</tr>";
                        }
                        ?>
                        <tr>
                            <td>BARBEIRO</td>
                            <td>Eduardo</td>
                            <td>Correa</td>
                            <td>Eduardo.correa</td>
                            <td>99999 9999</td>
                            <td>eduardocorrea@gmail.com</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
        <?php include_once('footer.html') ?>
    </body>
</html>