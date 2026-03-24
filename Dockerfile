FROM php:8.2-apache

#Cai dat extension
RUN docker-php-ext-install mysqli pdo pdo_mysql

#Bat mod rewrite
RUN a2enmod rewrite

#Copy soure vao apache
COPY src/ /var/www/html/

#Set quyen
RUN chown -R www-data:www-data /var/www/html
RUN find /var/www/html -type f -exec chmod 644 {} \;
RUN find /var/www/html -type d -exec chmod 755 {} \;
RUN chmod -R 755 /var/www/html/uploads

EXPOSE 80
