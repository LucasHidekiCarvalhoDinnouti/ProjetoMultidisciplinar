<?php
include 'Classes/conexao.class.php';



//receber dados do formulario
if(  isset ($_POST["nomeCompleto"]) &&  isset ($_POST["logCliente"]) && isset ($_POST["pwCliente"]) && isset ($_POST["pwConfCliente"]))
{
    $nomeCliente      = $_POST['nomeCompleto'];
    $loginCliente     = $_POST['logCliente'];
    $senhaCliente     = $_POST['pwCliente'];
    $senhaConfCliente = $_POST['pwConfCliente'];

   

   
if ($senhaCliente == $senhaConfCliente)
{  
    $pass = md5($senhaCliente);
    $obj_con = new Conexao('regulus', 'BDGRUPO13', 'BDGRUPO13', '13memo');


   if(!$obj_con->haCliente($loginCliente))
      $dados = $obj_con->InsertCliente($loginCliente, $pass, $nomeCliente);
      echo "Cadastro feito cm sucess!!<br>";
      echo "<p><form action='../php/Login.php'><input type='submit' value='Ir para pagina de login'></form></p>";
   else{
      header('Location:cadastro.inc.php?usuario=IND');
    }

}else{
 
header('Location:cadastro.inc.php?usuario=NOK');
}

}






    
    




?>

