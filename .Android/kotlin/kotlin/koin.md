https://insert-koin.io/docs/reference/koin-core/start-koin

https://roadmap.sh/android

// this good
https://blog.csdn.net/weixin_45365889/article/details/100566332?utm_medium=distribute.pc_aggpage_search_result.none-task-blog-2~aggregatepage~first_rank_ecpm_v1~rank_v31_ecpm-2-100566332.pc_agg_new_rank&utm_term=koin+%E4%BD%BF%E7%94%A8&spm=1000.2123.3001.4430

https://github.com/CaesarShao/CSKoin

https://blog.csdn.net/Shaojihan/article/details/104349741?utm_term=koin%E4%BD%BF%E7%94%A8&utm_medium=distribute.pc_aggpage_search_result.none-task-blog-2~all~sobaiduweb~default-1-104349741&spm=3001.4430


Koin是适用于Kotlin的轻量级注入工具。
无代理、无代码生成、无反射，所以性能比较好。

## 注入框架主要解决的是低耦合。
https://www.jianshu.com/p/a98cfcf5c023

### Android注解三大框架Dagger、Hilt 和 Koin 有何不同？
https://baijiahao.baidu.com/s?id=1703861354632730599&wfr=spider&for=pc


### A pragmatic and lightweight dependency injection framework for Kotlin developers.

### Koin is a DSL, a light container and a pragmatic API
https://www.jianshu.com/p/4b819bd06bb8

Koin的实现就比较简单了，没有使用注解和生成代码。通过容器, kotlln DSL和Kotlin扩展实现。
抽象来看，关键的只有三个要素：

module
scope
bean
module中有两个容器，分别存放了module下的scope和bean
scope里面有个BeanRegistry，BeanRegistry中容器内存放了该scope下的所有bean
注入的时候通过socpe找到里面对应的类型的bean
所有bean的注入都提供了lazy和直接获取模式

作者：SimpleFunc
链接：https://www.jianshu.com/p/4b819bd06bb8
来源：简书
著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。


dagger2

