<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/11
 * Time: 16:09
 */

namespace Builder;
abstract class Burger implements FoodInterface
{
    protected $pack;
    public function __construct(PackInterface $pack)
    {
        $this->pack = $pack;
    }

    public abstract function name(): string;

    public function pack(): string
    {
        // TODO: Implement pack() method.
        return $this->pack->pack();
    }

    public abstract function price(): float;

}