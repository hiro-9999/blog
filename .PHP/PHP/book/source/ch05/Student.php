<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/2 0002
 * Time: 21:26
 */
class Student{
    public $name;					//姓名
    var $sex=true; 					//性别
    public $age=22; 					//年龄
    var $height;	 				//身高
    var $weight; 					//体重
}
$xia=new Student();						//实例化$xia对象
echo "大家好，新手报道。\n";
$sex=$xia->sex?"女":"男";					//获取$sex字段的值，并转换为字符串“男”或“女”
echo "性别：$sex\n";						//输出性别
echo "年龄：$xia->age";					//输出年龄
echo "\n结束";
