<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/11
 * Time: 17:43
 */

namespace Builder;

class MealDirector
{

    protected $meal;
    public function __construct(MealBuilderInterface $meal)
    {
        $this->meal = $meal;
    }

    public function vegAndCoke()
    {
        return $this->meal
            ->buildFood(new VegBurger(new Warp()))
            ->buildFood(new Coke(new Bottle()));
    }
}