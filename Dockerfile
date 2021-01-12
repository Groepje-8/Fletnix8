FROM php:7.4.6-cli-alpine3.11
VOLUME /srv/webserver
COPY ./provision.sh /root/provision.sh
RUN /root/provision.sh
WORKDIR /srv/webserver/

COPY ./Database/CREATE_NETFLIX.sql .
COPY ./Database/INSERT_FLETNIX.sql .
ENV ACCEPT_EULA=Y
ENV sa_password=##$wo0RD!
CMD sqlcmd -i CREATE_NETFLIX.sql INSERT_FLETNIX.sql
