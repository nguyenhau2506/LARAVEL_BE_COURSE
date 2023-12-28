# Use an official PHP-FPM base image
FROM php:8.1-fpm

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    # Add any necessary packages here, e.g., libpng-dev, libjpeg-dev, etc.

# Install PHP extensions
RUN docker-php-ext-install 

# Copy the application code to the container
COPY . /var/www/html

# Set permissions if needed
# RUN chown -R www-data:www-data /var/www/html

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]
