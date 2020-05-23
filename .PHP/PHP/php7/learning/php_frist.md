# 人生三千事，泯然一笑间。 “人生在世，还不是有时笑笑人家，有时给人家笑笑。”

# 生命太短，没时间伤春悲秋。

# 百事从心起，一笑解千愁。

https://www.sejuku.net/blog/category/programing/php/php-%e5%85%a5%e9%96%80


https://www.toutiao.com/a6791008618574512647/

```php
var_dump("abcdef"[-2]); // 从末尾取倒数第2个字符：e

var_dump("abcdef"[2]); // 从前面取第2个，从0开始：c

$string = 'bar';

echo $string[1], $string[-1]; // a r
```

# [] style
https://www.toutiao.com/a6754054227900760579/
```php
foreach ($data as ["id" => $id, "name" => $name]) {

// logic here with $id and $name

}

在这个功能没有之前，我们一般会用while + each 的方式来用list 遍历索引数组:

$data = [

["id" => 1, "name" => 'Tom'],

["id" => 2, "name" => 'Fred'],

];

while (list($id, name) = each($data)) {

echo "$key => $val\n";

}

// list() style

list("id" => $id1, "name" => $name1) = $data[0];

// [] style

["id" => $id1, "name" => $name1] = $data[0];

注意：PHP 7.2 中已经将 each 函数移除了！所以，就不要用这种方式来遍历索引数组了
```

# php7进阶到架构师
https://www.kancloud.cn/gofor/gofor/1636401
https://www.toutiao.com/a6814672429084836363/
字符的筛选方式：
| 匹配两个或者多个分支选择，即或匹配
[]匹配方括号中的任意字符
[^] 匹配除方括号中的字符之外的任意字符；
区间匹配：[a-z]匹配a到z的字符, [0-9]匹配0到9的字符。也可以[a-z0-9] ，表示匹配数字或者小写字母
. 匹配除换行符之外的任意字符
\d 匹配任意一个十进制数字，即[0-9]
\D 匹配任意一个非十进制数字[^0-9] 相当于[^\d] ，与\d相反
\s 匹配一个不可见的字符，即[\f\n\r\t\v]
\S 匹配一个可见的字符，与\s相反
\w 匹配任意一个数字、字母或下划线，即[0-9a-zA-Z_]
\W 匹配任意一个非数字、字母或下划线，与\w相反


# Imuutable array
对于这种数组，不会发生COW，不需要计数，这个也会极大的提高这种数据的操作性能，
https://www.toutiao.com/a6800170858447897101/

# 启用Zend Opcache
启用Opcache非常简单，在php.ini配置文件中加入：
https://www.toutiao.com/a6584763922211930638/

# Hugepage
让你的PHP7更快之Hugepage，首先在系统中开启HugePages，然后开启Opcache的huge_code_pages。
以我的CentOS 6.5为例，通过执行如下命令，分配512个预留的大页内存：

$sudo sysctl vm.nr_hugepages=512
「PHP编程」鸟哥：为让PHP7达到最高性能，我提几点
然后在php.ini中加入：
opcache.huge_code_pages=1
这样一来，PHP会把自身的text段，以及内存分配中的huge都采用大内存页来保存，减少TLB miss，从而提高性能。

# Opcache file cache
开启Opcache File Cache(实验性)，通过开启这个，我们可以让Opcache把opcode缓存缓存到外部文件中，对于一些脚本，会有很明显的性能提升。
在php.ini中加入：
opcache.file_cache=/tmp
这样PHP就会在/tmp目录下Cache一些Opcode的二进制导出文件，可以跨PHP生命周期存在。

# Error错误处理  你可以用 catch (Error $e) { ... } 
PHP 7 改变了大多数错误的报告方式。不同于 PHP 5 的传统错误报告机制，现在大多数错误被作为 Error 异常抛出。
这种 Error 异常可以像普通异常一样被 try / catch 块所捕获。如果没有匹配的 try / catch 块， 则调用异常处理函数（由 set_exception_handler() 注册）进行处理。 如果尚未注册异常处理函数，则按照传统方式处理：被报告为一个致命错误（Fatal Error）。

Error 类并不是从 Exception 类 扩展出来的，所以用 catch (Exception $e) { ... } 这样的代码是捕获不 到 Error 的。你可以用 catch (Error $e) { ... } 这样的代码，或者通过注册异常处理函数（ set_exception_handler()）来捕获 Error。

