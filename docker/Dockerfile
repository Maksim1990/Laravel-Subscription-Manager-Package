FROM php:8.1.0-fpm-buster

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory PHP
WORKDIR /var/www