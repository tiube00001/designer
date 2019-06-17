<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/17
 * Time: 15:56
 */

namespace ChainOfResponsibility;

class DepartmentHandler implements HandlerInterface
{
    use HandlerTrait;
    protected $dealNum = 7;
    protected $level = '系主任';

}