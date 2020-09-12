# node
https://nodejs.org/en/about/

## “Node使用的是为Google Chrome提供动力的V8虚拟机。V8让Node在性能上得到了巨大的提升，因为它去掉了中间环节，执行的不是字节码，用的也不是解释器，而是直接编译成了本地机器码。”

## “有些NoSQL数据库中用的就是JavaScript语言（比如CouchDB和MongoDB），所以跟它们简直是天作之合（比如MongoDB的管理和查询语言都是JavaScript；CouchDB的map/reduce也是JavaScript）”


# List of languages that compile to JS
https://github.com/jashkenas/coffeescript/wiki/List-of-languages-that-compile-to-JS

# nginx.com
https://www.nginx.com
10,000 reqs/sec with Nginx!

# “Node所针对的应用程序有一个专门的简称：DIRT。它表示数据密集型实时（data-intensive real-time）程序。
因为Node自身在I/O上非常轻量，它善于将数据从一个管道混排或代理到另一个管道上，这能在处理大量请求时持有很多开放的连接，并且只占用一小部分内存。它的设计目标是保证响应能力，跟浏览器一样。”

# browsering 假象os windows7
https://www.browserling.com/

https://ci.testling.com

# “Socket.IO库
（http://socket.io/ ），它给不能使用WebSocket的浏览器提供了一些后备措施，”


# HTTP和WebSocket
https://www.jianshu.com/p/0e5b946880b4
WS使用HTTP来建立连接，但是定义了一系列新的header域，这些域在HTTP中并不会使用。
WS的连接不能通过中间人来转发，它必须是一个直接连接。
WS连接建立之后，通信双方都可以在任何时刻向另一方发送数据。
WS连接建立之后，数据的传输使用帧来传递，不再需要Request消息。
WS的数据帧有序。

# socket.IO的底层引擎是engine.io，engine.io的实现中使用了HTTP和WebSocket两种方式来构建自己的服务端，如果客户端不支持WebSocket协议，则使用轮询的方式来实现实时传输，如果客户端支持WebSocket协议，则使用另一个模块ws，ws是一个优秀的WebSocket的JS实现，在ws的README中他们自称为「可能是node平台上最快的WebSocket实现」。
koa + WebSocket + mongoDB

抜粋:: [美]Mike Cantelon  “Node.js实战 (图灵程序设计丛书)”。 Apple Books  
