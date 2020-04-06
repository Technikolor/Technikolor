# Multi-stage build. More info: https://docs.docker.com/develop/develop-images/multistage-build

##### Stage 0: Prepare #####
FROM php:7.4-fpm as prepare

ENV APP_DIR=/php/src/technikolor/app
ENV PHP_FPM_DIR=/usr/local/etc/php-fpm.d

RUN apt update && apt install -y \
    git \
    libpq5 \
    libpq-dev \
    libzip-dev

RUN pecl install zip \
    && docker-php-ext-enable zip \
    && docker-php-ext-install pdo pdo_pgsql

# Env PHP_INI_DIR comes from php:7.4-fpm image. Copy php.ini to config dir
COPY .docker/app/php.ini $PHP_INI_DIR/conf.d/
# Copy php-fpm pool config
COPY .docker/app/pool.conf $PHP_FPM_DIR

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add group and user to avoid read/write permission issues
ENV USER_ID=1000
ENV GROUP_ID=1000

RUN groupadd --gid $GROUP_ID app \
    && useradd --create-home \
    --home-dir /home/app \
    --shell /bin/bash \
    --uid $USER_ID \
    --gid $GROUP_ID \
    app

WORKDIR $APP_DIR

COPY . .

# Using USER directive before WORKDIR would not create app directory belonging to user so we must change owner here
RUN chown -R $USER_ID:$GROUP_ID $APP_DIR

USER app

EXPOSE 9001

##### Stage 1: Prepare -> Dev #####
# Keep in mind, prod commands were not executed in dev image
FROM prepare as dev

USER root
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

USER app
# hirak/prestissimo plugin speeds up composer install a lot so let's add it
RUN composer global require hirak/prestissimo

# Feel free to add Production Stage here
# Example: https://github.com/initx/php-docker-skeleton/blob/master/.docker/app/Dockerfile
