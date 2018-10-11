<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/11
 * Time: 16:43
 */

namespace Builder;

class Coke extends Drink
{
    public function name(): string
    {
        // TODO: Implement name() method.
        return 'coke';
    }

    public function price(): float
    {
        // TODO: Implement price() method.
        return 2;
    }
}