https://qiita.com/ysk24ok/items/ffe8d5d1479aaf5afeaa

sudo lsof -i | grep http
 sudo kill -9 27512
## sudo /etc/init.d/httpd restart
https://qiita.com/rimoenic/items/81385e08cf772ae5cfe4
デフォルトのhttpd.service用設定ではsystemctl経由では不可
apachectl -k stop
#又は
/usr/sbin/httpd -k stop
#又は
kill -TERM ${ROOT_HTTPD_PID}
