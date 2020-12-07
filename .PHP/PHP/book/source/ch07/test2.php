    <meta charset="utf-8">
<?php
$str1="Where Are You From \n";					//定义原始字符串
echo strtolower($str1); 							//转换并输出$str1的小写结果
$str2="SELECT * FROM DATABASE WHERE ROW>0 AND F=1 \n";
Echo strtolower($str2);			//转换并输出$str2的小写结果
$str3="你好吗。How Are You.";
echo strtolower($str3); 			//转换并输出$str3的小写结果

?>
<?php


	echo "<hr/>";
?>
<?php
$str1="show ads that relate to the content on your website \n ";			//定义原始字符串
echo strtoupper($str1); 			//转换并输出$str1的大写结果
$str2="Business Solutions \n ";
echo strtoupper($str2); 			//转换并输出$str2的大写结果
$str3="歌曲名称： the day you went away \n ";
echo strtoupper($str3); 			//转换并输出$str3的大写结果
?>

<?php


	echo "<hr/>";
?>


<?php
$str1="those customers you are looking for, are looking for you ";	//定义原始字符串
echo "使用ucfirst()函数之后为： ".ucfirst($str1); 					//转换并输出
$str2="签名good good study";
echo "\n使用ucfirst()函数之后为：".ucfirst($str2);
?>

<?php


	echo "<hr/>";
?>


<?php
$str1="those customers you are looking for, are looking for you ";	//定义原始字符串
echo "使用ucwords()函数之后为：".ucwords($str1); 					//转换并输出
$str2="签名good good study";
echo "\n使用ucwords()函数之后为：".ucwords($str2);
?>
<?php


	echo "<hr/>";
?>
<?php
$str1="   恭喜发财"; 							//第1个字符串
echo "\$str1使用ltrim()之后结果：\"".ltrim($str1)."\""; 	//去除左侧的空格
$str2="///////恭喜发财///////";						//第2个字符串
echo "\n\$str2使用ltrim()之后结果：\"".ltrim($str2)."\""; 	//去除左侧的空格
echo "\nltrim(\$str2,\"/\")之后结果：\"".ltrim($str2,"/")."\""; 	//去除左侧的字符/
$str3="\t\n恭喜发财";								//第3个字符串
echo "\n\$str3使用ltrim()之后结果：\"".ltrim($str3)."\""; 	//去除左侧的水平制表符和换行符
?>



<?php


	echo "<hr/>";
?>
<?php
$str1="恭喜发财            ";				//第1个字符串
echo "\$str1使用rtrim()之后结果：\"".rtrim($str1)."\""; 		//去除右侧的空格
$str2="<a><b><c><d>=====\t\t\n";						//第2个字符串
$result=rtrim($str2); 									//去除右侧的水平制表符和换行符
echo "\nrtrim(\$str2)之后结果：\"".$result."\"";
echo "\nrtrim(\$result,\"=\")之后结果：\"".rtrim($result,"=")."\"";	//去除右侧的字符=
$str3="today is Friday";
echo "\nrtrim(\$str2,\"day\")之后结果：\"".rtrim($str3,"day")."\"";	//去除右侧的字符day
?>


<?php


	echo "<hr/>";
?>
<?php
$str1="                     恭喜发财                          ";
echo "\$str1使用trim()之后结果：\"".trim($str1)."\"";
$str2="    ///////恭喜发财///////    ";
$result=trim($str2);
echo "\ntrim(\$str2)之后结果：\"".$result."\"";
echo "\ntrim(\$result,\"/\")之后结果：\"".trim($result,"/")."\"";
$str3="<><>恭喜发财<><><>";
echo "\ntrim(\$str3,\"<>\")之后结果：\"".trim($str3,"<>")."\"";
?>
<?php


	echo "<hr/>";
?>
<?php
function CompareString($str1, $str2)
{
	$result=strcasecmp($str1, $str2);	//比较$str1和$st2，将结果保存到$result
	if($result==0)
	{
		echo "两个字符串相同";
	}elseif ($result>0)
	{
		echo "$str1 大于 $str2";
	}
	else {
		echo "$str1 小于 $str2";
	}
}
CompareString("hello","hello");			//输出：两个字符串相同
CompareString("PHP","php");			//输出：两个字符串相同
CompareString("php","php5");			//输出：php 小于 php5
CompareString("Good9","Good");			//输出：Good9 大于 Good
?>

