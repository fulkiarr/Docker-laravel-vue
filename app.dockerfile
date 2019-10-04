FROM php:7.1.12-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev \
    mysql-client libmagickwand-dev --no-install-recommends curl nano \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install \
    zip xml gd \
    mcrypt pdo_mysql \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    ./configing.sh


