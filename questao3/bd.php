<?php
/*Arquivo com conexão para testar usando o Mysql
*/
class Conexao
{
    private $host  = "localhost"; 
	private $user  = "root"; 
	private $pass  = "";
	private $banco = "quest3";
    private $con;
    //conectar com o banco de dados
    public function connect(){
        $this->con = @mysql_connect($this->host, $this->user, $this->pass);
        mysql_select_db($this->banco, $this->con);
    }
    //executar a consulta
	public function query($sql){
        $this->connect();
        $query = mysql_query($sql);
        while($row = mysql_fetch_assoc($query)){
            $res[] = $row['name'];
        }
        $this->desconectar();
        return $res;
    }
    //encerrar conexão
    public function desconectar() {
        mysql_close($this->con);
    }
}

