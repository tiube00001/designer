<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/13
 * Time: 10:05
 */

namespace Adapter;

class Pc implements PcInterface
{

    public function work()
    {
        // TODO: Implement work() method.
        echo 'use pc does work'.PHP_EOL;
    }

    public function playGame()
    {
        // TODO: Implement playGame() method.
        echo 'use pc plays game'.PHP_EOL;
    }
}