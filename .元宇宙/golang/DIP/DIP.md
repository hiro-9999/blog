SOLID原則というオブジェクト指向設計原則のDにあたる、依存性逆転の原則について説明します。

＃　🔴　interface使用方法がいい
https://github.com/hiro-9999/blog/blob/master/.%E5%85%83%E5%AE%87%E5%AE%99/golang/DIP/DIP_sample-master%202.zip
``` go
go mod init main

 go run main.go 
```
https://github.com/masalennon/DIP_sample
```
A. 上位レベルのモジュールは下位レベルのモジュールに依存すべきではない。両方とも抽象（abstractions)に依存すべきである。
B. 抽象は詳細に依存してはならない。詳細が抽象に依存すべきである。
```
https://qiita.com/__m/items/989732cc9918bac7cba5

```
Rigidity(硬直性):
It is hard to change because every change affects too many other parts of the system.
少し変更しようとするだけでシステムの多くの部分に影響が出てしまうため変更することが難しい。
Fragility(変更への脆弱性):
When you make a change, unexpected parts of the system break.
変更を加えると、システムの予想外の部分が動かなくなる。
Immobility(低い移植性):
It is hard to reuse in another application because it cannot be disentangled from the current application.
現在使われているアプリケーションと強く結びついているため、他のアプリケーションで使い回すことが難しい。
```


https://blog.foresta.me/posts/dip_with_go_interfaces/


### オープンクローズドの原則(OCP : The Open Closed Principle)を満たしていると言います。これはSOLID原則というオブジェクト指向原則のOの部分にあたるものです。
https://qiita.com/__m/items/cc45791c7cc2ba7fac50