<?php


	echo "<hr/>";
?>

<?php
$word1="FRIDAY";
$word2="Friend";
if(strncasecmp($word1,$word2,3)==0)		//比较$str1和$str2的前3个字符
	echo "两个字符串相同";			//输出此行
else
	echo "两个字符串不相同";
if(strncasecmp($word1,$word2,6)==0) 		//比较$str1和$str2的前6个字符
	echo "两个字符串相同"; 
else
	echo "两个字符串不相同";			//输出此行
?>

<?php


	echo "<hr/>";
?>
<?php
$word1="SEArch";
$word2="season";
if(strncmp($word1,$word2,3)==0) 	//比较$str1和$str2的前3个字符
	echo "两个字符串相同";	
else
	echo "两个字符串不相同";		//由于strncmp()函数区分大小写，所以输出此行
?>
<?php


	echo "<hr/>";
?>
<?php
$words="my heart will go on";
echo "查找M的出现位置：".stripos($words,"M");
echo "\n查找ea的出现位置：".stripos($words,"ea");
echo "\n查找GO的出现位置：".stripos($words,"GO");
echo "\n从第4个开始查找M的出现位置：".stripos($words,"M",4);
?>
<?php


	echo "<hr/>";
?>

<?php
$words="food sheet would get";
echo "查找d最后的出现位置：".strrpos($words,"d");
echo "\n查找D最后的出现位置：".strrpos($words,"D");
echo "\n查找et最后的出现位置：".strrpos($words,"et");
echo "\n从第10个开始查找o最后的出现位置：".strrpos($words,"o",10);
?>
<?php


	echo "<hr/>";
?>

<?php
$words="food sheet would get";
echo "查找ET最后的出现位置：".strripos($words,"ET");
echo "\n查找D最后的出现位置：".strripos($words,"D");
echo "\n从第4个开始查找OD最后的出现位置：".strripos($words,"OD",4);
?>
<?php echo "<hr/>";?>
<?php
$text = 'This is a test';
echo strlen($text); 						//输出：14
echo substr_count($text, 'is'); 				//输出：2
echo substr_count($text, 'is', 3); 				//字符串被简化为 's is a test'，因此输出 1
echo substr_count($text, 'is', 3, 3); 			//字符串被简化为 's i'，所以输出 0
echo substr_count($text, 'is', 5, 10);			//因为5+10 > 14，所以生成警告
$text2 = 'abcdabcda';				
echo substr_count($text2, 'abcda'); 			//输出1，因为该函数不计算重叠字符串
?>
<?php echo "<hr/>";?>
<?php
$str="红色|QQ群|RED";
$token = "|";
$result = strtok($str, $token);			//按“|”进行分隔，将结果保存到$result
echo "使用strtok()后的结果：";
while($result !== false){
	echo "$result 、";
	$result = strtok($token);
}
$str="A B C,北京,上海;9路;4路;K2路";
$token = " ,;";						//指定3个分隔符
$result = strtok($str, $token);
echo "\n使用strtok()后的结果：";
while($result!== false){
	echo "$result 、";
	$result = strtok($token);
}
?>
<?php echo "<hr/>";?>
<?php
$keys= "PHP ASP JSP ASP.NET";
$token = " ";
$result = explode($token,$keys);		//按$token进行分隔，将结果保存到$result
print_r($result);					//第1个数组
print_r(explode($token,$keys,2));		//第2个数组
print_r(explode($token,$keys,-2));		//第3个数组
?>

<?php echo "<hr/>";?>
<?php 
$ary=array("苹果","西瓜","香蕉","葡萄","桔子");	//创建一个字符串数组
$fruits=implode("-",$ary); 					//将各个元素之间使用"-"分隔
echo $fruits;
?>

<?php echo "<hr/>";?>

<?php
$strs= "today is Wednesday";
echo strrchr($strs, "Wen");		//输出：Wednesday
echo strrchr($strs, "WABC");		//输出：Wednesday
?>

<?php echo "<hr/>";?>

