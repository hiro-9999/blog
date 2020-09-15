# MQ消息队列-MQ
## MQ全称为Message Queue, 消息队列（MQ）
https://www.cnblogs.com/aspirant/category/1195858.html

# kafka如何实现高并发存储-如何找到一条需要消费的数据
https://www.cnblogs.com/aspirant/p/11481332.html

# 分布式编程语言：用于分布式环境下的专有编程语言，比如Elang、Scala
如果一个任务由10个子任务组成，每个子任务单独执行需1小时，则在一台服务器上执行该任务需10小时。

采用分布式方案，提供10台服务器，每台服务器只负责处理一个子任务，不考虑子任务间的依赖关系，执行完这个任务只需一个小时。(这种工作模式的一个典型代表就是Hadoop的Map/Reduce分布式计算模型）

而采用集群方案，同样提供10台服务器，每台服务器都能独立处理这个任务。假设有10个任务同时到达，10个服务器将同时工作，1小时后，10个任务同时完成，这样，整身来看，还是1小时内完成一个任务！

集群一般被分为三种类型，高可用集群如RHCS、LifeKeeper等，负载均衡集群如LVS等、高性能运算集群;分布式应该是高性能运算集群范畴内。

···
Kafka系统的角色
Broker ：一台kafka服务器就是一个broker。一个集群由多个broker组成。一个broker可以容纳多个topic
topic： 可以理解为一个MQ消息队列的名字
Partition：为了实现扩展性，一个非常大的topic可以分布到多个 broker（即服务器）上，一个topic可以分为多个partition，每个partition是一个有序的队列。
partition中的每条消息 都会被分配一个有序的id（offset）。kafka只保证按一个partition中的顺序将消息发给consumer，
不保证一个topic的整体 （多个partition间）的顺序。也就是说，一个topic在集群中可以有多个partition，那么分区的策略是什么？
(消息发送到哪个分区上，有两种基本的策略，一是采用Key Hash算法，一是采用Round Robin算法)

Zookeeper在Kakfa中扮演的角色Kafka将元数据信息保存在Zookeeper中，但是发送给Topic本身的数据是不会发到Zk上的，否则Zk就疯了。
kafka使用zookeeper来实现动态的集群扩展，不需要更改客户端（producer和consumer）的配置。broker会在zookeeper注册并保持相关的元数据（topic，partition信息等）更新。
而客户端会在zookeeper上注册相关的watcher。一旦zookeeper发生变化，客户端能及时感知并作出相应调整。这样就保证了添加或去除broker时，各broker间仍能自动实现负载均衡。这里的客户端指的是Kafka的消息生产端(Producer)和消息消费端(Consumer)
Broker端使用zookeeper来注册broker信息,以及监测partition leader存活性.
Consumer端使用zookeeper用来注册consumer信息,其中包括consumer消费的partition列表等,同时也用来发现broker列表,并和partition leader建立socket连接,并获取消息.
Zookeer和Producer没有建立关系，只和Brokers、Consumers建立关系以实现负载均衡，即同一个Consumer Group中的Consumers可以实现负载均衡
···
