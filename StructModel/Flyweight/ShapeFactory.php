<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/4/28
 * Time: 14:20
 */

namespace Flyweight;

class ShapeFactory
{
    protected static $instance;

    public static function getShape(string $color) :ShapeInterface
    {
        if (!isset(self::$instance[$color])) {
            self::$instance[$color] = (new Circle())->setColor($color);
        }
        return self::$instance[$color];
    }
}