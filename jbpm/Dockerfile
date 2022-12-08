FROM jboss/jbpm-server-full:7.59.0.Final

# /opt/jboss/wildfly/bin/.niogit 是用來存放jbpm內專案的git-repo
# 為了持久化儲存需求, 需要mount此資料夾, 但此資料夾一開始並未建立
# 然而此image(jboss/jbpm-server-full:latest) 會將user切換為jboss
# 而mount建立此資料夾時, owner為user, 導致jboss無法訪問此資料夾, 造成啟動異常
# 因此才需要這個Dockerfile預先處理這件事情

USER root
RUN mkdir /opt/jboss/wildfly/bin/.niogit
RUN chown jboss:jboss /opt/jboss/wildfly/bin/.niogit
USER jboss

# ref# https://hub.docker.com/r/jboss/jbpm-server-full
# ref# https://github.com/jboss-dockerfiles/jbpm/blob/master/base/Dockerfile
