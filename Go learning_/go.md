//good
https://www.bilibili.com/video/av51636878/?p=63

good
【面向信仰编程 编译过程概述】https://draveness.me/golang-compile-intro

【golang runtime 阅读】https://github.com/zboya/golang_runtime_reading

【Go-Questions hello-world项目】https://github.com/qcrao/Go-Questions/tree/master/examples/hello-world

【雨痕大佬的 Go 语言学习笔记】https://github.com/qyuhen/book

【vim 以 16 进制文本】https://www.cnblogs.com/meibenjin/archive/2012/12/06/2806396.html

【Go 编译命令执行过程】https://halfrost.com/go_command/

【Go 命令执行过程】https://github.com/hyper0x/go_command_tutorial

【Go 词法分析】https://ggaaooppeenngg.github.io/zh-CN/2016/04/01/go-lexer-%E8%AF%8D%E6%B3%95%E5%88%86%E6%9E%90/

【曹大博客 golang 与 ast】http://xargin.com/ast/

【Golang 词法解析器，scanner 源码分析】https://blog.csdn.net/zhaoruixiang1111/article/details/89892435

【Gopath Explained】https://flaviocopes.com/go-gopath/

【Understanding the GOPATH】https://www.digitalocean.com/community/tutorials/understanding-the-gopath

【讨论】https://stackoverflow.com/questions/7970390/what-should-be-the-values-of-gopath-and-goroot

【Go 官方 Gopath】https://golang.org/cmd/go/#hdr-GOPATH_environment_variable

【Go package 的探索】https://mp.weixin.qq.com/s/OizVLXfZ6EC1jI-NL7HqeA

【Go 官方 关于 Go 项目的组织结构】https://golang.org/doc/code.html

【Go modules】https://www.melvinvivas.com/go-version-1-11-modules/

【Golang Installation, Setup, GOPATH, and Go Workspace】https://www.callicoder.com/golang-installation-setup-gopath-workspace/

【编译、链接过程链接】https://mikespook.com/2013/11/%E7%BF%BB%E8%AF%91-go-build-%E5%91%BD%E4%BB%A4%E6%98%AF%E5%A6%82%E4%BD%95%E5%B7%A5%E4%BD%9C%E7%9A%84%EF%BC%9F/

【1.5 编译器由 go 语言完成】https://www.infoq.cn/article/2015/08/go-1-5

【Go 编译过程系列文章】https://www.ct8olib.com/topics-3724.html

【曹大 go bootstrap】https://github.com/cch123/golang-notes/blob/master/bootstrap.md

【golang 启动流程】https://blog.iceinto.com/posts/go/start/

【探索 golang 程序启动过程】http://cbsheng.github.io/posts/%E6%8E%A2%E7%B4%A2golang%E7%A8%8B%E5%BA%8F%E5%90%AF%E5%8A%A8%E8%BF%87%E7%A8%8B/

【探索 goroutine 的创建】http://cbsheng.github.io/posts/%E6%8E%A2%E7%B4%A2goroutine%E7%9A%84%E5%88%9B%E5%BB%BA/

//good
go run -x -work src/main.go
-x 可以打印整个过程涉及到的命令，-work 可以看到临时的工作目录：
《程序员的自我修养》和《深入理解计算机系统》
https://www.toutiao.com/a6709265576511930894/
探索 golang 程序启动过程
《golang runtime 阅读》
go build -v -x -work -o bin/hello src/main.go
-v 会打印所编译过的包名字，-x 打印编译期间所执行的命令，-work 打印编译期间生成的临时文件路径，并且编译完成之后不会被删除。


https://search.bilibili.com/all?keyword=Go%20%E5%A4%9C%E8%AF%BB&from_source=video_tag

https://blog.golang.org


GitHub source code at https://github.com/cloudnativego/web-application. 

