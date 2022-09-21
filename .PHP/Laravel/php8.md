# page 🔴
https://syncer.jp/Web/PHP/Reference/Function/array_intersect/

https://www.w3schools.com/php/php_file_open.asp

https://www.w3schools.com/php/php_superglobals_server.asp


# books
PHP, MySQL,  JavaScript All-in-One For Dummies (Richard Blum) (z-lib.org)

https://pecl.php.net

# UI Workbench
https://www.mysql.com/jp/products/workbench/
```sql
SHOW DATABASES;
mysqldump --user=root --password dbtest1 > dbtest1.sql
mysql --user=root --password dbtest1 < dbtest1.sql

```

```php 
filter_var Data-Sanitizing Options
FILTER_SANITIZE_EMAIL 
FILTER_SANITIZE_STRING

htmlspecialchars

color: hsla(0, 100%, 50%, 0.5)
background: linear-gradient(red, orange);

<link rel="stylesheet" href="desktop.css" media="screen and (max-width:500px)">

console.log()

<!DOCTYPE html>
<!--
COMMENTING
-->
<meta charset="UTF-8">
<ol type="I">

<style>
table tr td {
border: 1px solid black;
border-collapse: collapse; //doble line
} </style>

<fieldset>
 <legend>Enter your name</legend> <label>
 Last Name
 <input type="text" name="lastname"> </label>
 <label>
 First Name
 <input type="text" name="firstname"> </label>
</fieldset>

 CSS3 code necessary to extract the border image properties.
https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Backgrounds_and_Borders/Border-image_generator

p::first-letter {font-size: 20px}
Pseudo-Class

 /etc/httpd or /etc/apache2.
 
sudo apt-get install apache2
sudo apt-get install mysql-server

 
 sudo apt-get install php libapache2-mod-php
sudo apt-get install php-mcrypt php-mysql
sudo apt-get install phpmyadmin

sudo dnf install httpd
sudo systemctl enable httpd
sudo systemsctl start httpd

sudo systemctl restart httpd

 sudo dnf install mariadb-server
sudo systemctl enable mariadb
sudo systemctl start mariadb

$_SERVER['PHP_SELF'] https://wepicks.net/phpref-server/
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
$_SERVER['PHP_SELF']をhtmlspecialchars🔴でエスケープする ことです。また、CGI版以外では$ _SERVER['PHP_SELF']の代わりに$_SERVER ['SCRIPT_NAME']を用いることも可能です。もしくは、formタグ内の action属性 値を空にしてもいいでしょう。
同様の脆弱性が$_SERVER['PATH_INFO']と$_SERVER['PATH_TRANSLATED']にもXSS存在します。お気を付け下さい。

特殊文字	    html変換
＆（アンパサンド）	＆amp
“（二重引用符）	＆quot;
‘（一重引用符）	&apos;
<（より小）	    &lt;
>（より大きい）	 ＆gt;

Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)
 stripslashes()🔴 Remove backslashes (\) from the user input data (with the PHP stripslashes() function)

$_SERVER['HTTP_ACCEPT']
$_SERVER['REMOTE_ADDR']
$_SERVER['REMOTE_HOST']

XSSや悪意のあるスクリプトによる攻撃 https://flytech.work/blog/7620/
■Laravel
viewの出力箇所に「{{ $name }}」と実装することでXSS対策を行うことができます。
もし、タグをそのまま実行したいときは「{!! $name !!}」 🔴 とするとタグをそのまま実行します。 https://tech-lab.sios.jp/archives/21780

「Cross Site Scripting」の略称として「XSS」. WAFで防御する
https://www.shadan-kun.com/waf/xss/

<?php
function getIterable():iterable {
  return ["a", "b", "c"];
}
$a = "";
$myIterable = getIterable();
foreach($myIterable as $item) {
  $a .=($item ."/n") ;
  echo $item;
  //改行タグ<br>と改行文字"\n"で改行
  echo "<br>\n";  // https://www.flatflag.nir87.com/nl2br-540
}
echo nl2br($a,false) ;
?>

```
## array
https://www.w3schools.com/php/php_ref_array.asp

# regex
https://www.w3schools.com/php/php_regex.asp

https://www.w3schools.com/php/func_regex_preg_filter.asp

# AJAX and PHP
https://www.w3schools.com/php/php_ajax_php.asp

https://kinsta.com/jp/blog/php-8/

### preg_quote() 
https://www.w3schools.com/php/func_regex_preg_quote.asp
```php
<?php
$search = preg_quote("://", "/");
$input = 'https://www.w3schools.com/';
$pattern = "/$search/";
if(preg_match($pattern, $input)) {
  echo "The input is a URL.";
} else {
  echo "The input is not a URL.";
}
?>

filter_var https://www.w3schools.com/php/php_filter_advanced.asp
```

## callback functions
```php
<?php
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);


function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>
```

## trait トレイト
https://www.w3schools.com/php/php_oop_traits.asp

Laravelのフレームワーク内のソースコードを題材に解説してみました。
https://www.sria.co.jp/blog/2022/06/6772/

https://qiita.com/kazuhei/items/dd4e275c03eb6916f522

```php
<?php
trait message1 {
public function msg1() {
    echo "OOP is fun! "; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>
PHP only supports single inheritance: a child class can inherit only from one single parent.

So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
```
