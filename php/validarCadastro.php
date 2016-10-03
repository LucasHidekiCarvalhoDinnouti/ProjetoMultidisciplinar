<?php

include '../classes/cadastro.class.php';



//receber dados do formulario

if(isset ($_POST["nomeCompleto"]) &&
   isset ($_POST["logCliente"]) &&
   isset ($_POST["pwCliente"]) &&
   isset ($_POST["pwConfCliente"]) &&
   isset ($_POST["endCliente"]) &&
   isset ($_POST["bairCliente"]) &&
   isset ($_POST["ufCliente"]))
{
    $nomeCliente      = $_POST['nomeCompleto'];
    $loginCliente     = $_POST['logCliente'];
    $senhaCliente     = $_POST['pwCliente'];
    $senhaConfCliente = $_POST['pwConfCliente'];

    $enderecoCliente  = $_POST['endCliente'];
    $bairroCliente    = $_POST['bairCliente'];
    $ufCliente        = $_POST['ufCliente'];
   
    //instanciar a classe Conexao
    $obj_con = new Conexao('regulus', 'BDGRUPO13', 'BDGRUPO13', '13memo');
    
    //fazer o INSERT no BD
    $dados = $obj_con->Insert($loginCliente, $senhaCliente, $nomeCliente, $enderecoCliente, $bairroCliente, $ufCliente);

}
?>

