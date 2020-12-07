<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/10 0010
 * Time: 22:16
 */
class BlueState extends State
{
    public function handlepush(Context $c)
    {
        echo("变成绿色");
        $c->setState(new GreenState());
    }

    public function handlepull(Context $c)
    {
        echo("变成红色");
        $c->setState(new RedState());
    }

    public function getcolor()
    {
        return (Color::blue);
    }

}