//Go debugger
(https://golang.org/doc/gdb).

//Test-Driven Development (TDD) 
 Only by strictly adhering to the principles of Test-Driven Development (TDD) can you have any confidence in the reliability of your code or its ability to perform as designed. Integration tests should certify your code at the seams, and acceptance tests should certify all the moving parts of your application within a single environment.
 
 "github.com/cloudnativego/cfmgo"

        "github.com/cloudnativego/gogo-engine"

        "github.com/cloudnativego/gogo-service/fakes"
We’re going to talk about two patterns, Event Sourcing and CQRS, that are all about solving the problem of reacting and responding to enormous volume and throughput. The topics we’re going to cover are:

Image Introduction to Event Sourcing.

Image Introduction to Command Query Responsibility Segregation (CQRS).

Image Building an advanced ES+CQRS code sample.

Image Building a command handler service.

Image Building an event processor.

Image Building a query handler service.

RabbitMQ

//pprof  定位goroutine泄露
https://www.toutiao.com/i6719314182912606734/
G: goroutine，每个G都代表1个goroutine
M: 工作线程，是Go语言定义出来在用户层面描述系统线程的对象 ，每个M代表一个系统线程
P: 处理器，它包含了运行Go代码的资源。
https://www.toutiao.com/i6717251998481121805/?group_id=6717251998481121805
线程是运行goroutine的实体，调度器的功能是把可运行的goroutine分配到工作线程上。

//调度器
全局队列（Global Queue）：存放等待运行的G。
P的本地队列：同全局队列类似，存放的也是等待运行的G，存的数量有限，不超过256个。新建G’时，G’优先加入到P的本地队列，如果队列满了，则会把本地队列中一半的G移动到全局队列。
P列表：所有的P都在程序启动时创建，并保存在数组中，最多有GOMAXPROCS个。
M：线程想运行任务就得获取P，从P的本地队列获取G，P队列为空时，M也会尝试从全局队列拿一批G放到P的本地队列，或从其他P的本地队列偷一半放到自己P的本地队列。M运行G，G执行之后，M会从P获取下一个G，不断重复下去。


Gin(二):路由Router ,go语言框架学习】https://toutiao.com/item/6717444132169581068/?app=news_article_social&timestamp=1564582953&req_id=201907312222320101520170675705E61&group_id=6717444132169581068&tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share

//Go 中的位运算
https://www.toutiao.com/i6719301972362527245/
 & 位与
 | 位或
 ^ 异或
&^ 位与非
<< 左移
>> 右移

【GoLang -- Gin框架】https://toutiao.com/group/6700713494880190983/?app=news_article_social&timestamp=1564569801&req_id=20190731184321010018026159348A528&group_id=6700713494880190983&tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share

toutiao.comtoutiao.com
GoLang -- Gin框架
框架一直是敏捷开发中的利器，能让开发者很快的上手并做出应用，甚至有的时候，脱离了框架，一些开发者都不会写程序了。

Go开发者路线图2019，请收下这份指南】https://toutiao.com/group/6685275856903864845/?app=news_article_social&timestamp=1564569938&req_id=20190731184537010017020072911042C&group_id=6685275856903864845&tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share

toutiao.comtoutiao.com
Go开发者路线图2019，请收下这份指南
整理|Rachel责编|阿司匹林出品|AI科技大本营Go是Google开发的一种静态、强类型、编译型、并发型，并具有垃圾回收功能的类C编程语言。

【网页分享】https://blog.csdn.net/yfei89/article/details/73897015?tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share
【go语言几个最快最好运用最广的web框架比较 - desmondJoy - 博客园】https://www.cnblogs.com/desmond123/p/9821687.html?tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share

cnblogs.comcnblogs.com
go语言几个最快最好运用最广的web框架比较 - desmondJoy - 博客园
比较一下常用的golang web框架 令人敬畏的Web框架 如果你为自己设计一个小应用程序，你可能不需要一个Web框架，但如果你正在进行生产，那么你肯定需要一个，一个好的应用程序。 虽然您认为自己拥

【20 个好用的 Go 语言微服务开发框架  - Go语言中文网 - Golang中文社区】https://studygolang.com/articles/17157?tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share

studygolang.comstudygolang.com
20 个好用的 Go 语言微服务开发框架  - Go语言中文网 - Golang中文社区
作者 | Peter Wayner译者 | 阿拉丁2007 年，谷歌的一个团队在调研计算机编程语言时，发现有数百种可用于开发软件的语言，但没有一种能提供谷歌真正需要的特性。有些语言太过底层，有些又太过复杂，有些特性对他们来说反而会碍手碍脚。谷歌的开发人员想要的语言要简单到可以在几个小时内学会，但又要复杂到足以应付现代互联网的信息流。他们的解决方案就是 Go 语言，这门语言对于 C 语言、Java
分享自今日头条：【网页分享】https://blog.csdn.net/u012670875/article/details/82218482?tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share
分享自今日头条：【网页分享】https://bbs.csdn.net/topics/390533775?tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share
分享自今日头条：【最好的6个Go语言Web框架 - CSDN研发技术 - CSDN博客】https://blog.csdn.net/dev_csdn/article/details/78740990?tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share
// New Relic (https://newrelic.com). 
This tool, and others like it, works by having the application emit performance metrics to some form of central aggregator. This aggregator is then responsible for storing and processing the information received from the applications to provide administrators, developers, and operations people with dashboards and drilldowns.

//Many APM solutions like New Relic work through the use of agents.
These are either libraries loaded with your application or 
processes that are loaded “sidecar” style that facilitate the emission of APM metrics. 
While New Relic’s page doesn’t link to a Go agent, you can find an OSS one here: 
https://github.com/yvasiyarov/gorelic.

Go Isn’t Just a Niche Language
There is a vicious stereotype floating around the Internet that, while handy, the only real place for Go code is in building command-line tools and tiny little one-off utilities. We hope that we have disproved this slander and that you now know the real power of Go, which is solving complex problems with simple and elegant code.

How Micro Should a Microservice Be?
As we have built samples of varying complexity, we have mentioned patterns and techniques for determining where you should split the boundary lines of your microservices.

While there is no silver bullet answer, there are a couple of guiding principles that should remain in the back of your mind during design and architecture:

Image A microservice should do one thing. It is a self-contained, RESTful embodiment of the Single Responsibility Principle (SRP). It should be easy to change and upgrade, and the changing of it should make ripples not waves.

Image The golden rule from Sam Newman’s book: can you make a change to a service and deploy it by itself without changing anything else?

Continuous Delivery and Deployment
All the tools and technology in the world won’t help you if you don’t have confidence in your application. If you don’t know how its going to behave in production before you deploy it, then the cloud will be your enemy rather than your greatest ally.

You should be running builds as soon after every commit as possible, on all branches. Your build pipelines should execute unit tests immediately, and they should execute integration tests as soon as possible.

Assuming everything tests out clear, your build pipelines should be automatically deploying your applications to various environments. At the very least, you should be automatically deploying to a testing environment and then using one-button deployment for higher environments like staging and production.

Test Everything
Confidence only comes from testing. Only by strictly adhering to the principles of Test-Driven Development (TDD) can you have any confidence in the reliability of your code or its ability to perform as designed. Integration tests should certify your code at the seams, and acceptance tests should certify all the moving parts of your application within a single environment.

Many people think the choice of programming language is the silver bullet to solve all of their problems. If there is any one thing that solves the majority of all problems, it is testing. It’s hard to do, it requires effort, and it may feel like it takes more time in the beginning, but it is absolutely essential to success and your ability to maintain existing applications and rapidly build and deploy new features.

Release Early, Release Often
Fear of releasing is a real thing among many enterprises and even many organizations that would label themselves as agile or a lean startup. These organizations often put off releases until the last minute, or they schedule them for every quarter or even every 6 months.

The solution to the fear of releasing is not to release less often, it is to release more often. As features are tested and certified, they should be released and made available. You can use techniques like blue/green deployment to gradually introduce these features to customers consuming your application. This model is how many of the giants perform releases, including Google and Facebook.

Automated releases are essential, and frequent releases are directly correlated to your ability to maintain and enhance applications. As we mentioned early in the book, the phase of your application’s life where it is not “in production” is extremely short. You need to plan for the long game; for how your process is going to deliver what you need rapidly and reliably while your app is being used by millions of people.

Event Sourcing, CQRS, and More Acronyms
We also learned that language and technology is not a substitute for scalable architecture and design. You can implement terrible patterns in so-called cloud native languages and completely ruin your application’s ability to scale.

In this book we talked about patterns and practices that enable massive-scale operations, including Event Sourcing, the Command Query Responsibility Segregation (CQRS) pattern, and the concept of eventual consistency. Knowing how these work, when to use them, and when their complexity is warranted will serve you well as you build truly cloud-scale applications.

NEXT STEPS
Now that you’re an expert on building microservices in the cloud with Go, what are you going to do next? Where do you go from here?

Build. It doesn’t matter what, but if you don’t use the skills and techniques outlined in this book, then you’ll quickly forget them and the authors will become sad and depressed. Come up with crazy ideas and implement them. The building of an application should be as enjoyable as the consumption of it.

Contribute. Give back to the community. Write libraries for other Go developers building microservices. Create samples; add to the samples repositories for this book. The more code we contribute to the community, the bigger the community gets and the quicker we can reach a point where folks stop underestimating the power, flexibility, and elegance of the Go language.

Share. Tell your skeptical friends about this book. Buy them a copy, show them the code samples. Spread the word and get more people addicted to writing cloud native code in Go.



