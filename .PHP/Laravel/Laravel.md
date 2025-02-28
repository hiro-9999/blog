# Laravel 速查表 🔴
https://learnku.com/docs/laravel-cheatsheet/9.x

http://laravel.jp 🔴
https://laravel.com 🔴

https://shishido.dev/laravel-paginator/


Practical Laravel: Develop clean MVC web applications
https://github.com/PracticalBooks/Practical-Laravel

https://stackoverflow.com/questions/35643192/laravel-eloquent-limit-and-offset

``` php
  $page = $request->has('page') ? $request->get('page') : 1;
        $limit = $request->has('limit') ? $request->get('limit') : 10;

        $books = Book::where('status', 0)->limit($limit)->offset(($page - 1) * $limit)->get()->toArray();
```


## Laravel+GraphQL Lighthouse  🔴
https://don-bu-rakko.com/laravel-%E3%81%A7-graphql-%E3%82%92%E4%BD%BF%E3%81%88%E3%82%8B%E3%82%88%E3%81%86%E3%81%AB%E3%81%99%E3%82%8B%EF%BC%81-lighthouse%E3%83%8F%E3%83%B3%E3%82%BA%E3%82%AA%E3%83%B3/

https://akamist.com/blog/archives/5478

https://qiita.com/ucan-lab/items/e7c151133541fbeaebe9

https://lighthouse-php.com/tutorial/#what-is-graphql

## Lighthouse doc
https://lighthouse-php.com/master/api-reference/directives.html#enum

https://github.com/nuwave/lighthouse

プログラミングにおける指示（英: directive，ディレクティブ）


# GraphQL

Laravel 9.x Documentation

Laravel: The Modular Way

Laravel queues in action

Domain-Driven Laravel Learn to Implement Domain-Driven Design Using Laravel (Jesse Griffin) (z-lib.org)

Design Patterns in PHP and Laravel (Kelt Dockins) (z-lib.org)

Build an API with Laravel by Wacky Studio (Thomas Gamborg Nørgaard) (z-lib.org)

Design Patterns in PHP and Laravel (Kelt Dockins) (z-lib.org)

Easy Laravel 5 - A Hands On Introduction Using A Real World Project (W. Jason Gilmore) (z-lib.org)

Full-Stack Vue.js 2 and Laravel 5 Bring the frontend and backend together with Vue, Vuex, and Laravel (Anthony Gore) (z-lib.org)

Laravel  Code Smart (Dayle Rees) (z-lib.org)
	
BaseLaravel

# video  🟠 Laravel 新手入门教程
https://www.youtube.com/hashtag/laravel%E5%AD%A6%E4%B9%A0

https://www.youtube.com/watch?v=-RhVH2iyTJA&ab_channel=%E7%8C%BF%E6%8A%80%E6%9C%AF

### Laravel高级实战教程
https://www.youtube.com/channel/UCr7rhORaDfGjsj3vPql4MTw

# Scout
Laravel ScoutはLaravelのドキュメントサイトでも利用されているような全文検索を行うためのパッケージです。
% composer require laravel/scout
https://reffect.co.jp/laravel/laravel-scout

# Laravel code
https://github.com/laravel/framework/blob/5.8/src/Illuminate/Support/ServiceProvider.php

# Laravel 编码技巧 🔴
https://learnku.com/docs/laravel-tips/8.x

### mix doc
https://github.com/laravel-mix/laravel-mix/blob/master/docs/hot-module-replacement.md

# Laravel ララベル 🔴
https://learnku.com/docs/laravel/9.x/laravel-vite-compiles-assets/13052

https://laravel.com/

https://chigusa-web.com/blog/laravel-sail-mac/ ->insatll by sail

https://hnavi.co.jp/knowledge/blog/laravel/

https://github.com/illuminate/contracts


＃ vedio study 🔴
https://learnku.com/articles/71862

https://laracasts.com

https://laravel-news.com

