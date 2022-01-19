FROM php:7.4.3-fpm-alpine3.11

#ENV RUN_DEPS \
#    zlib \
#    libzip \
#    libpng \
#    libjpeg-turbo \
#    postgresql-libs
#
#ENV BUILD_DEPS \
#    zlib-dev \
#    libzip-dev \
#    libpng-dev \
#    libjpeg-turbo-dev \
#    postgresql-dev
#
#ENV PHP_EXTENSIONS \
#    opcache \
#    zip \
#    gd \
#    bcmath \
#    pgsql \
#    pdo_pgsql


# Copy the application code
COPY . /app

VOLUME ["/app"]
