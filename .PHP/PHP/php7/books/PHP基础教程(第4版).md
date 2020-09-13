# PHP手册
https://www.php.net/manual/ja/index.php

# 函数 PHP Function List
https://www.php.net/manual-lookup.php?pattern=functionname&lang=ja&scope=404quickref

# $_SERVER
print_r($_SERVER); 

<pre></pre>“HTML预格式化标签能够避免在使用print_r() 时出现这样令人难以看清的页面”

## “驼峰（camel-hump） 方式（使用大写字母对单词进行分隔，例如$FirstName ）和下划线 方式（例如$first_name ）。”

抜粋:: [美]Larry Ullman 著  “PHP基础教程(第4版) (图灵程序设计丛书·Web开发系列)”。 Apple Books  
# 【PHP】チェックボックスの値を受け取る
https://qiita.com/4cres/items/26154314959dcccbfd34
```
パターン2HTML
<form method="post" action="kekka.php">
      <label><input type="checkbox" name="color[]" value="red">赤</label>
      <label><input type="checkbox" name="color[]" value="blue">青</label>
      <label><input type="checkbox" name="color[]" value="yellow">黄</label>
      <input type="submit" value="送信">
</form>
パターン2PHP
$color=$_POST['color'];
 
foreach ($color as $value){
 
    $c .=$value.",";
}
echo $c;
```
# “cookie将数据保存在客户端（在Web浏览器中），而session则将数据保存在服务器端。因为有这个区别，session拥有比cookie更多的优势。”

抜粋:: [美]Larry Ullman 著  “PHP基础教程(第4版) (图灵程序设计丛书·Web开发系列)”。 Apple Books  
