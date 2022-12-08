FROM jenkins/jenkins:2.346.1-lts-centos7

USER root

RUN yum install -y yum-utils &&\
    yum-config-manager --add-repo https://download.docker.com/linux/centos/docker-ce.repo &&\
    yum install -y docker-ce-cli

RUN yum remove -y git* &&\
    yum install -y https://packages.endpointdev.com/rhel/7/os/x86_64/endpoint-repo.x86_64.rpm &&\
    yum install -y git

COPY executors.groovy /usr/share/jenkins/ref/init.groovy.d/executors.groovy
