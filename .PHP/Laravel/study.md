# example
https://github.com/chigusa-web/laravel9-app-crud

https://www.ziruchu.com/art/455

#### 注意哦~，使用 breeze 会自动安装 auth 系统
https://www.ziruchu.com/art/439. <-reading

# ARPU(Average Revenue Per User）とは?
ARPUとは、1ユーザーあたりの平均的売り上げを示す指標で「Average Revenue Per User」の頭文字を取ったものです。主に通信事業のような月額課金モデルのビジネスで使われてきたKPIですが、最近ではスマホゲームなどのゲーム事業でも企業の業績を評価する指標として普及しています。ARPUを求める計算式は「売り上げ÷ユーザー数」で、たとえば月間の売り上げが3億円でユーザー数が6万人であれば、月間のARPUは5000円です。通信事業者の場合、売り上げが通話料やデータ通信料などで構成されるため、通話料を「音声ARPU」、データ通信料を「データARPU」と区別することもあります。
https://www.emotion-tech.co.jp/resource/2018/what_is_arpu

npm run dev 后需要重新开一个窗口或终端本次运行，然后执行 migrate
https://www.ziruchu.com/art/439

### 使用 bootstrap5
php artisan ui bootstrap --auth

若不需要使用 auth 系统，可以直接安装 php artisan ui bootstrap
https://www.ziruchu.com/art/442


# Laravel9.x Rest Api passport验证
https://www.ziruchu.com/art/443
```php
 sail artisan make:controller Api/AuthController 
 sail composer require laravel/passport
 sail php artisan migrate
 生成客户端秘钥
 sail  php artisan passport:install
// routes/api.php
Route::post('login', [\App\Http\Controllers\Api\AuthControler::class, 'login']);
Route::post('register', [\App\Http\Controllers\Api\AuthControler::class, 'register']);
```
# 不使用Laravel的paginate进行分页。
取出指定条数的数据并对其进行分页。如用户表取出指定的1000条数据，并对这1000条数据进行分页。
https://www.ziruchu.com/art/431
``` php
class DemoController extends Controller
{
   public function index(Request $request)
   {
       // users数据集合对象
       $users = User::limit(1000)->get();
       // 页码
       $page = $request->page ?? 1;
       //每页的条数
       $perPage = 100;
       //计算每页分页的初始位置
       $offset = ($page * $perPage) - $perPage;
       // slice方法对对象进行分页
       $users =new LengthAwarePaginator($users->slice($offset, $perPage), count($users), $perPage,$page, ['path' => $request->url(), 'query' => $request->query()]);

       return UserResource::collection($users);
   }
}
```

### Laravel9 自定义command&定时调用任务
https://www.cnblogs.com/chihuobao/p/16502323.html


### Laravel9框架的路由探讨
https://baijiahao.baidu.com/s?id=1740310227888823544&wfr=spider&for=pc


# 防XSS攻击
https://www.kancloud.cn/qq291601203/laravel_cms/2742056
```
安装：
> composer require mews/purifier
在 config/app.php 文件的 providers 数组添加以下
Mews\Purifier\PurifierServiceProvider::class,
发布配置
> php artisan vendor:publish --provider="Mews\Purifier\PurifierServiceProvider"
> php artisan vendor:publish --provider="Mews\Purifier\PurifierServiceProvider"
修改配置 config/purifier.php 增加自定义配置 jiuge_config
return [
    ...
    'settings'         => [
        ...
        'jiuge_config'      => [
            'HTML.Doctype'             => 'XHTML 1.0 Strict',
            'HTML.Allowed'             => 'div,b,strong,i,em,a[href|title],ul,ol,li,p[style],br,span[style],img[width|height|alt|src],pre,code',
            'CSS.AllowedProperties'    => 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align',
            'AutoFormat.AutoParagraph' => true,
            'AutoFormat.RemoveEmpty'   => true,
        ],
    ],
];
```

