## Jenkins 和 Docker 实现 CI/CD
https://www.infoq.cn/article/0sueQNsY9tLDVi79UZms

## docker volume create
https://docs.docker.com/engine/reference/commandline/volume_create/

```
docker pull jenkins/jenkins:lts
```

> docker images

```
docker run -p 8080:8080 -p 50000:50000 jenkins/jenkins:lts
```

这是因为，Docker 是在镜像文件上运行容器，而镜像文件本身是不可更改的。这就意味着，当我们在 Jenkins 中定义一个 pipeline 时，Jenkins 会将它保存到容器文件系统中而不是镜像文件中。当关闭容器时，这些信息就丢失了。

因此，我们必须使用“Volumes”来解决这个问题。

Volumes 用于将虚拟容器的文件系统固化到我们的实际物理计算机文件系统中。为此，我们必须定义新的 Volume 以保留容器中的 Jenkins_home 目录。这并不难，我们需要更改 run 命令如下：

```
docker run -p 8080:8080 -p 50000:50000 -v jenkins_home:/var/jenkins_home jenkins/jenkins:lts
```

这里 -v 代表“Volume”。如果没有 Volume，它将自动创建一个 Volume。你可以查看 Docker 相关文档以了解更多信息。


## pipeline

```
docker pull alpine
```

我们必须在容器和 Docker 之间建立一座桥梁，用“Volume”定义来解决这个问题。

```
-v /var/run/docker.sock:/var/run/docker.sock  -v $(which docker):$(which docker) 
```
分析一下上面的命令。其中，docke.sock 文件用于侦听套接字（socket）。在将这些 Volume 添加到命令行之后，docker.sock 会挂载到本地计算机（localmachine）里的 docker.sock 文件中。
```
docker run -p 8080:8080 -p 50000:50000 --name jenkins  -v jenkins_home:/var/jenkins_home -v /var/run/docker.sock:/var/run/docker.sock  -v $(which docker):$(which docker)  jenkins/jenkins:lts
```

