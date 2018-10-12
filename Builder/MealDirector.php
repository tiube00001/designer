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

    protected static $instance;
    /**
     * @var MealBuilderInterface
     */
    protected $builder;

    final private function __construct()
    {

    }

    final private function setBuilder(MealBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public static function getInstance(MealBuilderInterface $builder)
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        self::$instance->setBuilder($builder);
        return self::$instance;
    }

    public function vegAndCoke()
    {
        return $this->builder->buildVegBurger()->buildCoke();
    }
}