🔴Laravel 9 中文文档  🔴
https://learnku.com/docs/laravel/9.x
```
Laravel 9 正式版已发布，新功能包括：使用 PHP v8.0、控制器路由组、新的默认 Ignition 错误页面、Laravel Scout 数据库引擎、集成 Symfony Mailer、Flysystem 3.x、改进的 Eloquent 访问器/修改器，以及更多功能。
Laravel 9 主要新功能：
使用的 PHP 版本最低要求是 PHP 8
为 routes:list 引入新设计
新增 --coverage 测试选项，可直接在终端显示覆盖率
默认使用匿名存根迁移 (Anonymous Stub Migrations)
新的查询器构建接口
支持 PHP 8 字符串函数
将邮件功能从 SwiftMailer 迁移至 Symfony Mailer
Flysystem 3.x
优化 Eloquent 访问器/修改器
使用 Enums (PHP 8.1) 的隐式路由绑定
控制器路由组
Enum Eloquent 属性转换
强制范围绑定
Laravel Breeze API & Next.js
Laravel Scout 数据库引擎
全文索引 / Where 子句
渲染内联 Blade 模板
Soketi Echo 服务器
可选的 Bootstrap 5 分页视图
优化 Ignition 异常页面
新的 str() 和 to_route() 辅助函数
```

https://chigusa-web.com/blog/laravel-beginner/

2）.env文件
用以存储一些依赖环境的变量，比如数据库配置，因为它不会被加入到版本库中， 所以还用以配置一些敏感信息：比如正式环境的一些第三方应用账号，token 等。
![mvc](https://github.com/hiro-9999/blog/blob/master/.PHP/Laravel/1062096-20200907121628814-735488605.png)

app/Providers/RouteServiceProvider.php

1）web.php
https://www.cnblogs.com/hld123/p/13626173.html?share_token=abc73691-86f2-436f-8fcf-c9240ccda13d&tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_android&utm_campaign=client_share

文件包含的路由通过 RouteServiceProvider 引入，都被约束在 web 中间件组中，因而支持 Session、CSRF 保护以及 Cookie 加密功能，如果应用无需提供无状态的、RESTful 风格的 API，那么路由基本上都要定义在 web.php 文件中

2）api.php

文件包含的路由通过 RouteServiceProvider 引入，都被约束在 api 中间件组中，因而支持频率限制功能，这些路由是无状态的，所以请求通过这些路由进入应用需要通过 token 进行认证并且不能访问 Session 状态。

5、中间件

提到中间件，那一定离不开app/Http/Kernel.php这个文件

1) kernel

Kernel 中定义了重要的中间件列表，所有的请求 request 在被应用处理前，都必须经过这些中间件，筛过一遍后，才会被决定如何处理。这涉及到中间件（middleware）的作用。

App\Http\Kernel


### アプリケーションの実装  🟡
https://chigusa-web.com/blog/laravel-crud/

https://chigusa-web.com/blog/laravel-fullcalendar/

###【Laravel】翻訳できるWebアプリを作ろう【DeepL】 🟡
https://chigusa-web.com/blog/laravel-deepl/

https://chigusa-web.com/blog/laravel-chart-js/


# Developing inside a Container  ??? 🟡
https://code.visualstudio.com/docs/remote/containers


###  LaravelにTypeScriptを導入 🟡
//https://chigusa-web.com/blog/laravel8-typescript/

https://laravel-news.com/typescript-laravel

sail npm install ts-loader typescript --save-dev
```
tsconfig.json
{
    "compilerOptions": {
        "target": "es5",
        "module": "es2020",
        "moduleResolution": "node",
        "baseUrl": "./",
        "strict": true,         // Enable strict type-checking options
        "skipLibCheck": true,   // Skip type checking of declaration files
        "noImplicitAny": false  // Bypass raising errors on `any` type
    },
    "include": ["resources/js/**/*"] // Frontend paths pattern
}
```

# vite 🔴
https://readouble.com/laravel/9.x/ja/vite.html
```
# next.js 
https://github.com/laravel/breeze-next


#Eloquent ORM
https://readouble.com/laravel/9.x/ja/eloquent.html

```

# phpMyAdminのインストール  🔴
https://chigusa-web.com/blog/laravel-sail-phpmyadmin/

