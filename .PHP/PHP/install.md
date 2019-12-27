brew upgrade
brew list | grep php

brew uninstall 


phpbrew install php-5.4.38 \
    +bz2="$(brew --prefix bzip2)" \
    +zlib="$(brew --prefix zlib)"


https://rskull.hateblo.jp/entry/2018/04/06/164236
brew uninstall php71-igbinary php71-mcrypt php71-opcache php71-redis php71

https://qiita.com/sygnas/items/d0f3bb96d327d5d0b202
PHPBrew を使って PHP をインストール


We first need a deep clone of the Homebrew repo. This may take a while: git -C $(brew --repo homebrew/core) fetch --unshallow
brew log icu4c to track down a commit that references 62.1; 575eb4b does the trick.
cd $(brew --repo homebrew/core)
git checkout 575eb4b -- Formula/icu4c.rb
brew uninstall  --ignore-dependencies icu4c
brew install icu4c You should now have the correct version of the dependency! Now just to...
git reset && git checkout . Cleanup your modified recipe.



Composer programmatically.

//composer
https://getcomposer.org/download/
https://qiita.com/tomk79/items/e6e1db94ea8b661b1e86

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'baf1608c33254d00611ac1705c1d9958c817a1a33bce370c0595974b342601bd80b92a3f46067da89e3b06bff421f182') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"


ln -s ~/.composer/vendor/squizlabs/php_codesniffer/bin/phpcs /usr/local/bin/phpcs
ln -s ~/.composer/vendor/squizlabs/php_codesniffer/bin/phpcbf /usr/local/bin/phpcbf

ln -s share/pear/PHP/ PHP
