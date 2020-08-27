FROM centos:7
RUN yum -y update
# COPY nginx.repo /etc/yum.repos.d/nginx.repo
RUN rpm -ivh http://nginx.org/packages/centos/7/noarch/RPMS/nginx-release-centos-7-0.el7.ngx.noarch.rpm
RUN yum install -y nginx
COPY nginx.conf /etc/nginx/nginx.conf

ENTRYPOINT /usr/sbin/nginx -g 'daemon off;' -c /etc/nginx/nginx.conf