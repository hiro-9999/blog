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
https://redis.io/commands/type
if value is of type string -> GET <key>
if value is of type hash -> HGETALL <key>
if value is of type lists -> lrange <key> <start> <end>
if value is of type sets -> smembers <key>
if value is of type sorted sets -> ZRANGEBYSCORE <key> <min> <max>
Use the TYPE command to check the type of value a key is mapping to:

## type <key>

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
## "quit" to exit
To get help about Redis commands type:

      "help @<group>" to get a list of commands in <group>

      "help <command>" for help on <command>

      "help <tab>" to get a list of possible help topics

      "quit" to exit
————————————————
版权声明：本文为CSDN博主「AndyZhang86」的原创文章，遵循CC 4.0 BY-SA版权协议，转载请附上原文出处链接及本声明。
原文链接：https://blog.csdn.net/BanketBoy/java/article/details/86590575

https://blog.csdn.net/BanketBoy/article/details/86590575?utm_medium=distribute.pc_relevant_t0.none-task-blog-BlogCommendFromMachineLearnPai2-1.nonecase&depth_1-utm_source=distribute.pc_relevant_t0.none-task-blog-BlogCommendFromMachineLearnPai2-1.nonecase

https://blog.csdn.net/q649381130/article/details/79920444
取值
```ruby
127.0.0.1:6380> scan 327680 match k1* count 10

执行下列语句
redis-cli --raw -h your.host -a your.password -p 6379 --scan --pattern “lasted:labelIds:*” >> temp.log

–raw 表示强行输出
-h 表示你的host
-a 你的redis密码
-p 你的redis端口号
–scan安全浏览输出
–pattern你要查询的key值，可以正则
temp.log 你要输出到的文件名，默认路径为当前路径

```

表达式

get key

另外可以用setex设置数据的有效期，表达式为

setex key [time] value
以下命令行表示有效时间为10秒

127.0.0.1:6379> setex name 10 lili
OK

https://engineers.weddingpark.co.jp/?p=503
