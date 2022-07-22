<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Hub Cliente</title>
        <link rel="stylesheet" href="../css/resetmin.css">
        <link rel="stylesheet" href="../css/hub_cliente_style.css">
        <link rel="stylesheet" href="../css/titulo_style.css">
        <?php session_start(); ?>
    </head>
    <body>
        <?php include_once('header.php') ?>
        <main>
            <section id="hub_cliente">
                <h1 class="titulo">Hub Cliente</h1>
                <nav>
                    <li onclick="location.href='agendados.php'"><p>Ver Horários Agendados</p><img src="../img/horario.png" alt="Horários Agendados"></li>
                    <li onclick="location.href='form-agendar.php'"><p>Agendar Horário</p><img src="../img/calendar.png" alt="Agendar Novo Horário"></li>
                    <li onclick="location.href='index.php'"><p>Voltar</p><img src="../img/enter.png" alt="Voltar"></li>
                </nav>
            </section>
        </main>
        <?php include_once('footer.html') ?>
    </body>
</html>