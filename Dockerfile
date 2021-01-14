FROM php:7.3-apache

#install php composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#install git
RUN apt-get update && apt-get upgrade -y && apt-get install -y git
RUN git config --global user.email "eng.mohamed.dahab@gmail.com" && git config --global user.name "Mohamed Ragab Dahab"
