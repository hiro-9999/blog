# memcached
memcachedとは分散型キャッシュシステムを構築することができるソフトウェアである。
kvsの方式でデータを保存することができ、メモリ上にデータを保存するNoSQL。
https://qiita.com/juve_534/items/54f7732641a406f31b55

https://gihyo.jp/dev/feature/01/memcached/0001
```
yum install -y memcached
yum install -y php72-php-pecl-memcache
yum install -y php72-php-pecl-memcached

extensionと同様にphp.iniに追加する。
extension=memcache.so
extension=memcached.so
```

### 設定した容量を超えると利用されないキャッシュから順番に消える(LRU)。
LRUとは?
未使用の時間が最も低いものを判定するアルゴリズム

# 起動の確認を行う
$ service --status-all | grep memcached

$ sudo vi /etc/memcached.conf

# memcached の再起動を行う
$ sudo service memcached restart

# memcachedにデータを保存する際は、setコマンドを利用します。
```
set [キー] [データ圧縮フラグ] [キャッシュの有効期限] [サイズ] <改行>
[格納する値]
データ圧縮フラグ	データの圧縮指定フラグ（1:zip圧縮/0:非圧縮）
例えば、「lig」というキーに対して「jack」という「4バイト」の文字列を「非圧縮」で「600秒間（10分間）」保存する際は、下記コマンドを実行します。
set lig 0 600 4
jack
```
https://liginc.co.jp/web/programming/other-programming/169303/2

## memcachedは高性能な分散メモリキャッシュサーバです。
通常，データベースへの問い合わせ結果を一時的にキャッシュすることで，データベースへのアクセス回数を減らし，動的なウェブアプリケーションの高速化やスケーラビリティの向上のために利用されています。

memcachedに保存したデータは，パフォーマンスを向上させるように設計されたmemcached内蔵のメモリストレージに貯められます。データはすべてメモリ上にのみ存在するので，
## memcachedを再起動したり，OSを再起動するとすべてのデータが消えることになります。

```
#!/usr/bin/perl

use strict;
use warnings;
use Cache::Memcached;

my $key = "foo";
my $value = "bar";
my $expires = 3600; # 1 hour
my $memcached = Cache::Memcached->new({
    servers => ["127.0.0.1:11211"],
    compress_threshold => 10_000
});

$memcached->add($key, $value, $expires);
my $ret = $memcached->get($key);
print "$ret\n";
ここでは，Cache::MemcachedにmemcachedサーバのIPアドレスとオプションを1つ指定してインスタンスを作成しています。Cache::Memcachedでよく用いられるオプションは以下の通りです。

オプション	説明
servers	memcachedのサーバとポートを配列で指定
compress_threshold	データを圧縮する場合の値
namespace	キーに指定したprefixを付ける
```
