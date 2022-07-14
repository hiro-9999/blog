代码清单2.3 构建应用容器镜像的Dockerfile
```node
FROM node:7
ADD app.js /app.js
ENTRYPOINT ["node","app.js"]
```

From 行定义了镜像的起始内容（构建所基于的基础镜像）。这个例子中使用的是 node 镜像的tag 7 版本。第二行中把app.js文件从本地文件夹添加到镜像的根目录，保持app.js这个文件名。最后一行定义了当镜像被运行时需要被执行的命令，这个例子中，命令是 node app.js。




docker build -t kubia .

docker images

## docker run --name kubia-container -p 8080:8080 -d kubia
这条命令告知Docker基于 kubia 镜像创建一个叫 kubia-container 的新容器。这个容器与命令行分离（-d 标志），这意味着在后台运行。本机上的8080端口会被映射到容器内的8080端口（-p 8080:8080 选项），所以可以通过http://localhost:8080 访问这个应用。

curl localhost:8080

docker ps

docker inspect kubia-container

## docker exec -it kubia-container bash

-i，确保标准输入流保持开放。需要在shell中输入命令。

-t，分配一个伪终端（TTY）。

ps aux | grep app.js

docker stop kubia-container

### 容器本身仍然存在并且可以通过 docker ps-a 来查看。-a 选项打印出所有的容器，包括运行中的和已经停止的。想要真正地删除一个容器，需要运行 docker rm ：

docker rm kubia-container

一旦知道了自己的ID，就可以重命名镜像，现在镜像由 kubia 改为luksa/kubia（用自己的Docker Hub ID代替 luksa）：

docker tag kubia luksa/kubia

一个容器镜像可以有多个标签

docker images | head

docker push luksa/kubia

在推送完成之后，应用被打包在一个容器镜像中，并通过Docker Hub给大家使用镜像。可以在任何机器上运行下面的命令来运行镜像：
## docker run -p 8080:8080 -d luksa/kubia


http://kubernetes.io


```node
# goのバイナリビルドをビルドするステージ
FROM golang:1.18 as builder

ARG SERVICE_NAME
ARG RELEASE_TAG
ARG COMMIT_HASH

WORKDIR /go/src/app

COPY go.mod go.sum ./
RUN go mod download

COPY . /go/src/app

RUN CGO_ENABLED=0 go build -o app -a -tags netgo -installsuffix netgo  -ldflags "-X main.releaseVersion=${RELEASE_TAG} -X main.commitHash=${COMMIT_HASH}" ./cmd/${SERVICE_NAME}


# sleepのバイナリを取得するために参照するステージ
FROM busybox:1.35-musl as busybox


# distroless: バイナリの実行に必要な依存のみが含まれているContainerImage
# パッケージマネージャやシェルも入っておらず、堅牢性が高くイメージサイズも小さい
# Goで生成したバイナリを実行するユースケースに適している
FROM gcr.io/distroless/static

ENV TZ="Asia/Tokyo"

# distrolessにはsleepコマンドが存在しない
# しかしKubernetesのdeploymentリソースにて、Containerの終了をハンドリングする際にsleepが必要になる
# sleepコマンドを実行するためにbusyboxからsleepのバイナリをコピーしている
COPY --from=busybox /bin/sleep /bin/sleep
# AWS EKSではCronJob実行環境のタイムゾーンがUTCである。
# JSTで毎月1日、00:00 ~ 08:59 の間にJob実行するには各月の日にちの違いを考慮する必要がある。
# そのため、busyboxからshとdateのバイナリをコピーしている。
# 参考：https://stackoverflow.com/questions/71651529/schedule-cronjob-for-last-day-of-the-month-using-kubernetes
COPY --from=busybox /bin/sh /bin/sh
COPY --from=busybox /bin/date /bin/date
COPY --from=builder /go/src/app/app ./app

ENTRYPOINT ["./app"]
```


