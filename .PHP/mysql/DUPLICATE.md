# ON DUPLICATE KEY UPDATE
https://dev.mysql.com/doc/refman/5.6/ja/insert-on-duplicate.html

```
INSERT INTO table (a,b,c) VALUES (1,2,3)
  ON DUPLICATE KEY UPDATE 
    c=3;
INSERT INTO table (a,b,c) VALUES (4,5,6)
  ON DUPLICATE KEY UPDATE c=9;
  
 ``` 
  
