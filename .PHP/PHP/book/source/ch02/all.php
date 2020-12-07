<?php
$str = "引用赋值的使用方法";
$content =& $str;			//都是"ff"
$str = "我的名字";
$content = "我爱我的家乡";
echo $str."\n".$content;
?>
<?php
$country = "china";
$$country = "chinese";	
echo $country,$$country;


?>
