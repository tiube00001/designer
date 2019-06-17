<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/17
 * Time: 15:47
 */

namespace ChainOfResponsibility;

class Request implements RequestInterface
{
    protected $name;
    protected $num;

    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNum(): int
    {
        return $this->num;
    }

    public function setNum(int $num)
    {
        $this->num = $num;
        return $this;
    }

}