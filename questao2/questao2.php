<?php
session_start();

unset($_SESSION['loggedin']);
if(isset($_POST['loggedin'])){
    $_SESSION['loggedin'] = true;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h3>2. Refatore o código abaixo, fazendo as alterações que julgar necessário.</h3>
    <h4>Solução</h4>
    <form method="post" >
        <input type="submit" name="loggedin" value="Testar">
    </form>
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
    ?>                  
  </body>
</html>

