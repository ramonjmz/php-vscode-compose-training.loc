<?php 
 
$host = 'db'; // Nombre del servicio MySQL en tu contenedor Docker
$user = 'php_docker'; // Usuario de la base de datos
$password = 'password'; // Contraseña de la base de datos
$database = 'php_docker'; // Nombre de la base de datos

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;


 
try {

    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "CREATE TABLE cities (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        country VARCHAR(255) NOT NULL,
        deleted TINYINT(1) NOT NULL DEFAULT 0
    )";

    $conn->exec($sql);

    echo "Table Cities created successfully";

} catch(PDOException $e){
    echo "ERROR ". $e->getMessage();

}

    $conn = null;

?>