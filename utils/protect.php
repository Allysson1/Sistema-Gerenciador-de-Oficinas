<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['idUsuario'])){
    die("Você não pode acessar está página  <br> 
    <p><a href=\"index.php\">Entrar</a></p>
    ");
}

?>