brew upgrade
brew list | grep php

brew uninstall 


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
