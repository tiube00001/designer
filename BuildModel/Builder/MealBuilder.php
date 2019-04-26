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
    protected static $instance;
    /**
     * @var MealInterface
     */
    protected $meal;

    final private function __construct()
    {

    }

    final private function setMeal(MealInterface $meal)
    {
        $this->meal = $meal;
    }

    public static function getInstance(MealInterface $meal)
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        self::$instance->setMeal($meal);
        return self::$instance;
    }

    protected function buildWarp()
    {
        return new Warp();
    }

    protected function buildBottle()
    {
        return new Bottle();
    }

    public function buildVegBurger(): MealBuilderInterface
    {
        $this->meal->addFood(new VegBurger($this->buildWarp()));
        return $this;
    }

    public function buildChickenBurger(): MealBuilderInterface
    {
        $this->meal->addFood(new ChickenBurger($this->buildWarp()));
        return $this;
    }

    public function buildCoke(): MealBuilderInterface
    {
        $this->meal->addFood(new Coke($this->buildBottle()));
        return $this;
    }

    public function buildPepsi(): MealBuilderInterface
    {
        $this->meal->addFood(new Pepsi($this->buildBottle()));
        return $this;
    }

    public function build(): MealInterface
    {
        return $this->meal;
    }
}