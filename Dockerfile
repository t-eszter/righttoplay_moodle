FROM php:8.3-apache

# Install required PHP extensions
RUN apt-get update && apt-get install -y \
    libpq-dev libzip-dev libxml2-dev libonig-dev \
    libjpeg-dev libpng-dev libxpm-dev libfreetype6-dev \
    libicu-dev zlib1g-dev libexif-dev \
    && docker-php-ext-install \
    pdo_pgsql pgsql zip xml mbstring exif soap gd intl opcache

# Set max_input_vars to 5000+
RUN echo "upload_max_filesize = 64M\npost_max_size = 64M\nmax_input_vars = 5000" >> /usr/local/etc/php/conf.d/moodle.ini

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy Moodle code into web root
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Create and permission moodledata
RUN mkdir -p /var/www/moodledata && \
    chown -R www-data:www-data /var/www/moodledata && \
    chmod 770 /var/www/moodledata

EXPOSE 80

