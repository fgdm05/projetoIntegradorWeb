<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Agendar horário</title>
        <link rel="stylesheet" href="../css/resetmin.css">
        <link rel="stylesheet" href="../css/form_agendar_style.css">
        <link rel="stylesheet" href="../css/titulo_style.css">
    </head>
    <body>
        <?php include_once("header.php") ?>
        <main>
            <section id="agenda">
                <h3 class="titulo">Agendar novo horário</h3>
                <form method="post" action="../scripts/cadastrar_agenda.php">
                    <li><p>Opção</p>
                    <select name="opcao_selecionada">
                        <option value="NAVALHA">Barba na Navalha (R$ 20,00)</option>
                        <option value="DESENHADA">Barba Desenhada (R$ 30,00)</option>
                        <option value="BARBOTERAPIA">Barboterapia (R$ 60,00)</option>
                        <option value="TOALHA_QUENTE">Barba e Toalha Quente (R$ 35,00)</option>
                        <option value="PIGMENTACAO">Pigmentação (R$ 40,00)</option>
                        <option value="COMBO">Combo (R$ 80,00)</option>
                    </select></li>
                    <li><p>Data</p><input type="date" name="data_agendada"></li>
                    <li><p>Horário</p><input type="time" name="hora_agendada"></li>
                    <input type="submit" value="Enviar">
                </form>
            </section>
        </main>
        <?php include_once("footer.html") ?>
    </body>
</html>