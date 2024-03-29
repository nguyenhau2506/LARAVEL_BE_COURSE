# Arguments defined in docker-compose.yml
FROM php:8.1-fpm
ARG user
ARG uid

COPY .env.example /var/www/.env
COPY composer.lock composer.json /var/www/


# Install system dependencies
RUN apt-get update && apt-get install -y \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \ 
    libjpeg-dev \
    zlib1g-dev \
    libzip-dev \
    libfreetype6-dev \
    unzip \
    software-properties-common \
    libpq-dev 

# Install PHP extensions 
RUN docker-php-ext-install zip pdo_pgsql mbstring exif pcntl bcmath

RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install -j "$(nproc)" gd 

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Add username to www-data user group
RUN usermod -a -G www-data www-data

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -ms /bin/bash -G www-data -u $uid -d /home/$user $user

RUN mkdir -p /home/$user/.composer
RUN mkdir -p vendor

# Set laravel directory permissions
RUN find /var/www -type f -exec chmod 644 {} \; \
    && find /var/www -type d -exec chmod 755 {} \; \
    && chown -R ${user}:www-data /var/www


# Set working directory
WORKDIR /var/www



ADD --chown=$user:www-data . /var/www

RUN chgrp -R www-data storage bootstrap/cache
RUN chmod -R ug+rwx storage bootstrap/cache

USER $user