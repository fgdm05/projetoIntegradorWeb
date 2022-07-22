<link rel="stylesheet" href="../css/login-janela-style.css">
<script src="../scripts/janela.js"></script>
<div id="bg-modal">
    <div id="modal">
        <div class="fechar">
            <span class="close" onclick="fecharModal()">&times;</span>
        </div>
        <div id="titulo">
            <h1>Login</h1>
        </div>
        <!-- Essa div(bloco) é onde ta os input do bloco amarelo-->
        <div id="bloco">
            <form method="post" action="../scripts/controladores/TipoLoginController.php">
                Usuário: <input name="usuario" required>
                <br><br>
                Senha: <input type="password" name="senha" required>
                <br><br>
                <center><input type="submit" value="Entrar" class="btn btn-success"></center>
                
            </form>

            
        </div>
    </div>
</div>