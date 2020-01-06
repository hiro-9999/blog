JVM = 类加载器(classloader) + 执行引擎(execution engine) + 运行时数据区域(runtime data area)

https://www.toutiao.com/a6778366212142268931/


>栈的限制

一个栈可以是动态的或者是有合适大小的。如果一个线程要求更大的栈，那么将抛出StackOverflowError异常；如果一个线程要求新创建一个frame，又没有足够的内存空间来分配，将会抛出OutOfMemoryError异常。

>堆

堆中某个节点的值总是不大于或不小于其父节点的值；
堆总是一棵完全二叉树。


>非堆式的内存包括：

永久代中包含：
方法区
内部字符串
代码缓存：用于编译以及存储方法，这些方法已经被JIT编译成本地代码
