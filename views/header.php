<link rel="stylesheet" type="text/css" href="../css/resetmin.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/header-style.css"/>
<header>
    <img src="../img/logo/LOGOMARCA.png" alt="Ícone do Site">
    
    <?php 
        $sessionExiste = isset($_SESSION);
        if(!$sessionExiste) { ?>
            <nav id="lista-cadastro">
                <div class="botao">
                    <!-- Função onclick (abrirModal) link com arquivo janela.js-->
                    <button type="button" class="btn btn-success" onclick="abrirModal()"><a href="#"><h1>Login</h1></button>
                    <button type="button" class="btn btn-success"><a href="cadastro.php"><h1>Registrar-se</h1></a></button>          
                </div>
            </nav>       
    <?php
        }
    ?>
     
    <nav id="lista-principal">
        <a href="index.php">Home</a>
        <a href="contato.php">Contato</a>
        <a href="servico.php">Serviços</a>
        <?php 
            if($sessionExiste) {
        ?>
                <a href="../scripts/acoes/deslogar.php">Deslogar</a>
        <?php 
            } 
        ?>
    </nav> 
</header>