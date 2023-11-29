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

RUN curl https://getcomposer.org/installer -o /tmp/composer-setup.php \
    && curl https://composer.github.io/installer.sig -o /tmp/composer-setup.sig \
    && php -r "if (hash_file('SHA384', '/tmp/composer-setup.php') !== trim(file_get_contents('/tmp/composer-setup.sig'))) { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php /tmp/composer-setup.php --no-ansi --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('/tmp/composer-setup.php');" \
    && php -r "unlink('/tmp/composer-setup.sig');"

# Install PHP Extensions
RUN docker-php-ext-install zip pdo_mysql

RUN docker-php-ext-install pdo pdo_mysql

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli && apachectl restart

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

RUN composer global require --dev phpunit/phpunit


# Change the current working directory
WORKDIR /var/www/html

# Expone el puerto 80 para que pueda accederse desde fuera del contenedor
EXPOSE 80

# Inicia el servidor Apache al ejecutar el contenedor
CMD ["apache2-foreground"]
