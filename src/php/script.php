<?php

$x = 24;

echo (is_int($x));

$nombre = "Gabriela";
$edad = 24;
$telefono ="12121121";
$str = "99.9";

$frutas  = array("mango","fresa","naranja");

$edades = array("jorge"=>"43","julio"=>"34","juan"=>"49");

foreach ($edades as $key => $value) {
 
    echo "Nombre:  $key, Edad $value\n ";
}

echo "\n";

echo asort($edades);

foreach ($edades as $key => $value) {
 
    echo "Nombre:  $key, Edad $value\n ";
}

echo "Esta es una línea.";
echo "Esta es otra línea.";

$nombre = "Juan";

//$apellido_no_definido = isset($apellido_no_definido) ? $apellido_no_definido : ""; 


$apellido_no_definido = $apellido_no_definido ?? "";

echo "EL NUEVO NOMBRE ES" . $nombre . $apellido_no_definido;


?>