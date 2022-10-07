
```
$ docker-compose stop
$ docker-compose up

$  docker-compose ps
docker inspect --format='{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $INSTANCE_ID

https://docs.docker.jp/engine/reference/commandline/inspect.html


```

![img](https://github.com/hiro-9999/blog/blob/master/.aws/DevOps/docker/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88%202022-10-07%2015.38.15.png)
