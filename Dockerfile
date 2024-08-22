FROM vulhub/php:7.1-apache

RUN mkdir phar_deserialize
COPY . /phar_deserialize
WORKDIR /phar_deserialize
