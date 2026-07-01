<?php

$server   = "localhost";
$user     = "root";
$password = "root"; 
$database = "escola";
$port     = 3307;  

$conn = mysqli_connect($server, $user, $password, $database, $port);

if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}

?>