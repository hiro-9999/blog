<?php


class Employee
{
    private $name;                    //姓名
    private $age;                        //年龄
    private $sex;                    //性别
    private $birthday;                    //出生日期
    private $constellation;                //星座

    public function __construct($_name, $_age, $_sex, $_birthday, $_constellation)
    {
        $this->name = $_name;
        $this->age = $_age;
        $this->sex = $_sex;
        $this->birthday = $_birthday;
        $this->constellation = $_constellation;
    }

    public function intro()
    {
        return "姓名：" . $this->name . "\n年龄：" . $this->age . "\n性别：" . $this->sex . "\n出生日期：" . $this->birthday . "\n星座：" . $this->constellation;
    }

}

$wang = new Employee("王洁", 21, "女", "2016-02-21", "狮子座");
$intro = $wang->intro();
printf($intro);
