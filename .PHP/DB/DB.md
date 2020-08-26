# percona-toolkit
https://qiita.com/ichizin/items/d2e2a2d0f5b2aabab0ec

https://www.percona.com/doc/percona-toolkit/2.1/pt-slave-delay.html

$brew install percona-toolkit
# 遅延を発生させる方法

仕組みとしてはスレーブの開始と停止を繰り返すことで遅延を発生させているらしい

 // pt-slave-delay [OPTION...] SLAVE-HOST [MASTER-HOST]
$pt-slave-delay --delay 30s --interval 10s -u root 127.0.0.1 --port 13316
2016-09-21T16:49:22 slave running 0 seconds behind
2016-09-21T16:49:22 STOP SLAVE until 2016-09-21T16:49:52 at master position mysql-bin.000005/126000
2016-09-21T16:49:32 slave stopped at master position mysql-bin.000005/126000
2016-09-21T16:49:42 slave stopped at master position mysql-bin.000005/126000

http://cflat-inc.hatenablog.com/entry/20130818/1376828101

https://www.s-style.co.jp/products/percona/toolkit/pt-slave-delay
# 以下のSQL文でpt-slave-delayコマンドと同様の機能が実現できます
mysql> STOP SLAVE;
mysql> CHANGE MASTER TO MASTER_DELAY=60;
mysql> START SLAVE;


https://gihyo.jp/dev/serial/01/mysql-road-construction-news/0022?page=2
＃ スレーブ側です。MySQLにログインし「show slave status \G」コマンドで確認します。
Seconds_Behind_Masterが0でなければその分の秒数だけ遅延しています。
「Seconds_Behind_Master」の値が、「現在 SQL_THREAD が実行しているクエリの実行時刻」と「Slave サーバが保持しているリレーログの時刻」の差となり、遅延を表しています。
https://blog.ybbo.net/2015/05/23/things-to-confirm-in-case-of-mysql-replication-delaying/


https://410gone.click/blog/mysql/
# 遅延レプリケーションの設定
遅延させたいスレーブサーバで、CHANGE MASTERコマンドを実行して遅延レプリケーションを設定します。
‘master_delay‘で、遅延させたい秒数を指定します。
 
例）20秒の遅延を発生させる場合

stop slave;
change master to master_delay=20;
start slave;

# 遅延状態を確認する
SQL_Delayに設定した時間が表示されるか確認します。
スレーブステータスの’SQL_Delay‘を確認します。
この値が、遅延設定した値になっていれば、正常に遅延設定が反映されています。

show slave status\G
:
SQL_Delay: 20
:
 

# 遅延レプリケーションを解除する
遅延レプリケーションを解除するときは、遅延時間に0を設定します。

stop slave;
change master to master_delay=0;
start slave;
