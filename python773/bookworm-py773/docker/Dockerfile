FROM python:3.11
# FROM ubuntu:22.04
# FROM ubuntu:20.04

WORKDIR /code
RUN whoami

# add zscaler cert..
RUN apt-get clean && \
    rm -rf /var/lib/apt/lists/* && \
    apt-get update && \
    apt-get install -y ca-certificates 
ADD zscaler-rc.crt /usr/local/share/ca-certificates/ 
RUN update-ca-certificates

# Install things..
RUN apt-get install -y  cron  

# ADD  entrypoint.sh /home
# RUN  chmod  +x  /home/entrypoint.sh

