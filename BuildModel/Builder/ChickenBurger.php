<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/11
 * Time: 16:42
 */

namespace Builder;

class ChickenBurger extends Burger
{
    public function name(): string
    {
        // TODO: Implement name() method.
        return 'chicken_burger';
    }

    public function price(): float
    {
        // TODO: Implement price() method.
        return 6.5;
    }
}