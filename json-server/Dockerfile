FROM node:latest
MAINTAINER Antony Leotta <tony@leotta.com>

RUN npm install -g json-server

WORKDIR /var/json-server
#VOLUME /var/json-server

#ADD run.sh ./run.sh
#ENTRYPOINT ["bash", "./run.sh"]
#CMD []

#EXPOSE 8081
CMD [ "json-server", "/var/json-server/db.json", "-p 8081" ]