<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../estilos/busca.css">
</head>
<body>

<div id="gambiarra"> </div>


<form id="formulario" method="POST" action= "../php/busca.func.php">
<div id="busca">    
<!--    <img src=""> -->
    <input type="text" id="pesquisa" name="pesquisado">
    <input type="submit" id="btnpesquisa" name="btn_1" value="Pesquisar">      
 </div>


 <div id="gambiarra2">
    Pesquisa: 
    <select name="ordenacao">
        <option>Por nome</option>
        <option>Por bairro</option>
       
    </select>
    
   Preferencia:
     <select name="filtracao">
        <option>Disponivel</option>
        <option>Por preço</option>
    </select>
  </div>
</form>            