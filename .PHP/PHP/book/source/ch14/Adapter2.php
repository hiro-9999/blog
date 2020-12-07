<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/10 0010
 * Time: 20:51
 */
class Adapter2 implements Target
{
    private $adaptee;

    public function __construct($adaptee)
    {
        $this->adaptee = $adaptee;
    }

    function operate1()
    {
        //调用源的方法
        $this->adaptee->operate1();
    }

    function operate2()
    {
        // 业务逻辑
    }

}