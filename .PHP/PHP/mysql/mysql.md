# サーバータイムアウト
set global wait_timeout = 28800;

https://qiita.com/RyutaKojima/items/3772d695db5e2342ab47

https://yoku0825.blogspot.com/2017/08/error-2006-mysql-server-has-gone-away.html

https://qiita.com/yut_h1979/items/cb12749e23478f45a939

事前準備：
# my.cnf に wait_timeout=60 の設定を記述して mysql サーバを再起動しておく。
対話型モードでの実行：
wait_timeout は 28800 になる。
% mysql -u root


# 要するに、セッションローカルの wait_timeout のデフォルト値は以下の通りになる。
接続が対話型（CLIENT_INTERACTIVE オプション有り）の場合は interactive_timeout のグローバル変数値

接続が非対話型（CLIENT_INTERACTIVE オプション無し）の場合は wait_timeout のグローバル変数値
