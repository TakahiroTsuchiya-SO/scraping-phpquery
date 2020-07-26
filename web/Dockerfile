FROM centos:8
RUN dnf -y update
RUN dnf install -y nginx
COPY nginx.conf /etc/nginx/nginx.conf
ENTRYPOINT /usr/sbin/nginx -g 'daemon off;' -c /etc/nginx/nginx.conf