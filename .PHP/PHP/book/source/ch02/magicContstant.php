<?php
class magicContstant {
	function showMagic() {
		echo "__LINE__=" . __LINE__ . "\n";                     //当前行号
		echo "__FILE__=" . __FILE__ . "\n";                     //当前文件所在路径
		echo "__FUNCTION__=" . __FUNCTION__ . "\n";         //当前函数名称
		echo "__CLASS__=" . __CLASS__ . "\n";                 //类名
		echo "__METHOD__=" . __METHOD__ . "\n";            //方法名
		echo "__DIR__=" . __DIR__ . "\n";                      //目录名
		echo "__NAMESPACE__=" . __NAMESPACE__ . "\n";     //命名空间
	}
}
$test = new magicContstant ();
$test->showMagic ();
?>
