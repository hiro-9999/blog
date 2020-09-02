“所谓专家，就是在一个很小的领域里把所有错误都犯过了的人。”

SQL Design 

in One Day and Learn It Well. 

抜粋:: 卡尔文 (Bill Karwin)  “SQL反模式 (图灵程序设计丛书 48)”。 Apple Books  

Learn SQL in One Day and Learn It Well. SQL for Beginners with Hands-on Project by Chan Jamie (z-lib.org).pdf
# MySQL Workbench, go to 
https://dev.mysql.com/downloads/workbench/.

# For Mac users, to install MySQL Server, go to 
https://dev.mysql.com/downloads/mysql/.

# SQL Function and Operator Reference
https://dev.mysql.com/doc/refman/8.0/en/sql-function-reference.html

# 複数のSQL文を実行する
```
1つのトリガーで複数の SQL 文を実行するには、 BEGIN ... END 文を使って次のようにトリガーを作成します。
delimiter //

CREATE TRIGGER trigger_name
  { BEFORE | AFTER } { INSERT | UPDATE | DELETE }
  ON tbl_name FOR EACH ROW
  BEGIN
     実行するSQL文1;
     実行するSQL文2;
     ...
  END;//

delimiter ;

```

```
mysql> delimiter //
 
mysql> create procedure testproc( param1 INT )
    -> begin
    -> declare name1 varchar(10);
    -> set name1='Saniya';
    -> select * from employees where emp_no = param1 and first_name = name1;
    -> end//
Query OK, 0 rows affected (0.01 sec)
 
mysql> delimiter ;
 
mysql> call testproc( 10008 ) ;   
```
https://style.potepan.com/articles/21815.html

