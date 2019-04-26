<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/12
 * Time: 11:26
 */

namespace Prototype;

class ConcretePrototype implements PrototypeInterface
{
    //具体类的其他业务
    public function shallowCopy()
    {
        // TODO: Implement shallowCopy() method.
        return clone $this;
    }

    public function deepCopy()
    {
        // TODO: Implement deepCopy() method.
        $serialize = serialize($this);
        return unserialize($serialize);
    }
}