# Facade
https://qiita.com/minato-naka/items/095f2a1beec1d09f423e

## 6.0 install docker
https://www.chickensblog.com/laravel-docker/

https://yutaro-blog.net/2021/05/25/docker-laravel-vuejs-m1/

https://grune.co.jp/blog/laravel-create-local-environment/

https://zenn.dev/yasumasaabe/articles/enviroment-setting

https://qiita.com/joh_luck/items/f3321ee81166aea0ff3b

# pakage find 🔴
https://packagist.org/

### PHP 开发的规范即 PSR 编码规范标准
https://www.php-fig.org

### composer page
https://getcomposer.org

https://www.vagrantup.com/downloads

https://www.virtualbox.org/wiki/Downloads

# API
php artisan make:controller Api\DogsController --api
https://laravel.com/docs/9.x/eloquent-resources

https://apisyouwonthate.com

# Flysystem
php artisan storage:link
https://github.com/thephpleague/flysystem

# session
https://laravel.com/docs/master/session

# cache
https://laravel.com/docs/master/cache


# log
https://github.com/timacdonald/log-fake


# mail
https://laravel.com/docs/5.2/mail

https://mailtrap.io

php artisan make:mail AssignmentCreated --markdown=emails.assignment-created

# test  🔴
php artisan make:test UserTest
https://laravel.com/docs/5.3/testing

https://learnku.com/articles/71834

>Mocking Facades
 php artisan dusk:make RatingTest
 
 php artisan dusk:page CreatePackage
 https://laravel.com/docs/9.x/dusk
 
  .env.dusk.local (and you can replace .local if you’re working in a different environment, like “staging”).
  https://qiita.com/qwe001/items/96a83fadcfaeb3cd4a6e
  APP_ENV=staging
APP_DEBUG=false
https://www.larajapan.com/2022/05/09/laravelはどの環境で実行されている？/

https://laravelupandrunning.com/docs/laravel-up-and-running-1e-testing-chapter.pdf

### LaravelのModelの命名規則
https://www.wakuwakubank.com/posts/453-laravel-sql-basic/

 php artisan make:model Fruit -m    
 
https://codelikes.com/laravel-model/ 🔴
LaravelのModelの名前はテーブルに対して、単数形で書くように決まっています。
https://www.jianshu.com/p/98e5de87816d/

https://www.cnblogs.com/caibaotimes/articles/13603418.html


例えば、テーブル名がusersの場合はモデル名はUserになります。
先ほどのようにテーブル名がfruitsの場合はモデル名はFruitです。

複数の単語でテーブルを作成する場合は、アンダーバーで繋ぐスネークケースになります。
対応するモデルはキャメルケースで書きます。
例えば、テーブル名がuser_fruitsの場合はモデル名はUserFruitになります。

このように、テーブル名とモデル名を決められた規則で作成することで、Eloquentを使用して対象のテーブル操作が可能です。
先ほどのコマンドを使用して、モデルと一緒にマイグレーションファイルを作成するとテーブル名をつけてくれるので楽です。

### schedule
* * * * * php /home/myapp.com/artisan schedule:run >> /dev/null 2>&1

https://codelikes.com/laravel-command-scheduling/

https://qiita.com/Takuma_Ikeda/items/1323e5a6bea51860ed57

https://psysh.org

$ php artisan dump-server

### Providers 🟠
https://laravel-news.com/service-providers

让我们从 Laravel 中包含的默认服务提供者开始，它们都在 app/Providers 文件夹中：
https://learnku.com/laravel/t/67406

 我们新建一个类或一个接口来提供某种服务， 此时有三个对象， 服务（也就是我们新建的类或接口）， 服务提供者（也就是 laravel 的 ServiceProvider）, 容器（也就是 container app()）

我们通过服务提供者， 把一个服务 注册到 容器中
laravel的服务容器，服务提供者Provider，门面facade的理解  🟠
https://www.361shipin.com/blog/1552780834228928512

IoC (inversion of control) container

