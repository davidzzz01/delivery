<?php

$host = "localhost";
$username = "root";
$password = "root";
$database = "delivery";


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}


?>