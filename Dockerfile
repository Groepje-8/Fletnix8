FROM php:7.4.6-cli-alpine3.11
EXPOSE 8080
EXPOSE 80
VOLUME /srv/webserver
COPY ./provision.sh /root/provision.sh
RUN /root/provision.sh
WORKDIR /srv/webserver/