<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/10 0010
 * Time: 21:45
 */
class Transporter  implements Watched
{
    private $list = [];

    function addWatcher($watcher)
    {
        $this->list[] = $watcher;
    }

    function removeWatcher($watcher)
    {
        unset( $this->list[$watcher]);
    }

    function notifyWatchers()
    {

        foreach($this->list as $item){
            $item->update();
        }

    }
}