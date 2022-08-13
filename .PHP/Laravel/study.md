# example
https://github.com/chigusa-web/laravel9-app-crud

# read page 🔴 🔴
https://chigusa-web.com/

  ### [6] MinIO
  https://www.ritolab.com/entry/232
  
    MinIOはAmazon S3と互換性があるため、Amazon S3と全く同じインタフェース(AWS CLIや、AWS SDK)からもアクセスが可能です(ただし一部、MinIOではサポートしていないAPIもあります)。そのため、本番環境ではAmazon S3を使用するが、開発時には、MinIOで開発／テストを行うなどの用途で利用することができます。
  ```
  config/filesystems.php
   's3' => [
       'driver' => 's3',
       'key' => env('AWS_ACCESS_KEY_ID'),
       'secret' => env('AWS_SECRET_ACCESS_KEY'),
       'region' => env('AWS_DEFAULT_REGION'),
       'bucket' => env('AWS_BUCKET'),
       'url' => env('AWS_URL'), // <- これがあるか確認
       'endpoint' => env('AWS_ENDPOINT'), // <- これがあるか確認
       'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false), // <- これがあるか確認
   ],

  .env
   AWS_ACCESS_KEY_ID=minioadminuser
   AWS_SECRET_ACCESS_KEY=minioadminpassword
   AWS_DEFAULT_REGION=ap-northeast-1
   AWS_BUCKET=YOUR_BUCKET_NAME　
   AWS_USE_PATH_STYLE_ENDPOINT=true
   AWS_ENDPOINT=http://minio:9999
   AWS_URL=http://localhost:9000
  ```
  

 ### [7] mailhog
 Docker環境にメールサーバー構築でMailhogを利用する
 https://laptrinhx.com/docker-laravel-meruno-song-xin-chu-liworokarude-que-rensuru-1410764577/
 
 https://zenn.dev/naoki0722/articles/5b8bd8fdc22bb8
  
 ### [8] selenium
 https://www.selenium.dev
 RPAとは【ロボティック・プロセス・オートメーション】の略で、自動化技術の一種です。
 RPAにも色々なツールがあります。
その中でもブラウザ操作に特化したSelenium(セレニウム)を使った方法を今回はご紹介します。
https://developers.gmo.jp/15591/

#### Selenium API(逆引き)
https://www.seleniumqref.com/api/webdriver_gyaku.html


#### 面倒なブラウザ操作をSeleniumを使って自動化する
https://developers.gmo.jp/15591/

``` python
driver.find_element_by_xpath('取得したXPATH').send_keys("入力したい内容")

#ライブラリ読み込み
from selenium import webdriver
import time

#クロームの立ち上げ
driver=webdriver.Chrome()

#ページ接続
driver.get('https://account.onamae.com/accountCreate')

#キー入力
driver.find_element_by_xpath('//*[@id="lnameML"]').send_keys("なかむら")

#10秒終了を待つ
time.sleep(10)

#クロームの終了処理
driver.close()
```

### ChromeDriver
WebDriver is an open source tool for automated testing of webapps across many browsers
 https://chromedriver.chromium.org/home
 
### Duskって？ テスト環境の構築
https://readouble.com/laravel/9.x/ja/dusk.html

https://qiita.com/mox692/items/533e4d10bef49f126ff9
-ドキュメント
Laravelが標準で用意している、ブラウザの自動操作によるテストAPI。
テスト中はブラウザが勝手に動くのを眺めながらのんびりできます（笑）
Duskは「$php artisan dusk:install」でコマンドインストール後、すぐに使えます。
しかし今回は現場の意向でデフォルトのChromeDriverの使用ではなくseleniumを使用することになりました。

 ###  Laravel8でSelenium+php-webdriverを動かす
 https://www.ukkari-san.net/seleniumlaravel8php-webdriverを動かす/

### sail ---
https://readouble.com/laravel/9.x/ja/sail.html

https://readouble.com/laravel/9.x/ja/sail.html?header=Laravel%2520Dusk

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
