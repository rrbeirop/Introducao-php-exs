<?php 
$host = "localhost";
    $port = "3306";
    $dbname = "filmesdb";
    $user = "root";
    $password = "";

    $connUrl = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($connUrl , $user, $password);

    