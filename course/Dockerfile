FROM php:8.1-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN apt-get update && \
    apt-get install -y \
        git \
        curl \
        libpq-dev \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        zip \
        unzip && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Clear cache
# RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user
    # chown -R $user:$user /var/www

# Set working directory
WORKDIR /var/www

RUN cp env.example .env
RUN composer install --prefer-dist --no-scripts --no-dev --no-autoloader && \
    composer clear-cache


# RUN echo "[www]" >> /usr/local/etc/php-fpm.d/zz-custom.conf && \
#     echo "user = $user" >> /usr/local/etc/php-fpm.d/zz-custom.conf && \
#     echo "group = $user" >> /usr/local/etc/php-fpm.d/zz-custom.conf


USER $user
