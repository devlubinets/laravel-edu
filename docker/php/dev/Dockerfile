FROM php:fpm

RUN apt-get -y update
RUN apt-get -y install git libzip-dev zip libicu-dev libpng-dev libjpeg-dev

RUN docker-php-ext-install intl zip pdo pdo_mysql gd
RUN docker-php-ext-install pdo pdo_mysql

RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN mkdir -p /var/www/log
RUN touch /var/www/log/xdebug.log

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN sudo apt-get install chromium-browser

RUN groupadd -g 1000 ad
RUN useradd -u 1000 -ms /bin/bash -g ad ad

WORKDIR /app
USER ad
