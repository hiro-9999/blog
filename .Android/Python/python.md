 brew install python
 ```sql
 $ git clone git://github.com/yyuu/pyenv.git ~/.pyenv
$ echo 'export PYENV_ROOT="$HOME/.pyenv"' >> ~/.bash_profile
$ echo 'export PATH="$PYENV_ROOT/bin:$PATH"' >> ~/.bash_profile
$ echo 'eval "$(pyenv init -)"' >> ~/.bash_profile
```

https://techacademy.jp/magazine/24451

 
 https://qiita.com/ms-rock/items/72b8f1abc661c539bb09
 
 ```
 また、PATHの設定も忘れないようにしましょう。

~/.bash_profile
export PATH=/usr/local/bin:$PATH
```
brew install pyenv
pyenv install -l

pyenv versions
pyenv global 3.7.5
pyenv local 3.7.5
