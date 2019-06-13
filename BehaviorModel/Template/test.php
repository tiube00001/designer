<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/13
 * Time: 10:11
 */

/**
 * 定义：在抽象类中定义一个算法的骨架，而将一些具体步骤延迟到子类中。模版方法使得子类不改变算法结构的情况下，重新定义算法的某些步骤
 *
 * 模版方法是基于继承的代码复用技术。在模版方法中，我们可以将相同部分的代码放在父类中，而降不同的代码放入子类中
 */

require './AbstractTravel.php';
require './AirplaneTravel.php';
require './TrainTravel.php';

use Template\AirplaneTravel;
use Template\TrainTravel;


(new AirplaneTravel())->go();

echo PHP_EOL;

(new TrainTravel())->go();