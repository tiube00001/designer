<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2019/4/26
 * Time: 13:37
 */


namespace App\Test;
require '../../vendor/autoload.php';

use App\Container\Container;
use App\One\Three;

$container = new Container();


/** @var \App\One\Three $test */
$test = $container->resolve(Three::class);

$test->two();