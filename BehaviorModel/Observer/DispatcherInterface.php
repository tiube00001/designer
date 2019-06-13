<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/13
 * Time: 14:46
 */

namespace Observer;

interface DispatcherInterface
{
    public function register(string $eventName, string $listenerName);
    public function remove(string $eventName, string $listenerName);
    public function flush(string $eventName);
    public function dispatcher(object $event);
}