<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/13
 * Time: 15:38
 */

namespace Observer;

/**
 * 定义：观察者模式定了对象之间的一对多的依赖关系，当对象改变状态时，它的所有依赖者都会收到通知，并更新自己的状态
 *
 * 发生改变的对象就是：观察目标（又称主题），收到通知的就是：观察者，一个目标可以被多个观察者监听，观察者之间相互也没有联系，所以也可以根据需求增加
 * 或者减少观察者，使得系统易于扩展。观察者模式，又称：发布订阅模式
 *
 * 优点：主题与观察者之间松耦合，支持广播通信，符合开闭原则
 *
 * 缺点：
 * 1.一个主题的观察者过多，广播消息给所有的观察者耗时非常多
 * 2.主题与观察者之间有相互循环调用的话，大概率导致系统崩溃
 *
 * 适用场景：
 * 1.抽象模型有两个维度，a和b，且a依赖于b，将a和b分别封装在独立的类中，让它们可以独立的变化和复用，使用观察者模式来通信
 * 2.一个对象改变，引起很多对象发生改变，而且无法预计又多少个对象受到影响，使用观察者模式可以降低耦合
 * 3.
 */
require './DispatcherInterface.php';
require './Dispatcher.php';

require './ShowEvent.php';

require './OneListener.php';
require './TwoListener.php';

$dispatcher = Dispatcher::getInstance();

$dispatcher->register(ShowEvent::class, OneListener::class);
$dispatcher->register(ShowEvent::class, TwoListener::class);

$dispatcher->dispatcher(new ShowEvent('one'));

$dispatcher->remove(ShowEvent::class, OneListener::class);

$dispatcher->dispatcher(new ShowEvent('two'));

$dispatcher->flush(ShowEvent::class);

$dispatcher->dispatcher(new ShowEvent('three'));


