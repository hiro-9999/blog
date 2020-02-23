“Docker 包括三个基本概念
# hub
https://hub.docker.com/search?q=&type=image

docker pull ubuntu:18.04”

docker run -it --rm \
    ubuntu:18.04 \
    bash
    
docker run --name webserver -d -p 80:80 nginx
docker exec -it webserver bash
docker diff webserver
docker ps -a
docker start 0b5aad08487b
docker stop 0b5aad08487b

docker image ls
docker system df

https://qiita.com/kooohei/items/0e788a2ce8c30f9dba53

## delete img
docker image prune
docker image rm 
## 镜像（Image）

## 容器（Container）
“镜像是静态的定义，容器是镜像运行时的实体。容器可以被创建、启动、停止、删除、暂停等。”
“ 数据卷（Volume）”

挂载主机目录 (Bind mounts)”

抜粋:: yeasy  “Docker —— 从入门到实践”。 Apple Books  

## 仓库（Repository）

理解了这三个概念，就理解了 Docker 的整个生命周期。”

抜粋:: yeasy  “Docker —— 从入门到实践”。 Apple Books  
