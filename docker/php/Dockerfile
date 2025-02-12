FROM php:8.4.2-fpm

WORKDIR /var/www

RUN rm -rf /var/www/html

RUN apt-get update && apt-get install -y \
    wget \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libzip-dev \
    apt-utils \
    libonig-dev \
    sqlite3 \
    libsqlite3-dev

RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd zip pdo_mysql mbstring exif pdo_sqlite

RUN pecl install redis && docker-php-ext-enable redis


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN groupadd -g 1000 laravel && useradd -u 1000 -ms /bin/bash -g laravel user

RUN chown -R user:laravel /var/www

COPY --chown=user:laravel . /var/www

USER user

EXPOSE 9000

CMD ["php-fpm"]
