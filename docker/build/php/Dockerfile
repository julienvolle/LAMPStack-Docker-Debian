# PHP Repository
FROM php:fpm

# Update
RUN apt-get -y update; \
    apt-get -y upgrade;

# Config
COPY ./php.ini /usr/local/etc/php/conf.d/php-custom.ini

# Install 
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql
RUN apt-get install -y zlib1g-dev
RUN docker-php-ext-install zip
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
