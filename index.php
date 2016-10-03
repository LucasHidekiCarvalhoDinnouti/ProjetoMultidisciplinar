<html>
<head>
<meta charset="utf-8">
<title> Buscaparking </title>

    <link rel="stylesheet" type="text/css" href="style.css">
    
<style>
    
    
</style>    
</head>
<body>

<? include('inc/Login.inc'); ?>
    
<? include('inc/Busca.inc'); ?>
    
    
<!-------- Login do Cliente -------->
<? include('inc/menuCliente.inc'); ?>
<!---------------------------------->
       
<!-------- Login do Dono ----------->
<? include('inc/menuDono.inc'); ?>
<!---------------------------------->
    
    
<form action="php/Login.php">
<input type="submit" value="Login"> 
</form>    
<form action="php/Cadastro.php">
<input type="submit" value="Cadastro">    
</form>
    
</body>
</html>