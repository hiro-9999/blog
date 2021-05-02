https://guolin.blog.csdn.net

# 第一行代码 Android 第3版

## Kotlin编程权威指南

《第一行代码 第3版》配套的源码、思维导图、课件等随书资源下载地址：https://www.ituring.com.cn/book/download/340e9793-f63c-4afc-9240-d62d4012f4d4

# MVVM架构可以将程序结构主 要分成3部分:Model是数据模型部分;View是界面展示部分;而ViewModel比较特殊，可以 将它理解成一个连接数据模型和界面展示的桥梁，从而实现让业务逻辑和界面展示分离的程序 结构设计。

。图中所有的箭头都是单向的，比方说UI 控制层指向了ViewModel层，表示UI控制层会持有ViewModel层的引用，但是反过来 ViewModel层却不能持有UI控制层的引用，其他几层也是一样的道理。除此之外，引用也不能 跨层持有，比如UI控制层不能持有仓库层的引用，谨记每一层的组件都只能与它相邻层的组件 进行交互。



https://developer.android.google.cn/about/versions/11

# ConstraintLayout”或“约束布局”
https://blog.csdn.net/guolin_blog/article/details/53122387?ops_request_misc=%257B%2522request%255Fid%2522%253A%2522161971498916780269830941%2522%252C%2522scm%2522%253A%252220140713.130102334.pc%255Fblog.%2522%257D&request_id=161971498916780269830941&biz_id=0&utm_medium=distribute.pc_search_result.none-task-blog-2~blog~first_rank_v2~rank_v29-1-53122387.pc_v2_rank_blog_default&utm_term=ConstraintLayout

# 发布到jcenter仓库
也就是说，如果我们希望PermissionX能够像其他开源库一样，只需要添加一行库的引用地址 就可以在任何Android项目中使用的话，就必须把PermissionX发布到jcenter仓库才行，下面 我们就开始学习如何进行实现。
首先你需要注册一个Bintray账号，Bintray是一个专门提供软件分发服务的网站，jcenter仓库 的发布与下载服务都是由Bintray提供的，它的官网地址是https://bintray.com(部分功能可 能需要科学上网才能访问)。官网的首页如图16.11所示。

# gradlew clean build bintrayUpload -PbintrayUser=USER -PbintrayKey=KEY -PdryRun=false
如果你使用的是Mac或Ubuntu系统，执行如下命令:

# ./gradlew clean build bintrayUpload -PbintrayUser=USER -PbintrayKey=KEY -PdryRun=false
