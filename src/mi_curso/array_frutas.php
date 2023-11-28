<?php

$arbol_manzanas = array("roja", "verde", "amarilla");
$arbol_naranjas = array("naranja", "naranja", "naranja");
$arbol_platanos = array("amarillo", "amarillo", "verde");

$frutas = [
    'manzanas' => $arbol_manzanas,
    'naranjas' => $arbol_naranjas,
    'platanos' => $arbol_platanos
];

// Combina todos los arrays de frutas en uno solo llamado $cesta_frutas
$cesta_frutas = $frutas;

// Elimina las frutas duplicadas en la cesta
foreach ($cesta_frutas as &$colores) {
    $colores = array_unique($colores);
}

// Imprime el contenido de la cesta de frutas en formato amigable
foreach ($cesta_frutas as $fruta => $colores) {
    echo "Fruta: $fruta, Colores: " . implode(", ", $colores) . "\n";
}

?>