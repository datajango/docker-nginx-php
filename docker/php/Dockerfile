FROM php:7-fpm

RUN docker-php-ext-install mysqli pdo pdo_mysql 

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
#RUN docker-php-ext-enable mysqli

COPY ./php.ini /usr/local/etc/php/
