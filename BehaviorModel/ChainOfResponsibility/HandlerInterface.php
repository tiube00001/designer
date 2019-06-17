<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/17
 * Time: 15:54
 */

namespace ChainOfResponsibility;

interface HandlerInterface
{
    public function setNext(HandlerInterface $handler);
    public function getNext() :?HandlerInterface;
    public function setRequest(RequestInterface $request);
    public function getRequest() :RequestInterface;
    public function handler();
}