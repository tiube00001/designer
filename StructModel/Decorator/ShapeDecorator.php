<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/4/28
 * Time: 16:03
 */

namespace Decorator;

class ShapeDecorator implements ShapeDecoratorInterface
{
    /** @var ShapeInterface $shape */
    protected $shape;
    protected $color;
    public function setShape(ShapeInterface $shape)
    {
        $this->shape = $shape;
        return $this;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function color()
    {
        echo 'use '.$this->color;
    }

    public function draw()
    {
        echo " and ";
        $this->shape->draw();
        echo PHP_EOL;
    }

}