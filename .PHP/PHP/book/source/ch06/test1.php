<meta charset="utf-8">
<?php
$teas[6]="龙井";						//使用数字
$teas["9"]="碧螺春";					//使用数字
$teas["anxi"]="铁观音";				//使用字符串
$teas[]="银针";						//使用默认方式指定键
$teas['mj']="毛尖";					//使用字符串
$teas['y8']="普洱";					//使用字母+数字的组合
?>

<?php
$scores=array(100,68,79,81,95);						//成绩数组
$students=array("xiake","aling","jing","kohen","aceuy");		//姓名数组
?>
<?php
$peopleList = array ();
$peopleList ["love"] ["father"] = "15093156985";
$peopleList ["love"] ["mother"] = "15138529651";
$peopleList ["love"] ["brother"] = "15996521104";
$peopleList ["friend"] [0] = "18736958521";
$peopleList ["friend"] [1] = "15024178892";
$peopleList ["colleagues"] ["chenyi"] = "18796582256";
$peopleList ["classmates"] [] = "13215896256";
$peopleList ["classmates"] [] = "15996358741";
?>
<?php
$peopleList = array (
    "love" => array ("father" => "15093156985","mother" => "15138529651","brother" => "15996521104" ),
    "friend" => array ("shuangs" => "18736958521","yan" => "15138529651" ),
    "colleagues" => array (	"shuangs" => "18736958521" ),
    "classmates" => array ("liyang" => "13215896256",	"xiangxiang" => "15996358741" )
);
?>
<?php
$peopleList = array (
    array (
        array ("10001","陈梓","北京市"),
        array ("10002","任霞","上海市"),
        array ("10003","王丹","广州市")
    ),
    array (
        array ("20001","池晓","石家庄市"),
        array ("20002","江希","常州市"),
        array ("20003","顾珊","郑州市")
    )
);
for ($row=0;$row<2;$row++){				// 遍历数组内容
    for($col=0;$col<3;$col++){
        for($col1=0;$col1<3;$col1++){
            echo $peopleList[$row][$col][$col1]."<br/>";
        }
    }
}
?>
<?php
$books=array("热销图书列表",
    'php'=>array("PHP一百例",34,"PHP最佳教程",46),
    2=>array(98,40),
    "p"=>"清华大学出版社",
    "08月30日统计",
    "HNZZ110114054"
);
print_r ($books);				//输出$books数组的内容
?>
<?php
$colors="红,黑,白,黄,蓝,绿";						//定义一个字符串变量
if(!is_array($colors))								//如果不是数组
{
    echo "\$colors不是数组，正在转换...";
    $colors=array();								//创建一个空数组
    if(is_array($colors)) echo "\n转换成功，继续执行";	//再次判断
}
?>
<?php
$names=array("苏州","杭州","郑州","常州",
    "mm"=>array("南阳","益阳","洛阳"),
    'b'=>array("北京")
);
$numbers=count($names,1); 			//统计个数，不启用递归
echo "当前共有 $numbers 个城市";
?>
<?php
$result2=count($names,1); 						//统计个数，启用递归
echo "\ncount(\$names,1)的结果为：$result2";
?>
<?php
$books=array("热销图书列表",
    'php'=>array("PHP一百例",34,"PHP最佳教程",46),
    2=>array(98,40),
    "p"=>"清华大学出版社",
    "08月30日统计",
    "HNZZ110114054"
);
print_r ($books);				//输出$books数组的内容
?>
<?php
$colors="红,黑,白,黄,蓝,绿";						//定义一个字符串变量
if(!is_array($colors))								//如果不是数组
{
    echo "\$colors不是数组，正在转换...";
    $colors=array();								//创建一个空数组
    if(is_array($colors)) echo "\n转换成功，继续执行";	//再次判断
}
?>
<?php
$drinks=array(
    1024=>"和其正","冰红荼","鲜橙多","可乐","雪碧","绿茶"
);											//定义商品信息的数组
$min = key($drinks);								//获取第一个键
$length = count($drinks);							//获取键的数量
$max = $min + $length - 1;							//计算键的最大值
for($i = $min; $i <= $max; $i ++){
    echo "编号：$i , 名称：$drinks[$i] \n";			//循环输出
}
?>
<?php
$fruits=array('cm'=>"草莓", 'xc'=>"鲜橙",'sl'=>"石榴",'xg'=>"西瓜",'gj'=>"柑橘",'lz'=>"荔枝");
$fruit=each($fruits);					//调用each()函数获取一个元素
print_r($fruit);						//输出each()函数的返回结果

while($item=each($fruits))
{
    echo "水果名称：$item[value] ,简称： $item[key] \n";
}

?>

