<?php

$host = "localhost";
$user = "root";
$password = "root";
$database = "escola";
$port = 3307;

try{
    $conn = mysqli_connect($host, $user, $password, $database, $port);
    echo "Conectado com o banco de dados MySQL";
}

catch(Exception $e){
    echo $e;
}