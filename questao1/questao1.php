<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <title>Hello, world!</title>
    <style>
    body: {
        margin: 5px;
    }
    </style>
  </head>
  <body>
    <h3>1. Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.</h3>
  
    <h4>Solução</h4>
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
    ?>
      
  </body>
</html>

