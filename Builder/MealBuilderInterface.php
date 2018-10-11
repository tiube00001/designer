<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/11
 * Time: 17:14
 */

namespace Builder;

interface MealBuilderInterface
{
    public function buildFood(FoodInterface $food): MealBuilderInterface;
    public function build(): MealInterface;
}