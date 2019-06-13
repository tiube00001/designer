<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/6/13
 * Time: 15:38
 */

namespace Observer;

require './DispatcherInterface.php';
require './Dispatcher.php';

require './ShowEvent.php';

require './OneListener.php';
require './TwoListener.php';

$dispatcher = Dispatcher::getInstance();

$dispatcher->register(ShowEvent::class, OneListener::class);
$dispatcher->register(ShowEvent::class, TwoListener::class);

$dispatcher->dispatcher(new ShowEvent('one'));

$dispatcher->remove(ShowEvent::class, OneListener::class);

$dispatcher->dispatcher(new ShowEvent('two'));

$dispatcher->flush(ShowEvent::class);

$dispatcher->dispatcher(new ShowEvent('three'));


