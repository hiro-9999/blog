<?php


class Person
{
    private $name;			//姓名
    private $age;				//年龄
    public function tell(){				//定义说话的方法
        printf($this->name."今年".$this->age."岁！");
    }

}
$xiaoming = new Person();
$lili = new Person();