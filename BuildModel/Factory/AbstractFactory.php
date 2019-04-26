<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/10
 * Time: 17:34
 */
namespace Factory\AbstractFactory;

//工厂模式是一个工厂一条生产线，客户如果需要多个产品，那么只能使用多个工厂

//抽象工厂是一个工厂多条生产线，使客户可以使用一个工厂生产出多个产品

//优点：
//1.允许客户使用抽象接口创建一组相关产品，而不需要关心产出的具体产品是什么，客户可以从具体产品中解耦
//2.一个工厂生成多个产品，可以有效减少具体工厂的数量
//3.方便扩展具体产品系列

//缺点：
//1.产品系列内部成员的扩展很困难，修改工厂接口，修改工厂实现，增加产品抽象和实现
//2.当产品系列内部成员过多时，会产生很多类文件，系统会变得很复杂

//有两类产品：pipe和apple，它们是一个套餐
interface Pipe
{
    public function create();
}

interface Juice
{
    public function create();
}

//这组产品，有两种具体分类：apple和banner
class ApplePipe implements Pipe
{
    public function create()
    {
        // TODO: Implement create() method.
        echo 'create a apple pie'.PHP_EOL;
    }
}

class AppleJuice implements Juice
{
    public function create()
    {
        // TODO: Implement create() method.
        echo 'create a apple juice'.PHP_EOL;
    }
}

class BannerPipe implements Pipe
{
    public function create()
    {
        // TODO: Implement create() method.
        echo 'create a banner pipe'.PHP_EOL;
    }
}

class BannerJuice implements Juice
{
    public function create()
    {
        // TODO: Implement create() method.
        echo 'create a banner juice';
    }
}

//我们需要有多条生产线的工厂

//定义抽象工厂
interface AbstractFactory
{
    public function createPipe();
    public function createJuice();
}

//实现抽象工厂
class AppleFactory implements AbstractFactory
{
    public function createJuice()
    {
        // TODO: Implement createJuice() method.
        return new AppleJuice();
    }

    public function createPipe()
    {
        return new ApplePipe();
        // TODO: Implement createPipe() method.
    }
}

class BannerFactory implements AbstractFactory
{
    public function createPipe()
    {
        return new BannerPipe();
        // TODO: Implement createPipe() method.
    }

    public function createJuice()
    {
        return new BannerJuice();
        // TODO: Implement createJuice() method.
    }
}


$af = new AppleFactory();

$af->createPipe()->create();
$af->createJuice()->create();

$bf = new BannerFactory();
$bf->createPipe()->create();
$bf->createPipe()->create();



