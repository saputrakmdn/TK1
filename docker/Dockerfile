FROM php:8.1-fpm as base

RUN apt-get update -y \
    && apt-get install -y nginx \
    openssl \
    bash \
    nodejs \
    npm \
    curl \
    git \
    libxml2-dev \
    libzip-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    zip \
    apt-transport-https \
    ca-certificates \
    curl \
    software-properties-common\
    && docker-php-ext-install \
    bcmath \
    zip \
    xml \
    gd \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && curl -fsSL https://download.docker.com/linux/ubuntu/gpg | apt-key add - \
    && docker-php-ext-install pdo_mysql

ENV COMPOSER_HOME ./.composer
# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
