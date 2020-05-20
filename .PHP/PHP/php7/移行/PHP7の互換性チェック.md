
# PHP 7 Compatibility Checker(php7cc)
こちらコマンドひとつでPHP7の変更箇所がすぐにわかる便利極まりないツールです。
※公式のGitHubはこちらになります。

まずグローバル環境にインストールします。

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
