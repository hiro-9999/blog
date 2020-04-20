# fuelphpでバッチ処理(oil refineを利用する)
https://blog.goo.ne.jp/_memento/e/2042d4d7dba71db1555ba4b4baefd783
```
バッチ処理を動かすときは、oil refineを利用するんだが、
ちょいとハマったところもあるので、まとめておく

バッチ処理は、全て、fuel/app/tasks/ここのディレクトリ
配下に配下に置くようになっている。


2 namespace Fuel\Tasks;
3 class Hoge
4 {
5 public static function run()
6 {
7 echo "hoge";
8 }
9 }


これを実行するには、oil refine hoge
runメソッドが実行される
```
