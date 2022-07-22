<!DOCTYPE html>
<link rel="stylesheet" href="../css/avaliacao-style.css">
<link rel="stylesheet" href="../css/titulo_style.css">
<meta charset="utf-8">
<html lang="pt-br">


<section id="bloco-avaliacao">

  
    <h3 class="titulo">Avaliação</h3>
  

  <div id="slideshow-container">
    <?php 
      include_once('../scripts/conexao.php');

      $query = "SELECT cdUsuario, dsAvaliacao FROM feedback";
      $result = mysqli_query($conexao, $query);
      $count = 0;
      while($row = mysqli_fetch_row($result)) {
        $cdUsuario = $row[0];
        $dsAvaliacao = $row[1];

        echo "<div class='mySlides'>";
        echo "<img src='../img/usuario1.jpg' style='width:100%'>";
        echo "<h3 class='e'>$cdUsuario</h3>";
        echo "<p class='d'>$dsAvaliacao</p>";
        echo "</div>";
        $count++;
      }
      
    ?>
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

  </div>

  <script src="../scripts/slider_avaliacao.js"></script>

</section>

</html>