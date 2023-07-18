<?php

$con = new mysqli('localhost', 'root', '', 'bd_tg');


if(!$con){
    die("Não foi possivel conectar ao MySQL " . mysqli_connect_error());
}

?>