DROP:

1
DROP TABLE test;
删除表test，并释放空间，将test删除的一干二净。

TRUNCATE:

1
TRUNCATE test;
删除表test里的内容，并释放空间，但不删除表的定义，表的结构还在。

### 如果是整理表内部的碎片, 可以用 truncate 跟上 reuse stroage, 再重新导入/插入数据。

# 如果删除的数据超过表数据的百分之50，建议拷贝所需数据到临时表，然后删除原表，再重命名临时表为原表
```
INSERT INTO New
 SELECT * FROM Main
  WHERE ...; -- just the rows you want to keep
RENAME TABLE main TO Old, New TO Main;
DROP TABLE Old; -- Space freed up here
```
https://www.jb51.net/article/191841.htm
