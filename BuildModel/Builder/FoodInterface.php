<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/11
 * Time: 15:55
 */

namespace Builder;


interface FoodInterface
{
    public function name(): string;

    public function pack(): string;

    public function price(): float;
}