$arr = json_decode($json,true);

# 上のコードを見てもらうとわかるように、trueというのが第二引数で書かれています。これはなくてもjson_decode()の役割は果たせるのですが、trueがないと連想配列にはなりません。

https://qiita.com/fantm21/items/603cbabf2e78cb08133e

```
data.json

{
  "name" : "Mike",
  "age" : "20",
  "language" : "english"
}
load.php

$file = "data.json";
$json = file_get_contents($file); //指定したファイルの要素をすべて取得する
$user = json_decode($config_json, true);　//json形式のデータを連想配列の形式にする

$user_data = array(
            'name' => $user['name'],
            'age' => $user['age'],
            'language' => $user['language']
        );

とすると、

echo $user_data[name]  //"Mike"
echo $user_data[age]   //"20",
echo $user_data[language]   //"english"
```
