<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/11
 * Time: 16:56
 */

namespace Builder;

class FirstMeal implements MealInterface
{
    /**
     * @var $all FoodInterface[]
     */
    protected $all;

    public function addFood(FoodInterface $food): void
    {
        // TODO: Implement addFood() method.
        $this->all[] = $food;
    }

    public function countCost(): float
    {
        // TODO: Implement countCost() method.
        $count = 0;
        foreach ($this->all as $food) {
            $count += $food->price();
        }

        return round($count, 2);
    }

    public function showAllFood(): void
    {
        // TODO: Implement showAllFood() method.
        foreach ($this->all as $food) {
            echo '名称：'.$food->name().PHP_EOL;
            echo '包装：'.$food->pack().PHP_EOL;
            echo '价格：'.$food->price().PHP_EOL.PHP_EOL;
        }
    }
}