# MacでDockerを使ってubuntu環境を構築する 🔴

https://qiita.com/yasuoka_dev/items/073f7e8c7dba75993323
```shell
docker pull ubuntu:18.04
docker images
https://hub.docker.com/_/ubuntu/
docker version

docker run -it -d --name ubuntu ubuntu:18.04

docker ps
docker ps -a

docker exec -it ubuntu /bin/bash

exit
docker stop ubuntu

コンテナに再度入りたい場合は
docker start ubuntu
docker exec -it ubuntu /bin/bash

apt-get update

adduser user_name
gpasswd -a user_name sudo

//vimをインストール
sudo apt-get install vim

sudo apt-get install git
git config --global user.name [任意のユーザ名]
git config --global user.email [任意のユーザ名]


```

# vscodeでdockerのコンテナ内のファイルをいじる方法
https://kazu-oji.com/vscode-docker-connect-to-container/

結論からいうと、vscodeの拡張機能を入れるだけです。以下の名前のプラグインを入れてみてください。

Remote-Container

dockerをGUIで操作したり、dockerのコンテナ内のファイルをvscodeでいじれるようになります。


https://emoshu.co.jp/blog/archives/16

