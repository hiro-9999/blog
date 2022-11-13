https://github.com/rq2e/rq2e

### import { graphql, usePreloadedQuery, /* ... */ } from "react-relay";
https://relay.dev/

React Quickly, Second Edition - MEAP Version 8 (Morten Barklund, Azat Mardan) (z-lib.org)

https://tanstack.com/query/v4/?from=reactQueryV3&original=https://react-query-v3.tanstack.com/

https://github.com/brillout/awesome-react-components

## useCallback
https://blog.uhy.ooo/entry/2021-02-23/usecallback-custom-hooks/

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
https://www.sejuku.net/blog/category/programming-language/php/php-study/page/2
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

// 月を指定
$month = '2018-08';
$first_date = date('Y-m-d', strtotime('first day of ' . $month));
$last_date = date('Y-m-d', strtotime('last day of ' . $month));
 
echo "指定月の初日：" . $first_date . "n";
echo "指定月の末日：" . $last_date . "n";

// 今月初日
$first_date = date("Y-m-01");
 
// 今月末日
$last_date = date("Y-m-t");
 
echo "今月初日：" . $first_date . "n";
echo "今月末日：" . $last_date . "n";

<?php
$html_code = "<html><body><title>侍エンジニア</title><p>今日はいい天気です</p></body></html>";
$html_code_result = strip_tags($html_code, '<p>');
echo $html_code_result;


<?php
// 配列にデータを入れる
$book_data = array(
    array(
        'book_id' => 5,
        'book_name' => '本1'
    ),
    array(
        'book_id' => 10,
        'book_name' => '本2',
    ),
    array(
        'book_id' => 3,
        'book_name' => '本3',
    )
);
 
// 第一引数にデータを入れた配列を指定
// 第二引数に取り出したい項目名を指定
$array_column_data = array_column($book_data, 'book_name');
 
print_r($array_column_data);
 
?>
```
 https://ja.javascript.info/generators
 
 ### Debugbar
 https://www.sejuku.net/blog/61948
