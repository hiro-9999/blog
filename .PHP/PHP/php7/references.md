https://www.php.net/manual/ja/language.references.php

https://www.php.net/manual/ja/control-structures.foreach.php

```
ループの中で配列の要素を直接変更したい場合は、 $value の前に & をつけます。こうすると、変数には リファレンス が代入されることになります。
<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr は array(2, 4, 6, 8) となります
unset($value); // 最後の要素への参照を解除します
?>
```
