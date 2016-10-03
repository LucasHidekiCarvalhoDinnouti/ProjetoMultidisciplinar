<?php
    session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../estilos/login.css">
</head>
<body>
  <form method="POST" action="../php/validarAcesso.php">
	<div id="logCliente">Usuário:<input type="text" name="usuarioLogin" maxlength="37"></div>
	<br>	
	<div id="pwCliente">Senha:<input type="password" name="senhaLogin" maxlength="20"></div>
	<br>
	<input type="submit" value="Entrar" id="btnLogar">

  </form>
</body>
</html>