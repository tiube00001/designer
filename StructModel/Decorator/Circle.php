<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/4/28
 * Time: 16:00
 */

namespace Decorator;

class Circle implements ShapeInterface
{
    public function draw()
    {
        echo 'draw circle';
    }

}