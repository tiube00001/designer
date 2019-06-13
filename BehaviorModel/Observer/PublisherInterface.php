<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/13
 * Time: 11:13
 */

namespace Observer;

interface PublisherInterface
{
    public function addObserver(SubscriberInterface $subscriber);
    public function removeObserver(SubscriberInterface $subscriber);
    public function notifyObserver();

    public function getSubject();
    public function setSubject($subject);
}