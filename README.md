# Teste de Conhecimentos – Analista Desenvolvedor

## Questão 1
* Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.

### Solução: 

```
<?php
for($i=1; $i <= 100; $i++){
    if(($i % 3) == 0 && ($i % 5) == 0){
        echo "FizzBuzz";
    } elseif(($i % 3) == 0){
        echo "Fizz";
    } elseif(($i % 5) == 0){
        echo "Buzz";
    } else{
        echo $i;
    }
    echo "<br>";
}

```

### Instalação
* Para executar a solução acesse http://SEU_DOMINIO/TESTE_UINES/questao1/questao1.php

## Questão 2
* Refatore o código abaixo, fazendo as alterações que julgar necessário.
```
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
} elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
}
```

### Solução: 
```
<?php
//Função para redirecionar para o google.com
function Redirecionar()
{
    //Direcionando para google.com
    header("Location: http://www.google.com");
}
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    Redirecionar();
} elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
    Redirecionar();
}
```
### Instalação
* Para executar a solução acesse http://SEU_DOMINIO/teste_uines/questao2/questao2.php

## Questão 3
* Refatore o código abaixo, fazendo as alterações que julgar necessário.
```
<?php
class MyUserClass {
    public function getUserList() {
        $dbconn = new DatabaseConnection('localhost','user','password');
        $results = $dbconn->query('select name from user');
        sort($results);
        return $results;
    }
}
```

### Solução: 
* Nesse script getListaUsuario, criei uma classe no arquivo bd.php onde o mesmo instancia a conexão com o banco de dados.
* No código passado no exercício, chamo classe de conexão para executar a consulta sql


### Instalação
* Criar um banco de dados e adicionar a tabela com o comando:
```
CREATE TABLE user  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NULL,
  PRIMARY KEY (`id`)
);
```
* Alterar as variaveis de conexão com banco no arquivo questao3/bd.php
* Para executar a solução acesse http://SEU_DOMINIO/teste_uines/questao3/questao3.php

## Questão 4
* Desenvolva uma API Rest para um sistema gerenciador de tarefas (inclusão/alteração/exclusão). As tarefas consistem em título e descrição, ordenadas por prioridade.

Desenvolver utilizando:
* Linguagem PHP (ou framework CakePHP);
* Banco de dados MySQL;

Diferenciais:
* Criação de interface para visualização da lista de tarefas; (Implementado)
* Interface com drag and drop;
* Interface responsiva (desktop e mobile); (Implementado)

### Solução: 
- Operações do API Index, View, Add, Edit e Delete
- Desenvolvido em CakePHP 3.5

### Requisitos
* HTTP Server. Por exemplo: Apache. De preferência com mod_rewrite ativo, mas não é obrigatório.
* PHP 5.6.0 ou superior.
* extensão mbstring
* extensão intl
* MySQL

### Instalação
* Criar banco de dados mysql e adicionar a tabela tarefas:
* Criar um banco de dados e adicionar a tabela com o comando:
```
CREATE TABLE `quest4`.`Untitled`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NULL,
  `descricao` text NULL,
  `prioridade` int(11) NULL,
  PRIMARY KEY (`id`)
);
```
* Colocar a pasta "questao4" no servidor
* Reconfigurar os dados de acesso a banco no arquivo "questao4/config/app.php" adequando "host", "username" e "password" apartir da linha 220;
* Se precisar executar o comando para instalar os componentes do composer. 
```
composer install
```