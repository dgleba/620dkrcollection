FROM php:5-alpine

RUN apk --update add php5-sqlite3

#COPY ./adminer-sqlite /var/www/html
COPY . /var/www/html


WORKDIR /var/www/html

CMD php -S 0.0.0.0:80
