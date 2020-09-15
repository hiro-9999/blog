“NoSQL databases that you should account for. For example, MongoDB (a popular NoSQL database) is a feature-heavy document database that allows you to perform range queries, regular expression searches, indexing, and MapReduce. ”

# Redis 是一个基于内存的高性能key-value数据库。 ,Redis本质上是一个Key-Value类型的内存数据库，很像memcached，整个数据库统统加载在内存当中进行操作，定期通过异步操作把数据库数据flush到硬盘上进行保存。因为是纯内存操作，Redis的性能非常出色，每秒可以处理超过 10万次读写操作，是已知性能最快的Key-Value DB。
Redis的出色之处不仅仅是性能，Redis最大的魅力是支持保存多种数据结构，此外单个value的最大限制是1GB，不像 memcached只能保存1MB的数据，因此Redis可以用来实现很多有用的功能，比方说用他的List来做FIFO双向链表，实现一个轻量级的高性 能消息队列服务，用他的Set可以做高性能的tag系统等等。另外Redis也可以对存入的Key-Value设置expire时间，因此也可以被当作一 个功能加强版的memcached来用。
Redis的主要缺点是数据库容量受到物理内存的限制，不能用作海量数据的高性能读写，因此Redis适合的场景主要局限在较小数据量的高性能操作和运算上。

（3）Redis支持的数据类型
···
Redis通过Key-Value的单值不同类型来区分, 以下是支持的类型:
Strings
Lists
Sets 求交集、并集(通过HashMap实现，是个Value永远为空的HashMap)
Sorted Set (使用了HashMap 和SkipList,利用HashMap中的score进行排序)
hashes

（10）Redis的回收策略

 volatile-lru：从已设置过期时间的数据集（server.db[i].expires）中挑选最近最少使用的数据淘汰

volatile-ttl：从已设置过期时间的数据集（server.db[i].expires）中挑选将要过期的数据淘汰

volatile-random：从已设置过期时间的数据集（server.db[i].expires）中任意选择数据淘汰

allkeys-lru：从数据集（server.db[i].dict）中挑选最近最少使用的数据淘汰

allkeys-random：从数据集（server.db[i].dict）中任意选择数据淘汰

no-enviction（驱逐）：禁止驱逐数据 
···

# Redis queues
（3）、队列
Reids在内存存储引擎领域的一大优点是提供 list 和 set 操作，这使得Redis能作为一个很好的消息队列平台来使用。Redis作为队列使用的操作，就类似于本地程序语言（如Python）对 list 的 push/pop 操作。

如果你快速的在Google中搜索“Redis queues”，你马上就能找到大量的开源项目，这些项目的目的就是利用Redis创建非常好的后端工具，以满足各种队列需求。例如，Celery有一个后台就是使用Redis作为broker，你可以从这里去查看。

### 4）为什么redis需要把所有数据放到内存中？
Redis为了达到最快的读写速度将数据都读到内存中，并通过异步的方式将数据写入磁盘。所以redis具有快速和数据持久化的特征。如果不将数据放在内存中，磁盘I/O速度为严重影响redis的性能。在内存越来越便宜的今天，redis将会越来越受欢迎。

如果设置了最大使用的内存，则数据已有记录数达到内存限值后不能继续插入新值。



# Redis和Memcache的区别
## 数据类型
Redis支持的数据类型要丰富得多,Redis不仅仅支持简单的k/v类型的数据，同时还提供String，List,Set,Hash,Sorted Set,pub/sub,Transactions数据结构的存储。其中Set是HashMap实现的，value永远为null而已

memcache支持简单数据类型，需要客户端自己处理复杂对象 


## 持久性 memcache不支持数据持久存储 
redis支持数据落地持久化存储,可以将内存中的数据保持在磁盘中，重启的时候可以再次加载进行使用。 

## 分布式存储
redis支持master-slave复制模式
（7）分布式
redis支持主从的模式。原则：Master会将数据同步到slave，而slave不会将数据同步到master。Slave启动时会连接master来同步数据。

### 这是一个典型的分布式读写分离模型。我们可以利用master来插入数据，slave提供检索服务。这样可以有效减少单个机器的并发访问数量

memcache可以使用一致性hash做分布式

## value大小不同
memcache是一个内存缓存，key的长度小于250字符，单个item存储要小于1M，不适合虚拟机使用


## 数据一致性不同
Redis只使用单核，而Memcached可以使用多核，所以平均每一个核上Redis在存储小数据时比Memcached性能更高。
### 而在100k以上的数据中，Memcached性能要高于Redis，虽然Redis最近也在存储大数据的性能上进行优化，但是比起Memcached，还是稍有逊色。 
### redis使用的是单线程模型，保证了数据按顺序提交。
memcache需要使用cas保证数据一致性。CAS（Check and Set）是一个确保并发一致性的机制，属于“乐观锁”范畴；原理很简单：拿版本号，操作，对比版本号，如果一致就操作，不一致就放弃任何操作 

## cpu利用
redis单线程模型只能使用一个cpu，可以开启多个redis进程
https://www.cnblogs.com/aspirant/p/8883871.html

抜粋:: Macedo, Tiago, Oliveira, Fred  “Redis Cookbook”。 Apple Books  
