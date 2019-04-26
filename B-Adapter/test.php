<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/13
 * Time: 10:20
 */

require 'PcInterface.php';
require 'SuitInterface.php';

require 'Pc.php';
require 'Suit.php';

require 'HostAdapterInterface.php';
require 'HostAdapter.php';

//1.adapter pattern 有两种实现方式：委托和继承，不过继承也可以理解成委托自己的父类
//  但是设计模式的最佳实现应该是：组合优于继承

//2.优点：
//  可以让多个无关的类一起协同工作，提高代码的复用，灵活性好

//3.缺点：
//  过多使用，导致系统凌乱，如果不是很必要，推荐优先考虑重构

//4.使用时机：
//  设计阶段，肯定要避免出现使用Adapter Pattern。
//  Adapter主要用在解决已经上线的项目中的一些紧急需求


//以下代码逻辑

//1.以前已经存在两个产品：pc和suit，并且它们之间毫无内在联系
//2.现在有一个新需求：描述某人先穿衣服，再使用电脑的过程
//3.需求由：HostAdapterInterface描述
//4.并且要求：必须使用以前已经存在的pc和suit，而不重新实现
//5.此时使用适配器模式将suit，pc整合起来



use Adapter\HostAdapter;
use Adapter\Pc;
use Adapter\Suit;

//已经存在的物品，即：Source
$pc = new Pc();
$suit = new Suit();

//接口：HostAdapterInterface是目标，即：Destination

$adapter = new HostAdapter($pc, $suit, 'yhl');

$adapter->dressAndWork();
echo PHP_EOL . PHP_EOL;
$adapter->dressAndPlayGame();