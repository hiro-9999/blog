[Cgroups 调优案例]
(https://www.infoq.cn/article/2Hxfu3praGYewq6_FcdK)
Kubernetes 的资源模型主要包含两个维度，即 Request 和 Limit。Request 表现出来的是 Cgroups 中的进程在 CFS 调度器上的 share，而 Limit 则是 CFS 上的带宽限制。带宽限制意味着，用户申请了两核，那么就只能使用两核的 CPU 时间。基于 Request 和 Limit 相互大小的差异，在 Kubernetes 管控层面，将 Pod 换分为三个 QoS 层级， 优先级由高到低依次是 Guaranteed、Burstable 和 Besteffort。如果我们对服务进行了超售，那么 Request 就会小于 Limit， 在我们的场景下，大部分业务 Pod 都被放置在 Burstable 层级。因此，超售在管控层面的表现是，机器上所有 Pod 的 Request 总和小于机器的可分配资源，进而小于机器上所有 Pod 的 Limit 的总和

在 Golang 场景下，调度延迟的问题特别常见，其原因主要有两点，一是 Golang 中常用的异步超时逻辑，
即一个 select 下会有一个 timer 的 channal 和一个请求处理完成的 channel，
根据上文分析唤醒抢占，timer 的响应一定会比请求处理的响应时间快，因为 server 端的 reponse 数据已经达到了 client 端，
但是因为调度延时而拖慢了时间，因而出现超时。另一个原因是，Golang 的 GC、work steal 协程调度算法，
非常容易在短时间内产生大量并发线程而被 CFS 带宽限制给 throttle。因此我们会在微服务框架中默认限制并发度大小。对于 Python 服务，
我们则通过 lxcfs 给容器一个虚拟的 /proc 和 /sys 视图，
业务进程在启动时就会只启动所分配核数的 worker 进程数。

[Kubernetes 日志分析利器：Elassandra 部署使用指南](https://www.infoq.cn/article/jP3QoAWKkl4Zh_w1hJN1?utm_source=related_read&utm_medium=article)
