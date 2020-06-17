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


# redis操作五种数据的命令说明

## redis-cli
[root@dbserver 10:28 ~ ]$ redis-cli

127.0.0.1:6379> help
クライアントの認証

クライアント側で認証をパススするには、AUTHコマンドを使用する。

$ redis-cli
127.0.0.1:6379> keys *
(error) NOAUTH Authentication required.
127.0.0.1:6376> AUTH パスワード
OK
127.0.0.1:6379> keys *
1) "towers"
127.0.0.1:6379>

https://blog.csdn.net/BanketBoy/article/details/86590575?utm_medium=distribute.pc_relevant_t0.none-task-blog-BlogCommendFromMachineLearnPai2-1.nonecase&depth_1-utm_source=distribute.pc_relevant_t0.none-task-blog-BlogCommendFromMachineLearnPai2-1.nonecase

https://blog.csdn.net/q649381130/article/details/79920444
取值

表达式

get key

另外可以用setex设置数据的有效期，表达式为

setex key [time] value
以下命令行表示有效时间为10秒

127.0.0.1:6379> setex name 10 lili
OK

https://engineers.weddingpark.co.jp/?p=503
