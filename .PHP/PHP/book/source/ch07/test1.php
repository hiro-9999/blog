<meta charset="utf-8">
<?php
$key="PHP";					//创建一个字符串变量$key，赋值为PHP
echo $key;						//输出：PHP
echo $key[0];					//输出：P
echo $key[1];					//输出：H
echo $key[2];					//输出：P
$str="nihao";					//创建一个字符串变量$str，赋值为nihao
echo $str;						//输出：nihao
echo $str[0];					//输出：n
echo $str[3];					//输出：a
?>
<hr/>
<?php
$key="PHP";					//创建一个字符串变量$key，赋值为PHP
echo $key; 					//输出：PHP
echo $key{0};					//使用大括号获取$key变量中的第一个字符，输出：P
echo $key{1};
echo $key{2};
$str="nihao";					//创建一个字符串变量$str，赋值为nihao
echo $str; 						//输出：nihao
echo $str{0};					//使用大括号获取$str变量中的第一个字符，输出：n
echo $str{3};					//使用大括号获取$str变量中的第四个字符，输出：a
?>
<?php
echo '这是一个使用单引号定义的普通字符串\n';			//标准的字符串形式
echo '用这种方式还可以换行哦，下面都是正确的。
我的电脑、我的文档、我的音乐、我的图片
北京、上海、广州、重庆
';											//使用单引号定义的多行字符串
echo 'Let\'s say that it\'s true.';						//输出：Let's say that it's true.
echo '"Yes," said Ford.'; 							//输出："Yes," said Ford.
echo '床/沙发/衣柜/宜家/办公家具';					//输出：床/沙发/衣柜/宜家/办公家具
echo '早教\玩具\戏水';								//反斜线会输出，结果为：早教\玩具\戏水
echo '$Name="zhht"';								//字符串中的语句也不会执行和解析

echo "今日促销商品：</br>";
echo "抱枕\t坐垫\t床单\t记忆枕</br>";
$cuxiao="可爱系列被单套装将于11月11日特价一天";
echo "限时特价：</br>$cuxiao</br>";
echo "\$cuxiao变量为促销信息";



echo <<<apple
苹果</br>
苹果的果实是球形的，味甜或略酸，品种繁多，是常见水果，具有丰富的营养成分，有食疗、辅助治疗等功能。</br>
apple;
echo <<<orange
橘子</br>
橘子俗称"桔"，起源很古老的多年生芸香科植物，华夏大地是橘树主要发源地之一。</br>
橘子色彩鲜艳、酸甜可口，是秋冬季常见的美味佳果。富含维生素c。
orange;

$shangpin1="促销商品：</br>";
$shangpin2="玫瑰抱枕";
$shangpin=$shangpin1.$shangpin2;
echo $shangpin;

$shangpin="</br>促销商品：</br>";
$shangpin.="珊瑚绒毛毯";
echo $shangpin;


function CheckPasswordLenght($pass){
    if(strlen($pass)>=6 && strlen($pass)<=12)
        echo "密码符合策略。";
    elseif(strlen($pass)>12 )
        echo "不符合密码策略。密码超过最大长度12位。";
    else
        echo "不符合密码策略。过于简单的密码不安全。";
}
CheckPasswordLenght(" 1 2 ");				//不符合密码策略。过于简单的密码不安全。
CheckPasswordLenght("1 3 5 7");				//密码符合策略。
CheckPasswordLenght("mynameiszhanahaotao");	//不符合密码策略。密码超过最大长度12位。

?>
<?php
$words="woo haa yeah";
foreach (count_chars($words, 1) as $key=>$value) {
    echo "字符\"".chr($key)."\"共出现了".$value."次\n";
}
?>
<?php
$words="He was 25 years old";
$result=str_word_count($words);
echo "\$words中共有单词： $result 个";
print_r(str_word_count($words, 1));
print_r(str_word_count($words, 2));
print_r(str_word_count($words, 1, '25'));	//将25也作为一个单词
?>





