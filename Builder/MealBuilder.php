<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/11
 * Time: 17:39
 */

namespace Builder;

class MealBuilder implements MealBuilderInterface
{
    protected $meal;

    public function __construct(MealInterface $meal)
    {
        $this->meal = $meal;
    }

    public function buildFood(FoodInterface $food): MealBuilderInterface
    {
        // TODO: Implement buildFood() method.
        $this->meal->addFood($food);
        return $this;
    }

    public function build(): MealInterface
    {
        return $this->meal;
    }
}