AppServiceProvider
AuthServiceProvider
BroadcastServiceProvider
EventServiceProvider
RouteServiceProvider


https://qiita.com/ucan-lab/items/738abfd650be76333da6
config/app.php の providers に登録されているサービスプロバイダーはLaravelアプリケーションにリクエストの際に自動的に読み込まれます。

https://blog.csdn.net/wuxing164/article/details/106155301

php artisan optimizeしてキャッシュをクリアする必要があります。
https://progtext.net/programming/laravel-service-provider/

# Validator
https://qiita.com/gone0021/items/c613ef7e006b6f5d47ce
```php
Validator::make($request->all(), [
    'name' => 'required',
    'age' => 'integer | between:0,150',
    'sex' => ['max:1', 'regex:/^[男|女]+$/u'],
  ])->validate(); // validateメソッドによるリダイレクト
  return view('sample.index', ['msg' => 'OK']);
```

```php
  php artisan preset react
    php artisan preset bootstrap
    php artisan preset none
    
// PostsController
https://laravel.com/docs/5.1/pagination
public function index() {
return view('posts.index', ['posts' => DB::table('posts')->paginate(20)]); }
Example 6-15 specifies that this route should return 20 posts per page,

    
ddはLaravelで開発する時にデバックで使います。
https://qiita.com/Hashimoto-Noriaki/items/e7546bff8a3e2e42aa9b

uuid:
composer require goldspecdigital/laravel-eloquent-uuid:^8.0
https://qiita.com/howaito01/items/b529af6f4d3112b91818

use Illuminate\Support\Str;
$uuid = (string) Str::uuid();
https://zenn.dev/nshiro/articles/07b1e4834b9214

 php artisan make:model Fruit -mcr  
-m 将创建一个迁移文件
-c 将创建一个控制器
-r 表示控制器应该是一个资源控制器

// 方法1：deleteで削除
DB::table('users')->delete();

// 方法2：トランケートで削除
DB::table('users')->truncate();
// 全件削除する
User::query()->delete();
トランケートを用いることも可能です。トランケートの場合、DBの自動採番もリセットできます。しかし、ロールバックができないので注意が必要です。
User::truncate();

20 个 Laravel Eloquent 必备的实用技巧
https://blog.csdn.net/summerliguilong/article/details/79984042 🟠
protected $primaryKey = 'uuid'; // 更换主键
public $incrementing = false; // 设置 不自增长
protected $perPage = 25; // 定义分页每页显示数量（默认15）
const CREATED_AT = 'created_at';
const UPDATED_AT = 'updated_at'; //重写 时间字段名
public $timestamps = false; // 设置不需要维护时间字段


https://leben.mobi/blog/laravel_orderby_eloquent/php/

https://zenn.dev/yum3/articles/t_laravel_eloquent_performance パフォーマンスを上げる
<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\User;
   
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select("*")
                        ->where("status", 1)
                        ->orderByDesc("name")
                        ->get();
   
        dd($users);
    }
}

SELECT カラム名 FROM テーブル名 LIMIT 取得件数 OFFSET 開始位置;

//以下の書式も可能
SELECT カラム名 FROM テーブル名 LIMIT 開始位置,取得件数;

```
## scout
https://learnku.com/docs/laravel/5.5/scout/1346

