<?php
session_start();    
 
include "Conexao.php";
if(isset($_POST['pesquisado'])){    
	$estacionamento = $_POST['pesquisado'];
        if(strpos($estacionamento, "'") !== false){            
	       echo "O nosso sistema não permite pesquisas com o caracter ', uma vez que não há estacionamentos com ' no nosso Banco de Dados ";
        }
    else{
        $con = EstabelecerConexao();
	        $sql = "SELECT * from Estacionamento where nome like '%".$estacionamento."%'";
	        $stmt = sqlsrv_query($con, $sql);
            
            include "../inc/menuCliente.inc.php";
            include "../inc/Busca.inc"; 
            echo "<ul class='Busca'>";
            while($linha = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC)){

            $imagemEst = "$linha[11]";


            if ($imagemEst == "")
                $imagemEst = "buscaParking.png";
         
            
            $local = "../imgs/Estacionamentos/$imagemEst";

    echo "<li class='ItemBusca'>";

        echo "<table> \n";
           echo " <tr> <td> <img src='$local' id='imgEst'> </td>";
              echo "<td>";
                echo "<h1> $linha[1] </h1>";
                echo " <table> \n";	
                   /*echo " <tr> <td class='nomeEst' colspan='2'> $linha[1] <td> </tr> \n";	*/
                   echo " <tr> <td> Endereço:  <td> <td>$linha[2]<td> </tr> \n";	
                   echo " <tr> <td> Bairro:  <td> <td>$linha[3]<td> </tr> \n";	
                   echo " <tr> <td> Estado:  <td> <td>$linha[4]<td> </tr> \n";	
                   echo " <tr> <td> Cidade  <td> <td>$linha[5]<td> </tr> \n";	
                   echo " <tr> <td> nº de vagas total / disp.  <td> <td>$linha[6] / $linha[7]<td> </tr> \n";
                   echo " <tr> <td> Avaliação:  <td> <td>$linha[8] ($linha[9] avaliações)<td> </tr> \n";	
                echo " </table> \n";	
              echo "</td> </tr> </table>";

                echo "</li>";    
            }
            echo "</ul>";
            echo "</div></body></html>";
        }
}
?>

