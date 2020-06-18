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
## key hoge*
https://blog.eiel.info/blog/2014/08/26/remember-redis/
```
zset だった場合
キーhoge の値の種類が zset だった場合は zrange を使う。 zset 順序のある集合

> zrange hoge 0 -1

hash だった場合
キーhoge の値の種類が hash だった場合は hgetall を使う。 ただし、field と value が交互に表示されてよみやすくはない。

> hgetall hoge
string だった場合
キーとキーの種類が別れば値を見ることができる。

キーhoge の値の種類が string だったら get を使う

> get hoge
ちなみに設定する場合は set。hubot は json が string で保存してあった。

list だった場合
キーhoge の値の種類が list だった lrange を使う。

> lrange hoge 0 -1
先頭 から 最後から1番目までの値を返せという感じになる。 必要な範囲を指定したい場合は微調整するとよい。

set だった場合
キーhoge の値の種類が set だった場合は smembers を使う。

> smembers hoge
```
https://redis.io/commands/type
```rub
コマンド	説明
keys *	redisに登録されているキーの一覧を取得する key のパターンを指定する
type [key]	value の種類を返す。
get [key]	type が string だった場合の値をみる方法
lrange [key] 0 -1	type が list だった場合の値をみる方法
smembers [key]	type が set だった場合の値をみる方法
zrange [key] 0 -1	type が zsetだった場合の値をみる方法
hgetall [key]	type が hash だった場合の値をみる方法
hkeys [key]	type が hash だった場合に field の一覧をみる方法
hvals [key]	type が hash だった場合に value の一覧をみる方法
monitor	redisサーバが受けとったコマンドを表示する
```
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
