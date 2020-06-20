## “URL 的第一部分被称为方案（scheme），
说明了访问资源所使用的协议类型。这部分通常就是 HTTP 协议（http://）。
## 第二部分给出了服务器的因特网地址（比如，www.joes-hardware.com）。
## 其余部分指定了 Web 服务器上的某个资源
（比如，/specials/saw-blade.gif）。”

# “HTTP（Hypertext Transfer Protocol，超文本传输协议1）”
#  URL 
   “（Uniform Resource Locator，URL） ”
   
#  “传输控制协议（Transmission Control Protocol，TCP）”
DNS :“浏览器将服务器的主机名转换成服务器的 IP 地址；”

# “Telnet 程序可以将键盘连接到某个目标 TCP 端口，
并将此 TCP 端口的输出回送到显示屏上。Telnet 常用于远程终端会话，但它几乎可以连接所有的 TCP 服务器，包括 HTTP 服务器。”
“Web 服务器会将 Telnet 程序作为一个 Web 客户端来处理，所有回送给 TCP 连接的数据都会显示在屏幕上。”

```php
brew install telnet
telnet www.google.com 80

telnet ホスト名 ポート番号

HTTPS通信をする

　Telnet は SSL/TLS での通信に対応していないため、HTTPS(443) に対してリクエストを送ることができません。 HTTPS のサイトに接続したい場合は openssl コマンドを利用すると良いでしょう。 次のように openssl コマンドを実行します。

$ openssl s_client -connect ホスト名:443 -crlf

```
“要明确的是，Telnet 可以很好地模拟 HTTP 客户端，但不能作为服务器使用。而且对 Telnet 做脚本自动化是很繁琐乏味的。如果想要更灵活的工具，可以去看看 nc （netcat）。通过 nc 可以很方便地操纵基于 UDP 和 TCP 的流量（包括 HTTP），还可以为其编写脚本。”
# nc （netcat）
[nc](https://qiita.com/hana_shin/items/97e6c03ac5e5ed67ce38)
[nc example](https://linux.die.net/man/1/nc)

```rub
以下のようにコマンドを実行することでwebサーバへhttp-getリクエストを行う事ができる。
bash
 echo -en "GET / HTTP/1.1\n\n" | nc 対象ホスト(IPアドレス等) 80
 echo -en "GET / HTTP/1.1\n\n" | nc 104.18.205.205 80
 which nc
 サーバー側からも何か入力してみましょう。
/* サーバー側　コマンドライン nc -l -p 12345 HELLO!!!!!How are you?
 nc test.host.com 12345

``` 
 “连接承载加密的安全套接字层（SSL， Secure Sockets Layer）流量”
## “HTTP协议信息

# HTTP Pocket Reference（《HTTP 口袋书》）”

# “<scheme>://<user>:<password>@<host>:<port>/<path>;<params>?<query>#<frag>”

“邮件传输协议（Simple Mail Transfer Protocol，SMTP）”
# “RTSP URL是可以通过实时流传输协议（Real Time Streaming Protocol）解析的音/视频媒体资源的标识符。
方案rtspu中的u表示它是使用UDP协议来获取资源的。”
“Mailto URL指向的是E-mail地址。”

“可以通过三位数字代码对不同状态码进行分类。
# 200 到 299 之间的状态码表示成功。
# 300 到 399 之间的代码表示资源已经被移走了。
# 400 到 499 之间的代码表示客户端的请求出错了。
# 500 到 599 之间的代码表示服务器出错了。”

# “ TCP/IP Illustrated（《TCP/IP 详解》）系列图书（Addison Wesley 公司出版）。”
## “TCP 收到数据流之后，会将数据流砍成被称作段的小数据块，并将段封装在 IP 分组中，通过因特网进行传输”

“TCP Illustrated, Volume 1: The Protocols1（《TCP 详解，卷 1：协议》）
1 本书影印版已由人民邮电出版社出版。（编者注）
W. Richard Stevens，Addison Wesley 公司出版。
UNIX Network Programming, Volume 1: Networking APIs2（《UNIX 网络编程，卷 1：套接字联网 API（第 3 版）》）
W. Richard Stevens，Prentice-Hall 公司出版。
UNIX Network Programming, Volume 2: The Implementation3（《UNIX 网络编程，卷 2：进程间通信（第 2 版）》）
W. Richard Stevens，Prentice-Hall 公司出版。
2~3 两本书中文版已由人民邮电出版社出版。（编”
# “Apache:The Definitive Guide1（《Apache 权威指南》）
1本书影印版由中国电力出版社出版。（编者注）
Ben Laurie 和 Peter Laurie 编写，O'Reilly & Associates 公司出版。
# Professional Apache
Peter Wainwright 编写，Wrox 公司出版。”

# “Web Proxy Servers
Ari Luotonen 著，Prentice Hall 出版的计算机图书。

# Web Caching（《Web 缓存》1）
1 影印版由清华大学出版社出版。（编者注）”

# Varnish HTTP Cache
https://varnish-cache.org

[install apatch and varnish](https://www.howtoforge.com/tutorial/how-to-install-varnish-with-nginx-on-centos-7/)
# restart the apache/httpd service.
```rub
Install Apache/httpd using the yum command below.
yum -y install httpd

netstat -plntu
curl -I localhost

systemctl start httpd
systemctl enable httpd

cd /etc/httpd/
vim conf/httpd.conf

netstat -plntu

 restart the apache/httpd service.
 
apachectl configtest
systemctl restart httpd

```
抜粋:: [美]David Gourley　Brian Totty　Marjorie Sayer　Sailu Reddy　Aushu Aggarwal  “HTTP权威指南 (图灵程序设计丛书)”。 Apple Books  


