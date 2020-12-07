<?php

class Rectangle {
    private $Width;							//私有属性$ Width
    public $Height;							//公有属性$ Height
    //__set()方法设置属性
    function __set($property_name, $value) {
        echo "自动调用__set()方法为属性 $property_name 赋值\n";
        $this->$property_name = $value;
    }
    //__get()方法获取属性
    function __get($property_name) {
        echo "自动调用__get()方法获取属性 $property_name 的值\n";
        return isset($this->$property_name) ? $this->$property_name : null;
    }

}
$rect=new Rectangle();
$rect->Width=23;
//直接为私有属性赋值的操作，此时会自动调用__set()方法进行赋值
$rect->Height =40;
//直接获取私有属性的值，此时会自动调用__get()方法，返回属性的值
echo "矩形的高为：".$rect->Height."，宽为：".$rect->Width;
