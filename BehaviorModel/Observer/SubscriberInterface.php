<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/13
 * Time: 11:14
 */
namespace Observer;

interface SubscriberInterface
{
    public function run(PublisherInterface $publisher);
}