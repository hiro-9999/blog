https://www.sejuku.net/blog/category/programing/php/php-%e5%85%a5%e9%96%80


https://www.php.net/manual/ja/function.array-map.php

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
