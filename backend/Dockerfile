# Use official PHP 8.4.1 image
FROM php:8.4.1-fpm

# Install necessary dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy Laravel project files into container
COPY . .

# Install Laravel dependencies
RUN composer install --no-interaction --prefer-dist

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Start PHP-FPM when the container starts
CMD ["php-fpm"]