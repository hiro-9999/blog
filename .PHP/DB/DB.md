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
