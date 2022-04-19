<?php
session_start();
?>

<html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>

<h2>Quiz</h2>


<?php


if (!isset($_GET["q3"])) { //testa o get
  echo "Erro ao ler o GET <BR>";
  die(); // fizaliza o script
  
}  else {

  $_SESSION["q3"] = $_GET["q3"]; //    $_SESSION['chave'] = valor 
  
}


?>

<form method="get" action="pag4_session.php">
  <fieldset>
    <legend>O que é Hardware?</legend>
    <div>
      <input type="radio" name="q4" id="resp1" class="q4" value="resp1">
      <label name="lb">Parte física do computador;</label><br>

      <input type="radio" name="q4" id="resp2" class="q4" value="resp2">
      <label name="lb">Parte logica do computador;</label><br>

      <input type="radio" name="q4" id="resp3" class="q4" value="resp3">
      <label name="lb">Disco do computador;</label><br>

      <input type="radio" name="q4" id="resp4" class="q4" value="resp4">
      <label name="lb">Aplicativo do computador;</label>
    </div>
  </fieldset>
  <br>
  <input type="submit" id="env" name="env" value="enviar">
</form>

</body>
</html>

