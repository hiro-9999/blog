<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/10 0010
 * Time: 21:02
 */
class Facade
{
    //示意方法，满足客户端需要的功能
    public function test(){
        $a = new ModuleA();
        $a->testA();

        $b = new ModuleB();
        $b->testB();

        $c = new ModuleC();
        $c->testC();
    }

}