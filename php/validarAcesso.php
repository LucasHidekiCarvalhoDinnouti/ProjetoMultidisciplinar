<?php
session_start();

include "../classes/conexao.class.php";

//receber dados do formulário
if (isset($_POST['usuarioLogin']) && isset($_POST['senhaLogin'])) {
    $logForm = $_POST['usuarioLogin'];
    $senForm = $_POST['senhaLogin'];
    
    //instanciar a classe conexão
    $obj_con = new Conexao('Regulus', 'BDGRUPO13', 'BDGRUPO13', '13memo');
    
    //fazer o SELECT no BD
    $dados = $obj_con->select($logForm);
    
    if ($dados[0] [1] == md5($senForm)) {
        include '../inc/Busca.inc';
        include '../inc/menuCliente.inc.php';
//        header('Location:menuCliente.inc.php');
    } else {
        include '../inc/Login.inc';
        echo 'Validação inválida';
    }
    
    $_SESSION['dados'] = $dados;
}

?>




