<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/4/28
 * Time: 14:53
 */

/**
 * 门面（外观）模式：
 * 定义：提供一个统一的接口来访问子系统中的一群接口
 * 类特点：把各个子系统的调用方式，都写在门面类里面的一个方法里面
 * 优点：
 * 1.客户只需和门面角色打交道，屏蔽了子系统的复杂性，降低使用难度，降低系统的耦合
 * 2.只是提供了一个访问子系统的方式，并未限制客户直接访问子系统
 * 缺点：
 * 1.用户访问子系统的方法太多，不容易管理
 *
 * 示例代码参考：laravel facade，不再书写
 */

