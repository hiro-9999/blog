# OPTIMIZE TABLE 
https://til.toshimaru.net/2021-09-10

# MySQL数据库删除大量数据的方式
https://blog.csdn.net/weixin_43730203/article/details/125723674

https://qiita.com/ynii/items/7ae0a33c59e235ff683c

# パーティションの作成
https://github.com/hiro-9999/blog/edit/master/.aws/DevOps/Mysql/OPTIMIZE%20TABLE.md


https://minory.org/mysql-innodb-delete.html
### MyISAMの場合は削除した分のデータ領域を開放するのに対し、InnoDBは削除した分のデータ領域も開放せず確保し続けるので、容量が減ることなくそのまま増え続けます。

https://medium.com/inet-lab/mysql%E3%81%AE%E5%B7%A8%E5%A4%A7%E3%81%AA%E3%83%86%E3%83%BC%E3%83%96%E3%83%AB%E3%81%AB%E3%81%8A%E3%81%91%E3%82%8Bdelete-b427e915d2de

https://agohack.com/mysql-fragmention-optimization/
```
SELECT table_schema, table_name, data_free, table_rows
FROM information_schema.tables
WHERE table_schema = '対象の DB 名';

delete from log where date between ~ and ~;
```

https://dev.mysql.com/doc/refman/5.6/ja/optimize-table.html

## OPTIMIZE TABLE table_name;
https://oc-technote.com/mysql/%E5%A4%A7%E9%87%8F%E3%81%AE%E3%83%AC%E3%82%B3%E3%83%BC%E3%83%89%E3%82%92delete%E3%81%97%E3%81%9F%E3%81%AA%E3%82%89optimize-table%E3%82%92%E3%81%97%E3%82%88%E3%81%86%E3%81%A8%E3%81%84%E3%81%86%E3%81%8A/

実行した場合はテーブルロックがかかります。
サービスがリアルタイムで稼働中の場合は、実行タイミングに注意が必要です。


今回のケースではデータを大量に物理削除した後にOPTIMIZEをせず、テーブル内に空の領域を残したままにしておいた事で、統計情報の更新がうまく行かず、
実行計画の払い出しの動作に影響を与えたと考えられます。
そのため、MySQLではバッチ処理などでテーブル内のデータを全件洗い替えるような操作は控えるべきです。
どうしても必要な場合は、DELETE後に必ず OPTIMIZE TABLE をするか、一度テーブルをDROPしてからデータを作り直すような作りにすべきであると考えます。
