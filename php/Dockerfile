FROM centos:7
RUN yum -y update
RUN yum install -y php php-fpm
RUN mkdir -p /run/php-fpm
COPY www.conf /etc/php-fpm.d/www.conf
RUN chmod 777 /var/lib/php/session/

#nginxユーザーを作成するためにnginxをインストール
RUN rpm -ivh http://nginx.org/packages/centos/7/noarch/RPMS/nginx-release-centos-7-0.el7.ngx.noarch.rpm
RUN yum install -y nginx
# RUN chown nginx:nginx /var/lib/php/session