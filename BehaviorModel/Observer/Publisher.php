<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/13
 * Time: 11:17
 */
namespace Observer;

class Publisher implements PublisherInterface
{
    /** @var SubscriberInterface[] $observers */
    protected $observers;

    protected $subject;

    public function addObserver(SubscriberInterface $subscriber)
    {
        $this->observers[] = $subscriber;
    }

    public function removeObserver(SubscriberInterface $subscriber)
    {
        $this->observers = array_merge(array_diff($this->observers, [$subscriber]));
    }

    public function notifyObserver()
    {
        foreach ($this->observers as $item) {
            $item->run($this);
        }
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getSubject()
    {
        return $this->subject;
    }

}