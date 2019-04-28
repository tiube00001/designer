<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/4/28
 * Time: 15:50
 */

/**
 * 装饰器模式（Decorator Pattern）
 * 定义：创建包装对象，修饰扩展原对象的功能
 * 优点：
 * 1.灵活的扩展对象的功能，而且不会破坏原对象的功能
 * 2.可以使用多个装饰对象进行排列组合，扩展出功能强大的对象
 * 3.装饰类和目标类可以独立变化，相互之间不会有影响，符合开闭原则
 * 缺点：
 * 1.产生很多小对象，增加系统复制度
 * 2.比继承更容易出错，多层装饰的对象出错的话，需要逐级排查，相对繁琐
 *
 */

require './ShapeInterface.php';
require './ShapeDecoratorInterface.php';
require './Circle.php';
require './ShapeDecorator.php';


use Decorator\ShapeDecorator;
use Decorator\Circle;


$obj = (new ShapeDecorator())->setColor('red')->setShape(new Circle());
$obj->color();
$obj->draw();