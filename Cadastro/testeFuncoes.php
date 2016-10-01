<?php
include 'Classes/conexao.class.php';

$obj_con = new Conexao('regulus', 'BDGRUPO13', 'BDGRUPO13', '13memo');

if ($obj_con->temUsuario("GuzRamalho"))
   echo "ja tem";
else
	echo "n tem";





?>