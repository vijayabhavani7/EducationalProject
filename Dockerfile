FROM php:7.4-apache
#Install git 
RUN yum update \
    &amp;&amp; yum install -y gi
#I also want to have PHP extensions installed for MySQL , docker provides docker-php-ext-install command to install PHP extensions.
RUN docker-php-ext-install pdo pdo_mysql mysqli   
#PHP Composer is the famous package manager, modern PHP environment must have it installed on your machine. 
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=. --filename=composer
RUN mv composer /usr/local/bin/
COPY src/ /var/www/html/
EXPOSE 80

