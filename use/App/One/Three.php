<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/4/27
 * Time: 12:15
 */

namespace App\One;

class Three
{
    protected $two;
    public function __construct(Two $two)
    {
        $this->two = $two;
    }

    public function two()
    {
        $this->two->useOne();
    }
}