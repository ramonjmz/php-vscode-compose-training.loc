<?php

echo xdebug_info();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    echo "¡Bienvenido, $nombre! Tu correo electrónico es: $correo";
}
?>