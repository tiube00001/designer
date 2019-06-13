<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/13
 * Time: 11:27
 */

namespace Observer;
class WeatherSubject
{
    /** @var PublisherInterface $publisher */
    protected $publisher;

    protected $str;

    public function setPublisher(PublisherInterface $publisher)
    {
        $this->publisher = $publisher;
        $this->publisher->setSubject($this);
    }

    public function publishData(string $str)
    {
        $this->str = $str;
        $this->publisher->notifyObserver();
    }

    public function getStr()
    {
        return $this->str;
    }
}