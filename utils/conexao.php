<?php
/* Connect to a MySQL database using driver invocation */
$host = 'bs8n7oyr44o8g5hsme3e-mysql.services.clever-cloud.com';
$user = 'um9rioezglxmkwrn';
$password = 'ui15ohmceMjd1tbT8bqn';
$database = 'bs8n7oyr44o8g5hsme3e';

$con = mysqli_connect($host, $user, $password, $database);

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>