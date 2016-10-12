<?php
session_start();    
 
include "Conexao.php";
if(isset($_POST['pesquisado'])){    
	$estacionamento = $_POST['pesquisado'];
    $ordenarPor = $_POST['ordenacao'];
    $filtrarPor = $_POST['filtracao'];
        if(strpos($estacionamento, "'") !== false){            
	       echo "O nosso sistema não permite pesquisas com o caracter ', uma vez que não há estacionamentos com ' no nosso Banco de Dados ";
        }
    else{
        $con = EstabelecerConexao();
            
        if($ordenarPor == "Por nome"){
        if ($filtrarPor == "Disponivel") {              
          $sql = "SELECT * from Estacionamento where nome like '%".$estacionamento."%' order by nVagasTotal-nVagasOcupadas desc";
          $stmt = sqlsrv_query($con, $sql);  
        }
        else{
          $sql = "SELECT * from Estacionamento where nome like '%".$estacionamento."%' order by preco";
          $stmt = sqlsrv_query($con, $sql);   
        }        
            }
            elseif ($ordenarPor == "Por bairro") {
              if($filtrarPor == "Disponivel"){
                $sql = "SELECT * from Estacionamento where Bairro like '%".$estacionamento."%' order by nVagasTotal-nVagasOcupadas desc";
                $stmt = sqlsrv_query($con, $sql);  
              }
              else{
                $sql = "SELECT * from Estacionamento where Bairro like '%".$estacionamento."%' order by preco";
                $stmt = sqlsrv_query($con, $sql);   
              } 
            }
        
            include "../inc/menuCliente.inc.php";
            include "../inc/Busca.inc"; 
            echo "<ul class='Busca'>";
            while($linha = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC)){

            $imagemEst = "$linha[10]";


            if ($imagemEst == "")
                $imagemEst = "buscaParking.png";
         
            
            $local = "../imgs/Estacionamentos/$imagemEst";

            echo "<li class='ItemBusca'>";

                echo "<table> \n";
                   echo " <tr> <td> <img src='$local' id='imgEst'> </td>";
                      echo "<td>";
                        echo "<h1> ".utf8_encode($linha[1])."</h1>";
                        echo " <table> \n";	
                           /*echo " <tr> <td class='nomeEst' colspan='2'> $linha[1] <td> </tr> \n";	*/
                           echo " <tr> <td> Endereço:  <td> <td>".utf8_encode($linha[2])."<td> </tr> \n";	
                           echo " <tr> <td> Bairro:  <td> <td>".utf8_encode($linha[3])."<td> </tr> \n";	
                           echo " <tr> <td> Estado:  <td> <td>".utf8_encode($linha[4])."<td> </tr> \n";	
                           echo " <tr> <td> Cidade  <td> <td>".utf8_encode($linha[5])."<td> </tr> \n";	
                           echo " <tr> <td> nº de vagas ocupadas. /  total <td> <td>".utf8_encode($linha[11])." / ".utf8_encode($linha[6])."<td> </tr> \n";
                           echo " <tr> <td> Avaliação:  <td> <td>".utf8_encode($linha[7])." (".utf8_encode($linha[8])." avaliações)<td> </tr> \n";	
                        echo " </table> \n";	
                        $qtasVagas = $linha[6] - $linha[11];



                        if ($qtasVagas > 0)
                        echo 
                        "<div id='qtVagas'>   
                           <h4><font color = '#108800'>".$qtasVagas." vagas </font></h4> 
                         </div>";

                         else
                        echo
                          "<div id='qtVagas'>   
                          <h4><font color='#a50000'>".$qtasVagas." vagas</font> </h4> 
                         </div>";




                      echo "</td> </tr> </table>";
                      echo "<br><hr>";

                echo "</li>"; 

            }
            echo "</ul>";

            echo "</div></body></html>";
        }
}
?>