# books 🔴
```
Laravel框架关键技术解析 ->good 2022/9/22

Beginning Laravel -> not good
php artisan serve
php artisan routes
php artisan –list -> Controller staff
php artisan controller:make UserController

php artisan route:cache
php artisan route:clear

@unless ($condition) is the same as <?php if (! $condition)
Laravel Up  Running A Framework for Building Modern PHP Apps (Matt Stauffer) (z-lib
@forelse ($talks as $talk)
• {{ $talk->title }} ({{ $talk->length }} minutes)<br>
@empty
No talks this day.
@endforelse

bladeで改行したいだけ（nl2br） https://techracho.bpsinc.jp/wingdoor/2020_06_11/92793
改行されて表示することができます。
{!! nl2br(e($value)) !!}
// Binding
Blade::directive('ifPublic', function () {
return "<?php if (app('context')->isPublic()): ?>";
});
// In use
@ifPublic
    &copy; Copyright MyApp LLC
@else
&copy; Copyright {{ app('context')->client->name }}
@endif
// Binding
Blade::if('ifPublic', function () { return (app('context'))->isPublic();
});
Schema::dropIfExists('contacts');

Eloquent
https://migisanblog.com/laravel-eloquent-relation/
https://qiita.com/shosho/items/5ca6bdb880b130260586
https://readouble.com/laravel/8.x/ja/eloquent.html

Practical Laravel: Develop clean MVC web applications
https://github.com/PracticalBooks/Practical-Laravel

Laravel: Up & Running: A Framework for Building Modern PHP Apps

Laravel 9.x Documentation


 return redirect('/');  

Laravel: The Modular Way

Laravel queues in action

LARAVEL FOR BEGINNERS
	
BaseLaravel
```

