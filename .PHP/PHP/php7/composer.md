https://qiita.com/n_oshiumi/items/59ae65219e2ab664eb3f

#composerをインストール
curl -sS https://getcomposer.org/installer | php

#/usr/local/bin/composerに移動させる
sudo mv composer.phar /usr/local/bin/composer

#composerがインストールされているか確認
composer --version

#別の方法で確認
which composer

じゃあcomposer installやってみよう。
composer install
