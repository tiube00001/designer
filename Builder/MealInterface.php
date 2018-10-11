<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/11
 * Time: 16:52
 */

namespace Builder;
interface MealInterface
{

    public function addFood(FoodInterface $food): void;

    public function countCost(): float;

    public function showAllFood(): void;
}