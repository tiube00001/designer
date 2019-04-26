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

    public function buildVegBurger(): MealBuilderInterface;
    public function buildChickenBurger(): MealBuilderInterface;
    public function buildCoke(): MealBuilderInterface;
    public function buildPepsi(): MealBuilderInterface;

    public function build(): MealInterface;
}