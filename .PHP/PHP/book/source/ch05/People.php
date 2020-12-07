<?php


class People
{
    private $sex; 						//私有字段，不可直接访问
    private $birthday; 					//私有字段，不可直接访问
    private $name; 						//私有字段，不可直接访问
    public $age=0;						//公共字段，表示年龄
    function __construct($sex,$birthday,$name)
    {
        $this->sex=$sex; 				//调用私有段
        $this->birthday=$birthday;
        $this->name=$name;
    }
    function toAll()
    {
        echo "大家好，我叫： $this->name ，今年  $this->age 岁。\n";
        echo "我是一个快乐的 $this->sex 。\n";
        echo "生日是： $this->birthday 。\n";
    }

}


//测试People类
$guo=new People("男生","1月5日", "国强");	//调用构造函数为私有字段赋值
$guo->age=10;							//调用公共字段
$guo->toAll();
