### 什么是DSL

DSL分为外部DSL和内部DSL。外部DSL是一种可以独立解析的语言，就像SQL，它专注于数据库的操作；内部DSL是通用语言暴露的用来执行特定任务的API，它利用语言本身的特性，将API以特殊的形式暴露出去，例如Android的Gradle和iOS的依赖管理组件CocosPods，Gradle是基于Groovy的，Groovy是一种通用语言，但是Gradle基于Groovy的语法，构建了自己一套DSL，所以在配置Gradle的时候，必须遵循Groovy的语法，还要遵循Gradle的DSL标准。

原文链接：https://blog.csdn.net/qq_20417381/article/details/104100675


### Domain Special Language
DSL是领域特定语言，与通用语言不通，他只管他的领域，如：SQL、正则表达式

https://www.jianshu.com/p/5a4a5780b3a7


### 注解代码. good 🟡
一、注解的本质

注解实际上就是一种代码标签，它作用的对象是代码。它可以给特定的注解代码标注一些额外的信息。然而这些信息可以选择不同保留时期，比如源码期、编译期、运行期。然后在不同时期，可以通过某种方式获取标签的信息来处理实际的代码逻辑，这种方式常常就是我们所说的反射。



作者：熊喵先森
链接：https://www.jianshu.com/p/8392c63b0f52



