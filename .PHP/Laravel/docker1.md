　🔴 https://akamist.com/blog/archives/4917
 
 ```
 Dockerfile
php:7.4-apacheのイメージを利用したDockerfileを作成する。

docker-php-ext-enable xdebugを実行することで、xdebugが有効化されてコンテナ内にiniファイルが作成される。

FROM php:7.4-apache

RUN pecl install xdebug && \
    docker-php-ext-enable xdebug

WORKDIR /var/www
 ```
 
 ```
 php --version
 
 php -m | grep Xdebug
Xdebug

php -i | fgrep xdebug.ini
/usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini,

php -i | fgrep 'Loaded Configuration File'
Loaded Configuration File => /usr/local/etc/php/php.ini


php.ini
XDebugの設定を含めたphp.iniの設定ファイルを設置する。XDebugはversion2と3で設定内容が異なることに注意。(XDebug2の時に使われる設定をコメントアウトした形で記載しておきます)

[Date]
date.timezone = "Asia/Tokyo"

[mbstring]
mbstring.internal_encoding = "UTF-8"
mbstring.language = "Japanese"

[xdebug]
# for XDebug2
#xdebug.remote_enable=1
#xdebug.remote_autostart=1
#xdebug.remote_host=host.docker.internal
#xdebug.remote_port=9000
#xdebug.remote_log=/tmp/xdebug.log

# for XDebug3
xdebug.client_host = host.docker.internal
xdebug.client_port = 9003
xdebug.idekey = PHPSTORM
xdebug.mode = debug
 ```
 
 
 https://drdavejoos.medium.com/setup-phpstorm-for-laravel-with-valet-and-xdebug-php-7-4-4e94128b9f6f
 
 pecl install xdebug
Validate that xdebug is installed: php -m | grep 'xdebug' . Output should be xdebug.

 https://qiita.com/_hiro_dev/items/07e87a7d95bdaea98ad4
 
https://github.com/szabizs/demo_public_api/

# Laravel - How to use Xdebug with Docker, PhpStorm and Tinkerwel
https://www.youtube.com/watch?v=3Fz667cny0M&ab_channel=CodewithS
```
# モジュールを有効化
vagrant@homestead:~$ sudo phpenmod xdebug

# もう一度確認
vagrant@homestead:~$ php --ini | grep xdebug
/etc/php/7.4/cli/conf.d/20-xdebug.ini, # ← 設定ファイルが追加された

# 設定ファイルを編集
vagrant@homestead:~$ sudo vim /etc/php/7.4/cli/conf.d/20-xdebug.ini

zend_extension=xdebug.so
xdebug.remote_enable = 1
xdebug.remote_host = 10.0.2.2
xdebug.remote_port = 9001
xdebug.remote_autostart = 1
xdebug.idekey = PHPSTORM
xdebug.remote_log = /tmp/xdebug.log
xdebug.show_error_trace = 1
xdebug.max_nesting_level = 512

vagrant@homestead:~$ sudo service php7.4-fpm restart


$ sudo vim /etc/php/7.1/mods-available/xdebug.ini

zend_extension=xdebug.so
xdebug.remote_enable = 1
xdebug.remote_connect_back = 1
xdebug.remote_port = 9001
xdebug.max_nesting_level = 512
xdebug.idekey = "PHPSTORM"
からのphp再起動。

$ cd /etc/init.d
$ sudo service php7.1-fpm restart
https://www.tam-tam.co.jp/tipsnote/program/post13770.html
```

🔴
https://github.com/masayan1126/docker-laravel 


https://tagsqa.com/detail/13805

```
//php.ini

[XDebug]
xdebug.remote_enable = 1
xdebug.remote_autostart = 1
xdebug.remote_host = host.docker.internal
xdebug.remote_port = 9001
```



# docker-compose exec php php artisan serve --host=0.0.0.0 --port=8000
https://www.chickensblog.com/laravel-docker/

https://github.com/masayan1126/docker-laravel/blob/main/docker-compose.yml　🔴

docker-compose exec php composer create-project --prefer-dist "laravel/laravel=8.*" .

https://qiita.com/masayan1126/items/39d164b141f9a9c92ed6

# phpMyAdminコンテナ
https://qiita.com/yyy752/items/c5e6b5c01172ae5d024f

