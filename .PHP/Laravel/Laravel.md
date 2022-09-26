# Laravel ララベル
https://laravel.com/

https://chigusa-web.com/blog/laravel-sail-mac/ ->insatll by sail

https://hnavi.co.jp/knowledge/blog/laravel/

https://github.com/illuminate/contracts


＃ vedio study 🔴
https://laracasts.com

https://laravel-news.com

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

### LaravelのModelの命名規則
 php artisan make:model Fruit -m    
 
https://codelikes.com/laravel-model/ 🔴
LaravelのModelの名前はテーブルに対して、単数形で書くように決まっています。

例えば、テーブル名がusersの場合はモデル名はUserになります。
先ほどのようにテーブル名がfruitsの場合はモデル名はFruitです。

複数の単語でテーブルを作成する場合は、アンダーバーで繋ぐスネークケースになります。
対応するモデルはキャメルケースで書きます。
例えば、テーブル名がuser_fruitsの場合はモデル名はUserFruitになります。

このように、テーブル名とモデル名を決められた規則で作成することで、Eloquentを使用して対象のテーブル操作が可能です。
先ほどのコマンドを使用して、モデルと一緒にマイグレーションファイルを作成するとテーブル名をつけてくれるので楽です。

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
