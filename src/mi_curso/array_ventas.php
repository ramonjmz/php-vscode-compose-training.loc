
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .info-container {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<?php
$producto = array(
    "titulo" => "Smartphone XYZ",
    "precio" => "$499.99",
    "evaluacion" => "4.5 estrellas",
    "descripcion" => "Este increíble smartphone XYZ cuenta con las últimas funciones y un rendimiento excepcional."
);

$ventas = array(
    array("ciudad" => "Nueva York", "unidades_vendidas" => 50),
    array("ciudad" => "Los Ángeles", "unidades_vendidas" => 30),
    array("ciudad" => "Chicago", "unidades_vendidas" => 20)
);

function mostrarProducto($producto, $ventas) {
    echo '<div class="info-container">';
    echo '<h2>Información del Producto</h2>';
    echo '<p><strong>Título:</strong> ' . $producto['titulo'] . '</p>';
    echo '<p><strong>Precio:</strong> ' . $producto['precio'] . '</p>';
    echo '<p><strong>Evaluación:</strong> ' . $producto['evaluacion'] . '</p>';
    echo '<p><strong>Descripción:</strong> ' . $producto['descripcion'] . '</p>';
    echo '</div>';

    echo '<div class="info-container">';
    echo '<h2>Información de Ventas</h2>';
    foreach ($ventas as $venta) {
        echo '<p><strong>Ciudad:</strong> ' . $venta['ciudad'] . '</p>';
        echo '<p><strong>Unidades Vendidas:</strong> ' . $venta['unidades_vendidas'] . '</p>';
        echo '<hr>';
    }
    echo '</div>';
}

echo '<h1>Producto en Amazon</h1>';

mostrarProducto($producto, $ventas);
?>

</body>
</html>
