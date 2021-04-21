FROM php:7.4-apache

COPY . /var/www/html

RUN docker-php-ext-install mysqli

RUN chown -R www-data:www-data /var/www

EXPOSE 80 