```php
middleware 🟠
https://progtext.net/programming/laravel-middleware/
php artisan route:list
https://blog.capilano-fw.com/?p=3987
middleware https://codelikes.com/use-laravel-middleware/
https://qiita.com/ktanoooo/items/a746a96b12489ae56553

{{ HTML::link_to_action('users@login') }}  

apt-get update
apt-get install curl
curl -sS https://getcomposer.org/installer | php

composer -v
composer install
composer update

composer create-project --prefer-dist laravel/laravel appname

php artisan test --coverage


  <?php
    class A {
        public function call()
        {
             echo "Hello  wshuo";
} }
$ref = new ReflectionClass('A');  //反射机制
$inst = $ref->newInstanceArgs(); $inst->call();
输出:Hello wshuo

//config/database.php
'default' => env('DB_CONNECTION', 'mysql'),
It’s MySQL. We’re not going to change it for now although it’s temporary, because in the later part of the book we’ll see how we can work with SQLite database. At present just keep it as it is – our default database is MySQL. Now opening up our ‘.env’ file we add our database, username, and password.
//.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=testdb
DB_USERNAME=root
DB_PASSWORD=pass

php artisan make:migration create_tasks_table --create="tasks"
php artisan migrate
php artisan make:migration add_reminder_to_tasks_table --table="tasks"

//creating model task
php artisan make:model Task

//adding to database table ‘tasks’ by tinker
php artisan tinker

php artisan make:TaskController

php artisan make:middleware RoleMiddleware



app:主要包含应用程序的核心代码，用户构建应用的大部分工作都在这个目录下进行， 包括路由文件、控制器文件、模型文件等。
bootstrap:主要包含几个框架启动和自动加载配置的文件。
config :主要包含应用程序常用的配置文件信息。
database: 主要包含数据库迁移和数据填充文件。 
public:为应用程序的入口目录，包含应用程序入口文件 index.php，同时包含静态资源文件如 CSS、JavaScript、images 等。
resources :主要包含视图文件。
storage :包含编译后的 Blade 模板、基于文件的 session、文件缓存和日志等文件。
tests :主要包含自动化测试文件。
vendor: 主要包含依赖库文件，其中包括 Laravel 框架源代码。 
.env 文件:一个重要的文件，为 Laravel 框架主配置文件。 
composer.json 文件:composer 项目依赖管理文件。

php artisan list make

1,laravel\app\Http\routes.php
Laravel 框架应用程序的路由大部分记录在 laravel\app\Http\routes.php 文件中，该文件在 应用程序路由服务提供者启动过程中，通过 app\Providers\Route-ServiceProvider.php 文件中 的 map() 方法和代码“require app_path('Http/routes.php');”进行加载
Route::match(['get', 'post'], '/', function(){ return 'Hello Laravel';});
Route::any('home', function(){  return 'Hello Laravel';});
  Route::get('user/{id}',function($id){
        return '$id='.$id;
    });
 
 Route::get('user/{name}', function($name)
    {
        return '$name'.$name;
    })->where('name', '[A-Za-z]+');
    
  Route::get('user/{id}/{name}', function($id, $name)
    {
        return '$id='.$id.'and'.'$name='.$name;
    })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

2.控制器类 通常放在 laravel/app/Http/Controllers 目录下
控 制器类名称和函数名称，两个名称中间用“@”符号隔开。下面给出基础控制器路由的实例:
    Route::get('home/{ name }', 'HomeController@index');
控制器路由:
    Route::get('home/{id}/{name?}', 'HomeController@index');
控制器:
    <?php     namespace App\Http\Controllers;
    use Illuminate\Routing\Controller as BaseController;
    class HomeController extends BaseController
    {
        public function index($name,$id=null)
        {
            return 'Hello,'.$name.','.$id;
} }
接收方式与顺序有关，与名称无关，且可选路由 参数放在路由参数之后。


隐式控制器路由:
    Route::controller('home', 'HomeController');
控制器类:
    <?php    namespace App\Http\Controllers;
    use Illuminate\Routing\Controller as BaseController;
    class HomeController extends BaseController
    {
       public function getIndex($username)
        {
            return 'Hello'.$username;
} }
通过设置如上形式的隐式控制器路由，当客户端发出 URL 地址为 www.laravelstudy. com/home/index/xiaoming 的 GET 请求时 (xiaoming 为路由参数 )，控制器 HomeController 类 中的 getIndex($username) 函数将对请求进行处理，即请求地址为“主机地址 / 路由前缀 / 控 制器方法名 / 路由参数”结构时，控制类中的处理函数名为请求方法加上控制器方法名，其 中控制器方法名首字母要大写。如果请求方法不加限制，也可以用 anyIndex($username) 这 样的方法名。这里需要注意两点，一是路由前缀可以为“/”，二是控制器方法名为多个单 词 ( 如 getHomeIndex) 时，请求地址不能是 homeIndex 的形式，而应该是 home-index 的形式， 否则无法对请求正确路由。


Route::resource(' 根资源标识 ', ' 控制器类名 ');


在 Laravel 框架中，视图文件是以“.blade.php”后缀命名的
    public function index()
     {
            return view(index);
}
3,laravel/resources/views/
默认情况下，上述实例会加载 laravel/resources/views/index.blade.php 文件，如果视图文 件是存放在 laravel/resources/views/ 的子文件夹内，比如，如果视图文件是 laravel/resources/ views/user/login.blade.php，则可以通过以下代码返回视图文件。
    public function index()
    {
            return view('user.login');
}
  同时，也可以以更加直观的文件夹格式返回视图文件。
    public function index()
    {
            return view('user/login');
}

   public function index()
    {
        $data = ['username'=>'xiaoming', 'age'=>18];
        return view('index',$data);
    }
通过 with() 函数方式:
    public function index()
    {
        return view('index')->with('username','xiaoming')->with('age',18);
}
通过 with 加变量名方式:
    public function index()
    {
        return view('index')->withUsername('xiaoming')->withAge(18);
}

1, IoC(Inversion Of Control， 控制反转)容器的概念
 当用 new 关键字在一个组件内部实例化一个对象时就解决了一个依 赖，但同时也引入了另一个严重的问题——耦合。
 将这种依赖关系通过动态注 入的方式实现，这就是 IOC 模式的设计思想。

2,即找出程序中会变化的方面， 然后将其和固定不变的方面相分离(Head First 设计模式)。一种简单的实现方案是利用工 厂模式，这里我们只用简单工厂模式实现，当然也可以用工厂方法模式。

3,Dependency Injection依赖注入是指组件的依赖通过外部以参数或其他形式注入
依赖注入需要通过接口来限制，而不能随意开放，这 也体现了设计模式的另一个原则——针对接口编程，而不是针对实现编程。

4,通过 IoC 容器可以实现自动依赖注入。
通过反射机制完 成的，对此不清楚的读者可以查看 PHP 的重要性质这一章关于反射机制

5,服务容器是通过 Illuminate\Container\Container 类来实现的
文件 Illuminate\Container\Container.php
// 容器绑定数组
protected $bindings = [];
// 容器共享实例数组
protected $instances = [];
$bindings 用于存储提供服务的回调函数，而 $instances 用于存储程序中共享的实例，也可以 称为单例。

CSRF（Cross-Site Request Forgeries、クロスサイトリクエストフォージェリ）は、Webシステムを悪用したサイバー攻撃の一種です。

 Laravel 框架提供了依赖自动注入
 
 对于服务提供者类可以通过 artisan 命令“php artisan make:provider TestServiceProvider” 来创建，而创建后 TestServiceProvider.php 文件会存放在 laravel\app\Providers\ 目录下
 的注册配置文件是 config\app.php
 
 数据库账号信息进行配置，而对数据库账号信息的配 置文件有两个，分别是“laravel\config\database.php”和“laravel\.env”
 laravel\database\ migrations\”目录下
 php artisan make:migration create_tableName_table”
 两个方法，分别是 up() 方法和 down() 方法，其中 up() 方法是执行迁移命令时创建 的表结构，而 down() 方式是执行回滚时删除的表结构。

php artisan migrate 执行迁移
php artisan migrate:rollback 执行回滚迁移

模型类将会在 Eloquent ORM 中详细介绍。下面给出针对“users”数据表的模型类代码:
数据库填充文件一般放置在“laravel\database\seeds\”目录下
artisan 命令“php artisan make:seeder UserTableSeeder”自动创建填充文件。数据库填充设计
artisan 命令“php artisan db:seed”来完成数据填充

“php artisan make:migration create_blogs_table --create=blogs”命令创建“blogs”数据表，同理创建其 他的数据表迁移文件，然后通过“
php artisan migrate”

配 置 文 件 为“laravel\config\database.php”
“$name="mysql"”和“$type="null"”。
// 连接数据库
$link = mysql_connect("localhost","root","root") or die( "Could not connect: " . mysql_error ());
// 选择数据库
mysql_select_db("Laravel");
$sql3 = "select * from users";
$result = mysql_query($sql3);
while($row = mysql_fetch_assoc($result)){
             print_r($row);
             echo "<br>";
    }
// 关闭数据库
mysql_close($link);

// 连接数据库
       $dsn = "mysql:host=localhost; dbname=Laravel";
       try{
             $pdo = new PDO($dsn, "root", "root");
}catch(PDOException $e){
echo " 连接失败 ".$e->getMessage()."<br>";
}

// 使用 PDO 类中的 exec() 方法插入数据
$sql1 = "insert into pdousers(name, pass) values('xiaofang','111111')"; 
$row = $pdo->exec($sql1);
echo " 插入语句影响的行号为:".$pdo->lastInsertId()."<br>";

// 使用 PDOStatement 类中的 execute() 方法插入数据
$sql2 = "insert into pdousers(name, pass) values(:name,:pass)"; 
$sta = $pdo->prepare($sql2); 
$sta->execute(array("name"=>'shuoshuo',"pass"=>'222222')); 
echo " 插入语句影响的行号为:".$pdo->lastInsertId()."<br>"; 
$sta->execute(array("name"=>"shuoshuo2","pass"=>"212121")); 
echo " 插入语句影响的行号为:".$pdo->lastInsertId()."<br>";

// 通过 PDOStatement 的 execute() 方法执行查询语句 
$sql5 = "select * from pdousers where id>:id"; 
$pdoSta = $pdo->prepare($sql5); 
$pdoSta->execute(array("id"=>0));
       while($row = $pdoSta->fetch(PDO::FETCH_ASSOC)){
             print_r($row);
             echo "<br>";
       }
    
清空“users”数据表 :
DB::table('users')->truncate();
DB::table('users')->where('id', 2)->update(['pass' => “111111”]);
获取满足 where 条件的数据:
$users = DB::table('users')->where('votes', '>', 100)->get();

获取满足 where 或 orWhere 条件的数据:
    $users = DB::table('users')
                        ->where('votes', '>', 100)
                        ->orWhere('name', 'John')
                        ->get();
获取在 whereBetween 区间中的数据:
    $users = DB::table('users')->whereBetween('votes', [1, 100])->get();
获取在 whereIn 值中的数据:
    $users = DB::table('users') ->whereIn('id', [1, 2, 3])->get();
    $users = DB::table('users') ->whereNotIn('id', [1, 2, 3])->get();

ORM 英文是 Object Relational Mapping(对象关系映射)

redis 数据库要比 MemCache 功能更强 predis/predis”
Redis 数据库的官网是 http://redis.io/
“apt-get install redis-server
通过命令“nohup redis-server &”实现 redis 数据库服务端的启动
通过命令“cat nohup.out”可以查看到 redis 服务端启动输出的信息
$ radis-cli
通过命令“redis-cli”启动 redis 数据库的客户端
composer require "predis/predis":"~1.0" 命令实现资源包的安装
可以通过 artisan 命令“php artisan Sub:Msg”实现，然后通过浏览器访问本网 站的首页触发消息发送功能， ???
redis 消息发布和订阅的内容

想删除 Cookie 中 id 参数的值，可以使用“setcookie("id",”"",time()-10);

// 开启会话
session_start();
// 删除数组中的数据
// 删除单个数据
unset($_SESSION['name']);
// 清空整个数组中的内容
$_SESSION = array();
// 删除客户端 Cookie 中的 sessionID 
setCookie(session_name(),"",time()-10,"/"); 
// 删除服务器中的 
session 文件 session_destroy();


# 🔴　automate your application upgrades
https://laravelshift.com

### Shift - Upgrading from Laravel 5.4 to Laravel 9.x (Part 1)  🔴
https://www.youtube.com/watch?v=xLLylL0aru0&ab_channel=JasonMcCreary

https://www.youtube.com/watch?v=OW2div5-Udk&ab_channel=LaravelDaily

https://zenn.dev/naopusyu/articles/444d1bbcb6d664

https://kzkohashi.hatenablog.com/entry/2018/12/11/071415


Laravel Roles and Permissions: All CORE Things You Need To Know

composer remove :::
composer update
composer required laravel/ui
php artisan  https://knowledge.cpi.ad.jp/howto-cpi/laravel-artisan/
Shift - Upgrading from Laravel 8 to Laravel 9  https://www.youtube.com/watch?v=2c2s8QHuHi8&ab_channel=JasonMcCreary
```

# full-stack フルスタック
ウェブ開発には、サーバーの構築、ネットワークインフラの整備、システムやUIの設計・デザイン、プログラミング、コーディング、等々、さまざまな技術要素が求められる。それぞれ異なる技術や知識が求められるため、サーバーエンジニア、ネットワークエンジニア、ウェブプログラマーにコーダーと、複数名で分業する形を取るのが一般的といえる。これらの業務を一手にこなし、開発業務の大半あるい全部を単独で構築してしまえるような技術者がフルスタックなエンジニアと呼ばれる。

どのていどの技術の幅をフルスタックと呼ぶか、明確な線引きがあるわけではない。フロントエンドからバックエンドまで（何から何まで）こなせる技術を指す場合も多いが、Webデザインの範囲で用いられるHTML、CSS、JavaScript、加えてPHPやRubyやApacheなども扱えるスキルをフルスタックと呼ぶ場合もあり得る。

特定の研究開発事業を、分業化せず一手に引き受け、ハードウェアからソフトウェアまで全般的に構築するような携わり方を「フルスタックで開発する」という風に表現することもある。

# php untest 
https://laracasts.com/series/php-testing-jargon/episodes/2
