<html>
<head>
    <meta charset="utf-8">
    <title> Conexão </title>
</head>
<body>

<?php
    
function EstabelecerConexao() {
    
//variáveis com informações do servidor de BD
$serverName = 'regulus';
$uid        = 'BDGRUPO13';
$pwd        = '13memo';
$database   = 'BDGRUPO13';

//array para conexão com BD
$connectInfo = array("UID"=>$uid,
                     "Database"=>$database,
                     "PWD"=>$pwd);

//estabelecendo conexão com o BD
$conexao = sqlsrv_connect($serverName,$connectInfo);
if (!$conexao) {
    exit ('Falha na conexão com o banco de dados <br>');
} 
return $conexao;
}
?>
</body>
</html>