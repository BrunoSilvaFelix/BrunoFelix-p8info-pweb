<html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>

<h2>Quiz</h2>

<?php

if (!isset($_GET['q2'])) { //testa o get
  echo "Erro ao ler o $_GET";
  die(); // fizaliza o script
  
} else {
  
  $cookie_key = "q2";            // chave
  $cookie_value = $_GET["q2"];   // valor
  
  setcookie($cookie_key, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

}

?>

<form method="get" action="pag3_session.php">
  <fieldset>
    <legend>Qual das alternativas abaixo não se trata de um periférico de saída:</legend>
    <div>
      <input type="radio" name="q3" id="impressora" class="q3" value="impressora">
      <label name="lb">Impressora</label><br>

      <input type="radio" name="q3" id="monitor" class="q3" value="monitor">
      <label name="lb">Monitor</label><br>

      <input type="radio" name="q3" id="projetor" class="q3" value="projetor">
      <label name="lb">Projetor</label><br>

      <input type="radio" name="q3" id="teclado" class="q3" value="teclado">
      <label name="lb">Teclado</label>
    </div>
  </fieldset>
  <br>
  <input type="submit" id="env" name="env" value="enviar">
</form>

</body>
</html>