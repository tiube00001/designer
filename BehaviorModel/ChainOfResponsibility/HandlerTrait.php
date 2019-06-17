<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/17
 * Time: 16:12
 */

namespace ChainOfResponsibility;

trait HandlerTrait
{
    protected $next;
    protected $request;
    protected $name;
//    protected $level;

    public function setName(string  $name)
    {
        $this->name = $name;
        return $this;
    }

    public function setRequest(RequestInterface $request)
    {
        $this->request = $request;
        return $this;
    }
    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    public function setNext(HandlerInterface $handler)
    {
        $this->next = $handler;
        return $this;
    }

    public function getNext() :?HandlerInterface
    {
        return $this->next;
    }

    public function getNoneHandlerException()
    {
        $request = $this->getRequest();
        $name = $request->getName();
        $num = $request->getNum();
       return new NoneHandlerException("名称：{$name}，天数：{$num}，无处理者");
    }

    public function handler()
    {
        $request = $this->getRequest();
        if ($request->getNum() <= $this->dealNum) {
            echo "{$this->level}：{$this->name}，准假".PHP_EOL;
        } elseif ($next = $this->getNext()) {
            $next->setRequest($request);
            $next->handler();
        } else {
            throw $this->getNoneHandlerException();
        }
    }
}