<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/5
 * Time: 11:22
 */

namespace Strategy;

class Airplane implements Transport
{
    public function use()
    {
        return '使用飞机';
    }

}