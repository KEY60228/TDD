FROM composer:1.10

WORKDIR /app
VOLUME ./app:/app

RUN composer init
RUN composer require --dev phpunit/phpunit

