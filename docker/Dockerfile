FROM php:7.4

RUN apt-get update && \
    apt-get --yes install git \
        unzip

COPY --from=composer /usr/bin/composer /usr/bin/composer