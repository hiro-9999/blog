# コンテナ間通信
https://knowledge.sakura.ad.jp/16082/

Docker官方主页（http://www.docker.com/）。
DockerHub（http://hub.docker.com）。
Docker官方博客（http://blog.docker.com/）。
Docker官方文档（http://docs.docker.com/）。
Docker快速入门指南（http://www.docker.com/tryit/）。
Docker的GitHub源代码（https://github.com/docker/docker）。
DockerForge（https://github.com/dockerforge）：
收集了各种Docker工具、组件和服务。
Docker邮件列表（https://groups.google.com/forum/#!forum/dockeruser）。
Docker的IRC频道（irc.freenode.net）。
Docker的Twitter主页（http://twitter.com/docker）。
Docker的StackOverflow问答主页（http://stackoverflow.com/search?q=docker）。
Docker官网（http://www.docker.com/）。

## Docker info
```
docker exect -i -d name /bin/bash
# docker run -d -it --name cont1 -v /disk1 centos:7 
-v (--volume) オプションは、docker run によるコンテナ作成時に -v で作成したボリュームも同時に削除します。ただし、名前付きのボリュームやパス名を指定したディレクトリは削除しません。
docker volume ls
docker-machine ip

docker run -it -d -p <ホスト側ポート>:<コンテナ側ポート> -v <ホスト側ディレクトリ>:<コンテナ側ディレクトリ> --name <コンテナ名> <Dockerイメージ名>
# docker ps -a
https://knowledge.sakura.ad.jp/14427/

whereis curl
ps -aux
docker ps -a

> shell
docker attach name
docker logs -ft  name
docker top name
docker inspect --format'{{.NetworkSettings.IPAddress}}' name
docker stop name or kill
docker rm name
docker images

docker pull
docker run -t -i --name name  centos /bin/bash
docker search name
```

>login
```
docker login
mkdir name
cd name
touch Dockerfile
docker build -t "/"

ifconfig
ip addr
EXPOSE 80

```
CMD、ENTRYPOINT、ADD、COPY、VOLUME、WORKDIR、USER、ONBUILD、LABEL、STOPSIGNAL、ARG和ENV等。可以在http://docs.docker.com/reference/builder/查看Dockerfile中可以使用的全部指令的清单。

[澳] 詹姆斯·特恩布尔（James Turnbull）. 第一本Docker书（修订版） (Kindle の位置No.2071-2080). 

