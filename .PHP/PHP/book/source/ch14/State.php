<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/10 0010
 * Time: 22:14
 */
abstract  class State
{
    public abstract function handlepush(Context $c);
    public abstract function handlepull(Context $c);
    public abstract function getcolor();

}