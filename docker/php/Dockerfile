FROM composer:latest as composer
FROM php:7.3-fpm-alpine

RUN apk add --no-cache --virtual persistent-deps \
        icu-libs \
        pcre-dev \
        shadow \
        tzdata \
        libzip-dev \
        zlib

RUN apk add --no-cache --virtual \
        build-deps \
        $PHPIZE_DEPS \
        icu-dev \
        zlib-dev

RUN docker-php-ext-install \
        zip \
        intl \
        mysqli \
        pdo \
        pdo_mysql


RUN apk del build-deps && \
    rm -rf /var/cache/apk/*

# Add access
RUN usermod -u 1000 www-data

# Init composer
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN mkdir /var/composer
ENV COMPOSER_HOME /var/composer
RUN chown -R www-data /var/composer

WORKDIR /var/www/
