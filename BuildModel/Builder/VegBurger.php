<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/11
 * Time: 16:40
 */

namespace Builder;

class VegBurger extends Burger
{
    public function name(): string
    {
        // TODO: Implement name() method.
        return 'veg_burger';
    }

    public function price(): float
    {
        // TODO: Implement price() method.
        return 3;
    }
}