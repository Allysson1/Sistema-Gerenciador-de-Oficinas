<?php

// $con = new PDO('localhost', 'root', '', 'bd_tg');


// if(!$con){
//     die("Não foi possivel conectar ao MySQL " . mysqli_connect_error());
// }




/* Connect to a MySQL database using driver invocation */
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'bd_tg';

$con = mysqli_connect($host, $user, $password, $database);

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>