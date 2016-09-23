<?php
include 'Classes/conexao.class.php';



//receber dados do formulario
if(isset ($_POST["nomeCompleto"]) &&
   isset ($_POST["logCliente"]) &&
   isset ($_POST["pwCliente"]) &&
   isset ($_POST["pwConfCliente"]))


{
    $nomeCliente      = $_POST['nomeCompleto'];
    $loginCliente     = $_POST['logCliente'];
    $senhaCliente     = $_POST['pwCliente'];
    $senhaConfCliente = $_POST['pwConfCliente'];

   
    

   
if ($senhaCliente == $senhaConfCliente)
{  
    $pass = md5($senhaCliente);
    $obj_con = new Conexao('regulus', 'BDGRUPO13', 'BDGRUPO13', '13memo');
    $dados = $obj_con->InsertCliente($loginCliente, $pass, $nomeCliente);


}else{
  echo ("olaa marilene");
}
    
    
}
?>

