# example
https://github.com/chigusa-web/laravel9-app-crud

### sail ---
https://readouble.com/laravel/9.x/ja/sail.html

# study page 🔴 🔴
https://laracasts.com/

#### Meilisearch 🔴
https://note.com/tomo_program/n/n30c6419a6e27

Rustで実装された全文検索エンジン、という認識。
メイリサーチ　

#### DB table 🔴
https://note.com/tomo_program/n/n65f85e7fa91f

https://note.com/tomo_program/n/n9d9919ac616b

# Laravel環境構築(Mac編) 🔴
https://grune.co.jp/blog/laravel-create-local-environment/

composer create-project "laravel/laravel=9.*" sample

php artisan serve

# reading
https://chigusa-web.com/blog/laravel-beginner/

# Laravel Sail
https://chigusa-web.com/blog/laravel-sail-mac/

# PHP 组件管理工具： composer 
https://labo.kon-ruri.co.jp/composer-macos-install/
```
% brew install composer
% where composer
/opt/homebrew/bin/composer
$ composer -v

% composer -v
   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 2.3.10 2022-07-13 15:48:23

java : maven
ruby: gem
python: pip
```

# laravel sail
https://laravel.com/docs/9.x

https://laravel.com/docs/9.x/sail

curl -s "https://laravel.build/example-app" | bash

https://laravel.com/docs/9.x#getting-started-on-macos

cd example-app
 
./vendor/bin/sail up

http://localhost


% vi ~/.zshrc
以下の内容を追記して保存します。


alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
以下のコマンドで反映させます。


% source ~/.zshrc
改めてSailを起動して、Laravelの画面にアクセスできることを確認してください。


# sail up 🔴
https://chigusa-web.com/blog/laravel-sail-mac/

#### Sailをバックグラウンドで実行します。
sail up -d

#### 停止する
sail down

% sail php --version

% sail artisan list

% sail artisan route:list
```
  GET|HEAD   / .............................................................................................. 
  POST       _ignition/execute-solution ignition.executeSolution › Spatie\LaravelIgnition › ExecuteSolutionC…
  GET|HEAD   _ignition/health-check ... ignition.healthCheck › Spatie\LaravelIgnition › HealthCheckController
  POST       _ignition/update-config ignition.updateConfig › Spatie\LaravelIgnition › UpdateConfigController
  GET|HEAD   api/user ....................................................................................... 
  GET|HEAD   sanctum/csrf-cookie .......... sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show
```

sail node --version

sail npm install

% sail npm run prod

例：
% sail npm run dev
% sail npm run watch


% sail artisan migrate

Laravel v9.24.0 (PHP v8.1.8)

# Xdebugによるデバッグ方法
https://chigusa-web.com/blog/laravel-sail-xdebug/

$ sail up -d  

$ sail php -v
```
routes/web.php
Route::get('/phpinfo', function () {
    phpinfo();
});
```
http://localhost/phpinfo

## .envファイルを開き、以下の一行を追記します。
SAIL_XDEBUG_MODE=develop,debug

//DB creat
$ sail artisan make:migration create_samples_table

// API debug  🔴
$ sail debug migrate

「sail artisan」ではなく「sail debug」で実行するのがポイントです。

//web debug  🔴
http://localhost?XDEBUG_SESSION_START=session_name

http://localhost?XDEBUG_SESSION_STOP=session_name

自動でXdebugが開始されませんので、手動でデバッグを開始します。
URLパラメータに以下を追加してアクセスするとXdebugが開始されます。
#### ?XDEBUG_SESSION_START=session_name

プロジェクト直下に「docker」フォルダが作成されました。
#### sail artisan sail:publish  🔴 自動デバッグ開始設定
docker\8.1\php.ini
以下の内容を追記します。

[xdebug]
xdebug.start_with_request=yes

sail down

sail build --no-cache

$ sail up -d  

# Developing inside a Container  ???
https://code.visualstudio.com/docs/remote/containers


# Lifecycle Overview
https://laravel.com/docs/9.x/lifecycle

# env
https://laravel.com/docs/9.x/configuration#environment-configuration

#### php artisan up
“You can enable the maintenance mode on your Laravel web application using the following command –
### php artisan down

抜粋:
Laravel (8) PHP Framework Handbook | Start From Zero Knowledge.: Ideal programming book for anyone who wants to learn more about the implementation, practical use of Laravel 8.x
H. Thomas, David
この素材は著作権で保護されている可能性があります。