```php
try {
undefindfunc();
} catch (Error $e) {
var_dump($e);
}
// or
set_exception_handler(function($e){
var_dump($e);
});
undefindfunc();
```
# PGO
我之前的文章：让你的PHP7更快(GCC PGO) 也介绍过，如果你的PHP是专门为一个项目服务，比如，只是为你的Wordpress，或者drupal，或者其他什么，那么你就可以尝试通过PGO，来提升PHP，专门为你的这个项目提高性能。
具体的，以wordpress 4.1为优化场景。 在编译PHP的时候首先执行如下命令：
make prof-gen
然后用你的项目训练PHP，比如对于Wordpress：
sapi/cgi/php-cgi -T 100 /home/huixinchen/local/www/htdocs/wordpress/index.php >/dev/null
也就是让php-cgi跑100遍wordpress的首页，从而生成一些在这个过程中的profile信息。
最后执行如下命令：

make prof-clean
make prof-use && make install

这个时候你编译得到的PHP7就是为你的项目量身打造的最高性能的编译版本。

# declare(strict_types=1); //严格模式

# NULL 合并运算符
PHP 7 新增加的 NULL 合并运算符（??）是用于执行isset()检测的三元运算的快捷方式。

# 常量数组
//php5之前用const，php7中可以用define
define('my_array' , ['one''one']);

# IntlChar() ??
PHP 7 通过 intl 扩展来支持国际化 (i18n) 和本地化 (l10n) 。此扩展仅仅是对 ICU 库的基础包装，并提供了和 ICU 库类似的方法和特性。PHP 7 通过新的 IntlChar 类暴露出 ICU 中的 Unicode 字符特性。这个类自身定义了许多静态方法用于操作多字符集的 unicode 字符。

# unserialize()的过滤性 ??
增加unserialize()的过滤性，可减少代码注入的风险。

# Session 选项 ??

PHP 7 session_start() 函数可以接收一个数组作为参数，可以覆盖 php.ini 中 session 的配置项。

这个特性也引入了一个新的 php.ini 设置（session.lazy_write）, 默认情况下设置为 true，意味着 session 数据只在发生变化时才写入。

除了常规的会话配置指示项， 还可以在此数组中包含 read_and_close 选项。如果将此选项的值设置为 TRUE， 那么会话文件会在读取完毕之后马上关闭， 因此，可以在会话数据没有变动的时候，避免不必要的文件锁。

```php
<?php
//把 cache_limiter 设置为私有的，同时在阅读完 session 后立即关闭。
session_start([
   'cache_limiter' => 'private',
   'read_and_close' => true,
]);
```

# PHP匿名类

```php
interface Logger{public function log(string $msg);}
class Application
{
    private $logger;
    public function getLogger(): Logger{return $this->logger;}
    public function setLogger(Logger $logger){$this->logger = $logger;}
}
$app = new Application;
// new class 来实例化一个匿名类，用来替代一些"用后即焚"的完整类定义。
$app->setLogger(new class implements Logger{public function log(string $msg){print_r($msg);}});
$app->getLogger()->log('我是第一条日志');
echo PHP_EOL;
$app->setLogger(new class implements Logger{public function log(string $msg){print_r($msg);}});
$app->getLogger()->log('我是第二条日志');
echo PHP_EOL;
```

# list用法
$arr = [4, 5, 6];
[$a, $b, $c] = $arr;
var_dump($a, $b, $c);

# 异常
PHP 7 异常用于向下兼容及增强旧的assert()函数。它能在生产环境中实现零成本的断言，并且提供抛出自定义异常及错误的能力。
https://www.php.net/manual/ja/function.array-map.php

ini_set('zend.assertion',1);
ini_set('assert.exception',1);

# call函数实现闭包
```php
->call(new a());
class Test {
private $num = 1;
}
$f = function() {
return $this->num + 1;
};
echo $f->call(new Test);
```

# 匿名类

php7允许你使用new class来实例化一个匿名类

# スコープ外の変数を参照するには、use()を使用する。

## 新增整除函数intdiv()
  例如：intdiv(10,3)
  结果：3
## 新增两个更安全的伪随机生成器函数random_bytes()和random_int()
## 配列の要素をn倍する
$n = 3;
$hoge = array(5,4,7);

$hoge = array_map(function($arg) use($n){
  return $arg * $n;
},$hoge);

var_dump($hoge);
/*
 array(3) { [0]=> int(15) [1]=> int(12) [2]=> int(21) }
*/

# forEach
https://www.sejuku.net/blog/20257

# array()
https://www.php.net/manual/ja/language.types.array.php
