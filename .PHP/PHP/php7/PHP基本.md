https://php.programmer-reference.com/category/php/string/


https://techacademy.jp/magazine/category/programming/php

https://www.php.net/manual/ja/language.operators.comparison.php
```php
// 三項演算子の使用例
$action = (empty($_POST['action'])) ? 'default' : $_POST['action'];

Null 合体演算子 ¶
"??" 演算子 (null 合体演算子) を使うことが出来ます。

例5 デフォルト値の代入

<?php
// Null 合体演算子の使用例
$action = $_POST['action'] ?? 'default';

// 上の文は、この if/else 文と同じ意味です
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'default';
}

?>
```
