https://qiita.com/uenohara/items/23eb6ee1259f8a927445

```
代表的なKVSとして、memchaed・Redis・BigTableなどがあります。

Memcached https://aws.amazon.com/jp/memcached/
・メモリにデータを保存して、データベースの負担を減らすKVS
・サーバ上のメモリにデータを格納するので、応答性に優れている

Redis
・Redisもメモリ上にデータを格納するので、高速の読み書きが可能となる
・文字列・BLOB・リスト・ハッシュなど、幅広い種類のデータが扱える事からデータストラクチャ・ストアと呼ばれる

BigTable
・Googleの分散データストア
・Google検索・YouTube・Google Mapなど、Googleの数多くプロジェクトに使われている
```
