https://weblabo.oscasierra.net/redis-centos7-install-yum/

# yum install -y redis


 sudo service redis start


重启redis时报错

ps -ef | grep -i redis
在这里插入图片描述

kill -9 进程号

在重新配置一下

/usr/local/redis/bin/redis-server /usr/local/redis/etc/redis.conf

ps aux | grep redis-server
