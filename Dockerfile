FROM php:8.1-apache
COPY src/index.php /var/www/html/index.php
EXPOSE 80
