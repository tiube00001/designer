<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/4/28
 * Time: 11:28
 */


/**
 * 前置概念：
 * 1.内部状态：不受外界环境影响的对象状态（属性的值不是外部传入的）
 * 2.外部状态：受外界影响的对象状态（属性值是外部传入的）
 *
 * 享元模式
 * 定义：运用共享技术支持大量细粒度对象的复用
 *
 * 类的特点：
 * 1.细粒度，也就是属性少的，简单的类
 * 2.属性分为：1.内部属性（值不是外部传入）2.外部属性（值由外部传入）
 *
 * 优点：
 * 1.极大的减少系统中对象的个数
 * 2.享元类对象，内外部状态相对独立，使得在不同环境中对象的复用性更强
 *
 * 缺点：
 * 1.由于要区分内外部状态，所以类的结构更复杂了
 * 2.为了使对象可以复用，需要使对象的状态外部化，而读取外部状态使调用时间变长，有性能损失
 *
 * 适用场景：
 * 1.如果系统中存在大量相同或者相似的对象，而它们导致内存耗费，可以使用享元模式来降低对象数量
 *
 * 模式角色：
 * FlyweightAbstract：抽象接口，定义对象功能
 * FlyweightConcrete：指定内部状态，实现外部具体外部状态接口
 * FlyweightFactory：享元工厂类，提供一个用于存储享元对象的对象池，当用户需要对象时，先从对象此获取，如果没有则创建，并加入对象池
 * UnsharedFlyweightConcrete：指定不需要被共享的类
 *
 * 一句话总结：就是给对象属性设置不同的值，让对象的功能相似但不相同
 */
require './ShapeInterface.php';
require './ShapeFactory.php';

require './Circle.php';

use Flyweight\ShapeFactory;

$green = ShapeFactory::getShape('green');
$green->draw();

$red = ShapeFactory::getShape('red');

$red->draw();

$greenTwo = ShapeFactory::getShape('green');

$greenTwo->draw();

var_dump($green, $greenTwo, $red);


