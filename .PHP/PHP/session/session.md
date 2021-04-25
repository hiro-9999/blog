Session文件回收
# 修改php.ini文件中的gc_maxlifetime变量就可以延长session的过期时间了：（例如，我们把过期时间修改为86400秒）
如果”最后的修改时间”到”现在”超过了gc_maxlifetime（默认是1440）秒，这个session文件就被认为是过期了，在下一次session回收的时候，如果这个文件仍然没有被更改过，这个session文件就会被删除（session就过期了）。

简单的说，如果我登录到某网站，如果在1440秒（默认值）内没有操作过，那么对应的session就认为是过期了。 所以，修改php.ini文件中的gc_maxlifetime变量就可以延长session的过期时间了：（例如，我们把过期时间修改为86400秒）
session.gc_maxlifetime = 86400
然后，重启你的web服务（一般是apache）就可以了。
————————————————

原文链接：https://blog.csdn.net/Hayley_Liu/article/details/69948291


https://www.huaweicloud.com/articles/698cb654b43595853dc579c83fd7f6a7.html

[客户端]

session.use_cookies = 1

sessionid在客户端采用的存储方式，置1代表使用cookie记录客户端的sessionid，同时，$_COOKIE变量里才会有$_COOKIE[

‘PHPSESSIONID’]这个元素存在；

 
session.use_only_cookies = 1

三、经常遇到的现象：为什么删除一个session文件，之后生成一个session文件，新的文件名字还是与原来一样？

理解到session文件的命名规则是：“sess_PHPSESSID值“。那么，就很容易明白了。因为，客户端存在cookie：PHPSESSID。客户端发送请求后，会将该cookie发送给服务器(php可以使用$_COOKIE['PHPSESSID']看到其内容)，这样的话，还是会根据PHPSESSID生成一个session文件的。
