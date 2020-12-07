<?php

class Counter
{
    private static $count = 0;
    function __construct() 			//构造函数
    {
        self::$count++; 			//实例化时自动执行
    }
    function __destruct() 			//析构函数
    {
        self::$count--; 				//释放时自动执行
    }
    function getCount() 			//创建一个方法
    {
        return self::$count;
    }
}
$num = new Counter();				//建立第一个实例
echo $num ->getCount()."<br/>";   	//输出1
$num1 = new Counter(); 			//建立第二个实例
echo $num1 ->getCount()."<br/>";   	//输出2
$num1 = NULL; 					//销毁实例
echo $num ->getCount();   			//输出1



