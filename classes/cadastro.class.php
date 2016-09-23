<?php


 /* @author u16174 Z1k4*/
 
class Conexao {

//atributos
 public $con;
 protected $stmt;
 
 //metodo construtor
 public function __construct($host, $database, $user, $pwd){
     $connectInfo = array("Database" => $database,
                          "PWD"      => $pwd,
                          "UID"      => $user);
     
     $this->con = sqlsrv_connect($host, $connectInfo);
     
     if($this->con === false){
       //encerrar procedimento
         die(print_r(sqlsrv_errors(), true));
     }
        
 }
 
     public function __destruct(){
        sqlsrv_close($this->con);
        }//fim do metodo __destruct
 
 
    public function execSQL($consulta){
        if($consulta === ''){
            return false;
        }
        
        $stmt = sqlsrv_query($this->con, $consulta);
        
        if ($stmt) {
            $this->stmt = $stmt;
        } else {
            echo "ERROU";
        }
        
    }
    
    
  //metodo para executar um SELECT no BD
     public function Insert($login, $senha, $nome, $endereco, $bairro, $uf){
         //definir o SELECT
         $sql = "INSERT INTO Cliente VALUES ('$login', '$senha', '$nome', '$endereco', '$bairro', '$uf')";
     //executar o INSERT atraves do metodo execSQL
         $this->execSQL($sql);

         
     }
    
}
