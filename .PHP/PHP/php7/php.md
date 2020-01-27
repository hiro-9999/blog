>time php index.php

3.新增操作符“<=>”

语法：$c = $a <=> $b

如果$a > $b, $c 的值为1

如果$a == $b, $c 的值为0

如果$a < $b, $c 的值为-1

4.新增操作符“??”

如果变量存在且值不为NULL， 它就会返回自身的值，否则返回它的第二个操作数。
//原写法

$username = isset($_GET['user]) ? $_GET['user] : 'nobody';

//现在

$username = $_GET['user'] ?? 'nobody';

5.define() 定义常量数组

define('ARR',['a','b']);

echo ARR[1];// a

7.匿名函数

$anonymous_func = function(){return 'function';};

echo $anonymous_func(); // 输出function

10.命名空间引用优化

// PHP7以前语法的写法

use FooLibrary\Bar\Baz\ClassA;

use FooLibrary\Bar\Baz\ClassB;

// PHP7新语法写法

use FooLibrary\Bar\Baz\{ ClassA, ClassB};

注意: PHP7.1 以后mcrypt_*序列函数都将被移除。推荐使用：openssl 序列函数

https://www.toutiao.com/a6581702898911019533/

6.AST: Abstract Syntax Tree, 抽象语法树

AST在PHP编译过程作为一个中间件的角色, 替换原来直接从解释器吐出opcode的方式, 让解释器(parser)和编译器(compliler)解耦, 可以减少一些Hack代码, 同时, 让实现更容易理解和可维护.

PHP5 : PHP代码 -> Parser语法解析 -> OPCODE -> 执行

PHP7 : PHP代码 -> Parser语法解析 -> AST -> OPCODE -> 执行

参考: https://wiki.php.net/rfc/abstract_syntax_tree
