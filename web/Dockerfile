FROM centos:7
RUN yum -y update
COPY nginx.repo /etc/yum.repos.d/nginx.repo
RUN yum install -y nginx
COPY nginx.conf /etc/nginx/nginx.conf

ENTRYPOINT /usr/sbin/nginx -g 'daemon off;' -c /etc/nginx/nginx.conf