https://www.sejuku.net/blog/category/programing/php/php-%e5%85%a5%e9%96%80


https://www.toutiao.com/a6791008618574512647/

# Error错误处理  你可以用 catch (Error $e) { ... } 
PHP 7 改变了大多数错误的报告方式。不同于 PHP 5 的传统错误报告机制，现在大多数错误被作为 Error 异常抛出。
这种 Error 异常可以像普通异常一样被 try / catch 块所捕获。如果没有匹配的 try / catch 块， 则调用异常处理函数（由 set_exception_handler() 注册）进行处理。 如果尚未注册异常处理函数，则按照传统方式处理：被报告为一个致命错误（Fatal Error）。

Error 类并不是从 Exception 类 扩展出来的，所以用 catch (Exception $e) { ... } 这样的代码是捕获不 到 Error 的。你可以用 catch (Error $e) { ... } 这样的代码，或者通过注册异常处理函数（ set_exception_handler()）来捕获 Error。

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

<?php
//把 cache_limiter 设置为私有的，同时在阅读完 session 后立即关闭。
session_start([
   'cache_limiter' => 'private',
   'read_and_close' => true,
]);

# PHP匿名类

\```rb
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
\```

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
->call(new a());

# 匿名类

php7允许你使用new class来实例化一个匿名类

# スコープ外の変数を参照するには、use()を使用する。

配列の要素をn倍する
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
