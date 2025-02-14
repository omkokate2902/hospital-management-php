# Use the official PHP image with Apache
FROM php:8.1-apache

# Install necessary PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite (optional, if needed for your app)
RUN a2enmod rewrite

# Copy your PHP app to the container's web directory
COPY ./src /var/www/html/

# Expose the port the app will run on
EXPOSE 80

# Set the entrypoint for the container
CMD ["apache2-foreground"]
