<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/17
 * Time: 15:56
 */

namespace ChainOfResponsibility;

class DeanHandler implements HandlerInterface
{
    use HandlerTrait;
    protected $dealNum = 15;
    protected $level = '院长';

}