<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../estilos/menuCliente.css">
<script>
    function Exibir(ID) {
        document.getElementById("Conta").style.visibility = 'hidden';
        document.getElementById("Configuracao").style.visibility = 'hidden';
        document.getElementById(ID).style.visibility = 'visible';
    }

    function Esconder() {
        document.getElementById("Conta").style.visibility = 'hidden';
        document.getElementById("Configuracao").style.visibility = 'hidden';
    }
</script>
</head>
<body>
<div id="Conta">
    Conta
</div>
<div id="Configuracao">
    Configuracao
</div>
    
<div id="oi">  


 
 <div id="gambiarra3">
<ul>
    <li onclick="Exibir('Conta')"><?php echo $_SESSION['dados'][0][0]; ?></li>
    <li onclick="Exibir('Configuracao')">Histórico</li>
    <li onclick="Esconder()">Busca</li>
    <p></p>
    <li>Configurações</li>
</ul>
</div>

</body>
</html>
