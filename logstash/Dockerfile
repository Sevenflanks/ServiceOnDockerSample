# https://github.com/elastic/logstash-docker
# https://www.elastic.co/guide/en/logstash/current/_pulling_the_image.html
FROM docker.elastic.co/logstash/logstash:6.5.4

# Add your logstash plugins setup here
# Example: RUN logstash-plugin install logstash-filter-json

COPY config/logstash.yml /usr/share/logstash/config/logstash.yml
COPY pipeline /usr/share/logstash/pipeline

# RUN logstash-plugin install x-pack
