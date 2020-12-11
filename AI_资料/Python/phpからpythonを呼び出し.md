# phpからpythonを呼び出し
https://server-recipe.com/2000/

https://yara-shimizu.com/2018/03/26/python-to-php/

https://qiita.com/minamoto_user/items/f90ceb2f88994639ca95

phpからpythonを呼び出す
phpで下記のようにexecを呼び出すと，第一引数の文字列のコマンドを実行し，その出力の各行を要素として，第二引数を文字列の配列とします．つまり第二引数は出力される行の大きさの配列となります．第二引数の配列に，既に何らかの要素が含まれている場合，配列の最後に追加される点に注意．

exec($command,$output);
```
exec_py.php
<?php
$command="python exec_from_php.py ";
exec($command,$output);
print "$output[0]\n";
print "$output[1]\n";
?>
下記の実行結果から無事にoutputに代入されていることが確認できました．

exec_py.phpの実行結果
$ php exec_py.php 
1line
2line
```
