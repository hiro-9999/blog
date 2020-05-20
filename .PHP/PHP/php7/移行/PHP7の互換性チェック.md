https://qiita.com/su_mi/items/b9f06a81bdae40b84c61

# PHP7の互換性チェック
php7ccを使うと既存のソースコードがPHP7に対応しているかどうか、チェックできます。


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


https://solutionware.jp/blog/2019/11/14/%E3%81%93%E3%81%AE%E3%83%96%E3%83%AD%E3%82%B0%E3%81%AEphp%E3%82%925-4%E3%81%8B%E3%82%897-3%E3%81%AB%E3%83%90%E3%83%BC%E3%82%B8%E3%83%A7%E3%83%B3%E3%82%A2%E3%83%83%E3%83%97%E3%81%97%E3%81%9F%E8%A9%B1/
