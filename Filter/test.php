<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/16
 * Time: 11:11
 */

require 'CriteriaInterface.php';
require 'PersonInterface.php';

require 'Person.php';

require 'ManCriteria.php';
require 'WomanCriteria.php';
require 'MarriedCriteria.php';
require 'SingleCriteria.php';

require 'WomanOrMarriedCriteria.php';
require 'ManAndSingleCriteria.php';


/**
 * 过滤器模式的作用：使用不同的标准来过滤一组对象，可以使用逻辑运算将这些标准以解耦的方式连接起来
 */

/**
 * @param \Filter\PersonInterface[] $persons
 */
function printPerson($persons) {
    $res = [];

    foreach ($persons as $person) {
        $res[] = 'name: ' . $person->getName() . ', sex: '.$person->getSex(). ', status: ' . $person->getMaritalStatus();
    }
    print_r($res);
}

use Filter\Person;
use Filter\ManCriteria;
use Filter\WomanCriteria;

$persons[] = new Person('one', Person::SEX_MAN, Person::MARITAL_NO);
$persons[] = new Person('two', Person::SEX_MAN, Person::MARITAL_YES);
$persons[] = new Person('three', Person::SEX_WOMAN, Person::MARITAL_YES);
$persons[] = new Person('three', Person::SEX_WOMAN, Person::MARITAL_NO);

$manCriteria = new ManCriteria();
printPerson($manCriteria->meetCriteria($persons));

$womanCriteria = new WomanCriteria();
printPerson($womanCriteria->meetCriteria($persons));

$single = new \Filter\SingleCriteria();
printPerson($single->meetCriteria($persons));

$married = new \Filter\MarriedCriteria();
printPerson($married->meetCriteria($persons));

$and = new \Filter\ManAndSingleCriteria($manCriteria, $single);
printPerson($and->meetCriteria($persons));

$or = new \Filter\WomanOrMarriedCriteria($womanCriteria, $married);
printPerson($or->meetCriteria($persons));