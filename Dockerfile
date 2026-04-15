FROM php:8.2-apache

# Copy project files to Apache directory
COPY . /var/www/html/

# Enable Apache rewrite (optional but good)
RUN a2enmod rewrite

# Set permissions
RUN chown -R www-data:www-data /var/www/html
