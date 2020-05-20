# PHP: PHPの静的解析
http://algo13.net/php/tips/static-analysis.html

https://gist.github.com/webgyo/29472ee2fe3e87da49b2d104a0ba9b40

# PHP5からPHP7への移行注意点
https://centosinstall.com/programming/php/php5-php7

https://www.es-i.jp/news/20160729-0051/121

find ./ -type f -print | xargs grep 'mysql_'
find . -type f | xargs grep -l '置換する文字列' | xargs sed -i -e 's/置換する文字列/置換したい文字列/g'

--- メモ ---
strtotime() で日時形式文字列からタイムスタンプ値が得られない
→パラメタで与える文字列に括弧や日本語文字列などが含まれると変換に失敗する　※特に曜日はNG

mb_convert_kana() で文字化け
→元の文字コードを明記

mb_convert_encoding() で文字化け
→元の文字コードを明記

メール送信内容が文字化け
→メール送信前に内部文字コードを宣言する mb_internal_encoding()

pg_NumRows でワーニング
→ pg_num_rows に変更

"\v" が特殊記号に認識された
→表記方法を変更

i18n_jp_hantozen() が無い
→ mb_convert_kana() に変更

is_a()
→ instanceof で代替

オブジェクト関連
→扱う場合は "&" を付けないように

オブジェクトを生成せずに使う関数
→ static で定義する

外部から（オブジェクトを生成せずに）使う関数
→ public で定義する

コンストラクタの重複定義
→クラスと同名の関数と __construct() は同時に定義できない（ワーニング）

$_GET / $_POST の更新処理
→ PHP4 では効いてないようだが PHP5 では効いてるよう

配列を破壊する関数
→まとめて書かずに分ける

クラス内のメンバ変数で const 定義したのが $this->xxx では参照できない
→ self::xxx で参照する

タイムゾーン関連で警告が出る
→ date_default_timezone_set('Asia/Tokyo');

smarty のプラグイン
→バージョンによって入ってたり入ってなかったりするものがあるので注意

エラーのフック処理
→PEAR内で発生するワーニングはスルーするように修正

配列を扱う関数 - array_merge(), in_array()
→配列を指定するパラメタに配列以外を指定したらエラーになるよう

{}による文字列へのアクセス
→PHP6で消えるので非推奨（らしい）

コンストラクタ(クラス名と同じ名前の関数)
→ static は指定できない




# PHP 7 Compatibility Checker(php7cc)
こちらコマンドひとつでPHP7の変更箇所がすぐにわかる便利極まりないツールです。
※公式のGitHubはこちらになります。

まずグローバル環境にインストールします。
http://shimooka.hateblo.jp/entry/20150729/1438141721
1
composer global require sstalle/php7cc
そしてpathを通します。

1
export PATH="$PATH:$HOME/.config/composer/vendor/bin"
ここまで出来たら下記のように調べたいPHPファイルを入力して問題の箇所を調べます。php7ccのあとは手で打つの面倒なのでファイルをドラッグした方が楽かと思います。

1
php7cc 調べたいPHPファイルかディレクトリ
コマンドを実行すると、ターミナルに問題のある行数と何が問題化がざっくり出てくるのでそれを直していけばOKです。
問題がわかればどう直せばいいかはググれば大抵出てくるので、さくさくと解決していけるかと思います。

ちょっとしたプログラムでも目視で調べていくのは非効率で時間がかかるので、こういう便利なツールはどんどん使っていきたいですね。

https://arakaze.ready.jp/archives/5158

# PHP 5からPHP 7へ移行
https://codezine.jp/article/detail/8952?p=4



https://qiita.com/su_mi/items/b9f06a81bdae40b84c61
php7ccは、PHP 5.3-5.6からPHP 7系へ移行する際に互換性のない箇所をリストアップしてくれるコマンドラインツールです。
（※現在はサポートが終了しているツールですので、phan/phanやphpstan/phpstanの使用が推奨されています。）

Composerを使ってphp7ccを導入し、コマンドを叩くと、PHP 7では使えなくなった箇所を指摘してくれます。

問題のあった箇所を自動で修正してくれるツールではありませんので、修正は手動で書き換えをしましょう。

# PHP7の互換性チェック
php7ccを使うと既存のソースコードがPHP7に対応しているかどうか、チェックできます。

# mcrypt対応
https://engineer.blog.lancers.jp/2019/05/finish_php73/
https://github.com/LancersDevTeam/PHP_versionup/blob/master/PHP5.6toPHP7.3/1.1_mcrypt%E5%AF%BE%E5%BF%9C.md

# phan
https://github.com/phan/phan
composer require phan/phan
https://phan.github.io/demo/

# PHPStan
https://phpstan.org/user-guide/getting-started
composer require --dev phpstan/phpstan

# PHPStanについてはオフィシャルのものがあります。これに必要な拡張を入れたりして利用していくことになります。
https://tech.connehito.com/entry/phan-or-phpstan

https://pleiades.io/help/phpstorm/supported-php-versions.html


# 互換性チェックツール
https://qiita.com/suin/items/db7a9bc3b11039346977

PhpStormでのInspection
Preference → Language & Frameworks → PHPの「PHP Language Level」を「7.2」にする。
その上で、「Code」→「Inspect Code」を走らせる。

# PHP7の互換性チェック
PhpStormでPHP5.6→PHP7系の互換性をチェックする

# PHPStan(Web)
https://phpstan.org/

Docker版のPHPStanでほとんどの場合はチェックできますが、中にはプラグイン内部でDIを使って実装されているなど、静的解析で依存関係を拾いきれないものがあります。PHPStanはcomposerのautoloaderを使って云々ということなのでPHPちょっとできるエンジニアはcomposer.jsonをきちんと調整してあげればチェックできるのかなと思いますが、僕はなにもわからないのでWeb版のPlaygroundにコピペしてチェックという原始的な方法に行き当たりました。構文上の問題は検出できるので、今回の目的であればとりあえず事足ります。

php7との互換性チェック
https://tsuyoshi-nakamura.hatenablog.com/entry/2017/10/05/120541

php7ccによる互換性の自動検知
グーペではphp7ccという互換性検知ツールの導入をし
https://tech.pepabo.com/2017/06/21/goope-php71-upgrade/
