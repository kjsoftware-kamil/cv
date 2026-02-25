# syntax=docker/dockerfile:1

############################
# 1️⃣ Dependencies stage
############################
FROM php:8.4-cli AS deps


WORKDIR /app

# Install system dependencies + PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libzip-dev \
    && docker-php-ext-install \
    intl \
    zip \
    pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy project files

# Install dependencies

# Copy project files
COPY . .
# Copy .env file
COPY .env .env
# Install dependencies
RUN composer install --no-dev --no-interaction --optimize-autoloader

############################
# 2️⃣ Final runtime stage
############################
FROM php:8.4-apache AS final

# Install required PHP extensions
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-install \
    intl \
    pdo_mysql \
    zip \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache rewrite
RUN a2enmod rewrite

# Set production php.ini
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

WORKDIR /var/www/html

# Change Apache document root to Laravel public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf


# Copy vendor from deps stage
COPY --from=deps /app/vendor ./vendor

# Copy application files
COPY . .

# Clear cached config/packages and re-discover for --no-dev
RUN rm -f bootstrap/cache/config.php \
    bootstrap/cache/packages.php \
    bootstrap/cache/services.php \
    && php artisan package:discover --ansi

# Fix permissions for Laravel
RUN chown -R www-data:www-data storage bootstrap/cache
# Create SQLite database and set permissions
RUN mkdir -p database && \
    touch database/database.sqlite && \
    chown -R www-data:www-data database && \
    chmod -R 775 database

# Run migrations
RUN php artisan migrate --force

USER www-data
