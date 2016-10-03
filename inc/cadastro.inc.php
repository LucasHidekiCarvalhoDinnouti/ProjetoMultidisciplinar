<html>

<head>
<link rel="stylesheet" type="text/css" href="../estilos/cadastroEstilo.css">

</head>

<body>
<?php 
if (isset($_GET['usuario']))
    {
        if ($_GET['usuario'] == 'IND')
           $mensagem = 'Nome de usuario não disponivel, escolha outro nome.';
        
        elseif ($_GET['usuario'] == 'NOK')
           $mensagem = 'Senhas diferentes.';

       elseif ($_GET['usuario'] == 'NADA')
           $mensagem = 'Preecha todos os campos para o cadastro.';

    }
    else
    $mensagem = '';

?>


<form id="cadCliente" action="../php/validarCadastro.php" method="POST">
    <h1>Crie sua conta do Buscaparking</h1>

    <label for="nomeCompleto">Nome completo: </label><br>
    <input type="text" id="nCompleto" name="nomeCompleto" maxlength=37><p>
  

    <label for="loginCliente">Login: </label>
    <br>
    <input type="text" id="logCliente" name="logCliente" maxlength=20>
   
    <p>


    <label for="senhaCliente">Crie uma senha: </label><br>
    <input type="password" id="pwCliente" name="pwCliente" maxlength=20><p>

    <label for="senhaCliente">Confirme sua senha: </label><br>
    <input type="password" id="pwCliente" name="pwConfCliente" maxlength=20><p>

   <br>
    <input type="submit" value="Criar uma conta" id="btnCadastrar"> <p>

    <?php 
         echo "<h2>$mensagem</h2>";
    ?>
    

  

</form>                        
	












</body>
</html>