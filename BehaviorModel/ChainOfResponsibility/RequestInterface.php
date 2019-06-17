<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/17
 * Time: 15:45
 */

namespace ChainOfResponsibility;

interface RequestInterface
{
    public function setName(string $name);
    public function getName() :string ;
    public function getNum() :int ;
    public function setNum(int $num);
}