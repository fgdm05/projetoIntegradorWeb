<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/cadastro-style.css">

  <title>Cadastro</title>
</head>

<body>
  <?php include_once('header.php') ?>
  <?php include_once('login-janela.php') ?>

  <section>
    <br>
    <h1>Cadastrar-se</h1>
    <br><br>
    <!-- 
      Nome das variáveis:
      Nome: nome
      Sobrenome: sobreN
      Email: email
      Senha: senha
      cdUsuario: usuario
      tipoLogin: tipoUs
    -->
    <form id="bloco" method="post" action="../scripts/cadastrar_pessoa.php">
      
    <!--=========================================== -->  
      <center>
        <label>Nome:</label>
        <input name="nome" id="nome" placeholder="nome" required>

        <label>Email:</label>
        <input name="email" placeholder="nome123@gmail.com" required>
      </center>
             <br><br>
       <!--=========================================== -->      

      <center>
         <label>Sobrenome: </label>
         <input name="sobreN" placeholder="sobrenome" required>

         <label>Senha:</label>
         <input type="password" name="senha" placeholder="senha" required>
      </center>
          <br><br>
      <!--=========================================== -->  
      <center>
        <label>Telefone:</label>
        <input name="telf" placeholder="+55">

        <label>Usuário:</label>
        <input name="usuario" placeholder="Perfil" required>
      </center>
           <br><br>
    <!--=========================================== -->  
      <center><label>Tipo:</label>
                  <select name="tipoUs">
                   <option value="BARBEIRO">Barbeiro</option>
                   <option value="CLIENTE">Cliente</option>
                  </select>
                     (seleciona Tipo de cadastro)
      </center><br><br>
      <center>
        <button type="submit" class="btn btn-success"><a href="#"><h3>Cadastrar</h3></a></button>
      </center>
             <br><br><br>
    </form><br><br>
  </section>
  <?php include_once('footer.html') ?>
</body>
</html>