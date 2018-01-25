<?php
session_start();
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