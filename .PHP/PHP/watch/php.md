## 过滤器
filter_var() - 通过一个指定的过滤器来过滤单一的变量
filter_var_array() - 通过相同的或不同的过滤器来过滤多个变量
filter_input - 获取一个输入变量，并对它进行过滤
filter_input_array - 获取多个输入变量，并通过相同的或不同的过滤器对它们进行过滤


## php
https://www.php.net/support





## JavaScriptの変数をPHPに渡す方法
phpから外部のjsに値渡し ok
https://qiita.com/kenhonda/items/eb98d15fd465d90e94d6

https://www.dsm-update.info/javascript/228/
https://codeday.me/jp/qa/20190504/769053.html
https://www.webdlab.com/labs/js-php/

//JavascriptとPHPでデータのやり取りをする方法
http://wordpress.ideacompo.com/?p=10575



//JavaScriptからPHPに非同期で値を渡して返り値を受け取る
https://techa1008.com/rocket-note/2018/07/04/post-value-asynchronously-from-javascript-to-php-and-receive-return-value/


//php & js
https://phpjavascriptroom.com/?t=js&p=event#a_onload


//json_encodeを使ってPHPとJavaScriptの変数の受け渡しをします。
https://qiita.com/cr_tk/items/900914e8a6e19ee3c5b7

//javascript
https://pisuke-code.com/php-ways-to-embed-javascript/

//phpから外部のjsに値渡し http://www.searchlight8.com/php-javascript-params/
https://qiita.com/kenhonda/items/eb98d15fd465d90e94d6
//ここでid属性を記述して、スクリプトタグに変数を埋め込みます
<script id="script" type="text/javascript" src="./js/script.js"
 data-param='<?php echo json_safe_encode($param);?>'>
 
 
 <div type="hidden"
     id="php-val"
     style="display:none;"
     data-val="<?=htmlspecialchars($foo, ENT_QUOTES, 'UTF-8')?>"></div>

<script type="text/javascript" src="script.js"></script>


var php_val = document.getElementById('php-val');
alert('color: ' + php_val.data('val'));

//JSONをデコード
https://syncer.jp/how-to-use-json

book
http://www.xz577.com/e/php/

//DateTime
https://wepicks.net/phpsample-date-format/


//createCipher
https://qiita.com/_daisuke/items/990513e89ca169e9c4ad

//php
https://www.php.net/manual/zh/

//cookie
https://wepicks.net/phpref-cookie/

//convert JSON string to array
$array = json_decode($str, true);

//restful api ----todo
https://github.com/yamaguchi-hiro-9999/restful-api-raml

//api
https://www.jianshu.com/p/6952a98921b2
https://raml.org/
https://blog.csdn.net/zhao__zhen/article/details/82933734

php:
https://oku.edu.mie-u.ac.jp/~okumura/php/


//codeception  test tools
https://qiita.com/Esfahan/items/44c38b15c36e1adb05ff

//php debug
url +++ &XDEBUG_SESSION_START
In your browser, you only have to add the following querystring to the URL you want to start debugging: ?XDEBUG_SESSION_START.
Example: http://localhost:8000/?XDEBUG_SESSION_START
https://www.forevolve.com/en/articles/2016/08/04/php-with-visual-studio-code-and-xdebug/

https://www.w3schools.com/php/default.asp

//Codeception
https://pleiades.io/help/idea/using-codeception-framework.html
https://github.com/Codeception/Codeception
https://simple-it-life.com/2017/06/25/codeception/
https://qiita.com/Esfahan/items/44c38b15c36e1adb05ff

钩子
https://juejin.im/post/5aa77049f265da237410a54b

https://laravel-china.github.io/php-the-right-way/

includ
http://php.net/manual/ja/function.include.php

require：
https://woshidan.hatenablog.com/entry/2014/02/06/071512

静的HTMLサイトの共通部分をPHPによるパーツ化する方法
http://buburinweb.wp.xdomain.jp/html-php-part
<?php include (dirname(__FILE__).'gnav.html'); ?>


共通部分
http://buburinweb.wp.xdomain.jp/html-php-part
<div id="header">ヘッダー部分になります
 
// ▼共通化するグローバルナビゲーション部分を、PHPのinclude関数を使って読み込み
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/global_menu.php'); ?>
 
</div>
https://nabewakashi.com/php-include

https://teach.web-represent.link/category/wordpress/

//submit
https://www.formget.com/php-post-get/
