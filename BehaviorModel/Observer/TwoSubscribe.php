<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/13
 * Time: 11:33
 */

namespace Observer;

class TwoSubscribe implements SubscriberInterface
{
    public function run(PublisherInterface $publisher)
    {
        /** @var WeatherSubject $subject */
        $subject = $publisher->getSubject();
        echo static::class.':'.$subject->getStr().PHP_EOL;
    }
}