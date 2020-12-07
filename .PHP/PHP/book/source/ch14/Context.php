<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/10 0010
 * Time: 22:03
 */
class Context
{

    private $state = null;

    //setState是用来改变state的状态 使用setState实现状态的切换
    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function push()
    {
        //状态的切换的细节部分,在本例中是颜色的变化,已经封装在子类的handlepush中实现,这里无需关心
        $this->state.handlepush(this);

        //假设sample要使用state中的一个切换结果,使用getColor()
        $sample = new Sample( $this->state->getColor());
        $sample->operate();
    }

    public function pull()
    {
        $this->state.handlepull(this);
        //假设sample要使用state中的一个切换结果,使用getColor()
        $sample2 = new Sample2($this->state->getColor);
        $sample2->operate();
    }

}