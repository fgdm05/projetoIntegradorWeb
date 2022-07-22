<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width">
        <title>Contato</title>
        <link rel="stylesheet" type="text/css" href="../css/resetmin.css"/>
        <link rel="stylesheet" text="text/css" href="../css/contato-style.css"/>
    </head>
    <body>
        <?php include_once("header.php");?>
        <?php include_once("login-janela.php"); ?>
        <section id="contato">
            <h3>Contato</h3>
            <div id="content">
                <div id="barbeiro">
                    <img src="https://e7.pngegg.com/pngimages/906/448/png-clipart-silhouette-person-person-with-helmut-animals-logo.png" alt="">
                    <p id="descricao">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
                </div>
                <form method="post" action="#">
                    <li><p>Nome:</p><input name="nome" cols="40"></li>
                    <li><p>E-mail:</p><input name="email"></li>
                    <li><p>Descrição:</p><textarea name="descricao" cols="30" rows="5"></textarea></li>
                    
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </section>
        <?php include_once("footer.html"); ?>        
    </body>
</html>
