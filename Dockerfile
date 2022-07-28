# FROM php:7.4.30-cli
# FROM composer:2.3.7

# #ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# #RUN chmod +x /usr/local/bin/install-php-extensions && \
#     #install-php-extensions pdo_mysql intl

# #RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
#    #mv composer.phar /usr/local/bin/composer


# FROM bitnami/symfony:5.4.10

# COPY . /app
# #COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# WORKDIR /app
# RUN composer update 
# RUN composer require fakerphp/faker
# RUN composer require symfony/web-server-bundle ^4.4
# RUN composer install 

# #CMD ["apache2-foreground"]
# #ENTRYPOINT [ "bash","docker.sh" ]
# EXPOSE 8000 
# CMD php bin/console server:start

FROM php:7.4-apache
#FROM php:7.4-fpm



# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.4-mysql php7.4-intl php7.4-mbstring php7.4-sqlite3\
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install dependencies
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions mbstring pdo_mysql intl zip exif pcntl gd memcached




# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    unzip \
    git \
    curl \
    lua-zlib-dev \
    libmemcached-dev 

# Install supervisor
RUN apt-get install -y supervisor

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

COPY . /var/www/html
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

#RUN composer require symfony/web-server-bundle ^4.4
RUN composer install 
#RUN HTTPDUSER=$(ps axo user,comm | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1) 
#RUN setfacl -dR -m u:"$HTTPDUSER":rwX -m u:$(whoami):rwX \var 
#RUN setfacl -R -m u:"$HTTPDUSER":rwX -m u:$(whoami):rwX \var
RUN chown -R www-data:www-data /var/www/html/var/cache && chown -R www-data:www-data /var/www/html/var/log



#RUN php bin/console make:migration 
#RUN php bin/console doctrine:migrations:migrate -i-no-nteraction --allow-no-migration 
  
#ENTRYPOINT [ "sh" , "-c" ," php bin/console make:migration && php bin/console doctrine:migrations:migrate -i-no-nteraction --allow-no-migration  " ]
#
#ENTRYPOINT [ "sh" , "-c" ," php bin/console server:run 0.0.0.0:8000 " ]

EXPOSE 80

    