FROM php:7.4

RUN apt-get update && \
    apt-get --yes install git unzip libpq-dev && \
    docker-php-ext-install pdo_pgsql

COPY --from=composer /usr/bin/composer /usr/bin/composer