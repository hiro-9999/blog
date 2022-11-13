https://github.com/rq2e/rq2e

React Quickly, Second Edition - MEAP Version 8 (Morten Barklund, Azat Mardan) (z-lib.org)

https://tanstack.com/query/v4/?from=reactQueryV3&original=https://react-query-v3.tanstack.com/

https://github.com/brillout/awesome-react-components

## useRefの基本
// 設定した値を取り出す
const value = ref.current;

// 値を変更する
const ref.current = 2;
つまり、ref.currentの値を変更させているだけなので
再レンダリングが走らないです。

https://qiita.com/cheez921/items/9a5659f4b94662b4fd1e

## 学习page
https://ja.javascript.info/

https://ja.javascript.info/xmlhttprequest

use the following in DevTools > Console:
> document.designMode='on';

https://ics.media/entry/221020/

 debugger;  // <-- デバッガはここで止まります
 
 https://ja.javascript.info/debugging-chrome
 
 
### yield
ジェネレータを使用した関数は、yieldを記述する事で何度も値を保持出来ます。

```php
大量のデータを扱う場合などは特にジェネレータを使用したほうが良いです。

https://www.sejuku.net/blog/74314
<?php
    function yield_example2($limit)
    {
        $array = [];
        for($i = 1; $i <= $limit; $i++) {
            yield rand(1, 30);
        }
    }
 
    $sum_value = 0;
    foreach(example2(5) as $value) {
        print($value."<br>");
        $sum_value += $value;
    }
?>
```
 https://ja.javascript.info/generators
