FROM nginx:1.17-alpine
ADD ./docker/production/nginx/default.conf /etc/nginx/conf.d/default.conf
RUN mkdir -p /var/www/html/public
ADD ./src/public/ /var/www/html/public
