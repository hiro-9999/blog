# 环境
https://www.mano100.cn/thread-1942-1-1.html

http://lic-server.mephi.ru

https://www.bilibili.com/video/BV1sA4y1f77X?spm_id_from=333.337.search-card.all.click

# IDE
https://code.visualstudio.com/docs/languages/go

vm:
-javaagent: ~path


https://www.jetbrains.com/ja-jp/toolbox-app/


#------ gvm インストール
gvm 《---
https://codenote.net/golang/4307.html

https://github.com/moovweb/gvm#installing

https://soulteary.com/2022/05/12/better-golang-usage-on-m1-mac.html

~/.zprofile
export GOENV_ROOT=

gvm install go1.18.2 -B
稍等片刻，当命令行中提示 Installing go1.18.2 from binary source 的时候，指定 golang 开发环境就安装完毕啦，是不是很简单！

除了“下载”之外，还需要执行下面的命令，将我们刚刚下载的版本在当前的命令行环境中 “激活”：

gvm use go1.18.2
如果我们希望刚刚下载的 golang 版本全局生效，并且作为默认的使用版本，可以在命令行后面添加 --default 参数：

gvm use go1.18.2 --default
不论使用哪一种方式，当命令执行完毕之后，我们将得到提示：Now using version go1.18.2。接着，我们就正常可以使用 go 了，比如执行 go version：

# 🟠manage Go versions.　go1.18.2 darwin/arm64

https://github.com/soulteary/gvm

gvm use go1.18.2 --default
## gvm listall
-----------------------------------------------------------------------

example：
https://oohira.github.io/gobyexample-jp/

https://go.dev/dl/
