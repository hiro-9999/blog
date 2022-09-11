https://www.amazon.jobs/zh/jobs/939653/network-development-engineer

https://blog.51cto.com/gingerbeer/2463610

```
路由协议
为了彻底了解OSPF和BGP，市面上无数的书籍中，一本足矣。

那就是Jeff Doyle的TCP/IP 路由技术卷一、卷二。

我以前到现在读了无数遍，这一次再次针对上面两个协议，彻彻底底的过了一遍，那需要了解到什么程度呢，以OSPF为例，你需要记下来每一个LSA数据包结构字段的含义，以及每一个OSPF 数据包类型的结构和对应的flag标识。

打个比方，ABR，ASBR路由器宣告的路由，其他路由器怎么知道是ABR和ASBR发布的，肯定是此路由对应的LSA里面某一个地方写上了特定的标记。

或者当一个区域里面，同时存在两个ABR的时候，选择哪一个ABR作为主ABR，以及对应的防环机制等，都是写在了数据包结构里面。

TCP/IP
对，你没看错，一整套TCP/IP协议的流程和细节都要过一遍，尤其是最常见的DNS，DHCP，ICMP，UDP，和最重要的TCP。

比如，DNS的查询方式有两种，是哪两种？

TCP的flow control原理，connection management怎么做，Selective Ack是神马回事，Fast retransmission 怎么搞等等。

统统这些，都可以在一本书上找到答案：TCP/IP详解 卷一，第二版。（tcp/ip illustrated volume 1 second edition）

Linux
现在Linux就好比多年前的windows，越来越作为一门网络工程师必修课了。

通过Job Description来看，所需Linux技能主要是文件和数据的操作和处理，针对Linux 的书籍众多，我选了其中一本作为主要阅读对象： Linux 命令行与shell脚本编程大全。（Linux Command Line and Shell Script Bible。）

这一本在手，万事不愁。

编程- Python、Perl、Shell、C++、Java等
由于AWS需要应聘者有较强的编程和开发技能，编程语言可以会上面几种中的一种。

这个算是所有需要准备的技能里面比较难的一个，因为你很难短时间之内看书来突击。

反之，它需要的是长期的积累和项目的锤炼，然后辅之以一些理论细节的补充即可。

这里因为过去几年积累的缘故，加上我在当时的公司用Python独立开发了一些自动化系统，所以这方面没有太多准备，纯粹靠吃老本。

同样的，如果你未来想申请AWS职位，你最好需要有一定的编程经验或者开发项目作为支撑，才能足以让你满足后续的面试考核。

你可能会想，20天要把上面这些书啃完，还要面面俱到，根本不可能。

完全正确，因此我做到了有的放矢，例如Linux部分我就舍弃了很多内容，琢磨他们应该不会问得那么深。（结果证明我的想法完全错误，后面被虐得很惨。）

所以，墨菲定律是很准的，你越觉得不可能发生的事情，它越会发生。


-----------------------------------
©著作权归作者所有：来自51CTO博客作者姜汁啤酒的原创作品，如需转载，请与作者联系，否则将追究法律责任
苦战十轮，拿下AWS 澳洲Offer（上）
https://blog.51cto.com/gingerbeer/2463610
```
