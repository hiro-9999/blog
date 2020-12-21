https://tech.mktime.com/entry/376
# cronを秒単位で指定する方法

```sql
*/5 * * * * /bin/bash myjob.sh # 5分おきに実行
0,30 * * * * /bin/bash myjob.sh # 0分と30分に実行
3-5 * * * * /bin/bash myjob.sh # 3分、4分、5分に実行

9時30分に実行
30 9 * * * cd /htdocs/example/test.pl

3分おきに実行
0,3,6,9,12,15,18,21,24,27,30,33,36,39,42,45,48,51,54,57, * * * * /htdocs/example/test.sh
数字を羅列しても良いが、/（スラッシュ）を使って以下のようにシンプルに書ける。
*/3 * * * * /htdocs/example/test.sh

1時間おきに実行
0 */1 * * * /htdocs/example/test.sh

3時間おき、0～30分の間の10分おきに実行
0-30/10 */3 * * * /htdocs/example/test.sh

毎分実行（1分おき）
* * * * * /htdocs/example/test.sh

7時～8時に10分おきに実行
*/10 7-8 * * * /htdocs/example/test.sh

テキストファイルに実行結果を出力
* * * * * /htdocs/example/test.sh > /htdocs/example/test.txt

```
https://memorva.jp/memo/linux/cron.php
