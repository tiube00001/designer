<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/13
 * Time: 15:32
 */

namespace Observer;

class ShowEvent
{
    protected $str;
    public function __construct(string $str)
    {
        $this->str = $str;
    }

    public function getStr()
    {
        return $this->str;
    }
}