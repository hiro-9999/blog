# データおよび構成の変更の永続化
https://mo-gu-mo-gu.com/mysql-env-with-docker/

https://qiita.com/leafeon00000/items/e190cf92af3a487cc749

$ docker exec -it mysqlapp /bin/bash 


https://dev.mysql.com/doc/refman/8.0/ja/docker-mysql-more-topics.html



https://zenn.dev/yuyaamano23/articles/b1033e0c04ffba

$ docker-compose ps

## アプリの起動
$ docker-compose up

## MySQLのホストとポート番号の確認
$ docker ps

```
https://chaika.hatenablog.com/entry/2019/02/18/123000

現在起動中のコンテナの一覧が出力されるのでmysqlのコンテナを探す。

259d8b05f8ec  mysql:5.6  ... 127.0.0.1:3306->3306/tcp
こんな感じだった。
ホストは127.0.0.1、ポートは3306
```
$ mysql -h 127.0.0.1 -P 3306 -u root -p


# docker-compose.ymlからビルドする
docker-compose build 

# ymlに書かれてるコンテナを起動する　
docker-compose run

# backgroundで起動する場合、
# -dオプションをつける

# コンテナの確認
docker-compose ls

# コンテナの終了
docker-compose kill

#コンテナの削除

docker-compose rm
