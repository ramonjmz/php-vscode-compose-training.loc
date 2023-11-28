# Construir las imágenes de Docker según la configuración en el archivo docker-compose.yml
docker-compose build  

# Iniciar los contenedores en modo detached (en segundo plano)
docker-compose up -d

# Ejecutar un shell interactivo en el contenedor con el ID bd559c868fe4bbc4c379bd955f8037e5e0144558a78287989818aa5a07619647
docker exec -it bd559c868fe4bbc4c379bd955f8037e5e0144558a78287989818aa5a07619647 /bin/sh

# Ejecutar pruebas PHPUnit desde el archivo MiPrueba.php ubicado en ../vendor/bin
../vendor/bin/phpunit MiPrueba.php 

# Detener y eliminar los contenedores definidos en el archivo docker-compose.yml
docker-compose down

# La siguiente línea "xdebu and phpunit" parece tener un error tipográfico o no está claro su propósito en este contexto. 
# Puede ser necesario corregirlo o proporcionar más información para entender su función.
xdebu and phpunit

