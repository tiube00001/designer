<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/9/29
 * Time: 15:38
 */

//简单工厂（又称静态工厂，并不属于23中GOF设计模式之一）
//只需要定义，并继承实现产品接口。然后在一个工厂类的静态方法中通过传参来选择产品类进行实例化
//优点：根据外界给定的信息，决定实例化某个类，明确区分了各种的职责和权力，有利于整个软件结构体系的优化
//缺点：违反开发-封闭原则（对扩展开放，对修改关闭），业务发生变化，必须要修改代码
namespace Factory\StaticFactory;
interface Shape
{
    public function draw();
}

class Square implements Shape
{
    public function draw()
    {
        // TODO: Implement draw() method.
        echo 'draw shape'.PHP_EOL;
    }
}

class Cycle implements  Shape
{
    public function draw()
    {
        // TODO: Implement draw() method.
        echo 'draw Cycle'.PHP_EOL;
    }
}

class ShapeFactory
{
    /**
     * @param $name
     * @return Shape
     */
    public static function getShape($name)
    {
        $obj = null;
        switch ($name) {
            case 'Square':
                $obj = new Square();
                break;
            case 'Cycle':
                $obj = new Cycle();
                break;
            default :
                break;
        }

        return $obj;
    }
}

$a = ShapeFactory::getShape('Cycle');

$a->draw();