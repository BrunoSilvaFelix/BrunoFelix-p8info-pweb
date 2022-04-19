<html>
<body>

<h2>Resulados</h2>

<?php
echo "testes";

if (!isset($_COOKIE["q1"])) { 
  echo "Erro ao ler o cookie";
  die(); // fizaliza o script
} 

if (!isset($_COOKIE["q2"])) { 
    echo "Erro ao ler o cookie";
    die(); // fizaliza o script
  } 

if (!isset($_SESSION["q3"])) { 
  echo "Erro ao ler a session";
  die(); // fizaliza o script
} 

if (!isset($_SESSION["q4"])) { 
    echo "Erro ao ler a session";
    die(); // fizaliza o script
  } 

echo "<br> Respostas Salvas: <br>";

echo "Q1 =  " . $_COOKIE["q1"] . "<br>";

echo "Q2 =  " . $_COOKIE["q2"] . "<br>";

echo "Q3 =  " . $_SESSION["q3"] . "<br>";

echo "Q4 =  " . $_SESSION["q4"] . "<br>";


?>

</body>
</html>
