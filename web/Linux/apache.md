usr/local/apache2

/usr/local/apache2/bin/apachectl stop
/usr/local/apache2/bin/apachectl start

/usr/local/apache2/bin/apachectl restart

由于对每次请求都会读取.htaccess文件，所以对这些文件的修改 会立即生效。不需要重启Apache服务器。服务器管理员可以在主配置文 件中使用AllowOverride指令来决定哪些指令可以在.htaccess文件中生效。
