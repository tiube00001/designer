<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/13
 * Time: 15:34
 */

namespace Observer;

class TwoListener
{
    public function run(ShowEvent $event)
    {
        echo static::class. ':'. $event->getStr().PHP_EOL;
    }
}