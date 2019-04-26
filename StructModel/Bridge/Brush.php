<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/15
 * Time: 14:58
 */

namespace Bridge;
use Bridge\ShapeInterface;
use Bridge\ColorInterface;

class Brush implements BrushInterface
{
    /**
     * @var ShapeInterface $shape
     */
    protected $shape;

    /**
     * @var ColorInterface $color
     */
    protected $color;


    public function setShape(ShapeInterface $shape)
    {
        $this->shape = $shape;
        return $this;
    }

    public function setColor(ColorInterface $color)
    {
        $this->color = $color;
        return $this;
    }


    public function draw()
    {
        // TODO: Implement draw() method.
        $this->shape->shape();
        $this->color->color();
    }
}