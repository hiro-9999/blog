# MacOSでのPythonのバージョン切り替え方法

https://techacademy.jp/magazine/24451

pyenv install 3.7.0

python --version

$ pyenv local 3.7.0

$ pyenv global 2.7.12


# 設定ファイルと認証情報ファイルの設定
codecommitを使う前にcilをインストールする
cilをインストールするにはpythonのpipが必要になってくるので先にそれをインストールします。
curl "https://bootstrap.pypa.io/get-pip.py" -o "get-pip.py"

sudo python get-pip.py

次にそのpip使ってcilをインストールします。
sudo pip install awscli

…ここまではうまく行ったんです。ここから秘密鍵とか公開鍵とか登録しようと思ったら。
aws: command not found　が出てきたんです。
で、色々調べたら
⭕️sudo pip install awscli --ignore-installed six

とういうコマンドを見つけたので打ってみました。
そしたら！！！
aws configure

https://qiita.com/sachiko-kame/items/126e0a41acf270d05a73

# 重大更改 – 从 AWS CLI 版本 1 迁移到版本 2
https://docs.amazonaws.cn/cli/latest/userguide/cliv2-migration.html


https://github.com/boto/boto3
