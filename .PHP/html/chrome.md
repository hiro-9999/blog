# 能。例如，在Chrome地址栏中输入chrome://inspect/#devices
即可查看主机当前连接的移动设备浏览器打开网页的情况，并可以阅读DOM结构和查看Debug信息。
Chrome还有很多有意思的扩展功能，打开chrome://chrome-urls／就可以知道所有Chrome支持的扩展功能信息，包括浏览器的各类工具界面入口。
```
chrome://version/   //查看系统信息 
chrome://inspect/   //查看连接设备调试信息 
chrome://downloads  //浏览器下载管理 
chrome://settings/  //浏览器设置 

服务端开发调试的工具也比较多。例如node-supervisor、node-inspector及以后可能出现的新工具。这类工具入门很简单，按照参考文档安装后，用它们特定的命令启动应用入口文件就可以了。举例来说，node-inspector安装如下。

$ npm install –g node-inspector 
$ node-debug app.js 
Node Inspector is now available from http://127.0.0.1:8080/?ws=127.0.0.1:8080&port=5858 
Debugger listening on port 5858
这样要调试的Node端服务就通过debug模式启动了，我们还需要用node-inspector服务将运行的代码同步到浏览器端进行调试，因此还需打开另一个终端。
```
