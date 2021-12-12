FROM php:8.1.0-apache

EXPOSE 80

COPY src/ /var/www/html
