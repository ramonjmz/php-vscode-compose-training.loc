<?php
$host = "db";
$user = "php_docker";
$password = "password";
$database  = "php_docker";

    try {
        
        $conn = new PDO("mysql:host=$host; dbname=$database", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        die($error_menssage = "Error: " .$e->getMessage());
    }


?>