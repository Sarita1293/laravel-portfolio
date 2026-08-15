# ==========================
# Stage 1: Build Frontend
# ==========================
FROM node:22 AS frontend

WORKDIR /var/www

COPY package*.json ./

RUN npm install

COPY . .

RUN npm run build


# ==========================
# Stage 2: Laravel PHP
# ==========================
FROM php:8.2-fpm

WORKDIR /var/www


RUN apt-get update && apt-get install -y --no-install-recommends \
    unzip \
    zip \
    libzip-dev \
    libxml2-dev \
    libicu-dev \
    libssl-dev \
    && pecl install redis \
    && docker-php-ext-enable redis \
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


# Copy compiled Vite assets
COPY --from=frontend /var/www/public/build ./public/build


RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader \
    && composer clear-cache

CMD ["php-fpm"]