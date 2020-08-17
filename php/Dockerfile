FROM centos:7
RUN yum -y update
RUN yum install -y php php-fpm
RUN mkdir -p /run/php-fpm
COPY www.conf /etc/php-fpm.d/www.conf
RUN chown www-data:www-data /var/lib/php/session