<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Feedback</title>
        <link rel="stylesheet" href="../css/form_feedback_style.css">
        <link rel="stylesheet" href="../css/titulo_style.css">
    </head>
    <body>
        <?php include_once('header.php') ?>
        <main>
            <section>
                <h3 class="titulo">Feedback</h3>
                <form method="post" action="../scripts/cadastrar_feedback.php">
                    <textarea name="dsavaliacao" cols="30" rows="10"></textarea>
                    <input type="hidden" name="idAgenda" value="<?php echo $_GET['idAgenda'] ?>">
                    <input type="submit" value="Enviar">
                </form>
            </section>
        </main>
        <?php include_once('footer.html') ?>
    </body>
</html>