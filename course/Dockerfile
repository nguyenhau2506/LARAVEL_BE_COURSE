# Use the specified PHP image
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
        unzip \
        sudo && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Create a non-root user
RUN useradd -m $user -u $uid

# Add the user to the sudo group
RUN usermod -aG sudo $user



# Install PHP extensions
RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd

# Get the latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create the .composer directory and set ownership
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Set the working directory
WORKDIR /var/www

# Change to the non-root user
USER $user
