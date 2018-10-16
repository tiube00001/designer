<?php
/**
 * Created by PhpStorm.
 * User: yhl
 * Date: 2018/10/16
 * Time: 10:25
 */

namespace Filter;

class Person implements PersonInterface
{
    protected $name;
    protected $sex;
    protected $maritalStatus;

    public function __construct(string $name, string $sex, string $maritalStatus)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->maritalStatus = $maritalStatus;
    }

    public function getName(): string
    {
        // TODO: Implement getName() method.
        return $this->name;
    }

    public function getSex(): string
    {
        // TODO: Implement getSex() method.
        return $this->sex;
    }

    public function getMaritalStatus(): string
    {
        // TODO: Implement getMaritalStatus() method.
        return $this->maritalStatus;
    }
}