<?php

$host = "localhost"; //gateway
$user = "root";
$password = "";
$dbname = "escalante"; //database name
$dsn = "mysql:host={$host};dbname={$dbname}";

$pdo = new PDO($dsn, $user, $password);
$pdo->exec("SET time_zone = '+08:00';");

?>