# Usa la imagen oficial de PHP con la versión que necesitas
FROM php:8.1-apache

# Enable rewrite mode
RUN a2enmod rewrite

# Install necessary packages
RUN apt-get update && \
    apt-get install \
    libzip-dev \
    wget \
    git \
    unzip \
    -y --no-install-recommends

# Install PHP Extensions
RUN docker-php-ext-install zip pdo_mysql
# Copia los archivos de la aplicación al contenedor
RUN pecl install -o -f xdebug-3.1.5 \
    && docker-php-ext-enable xdebug
# Configura el directorio de trabajo

# Copy php.ini
COPY ./php.ini /usr/local/etc/php/

ENV XDEBUG_MODE=on

COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# RUN set -eux; \
#     install-php-extensions xdebug

# Change the current working directory
WORKDIR /var/www/html

# Expone el puerto 80 para que pueda accederse desde fuera del contenedor
EXPOSE 80

# Inicia el servidor Apache al ejecutar el contenedor
CMD ["apache2-foreground"]
