<?php

class BookObject{
    public $object_name;                      //图书名称
    public $object_price;                      //图书价格
    public $object_num;                      //图书数量
    public $object_agio;                      //图书折扣
    function __construct($name,$price,$num,$agio){    //构造函数
        $this -> object_name = $name;
        $this -> object_price = $price;
        $this -> object_num = $num;
        $this -> object_agio = $agio;
    }
    function showMe(){               //输出函数
        echo '显示图书信息';
    }
}
/*  子类Book  */
class Book extends BookObject{                     //BookObject的子类。
    public $book_type;                            //类别
    function __construct($type,$num){               //声明构造方法
        $this -> book_type = $type;
        $this -> object_num = $num;
    }
    function showMe(){                           //重写父类中的showMe方法
        return '本次新进'.$this -> book_type.'图书'.$this->object_num.'本<br>';
    }
}
/*  子类Elec  */
class Elec extends BookObject{                 //BookObject的另一个子类
    function showMe(){                      //重写父类中的showMe方法
        return '热卖图书：'.$this -> object_name.'<br>原价：'
        .$this -> object_price.'<br>特价：'.$this -> object_price * $this -> object_agio;
    }
}
$c_book = new Book('计算机类',1000);             //声明一个Book子类对象
$h_elec = new Elec('PHP函数参考大全',98,3,0.8);   //声明一个Elec子类对象
echo $c_book->showMe()."<br>";                 //输出Book子类的showMe()方法
echo $h_elec->showMe();                        //输出Elec子类的是showMe()方法
