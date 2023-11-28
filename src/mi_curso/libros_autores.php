<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
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
$libros = array(
    "libro1" => array("titulo" => "Harry Potter y la piedra filosofal", "autor" => "J.K. Rowling", "anio" => 1997),
    "libro2" => array("titulo" => "Cien años de soledad", "autor" => "Gabriel García Márquez", "anio" => 1967),
    "libro3" => array("titulo" => "1984", "autor" => "George Orwell", "anio" => 1949)
);

$autores = array(
    "autor1" => array("nombre" => "J.K. Rowling", "pais" => "Reino Unido", "anio_nacimiento" => 1965),
    "autor2" => array("nombre" => "Gabriel García Márquez", "pais" => "Colombia", "anio_nacimiento" => 1927),
    "autor3" => array("nombre" => "George Orwell", "pais" => "Reino Unido", "anio_nacimiento" => 1903)
);

function mostrarLibro($libro) {
    echo '<div class="info-container">';
    echo '<h2>Información del Libro</h2>';
    echo '<p><strong>Título:</strong> ' . $libro['titulo'] . '</p>';
    echo '<p><strong>Autor:</strong> ' . $libro['autor'] . '</p>';
    echo '<p><strong>Año de Publicación:</strong> ' . $libro['anio'] . '</p>';
    echo '</div>';
}

function mostrarAutor($autor) {
    echo '<div class="info-container">';
    echo '<h2>Información del Autor</h2>';
    echo '<p><strong>Nombre:</strong> ' . $autor['nombre'] . '</p>';
    echo '<p><strong>País:</strong> ' . $autor['pais'] . '</p>';
    echo '<p><strong>Año de Nacimiento:</strong> ' . $autor['anio_nacimiento'] . '</p>';
    echo '</div>';
}

echo '<h1>Biblioteca</h1>';

mostrarLibro($libros['libro1']);
mostrarAutor($autores['autor1']);
?>

</body>
</html>
