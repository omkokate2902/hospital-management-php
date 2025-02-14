# Use the official PHP image with Apache
FROM php:8.1-apache

# Install necessary extensions (optional, add based on needs)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable mod_rewrite for Apache (useful for routing in some PHP applications)
RUN a2enmod rewrite

# Copy your PHP application code to the container
COPY src/ /var/www/html/

# Set proper permissions for the Apache web server
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 for web access
EXPOSE 80

# Start Apache in the foreground (default command for the image)
CMD ["apache2-foreground"]
