<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/17
 * Time: 14:35
 */

/**
 * 定义：为了避免请求发送者与多个处理者耦合在一起，将所有的处理者通过：当前处理者记住下一个处理者的方式，从而连成一条链，当有请求发生的
 * 时候，可将请求沿这条链传递，直到有人处理它为止。（如果没有处理者可以处理这种请求，则报出错误信息）
 *
 * 优点：
 * 1.该模式下，请求者与处理者直接无需知道对方的明确结构，降低了系统的耦合度
 * 2.增强了系统的扩展性，可以根据需求新增处理者，满足开闭原则
 * 3.增强了给对象指派职责的灵活性，当前端工作流发生变化的时候，可以动态的改变链内的成员或者调用顺序
 * 4.简化了处理者之间的连接，避免了大量的if,else
 * 5.职责分担，每个类只负责自己的工作，不是自己的就向下传递，符合单一职责原则
 *
 *
 * 缺点：
 * 1.由于请求没有一个明确的对应一个处理者，所以有可能请求没有被处理
 * 2.如果责任链较长，会影响系统性能
 * 3.责任链建立的合理性要依靠客户端来保证，增加了客户端的复杂度。
 *
 * 模式结构：
 * 1.抽象处理者（Handler），定义处理方法接口
 * 2.具体处理者（Concrete Handler），实现Handler的定义
 * 3.客户端（Client），负责创建责任链，并向链头发起处理
 *
 */



namespace ChainOfResponsibility;
require 'HandlerInterface.php';
require 'HandlerTrait.php';
require 'ClassTeacherHandler.php';
require 'DepartmentHandler.php';
require 'DeanHandler.php';

require 'RequestInterface.php';
require 'Request.php';

require 'NoneHandlerException.php';

$classTeacher = (new ClassTeacherHandler())->setName('ct');
$department = (new DepartmentHandler())->setName('dm');
$dean = (new DeanHandler())->setName('da');


$classTeacher->setNext($department);
$department->setNext($dean);

$one = (new Request())->setName('a')->setNum(1);
$four = (new Request())->setName('a')->setNum(4);
$ten = (new Request())->setName('a')->setNum(10);
$st = (new Request())->setName('a')->setNum(17);

try {
    $classTeacher->setRequest($one)->handler();
    $classTeacher->setRequest($four)->handler();
    $classTeacher->setRequest($ten)->handler();
    $classTeacher->setRequest($st)->handler();

} catch (NoneHandlerException $e) {
    echo $e->getMessage().PHP_EOL;
}
