https://qiita.com/su_mi/items/b9f06a81bdae40b84c61

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
