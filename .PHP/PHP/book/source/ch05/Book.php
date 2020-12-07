<?php

class Book {
    private $id;							//私有字段，表示编号
    var $name="无";					//书名字段
    public $price=0; 						//价格字段
    var $author="无";					//作者字段
    public $pub="无";				//出版社字段
    function __construct($bookid)
    {
        $this->id=$bookid;
    }
    function toAll()						//输出图书信息
    {
        printf("《 %s 》",$this->name);
        echo "具体信息如下：\n";
        echo "书号：$this->id \n";
        echo "作者：$this->author\n";
        echo "价格：$this->price \n";
        echo "出版社：$this->pub \n";
    }
}
$php=new Book("11640020");					//创建Book类的对象$php
$php->name="PHP一百例";			//对$name字段进行赋值
$php->price=39.8; 							//对$price字段进行赋值
$php->author="张浩太";						//对$author字段进行赋值
$php->pub="清华大学出版社";					//对$pub字段进行赋值
$php->toAll();								//输出信息
