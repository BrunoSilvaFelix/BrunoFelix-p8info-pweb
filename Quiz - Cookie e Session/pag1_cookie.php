<html>
<body>

<h2>Quiz</h2>

<?php

if (!isset($_GET['q1'])) { //testa o get
  echo "Erro ao ler o $_GET";
  die(); // fizaliza o script
  
} else {
  
  $cookie_key = "q1";            // chave
  $cookie_value = $_GET["q1"];   // valor
  
  setcookie($cookie_key, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

}

?>

<form method="get" action="pag2_cookie.php">
  <fieldset>
    <legend>Qual desses Sistemas Operacionais é pertencente á Microsoft?</legend>
    <div>
      <input type="radio" name="q2" id="mac" class="q2" value="mac">
      <label name="lb">Mac</label><br>

      <input type="radio" name="q2" id="linux" class="q2" value="linux">
      <label name="lb">Linux</label><br>

      <input type="radio" name="q2" id="windows" class="q2" value="windows">
      <label name="lb">Windows</label><br>

      <input type="radio" name="q2" id="android" class="q2" value="android">
      <label name="lb">Android</label>
    </div>
  </fieldset>
  <br>
  <input type="submit" id="env" name="env" value="enviar">
</form>

</body>
</html>