<?php
$str1="恭喜发财";
var_dump(str_pad($str1,30));
var_dump(str_pad($str1,30,"\\"));
var_dump(str_pad($str1,30,"*",STR_PAD_LEFT));
var_dump(str_pad($str1,30,"$",STR_PAD_BOTH));
$str2="恭喜发财";
var_dump(str_pad($str2,20,">"));
var_dump(str_pad($str2,21,"<>",STR_PAD_BOTH));
$str3="恭喜发财";
var_dump(str_pad($str3,21,"__",STR_PAD_BOTH));
?><?php echo "<hr/>";?>
<?php
$strs= "恭喜发财/大吉大利/万事如意/";
echo strstr($strs, "/");			//输出：/大吉大利/万事如意/
$strs= "today is Wednesday";
echo strstr($strs, "day");		//输出：day is Wednesday
echo strstr($strs, "Day");		//区分大小写没有输出
$strs="abc@126.com";
echo strstr($strs, "@");			//输出：@126.com
?>
<?php echo "<hr/>";?>
<?php
$html="<head>{title}</head>";
$title="<title>最新新闻</title><meta content='text/html; charset=gb2312' />";
echo str_replace("{title}", $title, $html);
echo "\n";
$colors="Red Black White Green";
$key=array("a","b","e");
echo str_replace($key, "*", $colors);
echo "\n";
$str="one two three four five six seven eight nine ten";
echo str_replace("e", "E", $str, $count);
echo "\n";
echo "字母e一共在\$str中出现了 $count 次";
?>
<?php echo "<hr/>";?>
<?php
$str= '<head>{title}</head>';
/* 使用 "<html></html>" 替换整个 字符串*/
echo substr_replace($str, '<html></html>', 0) . "\n";
echo substr_replace($str, '<html></html>', 0, strlen($str)) . "\n";

/* 将 "<html>" 插入到 $str 的开头处。*/
echo substr_replace($str, '<html>', 0, 0) . "\n";

/* 使用 "<title>恭喜发财</title>" 替换 $var 中的"{title}"*/
echo substr_replace($str, '<title>恭喜发财</title>', 6, 7) . "\n";

/* 从 $str 中删除 "{title}"*/
echo substr_replace($str, '', 6, 7) . "\n";
?>


<?php echo "<hr/>";?>
<?php
$html="<head>{title}</head>";
$title="<title>最新新闻</title><meta content='text/html; charset=gb2312' />";
echo str_replace("{title}", $title, $html);
echo "\n";
$colors="Red Black White Green";
$key=array("a","b","e");
echo str_replace($key, "*", $colors);
echo "\n";
$str="one two three four five six seven eight nine ten";
echo str_replace("e", "E", $str, $count);
echo "\n";
echo "字母e一共在\$str中出现了 $count 次";
?>
<?php
$str="one two three four five six seven eight nine ten";				//源字符串
echo str_ireplace("E", "*", $str, $count);
echo "字母e一共在\$str中出现了 $count 次";
?>
<?php
$str= '<head>{title}</head>';
/* 使用 "<html></html>" 替换整个 字符串*/
echo substr_replace($str, '<html></html>', 0) . "\n";
echo substr_replace($str, '<html></html>', 0, strlen($str)) . "\n";

/* 将 "<html>" 插入到 $str 的开头处。*/
echo substr_replace($str, '<html>', 0, 0) . "\n";

/* 使用 "<title>恭喜发财</title>" 替换 $var 中的"{title}"*/
echo substr_replace($str, '<title>恭喜发财</title>', 6, 7) . "\n";

/* 从 $str 中删除 "{title}"*/
echo substr_replace($str, '', 6, 7) . "\n";
?>
<?php echo "<hr/>";?>



<?php

$he=<<<student
张良，成绩91分；\n
段剑，成绩82分；\n
张红，成绩73分；
student;
echo $he. "</br>";
echo nl2br($he);


$str = "<h1>Welcome </h1>";
echo htmlentities($str);
echo "<br/>";
echo htmlentities($str, ENT_QUOTES);

$he=<<<student
<p>张良，成绩91分； <a href="#">成绩详细信息</a></p> 
<p>段剑，成绩82分； <a href="#">成绩详细信息</a></p> 
<p>张红，成绩73分； <a href="#">成绩详细信息</a></p> 
student;
echo $he;
echo strip_tags($he)."<br/>";
echo strip_tags($he,"<p>");

?>
