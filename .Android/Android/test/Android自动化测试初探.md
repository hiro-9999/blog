# Android自动化测试初探
Android应用测试与调试实战 (移动开发) by 施懿民 (z-lib.org)

# 基本所有的测试用例都是通过InstrumenationTestRunner执行的

# User scenario testing for Android
https://github.com/jayway/robotium

## android monkey
monkey由于其缺少必要的条件判断等命令，难以在功能测试上有所作为，因此只能将其作为生成一些随机事件的工具，测试应用的健壮程度，待测应用崩溃后，可以根据monkey打印的日志，再用monkey脚本创建一个重现步骤，供开发团队调研分析。而monkey服务器模式更适合在开发黑盒测试用例时，用来调试脚本中的命令，而不建议在实际测试过程中使用这种模式进行自动化测试。

# 编写monkeyrunner插件

monkeyrunner自带的API功能不是非常强大，所幸的是，它提供了扩展机制允许我们通过插件的方式丰富其API。实际上，因为monkeyrunner是基于Jython的，而Jython又为Python和Java语言之间提供了互操作的桥梁，所以只要遵循Jython中对用在Python里的Java类型的要求就可以了。monkeyrunner插件就是可以通过-plugin参数传入的一个普通的jar包：

$ monkeyrunner -plugin plugin.jar script.py 


# JUnit的模拟对象技术

# 依赖注入（Dependency Injection）
一般是将所有对象放置在一个容器里，由容器来绑定对象之间依赖关系，如容器创建对象后，自动给新对象的属性赋值。主要有三种注入方式：构造函数注入（Constructor Injection）、属性注入（Setter Injection）和接口注入（Interface Injection）。本节介绍使用构造函数注入技术的容器PicoContainer，其他注入方式请读者自行参考文献。

# 使用QUnit测试HTML 5网页

QUnit是JUnit团队开发的强大的针对JavaScript代码执行单元测试的测试框架。

# 使用Selenium测试HTML 5浏览器应用
Selenium IDE是Firefox的插件，因此安装时是通过Firefox安装的，写作本书时Selenium的最新版本是1.9.0。

1）用Firefox浏览器打开Selenium IDE的下载页面：http://seleniumhq.org/download/。

# 在Android设备上执行NDK单元测试

虽然C/C++社区有不少的单元测试框架，例如boost库中的test组件，cppunit、unittest++都是很好用的单元测试框架。不过，虽然在C++编程领域，boost是一个很流行的库，但由于没有志愿者维护Android上的boost版本，因此Android NDK到目前为止还没有正式支持boost库。而Android NDK只支持部分标准库，要使boost支持Android，需要修改编译脚本甚至源代码。经笔者试验，由于boost一直在更新，不同版本的boost的修改方法也不同，因此本书也不介绍使用boost中的Test库编写NDK单元测试用例的方法。但是，Android NDK到目前为止还没有正式支持boost库，而在cppunit中编写测试用例的额外代码量比较多，因此这里介绍使用unittest++编写Android NDK单元测试用例的步骤。下面的示例代码位于chapter9\rununit，其功能是一个Android应用通过JNI接口执行C/C++的单元测试用例。

# Android CTS （Compatibility Definition Document)
兼容性测试计划说明


# 安装SL4A

从官网（http://code.google.com/p/android-scripting/downloads/list）下载最新的SL4A应用

SL4A的官网上有一些不错的文档解释了SL4A的使用和设计原理，而且其官网https://code.google.com/p/android-scripting/wiki/Tutorials上有大量的链接演示了其他开发者编写的小工具和文章，是一个非常好的学习材料。除了SL4A自带的对Python、Ruby等脚本语言的支持，第三方开发者也可以参照文档https://code.google.com/p/android-scripting/wiki/InterpreterDeveloperGuide中的说明添加新的脚本引擎。


# Emma代码覆盖率一览表

# 而使用像Ant和Maven这样的持续集成编译工具，可以很方便地将自动化测试集成在持续集成开发过程中。

# printf调试 过滤logcat日志

　○V，即Verbose，冗余级别，优先级最低。

　○D，即Debug，调试级别。

　○I，即Information，信息级别。

　○W，即Warning，警告级别。

　○E，即Error，错误级别。

　○F，即Fatal，严重错误级别。

　○S，即Slient，最高优先级，主要用在过滤上，启用了这个优先级，就不会打印任何东西。
 
 #　列出dumpsys支持的子命令

$ adb shell dumpsys | grep DUMP

