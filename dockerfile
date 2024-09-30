# Use an official PHP runtime as the base image
FROM php:8.2-apache

# Set working directory to the Apache root
WORKDIR /var/www/html

# Copy the project files to the working directory
COPY . /var/www/html

# Install necessary system dependencies for PHP and Composer
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git \
    && docker-php-ext-install mysqli pdo pdo_mysql


# Install necessary PHP extensions, e.g., for MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install dependencies using Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev

# Enable Apache mod_rewrite (if needed)
RUN a2enmod rewrite

#RUN a2enmod php8.2


RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html
# Configure Apache to listen on port 8080
RUN sed -i 's/80/8081/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Update the VirtualHost configuration
RUN echo '<VirtualHost *:8081>\n\
    DocumentRoot /var/www/html\n\
    ErrorLog ${APACHE_LOG_DIR}/error.log\n\
    CustomLog ${APACHE_LOG_DIR}/access.log combined\n\
    <Directory /var/www/html>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
    Alias /cosmos2/consultation_project /var/www/html/consultation_project/includes\n\
    <Directory /var/www/html/consultation_project/includes>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# Expose port 8080 for Render (as your local port 80 is occupied)
EXPOSE 8081

# Use .env file (optional) for environment variables
# Ensure .env is copied and set in your app
#COPY .env /var/www/html/.env

# Start Apache in the foreground
CMD ["apache2-foreground"]
