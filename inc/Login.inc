
<html>
<head>
	<style type="text/css">
        body {
            font-weight: 100;
        }
		#usuario{
			position: absolute;
			left: 40%
		}

		#senha{
			position: absolute;
			left: 40%;
			top: 5%;				
		}

		#usuarioLabel{
			height: 25px;
			font-size: 24px;
			font-family: calibri; 
		}
		#senhaLabel{		
			height: 25px;
			font-size: 24px;
			font-family: calibri; 
		}
		#usuarioLogin{
			border: solid #2a2a2a 2px;
			height: 25px;			
			border-radius: 5px 5px 5px 5px;
			border-width: 1.5px;	
			font-size: 24px;
			font-family: calibri; 
			left: 2%;
			position: relative;
		}
		#senhaLogin{
			border: solid #2a2a2a 2px;
			height: 25px;
			border-radius: 5px 5px 5px 5px;
			border-width: 1.5px;
			font-size: 24px;
			font-family: calibri; 
			position: relative;
			left: 7%;
		}
		#Botao{
			position: absolute;
			top: 80px;
			height: 25px;
			width: 70px;
			left: 45%;
			border-radius: 5px 5px 5px 5px;
			border-width: 1.5px;
			font-size: 20px;
			font-family: calibri; 	
		}
		body{
			background-color: #f1f1f1;
		}
	</style>
</head>
<body>
  <form method="POST" action="../php/validarAcesso.php">
  	<div id="usuario">
	<label id="usuarioLabel">Usuário:</label><input type="text" name="usuarioLogin" maxlength="37">
	</div>
	<br>
	<div id="senha">	
	<label id="senhaLabel">Senha:</label><input type="password" name="senhaLogin" maxlength="20">
	</div>
	<br>
	<input type="submit" value="Entrar" id="Botao">
  </form>
</body>
</html>