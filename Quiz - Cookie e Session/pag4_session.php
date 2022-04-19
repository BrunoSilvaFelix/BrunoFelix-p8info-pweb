<?php
session_start();
?>

<html>
<body>

<h2>Quiz</h2>


<?php


if (!isset($_GET["q4"])) { //testa o get
  echo "Erro ao ler o GET <BR>";
  die(); // fizaliza o script
  
}  else {
  $_SESSION["q4"] = $_GET["q4"]; //    $_SESSION['chave'] = valor 
  
  echo "<br>";
  echo "<br> <a href='resultado.php'>Veja os resultados</a>";

}



?>

</body>
</html>
