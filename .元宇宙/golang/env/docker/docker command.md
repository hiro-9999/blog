docker build -t kubia .

docker images

## docker run --name kubia-container -p 8080:8080 -d kubia

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



