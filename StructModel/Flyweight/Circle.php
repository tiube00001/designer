<?php
/**
 *
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/4/28
 * Time: 14:16
 */
namespace Flyweight;

class Circle implements ShapeInterface
{
    protected $color;

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function draw()
    {
        echo "draw {$this->color} circle \n";
    }
}