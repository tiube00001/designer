<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/5
 * Time: 11:21
 */

namespace Strategy;

class Tran implements Transport
{
    public function use()
    {
        return '使用火车';
    }

}