phpMyAdminに関する情報を、servicesブロック内に追記します。
```
  phpmyadmin:
       image: phpmyadmin/phpmyadmin
       links:
           - mysql:mysql
       ports:
           - 8080:80
       environment:
           #PMA_USER: "${DB_USERNAME}"
           #PMA_PASSWORD: "${DB_PASSWORD}"
           PMA_HOST: mysql
       networks:
           - sail
 .env          
 DB_USERNAME=sail
DB_PASSWORD=password

sail up

http://localhost:8080
```


### 【Laravel】Vue.js v3導入とComposition API実装 🔴
https://blog.capilano-fw.com/?p=10747

//https://chigusa-web.com/blog/laravel-vue3/

https://v3.ja.vuejs.org/
```
sail up -d
sail npm install vue@next

sail npm run build　🔴
sail npm run dev　🔴

http://localhost


vite.config.js
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(),
    ],
    // server: {
    //     host: true
    // }
});

resources/js/app.js
import './bootstrap';

import { createApp, ref } from 'vue/dist/vue.esm-bundler';

createApp({
    setup() {

        const greeting = ref('おはよyama！2020');

        return {
            greeting,
        }

    },
}).mount('#app');

resources/css/app.css
h1 {
    color: #ff0000;
}

resources/views/welcome.blade.php
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <h1>
            Vite のテストです!!!hahah
        </h1>
        <div id="app">
            <span v-text="greeting"></span>
        </div>
    </body>
</html>
```


###  脆弱性対策  🔴
https://chigusa-web.com/blog/laravel-sql-injection/
**** whereRawを極力使用しないほうが良いでしょう

OWASP ZAPを使用して、Webの脆弱性診断を行ってみます。OWASP ZAPはオープンソースで無料で使うことができます。
#### MacのOWASP ZAPで動作確認
https://chigusa-web.com/blog/owasp-zap-mac/

https://chigusa-web.com/blog/owasp-zap-install/

## 【GitHub】プロジェクトリポジトリにプッシュ 🔴
https://chigusa-web.com/blog/github-push/

https://chigusa-web.com/blog/laravel-github-clone/

####【Laravel9】認証機能の導入 (Breeze) 🔴
https://chigusa-web.com/blog/laravel8-breeze/
```
$ sail composer require laravel/breeze --dev
sail php artisan breeze:install
$ sail npm install
$ sail npm run dev
http://localhost/register
http://localhost/login
```

### 外部サーバーへ公開 
https://chigusa-web.com/blog/heroku-laravel/

$ npm run prod

https://chigusa-web.com/blog/xserver-laravel/


###【Laravel】AdminLTEを導入 🔴
https://chigusa-web.com/blog/laravel-adminlte/
```
$ sail composer require jeroennoten/laravel-adminlte
$ sail php artisan adminlte:install

# AdminLTEの導入状況を確認します。
$ sail php artisan adminlte:status

$ sail php artisan adminlte:install --only=auth_views
```
Web アプリケーションの画面を作成する際、レスポンシブデザイン対応など、イチから作成するのは非常に手間です。

そんな時は、出来合いのテンプレートを使い、サクッとアプリケーションを作成しましょう。
「AdminLTE」というパッケージを導入します。


# study page 🔴 🔴
https://laracasts.com/

# read page 🔴 🔴
https://chigusa-web.com/

