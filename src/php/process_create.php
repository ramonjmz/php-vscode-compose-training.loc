<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {
        
        $name = $_POST['name'] ;
        $country = $_POST['country'];

        $stmt = $conn->prepare("INSERT INTO cities (name,country) VALUES (:name,:country) ");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':country', $country);
        $stmt->execute();


        header("Location: index.php");
        exit();

    } catch (PDOException $e) {
         $error_menssage = "Error: ". $e->getMessage();
    }

     
}

?>