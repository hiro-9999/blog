# MacでDockerを使ってubuntu環境を構築する 🔴
https://weseek.co.jp/tech/2331/

https://creators.members.co.jp/2021/06/knowledge_018/

https://qiita.com/yasuoka_dev/items/073f7e8c7dba75993323

https://zenn.dev/nkys39/articles/setup-docker-commandless

https://zenn.dev/optimisuke/articles/05cc509d1a106d16fe17

### python env
https://kazu-oji.com/python-quickly-create-env-docker/

https://chigusa-web.com/blog/vs-code%E3%81%A7docker%E3%81%AEpython%E7%92%B0%E5%A2%83%E3%81%A7%E3%83%AA%E3%83%A2%E3%83%BC%E3%83%88%E9%96%8B%E7%99%BA/

### front env
https://qiita.com/P-man_Brown/items/298e34af3fd6d363e085


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

