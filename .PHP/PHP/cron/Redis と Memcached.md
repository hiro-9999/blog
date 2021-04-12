# Redis と Memcached はどちらもミリ秒未満の応答時間をサポートしています。メモリ内にデータを格納することで、ディスクベースのデータベースよりも迅速にデータを読み取ることができます。

https://aws.amazon.com/jp/elasticache/redis-vs-memcached/

https://liginc.co.jp/web/programming/php/178772
```php
<?php
/* Memcachedのオブジェクトを作成 */
$mem = new Memcached();

/* サーバ情報を指定 */
$mem->addServer('localhost', 11211);

/* Memcachedに値をセットする */
/* ligincというキーでjackという値（文字列）を600秒間保持する */
$res = $mem->set('liginc', 'jack', 600);

if ($res) {
   echo "memcachedへのデータ保存に成功しました。\n";
} else {
   echo "memcachedへのデータ保存に失敗しました。\n";
}

<?php
/* Memcachedのオブジェクトを作成 */
$mem = new Memcached();

/* サーバ情報を指定 */
$mem->addServer('localhost', 11211);

/* Memcachedから値を取得する */
/* ligincというキーでMemcachedに格納されているデータを取得する */
$value = $mem->get('liginc');

/* 取得したデータを表示する */
if (!empty($value)) {
    echo $value . "\n";
} else {
    echo "値がセットされていません。\n";
}

<?php
/* Memcachedのオブジェクトを作成 */
$mem = new Memcached();

/* サーバ情報を指定 */
$mem->addServer('localhost', 11211);

/* Memcachedから値を削除する */
$res = $mem->delete('liginc');

/* 取得したデータを表示する */
if (!empty($res)) {
    echo "値の削除に成功しました。\n";
} else {
    echo "値の削除に失敗しました。\n";
}

<?php

$memcache = new Memcache;
$memcache->connect('localhost', 11211) or die ("接続できませんでした");

$version = $memcache->getVersion();
echo "サーバーのバージョン: ".$version."<br/>\n";

$tmp_object = new stdClass;
$tmp_object->str_attr = 'test';
$tmp_object->int_attr = 123;

$memcache->set('key', $tmp_object, false, 10) or die ("データをサーバーに保存できませんでした");
echo "データをキャッシュに保存します (データの有効期限は 10 秒です)<br/>\n";

$get_result = $memcache->get('key');
echo "キャッシュから取得したデータ:<br/>\n";

var_dump($get_result);

?>

$m = new Memcached();
$cachekeys = $m->getAllKeys();
foreach ($cachekeys as $key) {
    $prefix = 'memc.sess.key.';
    if (strpos($key, $prefix, 0) !== 0) {
        $m->delete($key);
    }
}

$m->set
```
https://www.php.net/manual/ja/memcache.examples-overview.php


https://qiita.com/supertaihei02/items/53e36252afa3ea157d38
