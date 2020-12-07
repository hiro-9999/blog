<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/10 0010
 * Time: 21:40
 */
interface Watched
{
    function addWatcher($watcher);

    function removeWatcher($watcher);

    function notifyWatchers();
}