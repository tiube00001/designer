<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/17
 * Time: 15:56
 */

namespace ChainOfResponsibility;

class ClassTeacherHandler implements HandlerInterface
{
    use HandlerTrait;
    protected $dealNum = 3;
    protected $level = '班主任';

}