```java
 1       long startTime = System.nanoTime();
 2       ReadCsv();
 3       long readCsvEndTime = System.nanoTime();
 4
 5       SortPriceFromHighestToLowest("High");
 6       long sortEndTime = System.nanoTime();
 7
 8       final ListView listview = (ListView) findViewById(R.id.listview);
 9       ArrayAdapter<StockPriceItem> adapter = new ArrayAdapter<StockPriceItem>(this,
10                    android.R.layout.simple_list_item_1, _stockPrices);
11       listview.setAdapter(adapter);
12       long endTime = System.nanoTime();
13
14       Log.i("V1", "ReadCsv函数的使用时间： " + (readCsvEndTime-startTime));
15       Log.i("V1", "Sort函数的使用时间： " + (sortEndTime-readCsvEndTime));
16       Log.i("V1", "onCreate函数整体使用时间： " + (endTime-startTime));

 Debug.startMethodTracing("tracedemo");
 7              long startTime = System.nanoTime();
 8              ReadCsv();
 9              SortPriceFromHighestToLowest("High");
10              Debug.stopMethodTracing();
11       
12              final ListView listview = (ListView) findViewById(R.id.listview);
13              ArrayAdapter<StockPriceItem> adapter = new ArrayAdapter<StockPriceItem>
14              (this,android.R.layout.simple_list_item_1, _stockPrices);
15              listview.setAdapter(adapter);
16              long endTime = System.nanoTime();
17              long duration = endTime-startTime;
18              Log.i("V1", "性能使用时间： " + duration);

```

# Traceview界面说明

# Android自带了一个名为DDMS（Dalvik Debug Monitor Server，Dalvik调试监视服务器）的调试工具，
在终端中，进入Android SDK目录中的tools文件夹，运行"ddms"命令即可。

# 分析Android内存问题

在上一章使用traceview分析Android应用的操作日志时，我们发现应用中默认有三个线程："main"主线程、GC线程和Heap线程，而且在GC线程运行的过程中，主线程会中断执行。Java程序与C/C++等原生程序的一个不同点就是，Java虚拟机在运行Java程序的过程中，可以自动回收不再使用的对象实例，从而避免了程序员人工管理内存的繁琐工作。如果设备是单核CPU设备，一次只能运行一个线程，因此在GC线程运行的时候，必须中断主线程。但如果设备上有多核CPU，即主线程可以和GC线程同时运行，在这种情况下执行GC，会不会中断主线程呢？答案是会的。虽然有不同的内存垃圾回收实现算法，但有些算法需要中断其他Java线程的执行，如果中断的时间过长，给用户的感觉就是应用的响应速度变得越来越慢，甚至有可能出现ANR（Application Not Responding）错误。


# 其中消息的第一部分GC的原因可分为：

❑GC_FOR_MALLOC，表示内存垃圾回收过程是因为在分配内存空间（如创建对象）时，内存不够而引发的；

❑GC_EXPLICIT，表明GC是被显式请求触发的，如通过System.gc调用、一个Java线程被杀死或Binder通信中断等引起的；

❑GC_CONCURRENT，表明GC是在内存使用率达到一定的警戒线时，自动触发的（相关源码参见/dalvik/vm/alloc/HeapSource.cpp:472和HeapSource.cpp:893）；

❑GC_BEFORE_OOM，表明在虚拟机抛出内存不够异常（OOM）之前，执行最后一次回收内存垃圾。

# Shallow size和Retained size

在使用很多调查内存泄漏的工具时，常常会碰到表面大小（shallow size）和留存大小（retained size）这两个名词。

❑Shallow size：是指对象本身占用的内存空间大小，而不考虑被其引用到的内存总量。一个普通对象的Shallow size取决于这个对象的实例变量（field）的类型和个数；一个数组对象的Shallow size则取决于数组的长度和元素的类型；而集合对象的Shallow size则是集合内所有对象Shallow size之和。

❑Retained size：是指对象的Shallow size加上从其开始所能访问到的所有对象的Shallow size之和。因此Retained size表明将这个对象释放之后，垃圾回收器所能回收的内存总量。


在Android系统自带的浏览器上调试

Android官网上的文档介绍了通过console.log、console.info、console.warn、console.error等JavaScript API来调试浏览器应用的方法，但这种方法调试起来有些麻烦。不过，系统自带浏览器自带了一些隐藏的调试功能（估计是因为很多功能是系统开发人员自身调试浏览器用的，所以故意隐藏了）。下面是打开的方法，以及其中一些调试功能的说明。

# （1）打开浏览器，在地址栏中输入"about:debug"，如图15-9所示。注意，在输入完毕之后，浏览器没有任何反应，如弹出一个对话框提示成功等信息。


1）确保安装了Android版和桌面版Chrome的最新版本；

# 2）在桌面Chrome上安装"ADB Chrome扩展"，可以在Chrome应用商店里搜索"ADB"关键字，或者在Chrome浏览器中输入下面的URL，最后单击"ADD TO CHROME"按钮安装，结果如图15-17所示。

https://chrome.google.com/webstore/detail/adb/dpngiggdglpdnjdoaefidgiigpemgage

3）启用Android设备上的"USB调试"功能，将Android设备连接到电脑；

# chrome://inspect


