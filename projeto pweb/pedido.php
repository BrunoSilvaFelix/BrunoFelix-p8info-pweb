<?php
$nome = "Bolo";
$valor = $_REQUEST["tipobolo"];
$expira = time() + 3600;
setcookie($nome, $valor, $expira);

if($_POST['tipobolo'] == "Bolo de Chocolate"){
  $msg = '<img src="bolos/Bolo de Chocolate.jpg" width="400" height="350"><br>'; 
}

else if($_POST['tipobolo'] == "Bolo de Chocolate com Morangos"){
  $msg = '<img src="bolos/Bolo de Chocolate com Morangos.jpg" width="400" height="350"><br>';
}
  
else if($_POST['tipobolo'] == "Bolo de Chocolate com Laranja"){
  $msg = '<img src="bolos/Bolo de Chocolate com Laranja.jpg" width="400" height="350"><br>';
}

else if($_POST['tipobolo'] == "Bolo de Morango"){
  $msg = '<img src="bolos/Bolo de Morango.jpg" width="400" height="350"><br>';
}
  
else if($_POST['tipobolo'] == "Bolo de Morango 2"){
  $msg = '<img src="bolos/Bolo de Morango 2.jpg" width="400" height="350"><br>';
}

else if($_POST['tipobolo'] == "Bolo de Morango 3"){
  $msg = '<img src="bolos/Bolo de Morango 3.jpg" width="400" height="350"><br>';
}

echo "<div class = 'center_images'>";
echo "<h1> Bolo escolhido </h1>";
echo $msg;
echo "</div>"
?>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>Dados do pedido</title>
  </head>
  <body>
  
  <form action="insert.php" method="post">
  <div class = "center_button">
  <h1> Dados do cliente </h1>
  </div>
    <div class = "center_button">
    	<label>Qual o seu nome?</label><br><br>
        <input type="text" name="nome" id="nome" placeholder = "Digite"><br><br>
    
    	<label>E-mail para contato</label><br><br>
        <input type="text" name="email" id="email" placeholder = "Digite"><br><br>
    
    	<label>Telefone para contato</label><br><br>
        <input type="text" name="telefone" id="telefone" placeholder = "Digite"><br><br>

    	<label>Observações</label><br><br>
        <input type="text" name="mensagem" id="mensagem" placeholder = "Escreva"><br><br>
      
    <div class="buttons">
      <button type="submit" formaction="insert.php" class = "button">Enviar pedido</button>
    </div>
    </div>
</form>
</body>
</html>