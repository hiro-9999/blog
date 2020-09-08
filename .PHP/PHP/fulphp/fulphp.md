# frist コントローラ モデル ビュー
http://fuelphp.jp/docs/1.6/general/mvc.html

## extends Controller
### View::forge

### extends \Model 

### extends ViewModel 

$view->set(
# 遅延レンダリング
ビューオブジェクトを初期化するとき、出力を生成するのに必要な環境のみがセットアップされます。ビューファイルは読み込まれず、 変数は解釈されず、出力はレンダリングされません。

これは render() メソッドを明示的に呼び出す場合、あるいは ビューオブジェクトを文字列にキャストする(echo すると自動的にそうなります)ときのみ起きます。つまり、ビューは完全に必要になるまで処理されません。 FuelPHP はブラウザに出力する時が来るまで、
### レンダリングしたビューをメモリに保存しない、 ということでもあります。


# FuelPHP
https://www.finddevguides.com/s/fuelphp/fuelphp_quick_guide

https://agency-star.co.jp/column/file-transfer-protocol-software-2/

# FuelPHPメモ
https://qiita.com/TakashiOshikawa/items/6d78735fbe9e2155e797

# FuelPHPでcronから定期実行をする方法
https://qiita.com/narikei/items/80f53ee1b4f5bda82fd0
```
FuelPHPでcronから定期実行をするにはTaskをつかうと良いみたい
こんな感じで/fuel/app/tasksの中にTaskファイルを作成
useで使うクラスを読み込めばControllerと同じようにDBへの接続ができます。
/fuel/app/tasks/test.php
<?php
namespace Fuel\Tasks;
use Fuel\Core\Cli;
use Fuel\Core\DB;
use Fuel\Core\DBUtil;
use Curl\CurlUtil;

class Test
{
    public function run()
    {
        echo "実行する処理";
    }

    public function get_user($name = "nanashi_san")
    {
        echo DB::select('*')->from('users')->where('name', $name)
    }
}
?>
これでTestという名前のタスクができあがります。
タスクはコマンドラインで実行可能！
メソッドを追加して個別に呼び出したり、引数を加えることもできます。
$ php oil refine test
$ php oil refine test:get_user "narita_keisuke"
あとはcrontabにコマンドを追加してあげるだけ
$ crontab -e
0 * * * * php /var/www/oil refine test
これで１時間毎に定期実行されます。
```
https://gray-code.com/php/insert-data-by-using-pdo/
```
// (1)SQLを作成
$sql = "INSERT INTO tablename (
	column1, column2, column3, column4
) VALUES (
	10, 'Value2', 'Value3', '2017-11-10 10:00:00'
)";

// (2)SQL実行（データ登録）
$res = $dbh->query($sql);
// $dbhにはデータベースのハンドラ(PDOインスタンス)が入っている

//$res = $mysqli->query($sql);

var_dump($res);
$dbh->close();
```
https://gray-code.com/php/insert-data-by-using-pdo/

https://www.javadrive.jp/php/pdo/index8.html
# prepareメソッドはqueryメソッドと似たような機能を提供しますが、SQL文の基本部分が同じで値だけ異なるような場合(例えば同じテーブルに値だけ変えて何回もデータを挿入するような場合です)に効率よく行える機能を提供してくれます。
https://itsakura.com/php-mysql-insert

# fuelphpでバッチ処理(oil refineを利用する)
バッチは fuel/app/tasks/ 配下に書く決まりらしい。
run()メソッドはバッチクラスのメインメソッドで実行時にメソッド名無しに呼び出してくれる。
ほとんどはこのrun()メソッドに実装すれば良さそう。ちなみにクラスメソッドでもインスタンスメソッドでも動いた。

https://ameblo.jp/hirown/entry-12194332009.html

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
```
<?php

// 変数の初期化 & 日時の取得
date_default_timezone_set('Asia/Tokyo');
$sql = null;
$res = null;
$dbh = null;
$date = date('Y-m-d H:i:s');

try {
	// DBへ接続
	$dbh = new PDO('mysql:host=127.0.0.1; dbname=test; charset=utf8', 'username', 'password');

	// SQL作成
	$sql = "INSERT INTO user_list (
		name, age, registry_datetime
	) VALUES (
		'テスト太郎', 18, '$date'
	)";

	// SQL実行
	$res = $dbh->query($sql);

} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}

// 接続を閉じる
$dbh = null;
```
