https://qiita.com/ntkgcj/items/71778e1ec8b27ea03ce5

```
# 毎日15時に実行
0 15 * * * echo "hoge"


# 実行間隔（ / ）　→ 5分ごとに実行（0:00〜23:55）
*/5 * * * * echo "hoge"

## 0時〜22時（23時）までの間、毎時0分に2時間おきで実行（0:00, 2:00, 4:00, ・・・22:00）
0 */2 * * * echo "hoge"


# 複数指定（ , で区切る）　→ 5時5分、10分、30分 に実行
5,10,30 5 * * * echo "hoge"

# 範囲指定（ - ）　→ 3時10分、4時10分、5時10分、6時10分　に実行
10 3-6 * * * /home/piyo/hoge.sh

分 時 日 月 曜日  [コマンド/プログラムファイル名]
設定は以下のようになります。

分：0~59で設定
時：0~23で設定
日：1~31で設定
月：1~12で設定。または jan〜dec
曜日：0~7で設定。0=日曜,1=月曜,2=火曜,3=水曜,4=木曜,5=金曜,6=土曜,7=日曜。または sun〜sat
,：分,時,日を複数で指定
–：分,時,日を範囲で指定
/：分,時,日を間隔で指定
*：「全て」を表します
```



https://www.genius-web.co.jp/blog/web-programming/you-can-use-cron-to-run-your-program-automatically-and-you-can-set-it-up-with-a-sample-program.html
毎日12時と12時30分の2回実行させたい場合
スラッシュを使うと間隔の指定を行うことができます。以下の例だと分が*/30となっているため、30分に1回を意味します。

1
*/30 12 * * * php /home/sv01/tenki.php


# 【PHP】バッチ処理をcronで自動実行する
https://qiita.com/wakahara3/items/54880dd3c60b3cb34af9

https://qiita.com/yukibe/items/cd5b59122804223698d0
crontab -lコマンドでcronの設定を確認できます。
現在は何も設定されていません。

$ crontab -l
crontab: no crontab for name

# 実行時間は分・時・日・月・曜日を指定しそれぞれにも半角スペースを空けます。
## crontab -e
Linuxだったらサーバ内で、MacOSでしたらターミナルコマンドで crontab -e を入力します。viが立ち上がりcronの設定を入力する画面へと移ります。
https://www.genius-web.co.jp/blog/web-programming/you-can-use-cron-to-run-your-program-automatically-and-you-can-set-it-up-with-a-sample-program.html



https://qiita.com/ntkgcj/items/71778e1ec8b27ea03ce5  https://qiita.com/katsukii/items/d5f90a6e4592d1414f99

https://qiita.com/hikouki/items/e744b3a4d356d2af12cf

cron
 分　時　日　月　曜日　コマンド
表１	
分	0～59
時	0～23
日	1～31
月	1～12　or jan～dec
曜日	0～7 [0,7は日曜日] or sun～sat
コマンド	有効なコマンドを記述します。空白を含むことも可能ですが、標準のBourne Shellの書式に従って記述します。

# DB insert
http://okadao.blogspot.com/2009/11/phpcron.html

//go
https://gowalker.org/gopkg.in/robfig/cron.v2


https://memorva.jp/memo/linux/cron.php
/usr/bin/php7.1 /home/username/example.com/public_html/test.php
Perl .sh https://qiita.com/zayarwinttun/items/0dae4cb66d8f4bd2a337
https://www.server-memo.net/tips/etc-crontab.html



cron の設定ガイド https://github.com/robfig/cron/blob/master/cron.go#L125
https://www.express.nec.co.jp/linux/distributions/knowledge/system/crond.html

go-scheduler 
https://qiita.com/katoken-0215/items/02913d4bbe19d47959a2

go https://github.com/robfig/cron
https://godoc.org/github.com/robfig/cron


https://ednsquare.com/story/scheduling-tasks-with-cron-for-golang------XkFNCE

//gcp Cloud SDK
https://cloud.google.com/appengine/docs/standard/go/config/cron?hl=ja

https://www.toutiao.com/a6470629913467552269/
