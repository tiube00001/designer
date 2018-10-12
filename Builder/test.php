<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/11
 * Time: 18:03
 */

require 'FoodInterface.php';
require './PackInterface.php';
require './MealInterface.php';
require './MealBuilderInterface.php';

require './Warp.php';
require './Bottle.php';

require './Drink.php';
require './Burger.php';

require './ChickenBurger.php';
require './Coke.php';
require './Pepsi.php';
require './VegBurger.php';

require './FirstMeal.php';

require './MealBuilder.php';
require './MealDirector.php';



use Builder\MealBuilder;
use Builder\FirstMeal;
use Builder\MealDirector;


//需要生产的产品
$product = new FirstMeal();

//将产品交给给建造者
$builder = MealBuilder::getInstance($product);

//请来指挥员指导建造者
$director = MealDirector::getInstance($builder);

//指挥员发出具体指令，指挥建造者工作
$director->vegAndCoke();

//建造者将最终产品交给用户
$meal = $builder->build();

//用户使用
$meal->showAllFood();
