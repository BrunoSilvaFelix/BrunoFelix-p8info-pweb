<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <div style="color: rgb(31, 5, 126);
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bolder">
<?php

$qst1 = $_POST["qst1"];
$qst2 = $_POST["qst2"];
$qst3 = $_POST["qst3"];
$qst4 = $_POST["qst4"];
$resultados = array('Python','PHP','Java','JavaScript');
$resp = array($qst1,$qst2,$qst3,$qst4);
$pontos = 0;
$aux = 0;
while($aux < 4){if($resp[$aux] == $resultados[$aux])
    {$pontos+=1;}$aux+=1;}
echo "Voce acertou $pontos de 4 questoes"
?>
    </div>
</body>
</html>
