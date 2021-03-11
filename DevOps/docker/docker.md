https://www.docker.com/get-started


https://qiita.com/tifa2chan/items/e9aa408244687a63a0ae

docker ps -a

https://qiita.com/zono_0/items/7a25d283cd4b09d6ffb0
```
コマンドライン
#docker一括実行（docker pull & docker create & docker startを一括実行）
$ docker run hello-world

#dockerイメージ取得（イメージはコンテナの素）
$ docker pull alpine

#dockerイメージ一覧表示
$ docker image ls

#dockerコンテナ生成
$ docker create -it alpine

#dockerコンテナ一覧表示
$ docker container ls -a

#dockerコンテナ起動
$ docker start [CONTAINER ID]

#dockerコンテナ停止
$ docker stop [CONTAINER ID]

#dockerコンテナOSへログイン
$ docker run -it alpine bin/sh

#dockerコンテナOSからログアウト
CTRL + P + Q

#dockerコンテナ削除
docker rm [CONTAINER ID]

#dockerコンテナリネーム
$ docker rename [OLD CONTAINER NAME ] [NEW CONTAINER NAME]

#dockerイメージの削除
docker rmi [IMAGE ID]

#dockerイメージ一括削除
⭕️$ docker image prune

#dockerログ確認
$ docker logs [CONTAINER ID]
```
