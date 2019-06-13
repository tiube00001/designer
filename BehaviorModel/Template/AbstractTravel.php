<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/13
 * Time: 10:24
 */

namespace Template;

abstract class AbstractTravel
{
    protected abstract function use();
    public function go()
    {
        echo $this->use().'去旅行';
    }
}

