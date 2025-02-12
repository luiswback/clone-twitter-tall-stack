#FROM redis:7.2.4
#
#COPY ./redis.conf /usr/local/etc/redis/redis.conf
#
#CMD [ "redis-server", "/usr/local/etc/redis/redis.conf" ]
##CMD [ "redis-server", "restart" ]
#
#EXPOSE 6380

FROM redis:7.2.4
COPY redis.conf /usr/local/etc/redis/redis.conf
CMD [ "redis-server", "/usr/local/etc/redis/redis.conf" ]

EXPOSE 6380
