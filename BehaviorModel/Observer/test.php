<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/13
 * Time: 11:49
 */
namespace Observer;


require './PublisherInterface.php';
require './Publisher.php';

require './SubscriberInterface.php';
require './OneSubscribe.php';
require './TwoSubscribe.php';

require './WeatherSubject.php';


$publisher = new Publisher();


$oneSub = new OneSubscribe();
$twoSub = new TwoSubscribe();

$publisher->addObserver($oneSub);
$publisher->addObserver($twoSub);

$subject = new WeatherSubject();
$subject->setPublisher($publisher);

$subject->publishData('aaa');
