FROM centos:8
RUN dnf -y update
RUN dnf install -y php php-fpm
RUN mkdir -p /run/php-fpm
COPY www.conf /etc/php-fpm.d/www.conf