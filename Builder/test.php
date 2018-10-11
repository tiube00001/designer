<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/11
 * Time: 18:03
 */



require './MealBuilder.php';
require './FirstMeal.php';

use Builder\MealBuilder;



$builder = new MealBuilder(new FirstMeal());

$director = new MealDirector($builder);

$meal = $director->vegAndCoke()->build();

$meal->showAllFood();