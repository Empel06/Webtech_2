FROM php:7.4-fpm
RUN apt-get update && apt-get install -y \
		libfreetype6-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
                libpq-dev

RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install -j$(nproc) gd pgsql
# Install the PostgreSQL PDO extension
RUN docker-php-ext-install pdo pdo_pgsql

# Copy your PHP and HTML files to the appropriate directory in the container
COPY html/ /var/www/html/

# Set the working directory
WORKDIR /var/www/html
