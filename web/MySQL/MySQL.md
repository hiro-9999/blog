# MySQLコマンド集
https://qiita.com/CyberMergina/items/f889519e6be19c46f5f4
```
# localhostのMySQLサーバに接続する場合
$ mysql -u [ユーザー名] -p

# 外部MySQLサーバに接続する場合
$ mysql -u [ユーザー名] -p -h [host名] -P [ポート番号]

mysql -uadmin -p -h127.0.0.1
```
```
show databases;

データベースの選択(test_dbを選択する場合)

mysql-shell
mysql > use test_db;

mysql > show tables;

テーブル設計の確認
mysql > desc [テーブル名]

mysql > UPDATE m_users SET user_name="Qii Takao", mail_address="qiitakao@hoge.com" WHERE id = 5;

```
