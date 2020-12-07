<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/10 0010
 * Time: 21:04
 */
class Client
{
    public function test() {

        $facade = new Facade();
        $facade->test();

        $which = 0;

        if($which==1) $state="hello";
        else if ($which==2) $state="hi";
        else if ($which==3) $state="bye";

        if ($state == "bye") $state="hello";
        else if ($state == "hello") $state="hi";
        else if ($state == "hi") $state="bye";



    }

}