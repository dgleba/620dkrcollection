FROM python:3.11
# FROM ubuntu:22.04
# FROM ubuntu:20.04

WORKDIR /code

RUN whoami

# RUN  mkdir -p /pipcache
# RUN  chown -R "0:33"  /rootzzz
# USER "0:33"

# add zscaler cert..
RUN apt-get clean && \
    rm -rf /var/lib/apt/lists/* && \
    apt-get update && \
    apt-get install -y ca-certificates 
# RUN apt-get install -y ca-certificates;
ADD zscaler-rc.crt /usr/local/share/ca-certificates/ 
RUN update-ca-certificates

# Install things and dependencies for django-auth-ldap..
RUN apt-get install -y  cron  libldap2-dev libsasl2-dev libssl-dev python3-pip
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y  pkg-config python3-dev default-libmysqlclient-dev build-essential

ADD requirements.txt /code/
RUN pip install  -r requirements.txt

RUN  chmod -R g+rws  /code

# ADD  --chmod=0755  entrypoint.sh /code/

ADD  entrypoint.sh /home
RUN  chmod  +x  /home/entrypoint.sh

# use volume in docker-compose..
# COPY . /code/

