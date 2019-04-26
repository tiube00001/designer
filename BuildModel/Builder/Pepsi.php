<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/11
 * Time: 16:44
 */

namespace Builder;
class Pepsi extends Drink
{
    public function name(): string
    {
        // TODO: Implement name() method.
        return 'Pepsi';
    }

    public function price(): float
    {
        // TODO: Implement price() method.
        return 2.2;
    }
}