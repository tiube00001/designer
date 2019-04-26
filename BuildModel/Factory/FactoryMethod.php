<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/9/30
 * Time: 10:11
 */

namespace Factory\FactoryMethod;

//1.产品抽象接口，描述产品的功能
interface CarProduct
{
    public function run();
}

//2.工厂抽象接口
interface CarFactory
{
    public function createCar();
}

//3.实现具体产品接口
class JeepProduct implements CarProduct
{
    public function run()
    {
        // TODO: Implement getCar() method.
        echo 'jeep car run'.PHP_EOL;
    }
}

class SportProduct implements CarProduct
{
    public function run()
    {
        // TODO: Implement getCar() method.
        echo 'sport car run'.PHP_EOL;
    }
}

//4.实现工厂，生成产品，特点是：一个工厂，只能生产一种产品，工厂本身存在耦合
class JeepFactory implements CarFactory
{
    public function createCar()
    {
        // TODO: Implement createCar() method.
        return (new JeepProduct());
    }
}

class SportFactory implements CarFactory
{
    public function createCar()
    {
        // TODO: Implement createCar() method.
        return (new SportProduct());
    }
}

//调用jeep factory建造jeep car并跑起来
(new JeepFactory())->createCar()->run();

//调用sport factory建造sport car，然后跑起来
(new SportFactory())->createCar()->run();



