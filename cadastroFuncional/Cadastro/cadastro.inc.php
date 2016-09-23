<html>

<head>
<link rel="stylesheet" type="text/css" href="cadastroEstilo.css">

</head>

<body>



<form id="cadCliente" action="validarAcesso.php" method="POST">


    <label for="nomeCompleto">Nome completo </label><br>
    <input type="text" id="nCompleto" name="nomeCompleto" maxlength=37><p>

    <label for="loginCliente">Login: </label><br>
    <input type="text" id="logCliente" name="logCliente" maxlength=20><p>

    <label for="senhaCliente">Crie uma senha: </label><br>
    <input type="password" id="pwCliente" name="pwCliente" maxlength=20><p>

    <label for="senhaCliente">Confirme sua senha: </label><br>
    <input type="password" id="pwCliente" name="pwConfCliente" maxlength=20><p>


   <!-- <label for="enderecoCliente">Endereço(principal lugar que frequenta): </label><br>
    <input type="text" id="endCliente" name="endCliente" maxlength=100><p>


    <label for="bairroCliente">Bairro: </label><br>
    <input type="text" id="bairCliente" name="bairCliente" maxlength=100><p>

    <label for="UFCliente">UF: </label><br>
    <input type="text" id="ufCliente" name="ufCliente" maxlength=2><p> -->
   <br>
    <input type="submit" value="Criar uma conta" id="btnCadastrar"> 

  

</form>                        
	












</body>
</html>