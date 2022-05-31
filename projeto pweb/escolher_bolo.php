<html>
    <head>
        <title>Opções de Bolo</title>
        <link rel="stylesheet" href="style.css">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta nome="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0">
    </head>
    <body>
        <header>
            <div class="center">
              <div class="logo"><img src="imagens/Cake World (1).png"></div>
              	<div class="menu">
                    <a href="index.html">Retornar</a></div>
            	</div>
      	</header>
      
      	    <form action="pedido.php" method="post">
        
            <div class="center">
                    <h1>Nosso catálogo de <span style="color:FFAEBC;">bolos</span></h1>
                    <p>Após escolher o bolo desejado, clique em <span style="color:FFAEBC;">Continuar</span> para prosseguir com o seu pedido</p>
            </div>
    
            <br><div class = "center_images">
                <div class="d1">
                <label>
                    <img src="bolos/Bolo de Chocolate.jpg" width="400" height="350"><br>
                    <input type="radio" name="tipobolo" name="tipobolo" value="Bolo de Chocolate"> Bolo de Chocolate</label><br><br>
                </div>
                
                <div class="d2">
                <label>
                    <img src="bolos/Bolo de Chocolate com Morangos.jpg" width="400" height="350"><br>
                    <input type="radio" name="tipobolo" name="tipobolo" value="Bolo de Chocolate com Morangos"> Bolo de Chocolate com Morangos</label><br><br>
                </div>
                
                <div class="d3">
                <label>
                    <img src="bolos/Bolo de Chocolate com Laranja.jpg" width="400" height="350"><br>
                    <input type="radio" name="tipobolo" name="tipobolo" value="Bolo de Chocolate com Laranja"> Bolo de Chocolate com Laranja</label><br><br>
                </div>
            
            <br><div class = "center_images">
                <div class="d1">
                <label>
                    <img src="bolos/Bolo de Morango.jpg" width="400" height="300"><br><br>
                    <input type="radio" name="tipobolo" name="tipobolo" value="Bolo de Morango"> Bolo de Morango</label><br><br>
                </div>
                
                <div class="d2">
                <label>
                    <img src="bolos/Bolo de Morango 2.jpg" width="400" height="300"><br><br>
                    <input type="radio" name="tipobolo" name="tipobolo" value="Bolo de Morango 2"> Bolo de Morango 2</label><br><br>
                </div>
                
                <div class="d3">
                <label>
                    <img src="bolos/Bolo de Morango 3.jpg" width="400" height="300"><br><br>
                    <input type="radio" name="tipobolo" name="tipobolo" value="Bolo de Morango 3"> Bolo de Morango 3</label><br><br>
                </div>
 
        <br><div class = "center_button">
            <button type="submit" formaction="pedido.php" class = "button">Continuar</button>
            </div>
        </form>
    </body>
</html>