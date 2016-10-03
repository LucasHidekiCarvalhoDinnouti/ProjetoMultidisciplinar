<?php

class Conexao {
    //atributos da classe
    public $con;
    protected $stmt;
    
    //método construtor
    public function __construct($host,$database,$user,$senha) {
        $connectInfo = array("Database"=>$database,
                             "PWD"=>$senha,
                             "UID"=>$user,);
        $this->con = sqlsrv_connect($host,$connectInfo);
        if ($this->con === false) {
            //encerrar procedimento
            die(print_r(sqlsrv_errors(),true));
        }
    }
    
    public function __destruct() {
        sqlsrv_close($this->con);
    }   
    
    //método para executar a consulta no banco de dados
    public function execSQL($consulta) {
        if ($consulta === '') {
            return false;
        }
        
        $stmt = sqlsrv_query($this->con,$consulta);
        
        if ($stmt) {
            $this->stmt = $stmt;
        } else {
            $this-> sql_error($consulta);
        }
    }
    
    //metodo para executar select
    public function select($login) {
        //definir o SELECT
        $sql = "SELECT * from Cliente
               where loginCliente='$login'";
        
 
        //executar o SELECT através do método execSQL
        $this->execSQL($sql);
        
        $dados = '';
        while ($linha = sqlsrv_fetch_array($this->stmt, SQLSRV_FETCH_NUMERIC)) {
            $dados[] = $linha;
        }
        return $dados;
    }
    

}

?>