The following is the syntax to know the next id.
https://blog.officekoma.co.jp/2019/03/mysqlauto-increment.html
# SELECT LAST_INSERT_ID();
```sql

mysql> create table NextIdDemo
   -> (
   -> id int auto_increment,
   -> primary key(id)
   -> );
   
SELECT AUTO_INCREMENT
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = "yourDatabaseName"
AND TABLE_NAME = "yourTableName"
The following is the query.

mysql> SELECT AUTO_INCREMENT
    -> FROM information_schema.TABLES
    -> WHERE TABLE_SCHEMA = "business"
    -> AND TABLE_NAME = "NextIdDemo";
Here is the output that displays the next auto-increment.


INSERT INTO tbl (auto,text) VALUES(NULL,'text');
SELECT LAST_INSERT_ID();
https://dev.mysql.com/doc/connector-odbc/en/connector-odbc-usagenotes-functionality-last-insert-id.html
```
