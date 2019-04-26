<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/15
 * Time: 15:06
 */

require 'ShapeInterface.php';
require 'ColorInterface.php';

require 'BrushInterface.php';
require 'Brush.php';

require 'GreenColor.php';
require 'CycleShape.php';

/**
 * 理论知识参考：
 * https://www.cnblogs.com/chenssy/p/3317866.html
 *
 * 前提：在用简单的例子说明设计模式的时候，一个重要的注意点：使用者不允许传递：字符，数字这类标量数据给对象的方法
 * 否则，这些例子都会失去意义，因为传值可以轻松简单的实现这些例子的结果
 *
 * 目标：我们需要设计类：自动画笔，它能画出不同形状，不同颜色的图形
 *
 * 此时要求类有两个功能：画形状，加颜色，且画出的形状要改变，添加的颜色也会改变，那么类就存在多个维度的变化
 *
 * 这种情况，最适合使用桥接模式：将：画形状，加颜色两个维度抽取出来，再注入给画笔
 *
 *
 */

use Bridge\Brush;
use Bridge\CycleShape;
use Bridge\GreenColor;

$cycle = new CycleShape();
$green = new GreenColor();

//结合Builder的变种模式，可以轻松的将功能类注入到画笔类中
$brush = new Brush();
$brush->setShape($cycle)->setColor($green)->draw();

/**
 * 1.画形状，加颜色，画笔整合，一个类只实现一个功能，符合单一职责原则
 * 2.Brush类的中，全部依赖接口，符合依赖倒置原则，开闭原则
 * 3.这里并未出现继承，不考虑里氏替换
 * 4.类内部访问权限控制，且不引入并不使用的类和示例，实现迪米特法则
 */

