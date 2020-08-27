FROM centos:7
RUN yum -y update
RUN yum install -y php php-fpm
RUN mkdir -p /run/php-fpm
COPY www.conf /etc/php-fpm.d/www.conf

# #nginxユーザーを作成するためにnginxをインストール
RUN rpm -ivh http://nginx.org/packages/centos/7/noarch/RPMS/nginx-release-centos-7-0.el7.ngx.noarch.rpm
RUN yum install -y nginx

# RUN chown nginx:nginx /var/lib/php/session
# RUN groupadd -g 1000 nginx && \
#     useradd -u 1000 -ms /bin/bash -g nginx nginx

# USER nginx
# RUN chmod 777 /var/lib/php/session/