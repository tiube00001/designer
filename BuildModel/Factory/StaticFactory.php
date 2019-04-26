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
//缺点：违反开放-封闭原则（对扩展开放，对修改关闭），业务发生变化，必须要修改代码

namespace Factory\StaticFactory;

interface Phone
{
    public function call();
}

class MiPhone implements Phone
{
    public function call()
    {
        return 'mi phone call';
    }
}

class ApplePhone implements Phone
{
    public function call()
    {
        return 'apple phone call';
    }

}

class PhoneFactory
{
    public static function getPhone($type)
    {
        switch ($type) {
            case 'mi':
                return new MiPhone();
            case 'apple':
                return new ApplePhone();
            default:
                throw new \Exception('wrong type');
        }
    }
}

$call = PhoneFactory::getPhone('mi')->call();
var_dump($call);