<?php
//关键字数组
$keys=array(2012,"电影",2012,"安卓","科技","计算机","安卓","计算机",2012);
$result=array_count_values ($keys);				//统计$keys数组中的元素出现频率
while(list($key,$value)=each($result))
{
    echo "关键字[$key]一共搜索  $value 次 \n";
}
?>
<?php
//关键字数组
$keys=array(2012,"电影",2012,"安卓","科技","计算机","安卓","计算机",2012);
$result=array_unique($keys);				//去除重复的元素
echo "热门关键字有：";
foreach ($result as $key) {
    echo " $key";
}
?>
<?php
$courses=array("语文","数学","英语");						//初始化课程数组
echo "本学期的主修课有".count($courses)."门  \n";			//输出当前元素数量
array_push($courses, "体育","美术","课外实践","自然");		//增加4个元素
echo "加上选修课，本学期课共有".count($courses)."门 \n";
echo "分别是：";
foreach ($courses as $c) {
    echo " $c";										//输出元素值
}
?>

<?php
$letters=array("D","M");
$new_letters = array_pad($letters, 4, "*");		//在array_pad()函数中使用正值
print_r($new_letters);
$new_letters = array_pad($letters, -4, "*");		//在array_pad()函数中使用负值
print_r($new_letters);
?>

<?php
$books=array("西游记","三国演义","水浒传","红楼梦");
$book= array_pop($books); 						//取出$waters数组中的最后一个元素
echo "从\$books数组中删除了[".$book."]元素";			//输出取出的元素
print_r($books);
?>

<?php
$cities=array(100=>"安阳",'zz'=>"郑州","开封",'ly'=>"洛阳","新乡");
print_r($cities);									//输出原始数组
$city= array_shift($cities);							//删除一个元素
echo "从\$waters数组中删除了元素：$city \n";
print_r($cities);									//输出删除元素后数组
?>
<?php
$scores = array('murphy' => 92,'lelei' => 90, 'chengj' => 100, 100, 'forever' => 89);
$result1 = array_keys($scores);					//返回带键的数组
print_r($result1);								//输出结果
$result2 = array_keys($scores, 100);				//返回带键，且值为100的数组
print_r($result2);								//输出结果
?>
<?php
$scores = array('murphy' => 92,'lelei' => 90, 'chengj' => 100, 100, 'forever' => 89);
$result1 = array_keys($scores);					//返回带键的数组
print_r($result1);								//输出结果
$result2 = array_keys($scores, 100);				//返回带键，且值为100的数组
print_r($result2);								//输出结果
?>
<?php
$words=array("hello","OK","world","good");
echo "在\$words数组中查找是否包含hello：";			//查找hello字符串，区分大小写
var_dump(in_array( "hello",$words));					//返回true
echo "在\$words数组中查找是否包含ok：";			//查找ok字符串，区分大小写
var_dump(in_array( "ok",$words));					//返回false
?>
<?php
$scores=array(100,81,69,71,'81.8',92.5);
echo "查找\$scores数组中是包否含有92.5：\n";
if (in_array(92.5, $scores, true)) {					//区分数据类型和大小写
    echo "找到92.5了。\n ";
}
echo "\n查找\$scores数组中是否包含有100：\n";
if (in_array('100', $scores, true)) {					//区分数据类型和大小写
    echo "找到100了。";						//此句不会输出，因为类型不一致
}
?>
<?php
$scores = array('murphy' => 92,'lelei' => 90, 'chengj' => 100, 151=> 100, 'forever' => 89);
print_r($scores);
$new_scores= array_values($scores);					//将所有值保存到$new_scores数组
print_r($new_scores);
?>
<?php
$users1=array("mary","xiaoqiang","laoshu","java163","murphy");		//会员数组1
$users2=array("laoshu","notok","murphy","isbest","java163");			//会员数组2
$result = array_diff($users1, $users2);							//提取不相同的会员
print_r($result);
?>
<?php
$users1=array("mary"=>30,"xiaoqiang"=>27,"laoshu"=>39,"java163"=>21,"murphy"=>25); //会员数组1
$users2=array("laoshu"=>39,"notok"=>4,"murphy"=>25,"isbest"=>52,"java163"=>21); 	//会员数组2
$result = array_diff_assoc($users1, $users2);							//提取不同的元素
print_r($result);												//输出结果
?>
<?php
$users1=array("mary","xiaoqiang","laoshu","java163","murphy");			//会员数组1
$users2=array("laoshu","notok","murphy","isbest","java163");				//会员数组2
$result = array_intersect($users1, $users2);							//提取相同的会员
print_r($result);
?>
<?php
$users1=array("mary"=>30,"xiaoqiang"=>27,"laoshu"=>39,"java163"=>21,"murphy"=>25); //会员数组1
$users2=array("laoshu"=>39,"notok"=>4,"murphy"=>25,"isbest"=>52,"java163"=>21); 	//会员数组2
$result = array_intersect_assoc($users1, $users2);						//提取同相同的会员
print_r($result);												//输出结果
?>
<?php
$scores = array(64,78,51,86,90);						//整型数组$scores
sort($scores);									//对$scores进行排序
print_r($scores);									//输出结果
$words = array('Apache', 'Web', 'Parent', 'Happy', 'Down');	//字符串数组$words
sort($words,SORT_STRING);						//对$words进行排序
print_r($words);									//输出结果
?>

<hr/>