https://chigusa-web.com/blog/laravel-to-sail/

 
# Artisan アーティザン  🔴
https://knowledge.cpi.ad.jp/howto-cpi/laravel-artisan/
Artisan とは、PHP フレームワーク『 Laravel 』に搭載されているコマンドラインインターフェースのことです。読み方は「アーティザン」で「職人」を意味する言葉でもあります。
Artisan には、ファイルの作成や設定ファイルのキャッシュ、データベースの操作など様々な機能が含まれています。
今回はArisan の中でも、 Laravel の実装に欠かせないコントローラーやモデル、マイグレーションファイルなどを、雛形（あらかじめ用意されているテンプレート）をもとに作成する Artisan make コマンドについて説明いたします。
```
sail artisan list  🔴
sail artisan route:list
https://chigusa-web.com/blog/laravel-sail-mac/

% sail npm run prod

例：
% sail npm run dev
% sail npm run watch

% sail artisan migrate

sail artisan make:controller HelloController　--resource //コマンドに引数 「 –resource 」を与えると、Web アプリケーションで典型的な操作を行うためのメソッド（初期表示、登録、変更、削除など）があらかじめコントローラーに追加された状態で作成されます。

# コントローラーの作成
sail artisan make:controller <コントローラー名> //app/Http/Controllersの配下
sail artisan make:controller HelloController //app/Http/Controllers/HelloController.php

# モデルの作成
sail artisan make:model <モデル名>
sail artisan make:model Hello //app/Models/Hello.php

# マイグレーションファイル（テーブルの操作定義）の作成
sail artisan make:migration <マイグレーションファイル名> --create=<モデル名>
sail artisan make:migration create_hello_table --create=hello
sail artisan migrate

# オリジナルコマンド用のコマンドクラスを生成する
sail artisan make:command UserCountCommand

Laravel にはコマンドスケジューラという機能があります。
https://knowledge.cpi.ad.jp/howto-cpi/laravel-command/. <- not good ---- need to search again!!!

#「ログイン機能」
sail artisan make:auth
https://knowledge.cpi.ad.jp/howto-cpi/laravel-login/

# キャッシュクリアを実行してください。
sail artisan clear-compiled
sail artisan optimize
sail artisan view:clear

# 初期データを登録するシーディング( Seading )機能と、ダミーの氏名や住所、メールアドレス、電話番号などを簡単に自動生成できるFakerライブラリ
シーダーファイル ( Seader file )
# 管理者ユーザー用のシーダーファイルを生成する
sail artisan make:seeder AdminUserSeeder
https://knowledge.cpi.ad.jp/howto-cpi/laravel-faker/

# テストユーザー用のシーダーファイルを生成する
sail artisan make:seeder TestUserSeeder

sail composer dump-autoload
https://search.readouble.com/?query=sail+..%2Fcomposer.phar
sail composer require laravel/octane spiral/roadrunner 🔴 
sail composer require

# シーダーファイル単体を実行する
sail artisan db:seed --class=AdminUserSeeder

sail artisan migrate:refresh
sail artisan db:seed
or
sail artisan migrate:refresh --seed

# Faker ライブラリの使い方  🔴
Laravel では、Factory::create プロシージャを呼び出すだけで、様々なダミーデータを自動生成することができます。
https://knowledge.cpi.ad.jp/howto-cpi/laravel-faker/
//100件のテストユーザーを登録する 
    for( $cnt = 1; $cnt <= 100; $cnt++ ) { 
      $faker = Faker\Factory::create('ja_JP');
 
      User::create([
      'name' => $faker->lastName. ' ' . $faker->firstName,
      'email' => $faker->email,
      'password' => Hash::make('testtest'),
      ]);
      }
    }
```

###### VNC 「Virtual Network Computing」の略だよ

# データベースを見る   🔴
https://knowledge.cpi.ad.jp/howto-cpi/laravel-migration/

```
public function up()
{
  Schema::table('hello', function (Blueprint $table) {
  $table->string('hello', 20)->change(); //バイト長の制約を追加
  $table->renameColumn('world', 'laravel'); //カラム名を変更
  $table->integer('suuji')->nullable(); //整数型のカラム「suuji」を追加
});
｝

前回のマイグレーションをロールバック
sail artisan migrate:rollback

sail artisan migrate:rollback --step=<数字>

全マイグレーションのロールバック
sail artisan migrate:reset


sail artisan migrate:refresh
すべてのテーブルを削除して、初めから順番にマイグレーションを実行します。
全テーブルのレコードを削除するのと同じです。
開発用に登録したテストデータを削除する際などに便利です。
```

### Laravel の特徴として、ビューには blade テンプレートが標準搭載されています。
https://knowledge.cpi.ad.jp/howto-cpi/laravel-artisan/
ビューは Artisan make コマンドでは作ることができませんので、自分でファイルを作る必要があります。
作成したファイルは resources/views に格納してください。




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


#### 面倒なブラウザ操作をSeleniumを使って自動化する 🟠
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
 
### Duskって？ テスト環境の構築　🔴
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
