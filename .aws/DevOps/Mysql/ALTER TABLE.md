# Add Index to Existing MySQL Table
ALTER TABLE `Table` ADD INDEX `index_name` (`Column`) , ALGORITHM=INPLACE, LOCK=NONE;


https://use-the-index-luke.com/ja/sql/dml/delete

insert文とは違って、delete文にはwhere句があるため、第2章2, 「where句」で説明して来た全ての手法が使え、 インデックスの恩恵に直接あずかる事ができます。実際に、delete文は、一致した行を削除するという追加のステップが必要なselectとも言うべき動作をします。

EXPLAIN SELECT カラム名1, カラム名2... FROM テーブル名 WHERE 条件...;

https://zenn.dev/hk_206/articles/ec5f4e347caff4

LIKEが%で始まる場合
DB全体を読んだ方が早いとMySQLが判断した場合(レコードが全体の30%を超える場合や、1000件未満の場合など）
ORDER BYを使用している場合

https://tech.andpad.co.jp/entry/2020/08/18/132130


SHOW INDEX FROM テーブル名;

作成コマンド

ALTER TABLE テーブル名 ADD INDEX インデックス名(カラム名);

削除コマンド

ALTER TABLE テーブル名 DROP INDEX インデックス名;

https://blog.actorsfit.com/a?ID=01700-594f2148-37ec-411c-bdc2-0c1158e30a06


mysql> SELECT @@version;

https://abicky.net/2022/06/03/055609/

ALTER TABLE teams ADD INDEX idx_2 (created_at DESC)

https://uqichi.hatenablog.com/entry/howto-use-mysql5.7-index/
