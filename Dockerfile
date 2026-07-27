FROM php:8.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y --no-install-recommends \
    unzip \
    zip \
    libzip-dev \
    libxml2-dev \
    libicu-dev \
    && docker-php-ext-install \
    zip \
    pdo \
    pdo_mysql \
    mysqli \
    intl \
    opcache \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY docker/php/php.ini /usr/local/etc/php/conf.d/custom.ini

COPY . .

RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader \
    && composer clear-cache

CMD ["php-fpm"]

