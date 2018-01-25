<?php
//chamar arquivo com a classe da conexão
require "bd.php";
class MyUserClass
{
    public function getUserList(){
        $dbconn = new Conexao();  //Instanciando conexao com o banco de dados 
        $results = $dbconn->query('select name from user');   
        sort($results);    
        return $results;
    }    
}  

//Testar script
$user = new MyUserClass;
print_r($user->getUserList());
