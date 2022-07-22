<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="../css/index-style.css">
    </head>
    <body>
        <?php include_once("header.php") ?> 
            
        <!-- JANELA MODAL -->
        <?php include_once('login-janela.php') ?>
          
         <!--Termina janela(modal)-->

        <div style="margin: auto;">
            <img style="display=inline-block;" width="50%" src="../img/marketing.png" alt="">
            <img style="display=inline-block; vertical-align:top;" width="49%" src="../img/PAINEL.png" alt="aaa">
        </div>

        <?php include_once("sliderImagem.html") ?>
        <?php include_once("sobre.html")?>
        <?php include_once("avaliacao.php") ?>
        <?php include_once("nosso-estabelecimento.html") ?>
        <?php include_once("footer.html") ?>
    </body>
</html>