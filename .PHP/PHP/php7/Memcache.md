# $memcache = new Memcache;

https://www.php.net/manual/ja/memcache.examples-overview.php

memcached 查看所有key

//通过telnet链接进入memcache命令行管理界面
telnet 127.0.0.1 11211
//列举出所有keys
stats items
//通过stats items 的返回信息中的items id 获取key
//例如 itemid 为 7 第二个参数为列出的长度 0 为列出当前id对应的 key 名
stats cachedump 7 0
//通过如上获取 key 的值
get key //上一步得到的key名
