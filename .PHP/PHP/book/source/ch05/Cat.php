<?php


class Cat
{
    final function say()			//使用final关键字
    {
        echo "我是可爱喵";
    }
}
Cat::say();						//直接访问
$cat=new Cat();
echo "\nWho are you?\n";
echo $cat->say();					//通过对象访问