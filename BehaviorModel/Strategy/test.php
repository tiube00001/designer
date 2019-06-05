<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/5
 * Time: 10:34
 */

/**
 * 策略模式（Strategy）：定义了一组算法，将这些算法封装起来，在不同的需求下，使用不同的算法（策略）
 *
 * 优点：1.策略模式完美遵守了：开闭原则，用户不用修改原有系统，代码，就可以灵活的选用，增加不同的解决方案
 *      2.提供了一种代替继承的方法
 *      3.使用策略模式，可以避免写出大量的if,else语句，代码可维护性更高
 *
 * 缺点：1.客户端必须知道所有的策略，在此基础上才能选用
 *      2.策略模式将产出很多策略类，增加系统的类总数
 */
require './Transport.php';
require './Tran.php';
require './Airplane.php';

require 'Travel.php';
use Strategy\Tran;
use Strategy\Travel;
use Strategy\Airplane;

$tran = new Tran();
$travel = new Travel();

$travel->setTransport($tran);

$travel->go();

echo PHP_EOL;

$travel->setTransport(new Airplane());

$travel->go();