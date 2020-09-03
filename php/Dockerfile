FROM centos:7
RUN yum -y update
RUN yum install -y php php-fpm
RUN mkdir -p /run/php-fpm

RUN yum install -y php-mbstring
COPY php.ini /usr/local/etc/php/
COPY www.conf /etc/php-fpm.d/www.conf

RUN useradd nginx